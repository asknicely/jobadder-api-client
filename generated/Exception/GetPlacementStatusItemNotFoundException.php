<?php

namespace Varspool\JobAdder\V2\Exception;

class GetPlacementStatusItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested placement status definition was *not found*', 404);
    }
}