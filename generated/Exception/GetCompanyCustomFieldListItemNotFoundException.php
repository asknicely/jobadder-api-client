<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCompanyCustomFieldListItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested company custom field definition was not found', 404);
    }
}