<?php

namespace Varspool\JobAdder\V2\Exception;

class GetContactActivitySettingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested contact activity settings were not found', 404);
    }
}