<?php

/*
 * Copyright (C) 2015 Anders Lövgren (QNET/BMC CompDept).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use UUP\Exchange\Client\ExchangeServicesClient;
use UUP\Exchange\Types\BodyType;
use UUP\Exchange\Types\BodyTypeType;
use UUP\Exchange\Types\CalendarItemCreateOrDeleteOperationType;
use UUP\Exchange\Types\CalendarItemType;
use UUP\Exchange\Types\CalendarViewType;
use UUP\Exchange\Types\ConflictResolutionType;
use UUP\Exchange\Types\CreateItemType;
use UUP\Exchange\Types\DefaultShapeNamesType;
use UUP\Exchange\Types\DeleteItemType;
use UUP\Exchange\Types\DisposalType;
use UUP\Exchange\Types\DistinguishedFolderIdNameType;
use UUP\Exchange\Types\DistinguishedFolderIdType;
use UUP\Exchange\Types\FindItemType;
use UUP\Exchange\Types\GetItemType;
use UUP\Exchange\Types\ItemChangeType;
use UUP\Exchange\Types\ItemIdType;
use UUP\Exchange\Types\ItemQueryTraversalType;
use UUP\Exchange\Types\ItemResponseShapeType;
use UUP\Exchange\Types\LegacyFreeBusyType;
use UUP\Exchange\Types\MessageDispositionType;
use UUP\Exchange\Types\NonEmptyArrayOfAllItemsType;
use UUP\Exchange\Types\NonEmptyArrayOfBaseFolderIdsType;
use UUP\Exchange\Types\NonEmptyArrayOfBaseItemIdsType;
use UUP\Exchange\Types\NonEmptyArrayOfItemChangeDescriptionsType;
use UUP\Exchange\Types\NonEmptyArrayOfItemChangesType;
use UUP\Exchange\Types\PathToUnindexedFieldType;
use UUP\Exchange\Types\SetItemFieldType;
use UUP\Exchange\Types\UnindexedFieldURIType;
use UUP\Exchange\Types\UpdateItemType;

/**
 * Command line argument.
 */
class Option
{

        /**
         * The option key (e.g. --start).
         * @var string 
         */
        public $key;
        /**
         * The option value (default to true).
         * @var string 
         */
        public $val;
        /**
         * Short key/alias mapping.
         * @var array 
         */
        private static $alias = array(
                'h'      => 'help',
                'v'      => 'verbose',
                'd'      => 'debug',
                'create' => 'add',
                'insert' => 'add',
                'update' => 'edit',
                'delete' => 'remove',
                'find'   => 'list'
        );

        /**
         * Constructor.
         * @param string $arg The command option (e.g. title=str).
         */
        public function __construct($arg)
        {
                // 
                // Process "--key=val" option:
                // 
                if (($pos = strpos($arg, '='))) {
                        list($this->key, $this->val) = array(substr($arg, 0, $pos), substr($arg, $pos + 1));
                } else {
                        list($this->key, $this->val) = array($arg, true);
                }

                // 
                // Transform "--key" => "key" and "-k" => "k":
                // 
                if ($this->key[0] == '-' && $this->key[1] == '-') {
                        $this->key = substr($this->key, 2);
                } else if ($this->key[0] == '-') {
                        $this->key = substr($this->key, 1);
                }

                // 
                // Handle key values:
                // 
                if ($this->key == 'start' || $this->key == 'end') {
                        $this->val = DateTime::createFromFormat('U', strtotime($this->val));
                }

                // 
                // Short key or alias to long key:
                // 
                if (array_key_exists($this->key, self::$alias)) {
                        $this->key = self::$alias[$this->key];
                }
        }

}

/**
 * Service test client.
 */
class CalendarClient
{

        /**
         * Command line options.
         * @var array 
         */
        private $options;
        /**
         * The SOAP service client.
         * @var ExchangeServicesClient 
         */
        private $service;
        /**
         * The program/script name.
         * @var string 
         */
        private $prog;

        /**
         * Constructor.
         */
        public function __construct($options = array())
        {
                $this->options = array_merge(
                    $options, array(
                        'verify'  => true,
                        'verbose' => false,
                        'debug'   => false
                    )
                );
        }

        /**
         * Create calendar item type.
         * @return CalendarItemType
         */
        private function create($options)
        {
                $calendarItem = new CalendarItemType();

                if (isset($options['start'])) {
                        $calendarItem->setStart($options['start']);
                }
                if (isset($options['end'])) {
                        $calendarItem->setEnd($options['end']);
                }
                if (isset($options['title'])) {
                        $calendarItem->setSubject($options['title']);
                }
                if (isset($options['location'])) {
                        $calendarItem->setLocation($options['location']);
                }
                if (isset($options['body'])) {
                        $calendarItem->setBody(new BodyType($options['body'], BodyTypeType::Text));
                }

                $calendarItem->setReminderIsSet(false);
                $calendarItem->setIsAllDayEvent(false);
                $calendarItem->setLegacyFreeBusyStatus(LegacyFreeBusyType::Busy);

                return $calendarItem;
        }

        /**
         * Show a single event.
         */
        private function show()
        {
                $itemId = new ItemIdType($this->options['id']);

                $itemIds = new NonEmptyArrayOfBaseItemIdsType();
                $itemIds->setItemId($itemId);

                $shape = new ItemResponseShapeType();
                $shape->setBaseShape(DefaultShapeNamesType::AllProperties);

                $request = new GetItemType();
                $request->setItemShape($shape);
                $request->setItemIds($itemIds);

                $response = $this->service->GetItem($request);
                $result = $response->getResponseMessages()->getGetItemResponseMessage()[0]->getItems()->getCalendarItem();

                if ($this->options['debug']) {
                        print_r($request);
                        print_r($response);
                }

                printf("Show Calendar Event:\n");
                printf("-----------------------\n");
                print_r($result);
        }

        /**
         * Add calendar event.
         */
        private function add()
        {
                $calendarItem = $this->create($this->options);

                $items = new NonEmptyArrayOfAllItemsType();
                $items->setCalendarItem($calendarItem);

                $request = new CreateItemType($items);
                $request->setSendMeetingInvitations(CalendarItemCreateOrDeleteOperationType::SendToNone);

                $response = $this->service->CreateItem($request);
                $result = $response->getResponseMessages()->getCreateItemResponseMessage()[0]->getItems()->getCalendarItem()[0]->getItemId();

                if ($this->options['debug']) {
                        print_r($request);
                        print_r($response);
                }

                printf("Created Calendar Event:\n");
                printf("-----------------------\n");
                print_r($result);
        }

        /**
         * Edit an existing calendar event.
         */
        private function edit()
        {
                $itemId = new ItemIdType($this->options['id'], $this->options['key']);

                $itemChange = array();
                $updates = new NonEmptyArrayOfItemChangeDescriptionsType();

                foreach (array_keys($this->options) as $key) {

                        $path = new PathToUnindexedFieldType(UnindexedFieldURIType::calendarCalendarItemType);
                        $calendarItem = new CalendarItemType();

                        switch ($key) {
                                case 'title':
                                        $calendarItem->setSubject($this->options['title']);
                                        $path->setFieldURI(UnindexedFieldURIType::itemSubject);
                                        break;
                                case 'body':
                                        $calendarItem->setBody($this->options['body']);
                                        $path->setFieldURI(UnindexedFieldURIType::itemBody);
                                        break;
                                case 'start':
                                        $calendarItem->setStart($this->options['start']);
                                        $path->setFieldURI(UnindexedFieldURIType::calendarStart);
                                        break;
                                case 'end':
                                        $calendarItem->setEnd($this->options['end']);
                                        $path->setFieldURI(UnindexedFieldURIType::calendarEnd);
                                        break;
                                case 'location':
                                        $calendarItem->setLocation($this->options['location']);
                                        $path->setFieldURI(UnindexedFieldURIType::calendarLocation);
                                        break;
                                default:
                                        continue;
                        }

                        $setItemField = new SetItemFieldType();
                        $setItemField->setCalendarItem($calendarItem);
                        $setItemField->setPath($path);

                        // 
                        // Seems to replace instead of appending to array of SetItemField. 
                        // This is probably a bug.
                        // 
                        $updates->setSetItemField($setItemField);
                }

                $change = new ItemChangeType();
                $change->setUpdates($updates);
                $change->setItemId($itemId);

                $itemChange[0] = $change;

                $itemChanges = new NonEmptyArrayOfItemChangesType();
                $itemChanges->setItemChange($itemChange);

                $request = new UpdateItemType($itemChanges);
                $request->setMessageDisposition(MessageDispositionType::SaveOnly);
                $request->setSendMeetingInvitationsOrCancellations(CalendarItemCreateOrDeleteOperationType::SendToNone);
                $request->setConflictResolution(ConflictResolutionType::AlwaysOverwrite);

                $response = $this->service->UpdateItem($request);
                $result = $response->getResponseMessages()->getUpdateItemResponseMessage()[0]->getItems()->getCalendarItem()[0]->getItemId();

                if ($this->options['debug']) {
                        print_r($request);
                        print_r($response);
                }

                printf("Updated Calendar Event:\n");
                printf("-----------------------\n");
                print_r($result);
        }

        /**
         * Remove calendar event.
         */
        private function remove()
        {
                $itemId = new ItemIdType($this->options['id']);
                $items = new NonEmptyArrayOfBaseItemIdsType($itemId);

                $request = new DeleteItemType($items);
                $request->setDeleteType(DisposalType::HardDelete);
                $request->setSendMeetingCancellations(CalendarItemCreateOrDeleteOperationType::SendToNone);

                $response = $this->service->DeleteItem($request);
                $result = $response->getResponseMessages()->getDeleteItemResponseMessage()[0];

                if ($this->options['debug']) {
                        print_r($request);
                        print_r($response);
                }

                printf("Deleted Calendar Event:\n");
                printf("-----------------------\n");
                print_r($result);
        }

        /**
         * List calendar events.
         */
        private function find()
        {

                $calendarView = new CalendarViewType();
                $calendarView->setStartDate($this->options['start']);
                $calendarView->setEndDate($this->options['end']);

                $shape = new ItemResponseShapeType(DefaultShapeNamesType::AllProperties);

                $folder = new DistinguishedFolderIdType(DistinguishedFolderIdNameType::calendar);
                $parent = new NonEmptyArrayOfBaseFolderIdsType();
                $parent->setDistinguishedFolderId($folder);

                $request = new FindItemType();
                $request->setTraversal(ItemQueryTraversalType::Shallow);

                $request->setItemShape($shape);
                $request->setCalendarView($calendarView);
                $request->setParentFolderIds($parent);

                $response = $this->service->FindItem($request);

                $result = array();
                foreach ($response->getResponseMessages()->getFindItemResponseMessage() as $r) {
                        foreach ($r->getRootFolder()->getItems()->getCalendarItem() as $item) {
                                $result[] = array(
                                        'id'       => $item->getItemId(),
                                        'start'    => $item->getStart(),
                                        'end'      => $item->getEnd(),
                                        'status'   => $item->getLegacyFreeBusyStatus(),
                                        'location' => $item->getLocation(),
                                        'title'    => $item->getSubject(),
                                        'body'     => $item->getBody()
                                );
                        }
                }

                if ($this->options['debug']) {
                        print_r($request);
                        print_r($response);
                }

                printf("Listing Calendar Events:\n");
                printf("-----------------------\n");
                if ($this->options['verbose']) {
                        print_r($result);
                } else {
                        foreach ($result as $event) {
                                printf("%s - %s: %s (id = %s, key = %s)\n", $event['start']->format('Y-m-d H:i'), $event['end']->format('Y-m-d H:i'), $event['title'], $event['id']->getId(), $event['id']->getChangeKey());
                        }
                }
        }

        /**
         * Insert a test event.
         */
        private function test()
        {
                $this->options['title'] = "Hello World!";
                $this->options['body'] = "Some text in message body";
                $this->options['location'] = "Home";

                $this->add();
        }

        /**
         * Parse command line options.
         * @param int $argc Number of command line options.
         * @param array $argv The command line options.
         */
        public function parse($argc, $argv)
        {
                $this->prog = basename(array_shift($argv));

                foreach ($argv as $arg) {
                        $option = new Option($arg);
                        $this->options[$option->key] = $option->val;
                }

                if (!isset($this->options['edit'])) {
                        if (!isset($this->options['start'])) {
                                $this->options['start'] = DateTime::createFromFormat('U', time() - 1800);
                        }
                        if (!isset($this->options['end'])) {
                                $this->options['end'] = DateTime::createFromFormat('U', time() + 1800);
                        }
                }

                if ($this->options['debug']) {
                        print_r($this->options);
                }
        }

        /**
         * Process client request.
         */
        public function process()
        {
                if (isset($this->options['help'])) {
                        $this->usage();
                        exit(0);
                }

                if (!isset($this->options['user'])) {
                        die("$this->prog: Missing --user option, see --help.\n");
                }
                if (!isset($this->options['user'])) {
                        die("$this->prog: Missing --pass option, see --help.\n");
                }

                $this->service = new ExchangeServicesClient(
                    $this->options['user'], $this->options['pass']
                );
                if (isset($this->options['host'])) {
                        $this->service->host = $this->options['host'];
                }

                $this->service->verbose = $this->options['verbose'];
                $this->service->verify = $this->options['verify'];

                if (isset($this->options['add'])) {
                        $this->add();
                } elseif (isset($this->options['edit'])) {
                        $this->edit();
                } elseif (isset($this->options['remove'])) {
                        $this->remove();
                } elseif (isset($this->options['list'])) {
                        $this->find();
                } elseif (isset($this->options['show'])) {
                        $this->show();
                } elseif (isset($this->options['test'])) {
                        $this->test();
                }
        }

        /**
         * Show script options.
         */
        private function usage()
        {
                printf("%s - EWS Calendar Client\n", $this->prog);
                printf("\n");
                printf("Usage: %s <connection> options...\n", $this->prog);
                printf("\n");
                printf("Connection:\n");
                printf("  --user=str:     The logon username.\n");
                printf("  --pass=str:     The logon password.\n");
                printf("  --host=str:     The exchange server hostname.\n");
                printf("  --verify:       Verify peer SSL certificate.\n");
                printf("Event:\n");
                printf("  --title=str:    Title of calendar event.\n");
                printf("  --body=str:     Body text for calendar event.\n");
                printf("  --location=str: Location for calendar event.\n");
                printf("  --start=time:   Start time.\n");
                printf("  --end=time:     End time.\n");
                printf("  --id=str:       The calendar event ID.\n");
                printf("  --key=str:      The calendar event change key.\n");
                printf("Action:\n");
                printf("  --add:          Add calenadar event.\n");
                printf("  --edit:         Edit calendar event.\n");
                printf("  --remove:       Remove calendar event.\n");
                printf("  --list:         List calendar events.\n");
                printf("  --show:         Show single calendar event.\n");
                printf("  --test:         Create sample calendar event.\n");
                printf("Aliases:\n");
                printf("  --insert:       Alias for --add.\n");
                printf("  --create:       Alias for --add.\n");
                printf("  --update:       Alias for --edit.\n");
                printf("  --delete:       Alias for --remove.\n");
                printf("  --find:         Alias for --list.\n");
                printf("Common:\n");
                printf("  -h,--help:      Print this casual help.\n");
                printf("  -v,--verbose:   Be a bit more verbose.\n");
                printf("  -d,--debug:     Print debug information.\n");
                printf("\n");
                printf("Example:\n");
                printf("  %s --add --title='Lunch' --body='Pannkakor med sylt' --user=user@example.com --pass=secret --host=exchange.example.com\n", $this->prog);
                printf("\n");
                printf("Notes:\n");
                printf("1. Option --edit and --remove requires an calendar event ID.\n");
                printf("2. Update is limited to single properties.\n");
        }

}

try {
        $client = new CalendarClient();
        $client->parse($_SERVER['argc'], $_SERVER['argv']);
        $client->process();
} catch (SoapFault $fault) {
        print_r($fault->getMessage());
}
