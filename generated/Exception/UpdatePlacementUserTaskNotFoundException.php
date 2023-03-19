<?php

namespace Varspool\JobAdder\V2\Exception;

class UpdatePlacementUserTaskNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Placement user task was not found', 404);
    }
}