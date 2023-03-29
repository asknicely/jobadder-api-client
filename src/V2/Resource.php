<?php

namespace Varspool\JobAdder\V2;

use Http\Client\Common\FlexibleHttpClient;
use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Symfony\Component\Serializer\SerializerInterface;

abstract class EntityResource
{
    const FETCH_RESPONSE = 'response';
    const FETCH_OBJECT = 'object';
    const FETCH_PROMISE = 'promise';

    /**
     * @var HttpClient|HttpAsyncClient
     */
    protected $httpAsyncClient;

    /**
     * @var MessageFactory
     */
    protected $messageFactory;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    public function __construct($httpClient, MessageFactory $messageFactory, SerializerInterface $serializer)
    {
        $this->httpClient = new FlexibleHttpClient($httpClient);
        $this->messageFactory = $messageFactory;
        $this->serializer = $serializer;
    }
}
