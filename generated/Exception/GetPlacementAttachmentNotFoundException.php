<?php

namespace Varspool\JobAdder\V2\Exception;

class GetPlacementAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested placement attachment was not found', 404);
    }
}