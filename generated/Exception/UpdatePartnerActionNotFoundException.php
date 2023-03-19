<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdatePartnerActionNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Partner action was not found', 404);
    }
}