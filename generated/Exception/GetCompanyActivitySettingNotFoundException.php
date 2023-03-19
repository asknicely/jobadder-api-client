<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCompanyActivitySettingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested company activity settings were not found', 404);
    }
}