<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobOrderCustomFieldItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job custom field definition was not found', 404);
    }
}