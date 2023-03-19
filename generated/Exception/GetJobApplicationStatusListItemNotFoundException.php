<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobApplicationStatusListItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job application status definition was not found', 404);
    }
}