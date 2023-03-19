<?php

namespace Varspool\JobAdder\V2\Exception;

class GetUserPhotoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested user photo was not found', 404);
    }
}