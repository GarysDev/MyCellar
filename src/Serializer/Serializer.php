<?php

declare(strict_types=1);

namespace App\Serializer;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer as BaseSerializer;

class Serializer
{
    /** @var BaseSerializer */
    protected $serializer;

    public function __construct()
    {
        $encoder = new JsonEncoder();
        $normalizer = new GetSetMethodNormalizer();

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $this->serializer = new BaseSerializer(array($normalizer), array($encoder));
    }

    public function serialize($data)
    {
        return $this->serializer->serialize($data, 'json');
    }
}
