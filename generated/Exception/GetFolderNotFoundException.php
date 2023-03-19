<?php

namespace Varspool\JobAdder\V2\Exception;

class GetFolderNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested folder was not found', 404);
    }
}