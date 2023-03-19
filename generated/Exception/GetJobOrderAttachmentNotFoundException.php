<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobOrderAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested job attachment was not found', 404);
    }
}