<?php

namespace Varspool\JobAdder\V2\Exception;

class GetNoteNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested note was not found', 404);
    }
}