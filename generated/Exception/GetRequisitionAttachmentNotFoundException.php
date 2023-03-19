<?php

namespace Varspool\JobAdder\V2\Exception;

class GetRequisitionAttachmentNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requisition attachment was not found', 404);
    }
}