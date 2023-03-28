<?php

namespace AskNicely\JobAdder;

use AskNicely\JobAdder\Generated\Normalizer\NormalizerFactory;
use AskNicely\JobAdder\Runtime\RawEncoder;
use Http\Message\MessageFactory;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;


class Client extends Resources
{
    public function __construct($httpClient, MessageFactory $messageFactory = null, Serializer $serializer = null)
    {
        if ($serializer === null) {
            $serializer = new Serializer(
                NormalizerFactory::create(),
                [
                    new JsonEncoder(
                        new JsonEncode(),
                        new JsonDecode()
                    ),
                    new RawEncoder(),
                ]
            );
        }

        if ($messageFactory === null) {
            $messageFactory = new GuzzleMessageFactory();
        }

        $messageFactory = new HostReplacementMessageFactory($messageFactory);

        parent::__construct($httpClient, $messageFactory, $serializer);
    }
}
