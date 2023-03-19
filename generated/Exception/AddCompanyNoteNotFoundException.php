<?php

namespace Varspool\JobAdder\V2\Exception;

class AddCompanyNoteNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Company was not found', 404);
    }
}