<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateJobApplicationAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Attachment was not found', 404);
    }
}