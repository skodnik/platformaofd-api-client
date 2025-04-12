<?php

declare(strict_types=1);

namespace Platformaofd\ClientApi\Factory;

use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AttributeLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SerializerFactory
{
    public static function getSerializer(string $dateTimeFormat = 'Y-m-d\TH:i:s'): Serializer
    {
        $classMetadataFactory = new ClassMetadataFactory(new AttributeLoader);
        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);

        $normalizers = [
            new BackedEnumNormalizer,
            new ArrayDenormalizer,
            new DateTimeNormalizer([DateTimeNormalizer::FORMAT_KEY => $dateTimeFormat]),
            new ObjectNormalizer(
                classMetadataFactory: $classMetadataFactory,
                nameConverter: $metadataAwareNameConverter,
                propertyTypeExtractor: new PropertyInfoExtractor(
                    typeExtractors: [
                        new PhpDocExtractor,
                        new ReflectionExtractor,
                    ]
                ),
            ),
        ];

        $encoders = [new JsonEncoder(defaultContext: ['json_encode_options' => JSON_UNESCAPED_UNICODE])];

        return new Serializer($normalizers, $encoders);
    }
}
