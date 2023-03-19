<?php

namespace Varspool\JobAdder\V2\Exception;

class GetFloatNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested candidate float was not found', 404);
    }
}