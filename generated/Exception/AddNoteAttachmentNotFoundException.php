<?php

namespace Varspool\JobAdder\V2\Exception;

class AddNoteAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Note was not found', 404);
    }
}