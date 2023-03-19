<?php

namespace Varspool\JobAdder\V2\Exception;

class GetLatestCandidateVideoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Requested candidate video was not found', 404);
    }
}