<?php

namespace Varspool\JobAdder\V2\Exception;

class GetPlacementActivitySettingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested placement activity settings were not found', 404);
    }
}