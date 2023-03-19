<?php

namespace Varspool\JobAdder\V2\Exception;

class GetLatestJobApplicationVideoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job application video was not found', 404);
    }
}