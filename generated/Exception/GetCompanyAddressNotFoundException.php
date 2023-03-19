<?php

namespace Varspool\JobAdder\V2\Exception;

class GetCompanyAddressNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested company address was not found', 404);
    }
}