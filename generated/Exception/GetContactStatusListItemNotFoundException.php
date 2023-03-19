<?php

namespace Varspool\JobAdder\V2\Exception;

class GetContactStatusListItemNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested contact status definition was not found', 404);
    }
}