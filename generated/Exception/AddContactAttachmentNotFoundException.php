<?php

namespace Varspool\JobAdder\V2\Exception;

class AddContactAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Contact was not found', 404);
    }
}