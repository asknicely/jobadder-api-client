<?php

namespace Varspool\JobAdder\V2\Exception;

class GetNoteAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested note attachment was not found', 404);
    }
}