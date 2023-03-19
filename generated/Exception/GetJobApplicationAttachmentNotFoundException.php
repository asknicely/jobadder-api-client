<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobApplicationAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job application attachment was not found', 404);
    }
}