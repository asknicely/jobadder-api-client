<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobApplicationActivitySettingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job application activity settings were not found', 404);
    }
}