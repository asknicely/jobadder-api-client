<?php

namespace Varspool\JobAdder\V2\Exception;

class AddJobApplicationNoteNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Job application was not found', 404);
    }
}