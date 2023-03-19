<?php

namespace Varspool\JobAdder\V2\Exception;

class PutPlacementCustomFieldListNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested placement custom field definition was not found', 404);
    }
}