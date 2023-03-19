<?php

namespace Varspool\JobAdder\V2\Exception;

class HeadCompanyLogoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested company logo was not found', 404);
    }
}