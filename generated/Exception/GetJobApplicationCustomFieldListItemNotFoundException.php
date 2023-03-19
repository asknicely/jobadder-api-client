<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobApplicationCustomFieldListItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job application custom field definition was not found', 404);
    }
}