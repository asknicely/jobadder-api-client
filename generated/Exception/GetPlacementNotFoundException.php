<?php

namespace Varspool\JobAdder\V2\Exception;

class GetPlacementNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested placement was not found', 404);
    }
}