<?php

namespace UUP\Exchange\Types;

class ContactItemType extends ItemType
{

        /**
         * @var string $FileAs
         */
        protected $FileAs = null;
        /**
         * @var FileAsMappingType $FileAsMapping
         */
        protected $FileAsMapping = null;
        /**
         * @var string $DisplayName
         */
        protected $DisplayName = null;
        /**
         * @var string $GivenName
         */
        protected $GivenName = null;
        /**
         * @var string $Initials
         */
        protected $Initials = null;
        /**
         * @var string $MiddleName
         */
        protected $MiddleName = null;
        /**
         * @var string $Nickname
         */
        protected $Nickname = null;
        /**
         * @var CompleteNameType $CompleteName
         */
        protected $CompleteName = null;
        /**
         * @var string $CompanyName
         */
        protected $CompanyName = null;
        /**
         * @var EmailAddressDictionaryType $EmailAddresses
         */
        protected $EmailAddresses = null;
        /**
         * @var PhysicalAddressDictionaryType $PhysicalAddresses
         */
        protected $PhysicalAddresses = null;
        /**
         * @var PhoneNumberDictionaryType $PhoneNumbers
         */
        protected $PhoneNumbers = null;
        /**
         * @var string $AssistantName
         */
        protected $AssistantName = null;
        /**
         * @var \DateTime $Birthday
         */
        protected $Birthday = null;
        /**
         * @var anyURI $BusinessHomePage
         */
        protected $BusinessHomePage = null;
        /**
         * @var ArrayOfStringsType $Children
         */
        protected $Children = null;
        /**
         * @var ArrayOfStringsType $Companies
         */
        protected $Companies = null;
        /**
         * @var ContactSourceType $ContactSource
         */
        protected $ContactSource = null;
        /**
         * @var string $Department
         */
        protected $Department = null;
        /**
         * @var string $Generation
         */
        protected $Generation = null;
        /**
         * @var ImAddressDictionaryType $ImAddresses
         */
        protected $ImAddresses = null;
        /**
         * @var string $JobTitle
         */
        protected $JobTitle = null;
        /**
         * @var string $Manager
         */
        protected $Manager = null;
        /**
         * @var string $Mileage
         */
        protected $Mileage = null;
        /**
         * @var string $OfficeLocation
         */
        protected $OfficeLocation = null;
        /**
         * @var PhysicalAddressIndexType $PostalAddressIndex
         */
        protected $PostalAddressIndex = null;
        /**
         * @var string $Profession
         */
        protected $Profession = null;
        /**
         * @var string $SpouseName
         */
        protected $SpouseName = null;
        /**
         * @var string $Surname
         */
        protected $Surname = null;
        /**
         * @var \DateTime $WeddingAnniversary
         */
        protected $WeddingAnniversary = null;
        /**
         * @var boolean $HasPicture
         */
        protected $HasPicture = null;
        /**
         * @var string $PhoneticFullName
         */
        protected $PhoneticFullName = null;
        /**
         * @var string $PhoneticFirstName
         */
        protected $PhoneticFirstName = null;
        /**
         * @var string $PhoneticLastName
         */
        protected $PhoneticLastName = null;
        /**
         * @var string $Alias
         */
        protected $Alias = null;
        /**
         * @var string $Notes
         */
        protected $Notes = null;
        /**
         * @var base64Binary $Photo
         */
        protected $Photo = null;
        /**
         * @var ArrayOfBinaryType $UserSMIMECertificate
         */
        protected $UserSMIMECertificate = null;
        /**
         * @var ArrayOfBinaryType $MSExchangeCertificate
         */
        protected $MSExchangeCertificate = null;
        /**
         * @var string $DirectoryId
         */
        protected $DirectoryId = null;
        /**
         * @var SingleRecipientType $ManagerMailbox
         */
        protected $ManagerMailbox = null;
        /**
         * @var ArrayOfRecipientsType $DirectReports
         */
        protected $DirectReports = null;

        public function __construct()
        {
                parent::__construct();
        }

        /**
         * @return string
         */
        public function getFileAs()
        {
                return $this->FileAs;
        }

        /**
         * @param string $FileAs
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setFileAs($FileAs)
        {
                $this->FileAs = $FileAs;
                return $this;
        }

        /**
         * @return FileAsMappingType
         */
        public function getFileAsMapping()
        {
                return $this->FileAsMapping;
        }

        /**
         * @param FileAsMappingType $FileAsMapping
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setFileAsMapping($FileAsMapping)
        {
                $this->FileAsMapping = $FileAsMapping;
                return $this;
        }

        /**
         * @return string
         */
        public function getDisplayName()
        {
                return $this->DisplayName;
        }

        /**
         * @param string $DisplayName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setDisplayName($DisplayName)
        {
                $this->DisplayName = $DisplayName;
                return $this;
        }

        /**
         * @return string
         */
        public function getGivenName()
        {
                return $this->GivenName;
        }

        /**
         * @param string $GivenName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setGivenName($GivenName)
        {
                $this->GivenName = $GivenName;
                return $this;
        }

        /**
         * @return string
         */
        public function getInitials()
        {
                return $this->Initials;
        }

        /**
         * @param string $Initials
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setInitials($Initials)
        {
                $this->Initials = $Initials;
                return $this;
        }

        /**
         * @return string
         */
        public function getMiddleName()
        {
                return $this->MiddleName;
        }

        /**
         * @param string $MiddleName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setMiddleName($MiddleName)
        {
                $this->MiddleName = $MiddleName;
                return $this;
        }

        /**
         * @return string
         */
        public function getNickname()
        {
                return $this->Nickname;
        }

        /**
         * @param string $Nickname
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setNickname($Nickname)
        {
                $this->Nickname = $Nickname;
                return $this;
        }

        /**
         * @return CompleteNameType
         */
        public function getCompleteName()
        {
                return $this->CompleteName;
        }

        /**
         * @param CompleteNameType $CompleteName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setCompleteName($CompleteName)
        {
                $this->CompleteName = $CompleteName;
                return $this;
        }

        /**
         * @return string
         */
        public function getCompanyName()
        {
                return $this->CompanyName;
        }

        /**
         * @param string $CompanyName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setCompanyName($CompanyName)
        {
                $this->CompanyName = $CompanyName;
                return $this;
        }

        /**
         * @return EmailAddressDictionaryType
         */
        public function getEmailAddresses()
        {
                return $this->EmailAddresses;
        }

        /**
         * @param EmailAddressDictionaryType $EmailAddresses
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setEmailAddresses($EmailAddresses)
        {
                $this->EmailAddresses = $EmailAddresses;
                return $this;
        }

        /**
         * @return PhysicalAddressDictionaryType
         */
        public function getPhysicalAddresses()
        {
                return $this->PhysicalAddresses;
        }

        /**
         * @param PhysicalAddressDictionaryType $PhysicalAddresses
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setPhysicalAddresses($PhysicalAddresses)
        {
                $this->PhysicalAddresses = $PhysicalAddresses;
                return $this;
        }

        /**
         * @return PhoneNumberDictionaryType
         */
        public function getPhoneNumbers()
        {
                return $this->PhoneNumbers;
        }

        /**
         * @param PhoneNumberDictionaryType $PhoneNumbers
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setPhoneNumbers($PhoneNumbers)
        {
                $this->PhoneNumbers = $PhoneNumbers;
                return $this;
        }

        /**
         * @return string
         */
        public function getAssistantName()
        {
                return $this->AssistantName;
        }

        /**
         * @param string $AssistantName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setAssistantName($AssistantName)
        {
                $this->AssistantName = $AssistantName;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getBirthday()
        {
                if ($this->Birthday == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->Birthday);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $Birthday
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setBirthday(\DateTime $Birthday = null)
        {
                if ($Birthday == null) {
                        $this->Birthday = null;
                } else {
                        $this->Birthday = $Birthday->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return anyURI
         */
        public function getBusinessHomePage()
        {
                return $this->BusinessHomePage;
        }

        /**
         * @param anyURI $BusinessHomePage
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setBusinessHomePage($BusinessHomePage)
        {
                $this->BusinessHomePage = $BusinessHomePage;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getChildren()
        {
                return $this->Children;
        }

        /**
         * @param ArrayOfStringsType $Children
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setChildren($Children)
        {
                $this->Children = $Children;
                return $this;
        }

        /**
         * @return ArrayOfStringsType
         */
        public function getCompanies()
        {
                return $this->Companies;
        }

        /**
         * @param ArrayOfStringsType $Companies
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setCompanies($Companies)
        {
                $this->Companies = $Companies;
                return $this;
        }

        /**
         * @return ContactSourceType
         */
        public function getContactSource()
        {
                return $this->ContactSource;
        }

        /**
         * @param ContactSourceType $ContactSource
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setContactSource($ContactSource)
        {
                $this->ContactSource = $ContactSource;
                return $this;
        }

        /**
         * @return string
         */
        public function getDepartment()
        {
                return $this->Department;
        }

        /**
         * @param string $Department
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setDepartment($Department)
        {
                $this->Department = $Department;
                return $this;
        }

        /**
         * @return string
         */
        public function getGeneration()
        {
                return $this->Generation;
        }

        /**
         * @param string $Generation
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setGeneration($Generation)
        {
                $this->Generation = $Generation;
                return $this;
        }

        /**
         * @return ImAddressDictionaryType
         */
        public function getImAddresses()
        {
                return $this->ImAddresses;
        }

        /**
         * @param ImAddressDictionaryType $ImAddresses
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setImAddresses($ImAddresses)
        {
                $this->ImAddresses = $ImAddresses;
                return $this;
        }

        /**
         * @return string
         */
        public function getJobTitle()
        {
                return $this->JobTitle;
        }

        /**
         * @param string $JobTitle
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setJobTitle($JobTitle)
        {
                $this->JobTitle = $JobTitle;
                return $this;
        }

        /**
         * @return string
         */
        public function getManager()
        {
                return $this->Manager;
        }

        /**
         * @param string $Manager
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setManager($Manager)
        {
                $this->Manager = $Manager;
                return $this;
        }

        /**
         * @return string
         */
        public function getMileage()
        {
                return $this->Mileage;
        }

        /**
         * @param string $Mileage
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setMileage($Mileage)
        {
                $this->Mileage = $Mileage;
                return $this;
        }

        /**
         * @return string
         */
        public function getOfficeLocation()
        {
                return $this->OfficeLocation;
        }

        /**
         * @param string $OfficeLocation
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setOfficeLocation($OfficeLocation)
        {
                $this->OfficeLocation = $OfficeLocation;
                return $this;
        }

        /**
         * @return PhysicalAddressIndexType
         */
        public function getPostalAddressIndex()
        {
                return $this->PostalAddressIndex;
        }

        /**
         * @param PhysicalAddressIndexType $PostalAddressIndex
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setPostalAddressIndex($PostalAddressIndex)
        {
                $this->PostalAddressIndex = $PostalAddressIndex;
                return $this;
        }

        /**
         * @return string
         */
        public function getProfession()
        {
                return $this->Profession;
        }

        /**
         * @param string $Profession
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setProfession($Profession)
        {
                $this->Profession = $Profession;
                return $this;
        }

        /**
         * @return string
         */
        public function getSpouseName()
        {
                return $this->SpouseName;
        }

        /**
         * @param string $SpouseName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setSpouseName($SpouseName)
        {
                $this->SpouseName = $SpouseName;
                return $this;
        }

        /**
         * @return string
         */
        public function getSurname()
        {
                return $this->Surname;
        }

        /**
         * @param string $Surname
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setSurname($Surname)
        {
                $this->Surname = $Surname;
                return $this;
        }

        /**
         * @return \DateTime
         */
        public function getWeddingAnniversary()
        {
                if ($this->WeddingAnniversary == null) {
                        return null;
                } else {
                        try {
                                return new \DateTime($this->WeddingAnniversary);
                        } catch (\Exception $e) {
                                return false;
                        }
                }
        }

        /**
         * @param \DateTime $WeddingAnniversary
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setWeddingAnniversary(\DateTime $WeddingAnniversary = null)
        {
                if ($WeddingAnniversary == null) {
                        $this->WeddingAnniversary = null;
                } else {
                        $this->WeddingAnniversary = $WeddingAnniversary->format(\DateTime::ATOM);
                }
                return $this;
        }

        /**
         * @return boolean
         */
        public function getHasPicture()
        {
                return $this->HasPicture;
        }

        /**
         * @param boolean $HasPicture
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setHasPicture($HasPicture)
        {
                $this->HasPicture = $HasPicture;
                return $this;
        }

        /**
         * @return string
         */
        public function getPhoneticFullName()
        {
                return $this->PhoneticFullName;
        }

        /**
         * @param string $PhoneticFullName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setPhoneticFullName($PhoneticFullName)
        {
                $this->PhoneticFullName = $PhoneticFullName;
                return $this;
        }

        /**
         * @return string
         */
        public function getPhoneticFirstName()
        {
                return $this->PhoneticFirstName;
        }

        /**
         * @param string $PhoneticFirstName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setPhoneticFirstName($PhoneticFirstName)
        {
                $this->PhoneticFirstName = $PhoneticFirstName;
                return $this;
        }

        /**
         * @return string
         */
        public function getPhoneticLastName()
        {
                return $this->PhoneticLastName;
        }

        /**
         * @param string $PhoneticLastName
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setPhoneticLastName($PhoneticLastName)
        {
                $this->PhoneticLastName = $PhoneticLastName;
                return $this;
        }

        /**
         * @return string
         */
        public function getAlias()
        {
                return $this->Alias;
        }

        /**
         * @param string $Alias
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setAlias($Alias)
        {
                $this->Alias = $Alias;
                return $this;
        }

        /**
         * @return string
         */
        public function getNotes()
        {
                return $this->Notes;
        }

        /**
         * @param string $Notes
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setNotes($Notes)
        {
                $this->Notes = $Notes;
                return $this;
        }

        /**
         * @return base64Binary
         */
        public function getPhoto()
        {
                return $this->Photo;
        }

        /**
         * @param base64Binary $Photo
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setPhoto($Photo)
        {
                $this->Photo = $Photo;
                return $this;
        }

        /**
         * @return ArrayOfBinaryType
         */
        public function getUserSMIMECertificate()
        {
                return $this->UserSMIMECertificate;
        }

        /**
         * @param ArrayOfBinaryType $UserSMIMECertificate
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setUserSMIMECertificate($UserSMIMECertificate)
        {
                $this->UserSMIMECertificate = $UserSMIMECertificate;
                return $this;
        }

        /**
         * @return ArrayOfBinaryType
         */
        public function getMSExchangeCertificate()
        {
                return $this->MSExchangeCertificate;
        }

        /**
         * @param ArrayOfBinaryType $MSExchangeCertificate
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setMSExchangeCertificate($MSExchangeCertificate)
        {
                $this->MSExchangeCertificate = $MSExchangeCertificate;
                return $this;
        }

        /**
         * @return string
         */
        public function getDirectoryId()
        {
                return $this->DirectoryId;
        }

        /**
         * @param string $DirectoryId
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setDirectoryId($DirectoryId)
        {
                $this->DirectoryId = $DirectoryId;
                return $this;
        }

        /**
         * @return SingleRecipientType
         */
        public function getManagerMailbox()
        {
                return $this->ManagerMailbox;
        }

        /**
         * @param SingleRecipientType $ManagerMailbox
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setManagerMailbox($ManagerMailbox)
        {
                $this->ManagerMailbox = $ManagerMailbox;
                return $this;
        }

        /**
         * @return ArrayOfRecipientsType
         */
        public function getDirectReports()
        {
                return $this->DirectReports;
        }

        /**
         * @param ArrayOfRecipientsType $DirectReports
         * @return \UUP\Exchange\Types\ContactItemType
         */
        public function setDirectReports($DirectReports)
        {
                $this->DirectReports = $DirectReports;
                return $this;
        }

}
