<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateCompanyAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Attachment was not found', 404);
    }
}