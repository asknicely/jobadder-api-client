<?php

namespace Varspool\JobAdder\V2\Exception;

class AddJobOrderNoteNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Job was not found', 404);
    }
}