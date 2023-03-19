<?php

namespace Varspool\JobAdder\V2\Exception;

class GetJobOrderStatusItemNotFoundException extends \RuntimeException implements ClientException
{
    private $statusRepresentation;
    public function __construct(\Varspool\JobAdder\V2\Model\StatusRepresentation $statusRepresentation)
    {
        parent::__construct('Requested job status definition was not found', 404);
        $this->statusRepresentation = $statusRepresentation;
    }
    public function getStatusRepresentation()
    {
        return $this->statusRepresentation;
    }
}