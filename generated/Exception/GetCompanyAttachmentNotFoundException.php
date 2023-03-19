<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCompanyAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested company attachment was not found', 404);
    }
}