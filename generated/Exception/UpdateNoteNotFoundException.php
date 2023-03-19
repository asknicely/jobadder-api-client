<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateNoteNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Specified note was not found', 404);
    }
}