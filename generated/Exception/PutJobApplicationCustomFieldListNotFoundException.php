<?php

namespace Varspool\JobAdder\V2\Exception;

class PutJobApplicationCustomFieldListNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job application custom field definition was not found', 404);
    }
}