<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobOrderActivitySettingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job activity settings were not found', 404);
    }
}