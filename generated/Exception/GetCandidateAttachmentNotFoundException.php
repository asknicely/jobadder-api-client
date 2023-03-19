<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCandidateAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested candidate attachment was not found', 404);
    }
}