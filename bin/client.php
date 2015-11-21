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
use UUP\Exchange\Types\CalendarItemCreateOrDeleteOperationType;
use UUP\Exchange\Types\CalendarItemType;
use UUP\Exchange\Types\CreateItemType;
use UUP\Exchange\Types\LegacyFreeBusyType;
use UUP\Exchange\Types\NonEmptyArrayOfAllItemsType;

/**
 * Service test client.
 */
class Client
{

        /**
         * The SOAP service.
         * @var ExchangeServicesClient 
         */
        private $service;

        /**
         * Constructor.
         * @param string $user The user principal name.
         * @param string $pass The user password.
         * @param string $host The exchange server hostname.
         */
        public function __construct($user, $pass, $host)
        {
                $this->service = new ExchangeServicesClient($user, $pass, $host);
                $this->service->verbose = true;
        }

        /**
         * Simple test method.
         */
        public function test()
        {
                $calendarItem = new CalendarItemType();
                $calendarItem->setSubject("Hello World!");
                $calendarItem->setLocation("Home");
                $calendarItem->setBody("Some text for message body...");
                $calendarItem->setReminderIsSet(false);
                $calendarItem->setIsAllDayEvent(false);
                $calendarItem->setStart(new DateTime('2015-11-22 13:00:00'));
                $calendarItem->setEnd(new DateTime('2015-11-22 14:30:00'));
                $calendarItem->setLegacyFreeBusyStatus(LegacyFreeBusyType::Busy);

                $items = new NonEmptyArrayOfAllItemsType();
                $items->setCalendarItem($calendarItem);

                $request = new CreateItemType($items);
                $request->setSendMeetingInvitations(CalendarItemCreateOrDeleteOperationType::SendToNone);

                $this->service->CreateItem($request);
        }

        public function add($subj, $body, $stime, $etime)
        {
                
        }

        public function edit($subj, $body)
        {
                
        }

        public function show($stime, $etime)
        {
                
        }

        public function remove()
        {
                
        }

}

if ($_SERVER['argc'] < 3) {
        die(sprintf("Usage: php %s <user> <pass> [<host>]\n", $_SERVER['argv'][0]));
}

$user = $_SERVER['argv'][1];
$pass = $_SERVER['argv'][2];
$host = $_SERVER['argc'] == 4 ? $_SERVER['argv'][3] : null;

$name = "UUP-EWS Test";
$body = "Some text that goes into the calendar event body";

$stime = DateTime::createFromFormat(DateTime::ISO8601, time() + 1800);
$etime = DateTime::createFromFormat(DateTime::ISO8601, time() + 7200);

try {
        $client = new Client($user, $pass, $host);
        $client->test();
} catch (SoapFault $fault) {
        print_r($fault->getMessage());
}
