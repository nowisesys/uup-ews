<?php

namespace UUP\Exchange\Types;

class InvalidRecipientResponseCodeType
{

        const __default = 'OtherError';
        const OtherError = 'OtherError';
        const RecipientOrganizationNotFederated = 'RecipientOrganizationNotFederated';
        const CannotObtainTokenFromSTS = 'CannotObtainTokenFromSTS';
        const SystemPolicyBlocksSharingWithThisRecipient = 'SystemPolicyBlocksSharingWithThisRecipient';
        const RecipientOrganizationFederatedWithUnknownTokenIssuer = 'RecipientOrganizationFederatedWithUnknownTokenIssuer';

}
