<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCandidateActivitySettingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested candidate activity settings were not found', 404);
    }
}