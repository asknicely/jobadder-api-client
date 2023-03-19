<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdatePlacementNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Placement was not found', 404);
    }
}