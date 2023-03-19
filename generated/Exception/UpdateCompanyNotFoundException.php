<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdateCompanyNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested company was not found', 404);
    }
}