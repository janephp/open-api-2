<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi2\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class Oauth2PasswordSecurityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Model\\Oauth2PasswordSecurity';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi2\Model\Oauth2PasswordSecurity;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Model\Oauth2PasswordSecurity();
        $data = clone $data;
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
            unset($data->{'type'});
        }
        if (property_exists($data, 'flow')) {
            $object->setFlow($data->{'flow'});
            unset($data->{'flow'});
        }
        if (property_exists($data, 'scopes')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'scopes'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setScopes($values);
            unset($data->{'scopes'});
        }
        if (property_exists($data, 'tokenUrl')) {
            $object->setTokenUrl($data->{'tokenUrl'});
            unset($data->{'tokenUrl'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
            unset($data->{'description'});
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/^x-/', $key_1)) {
                $object[$key_1] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getFlow()) {
            $data->{'flow'} = $object->getFlow();
        }
        if (null !== $object->getScopes()) {
            $values = new \stdClass();
            foreach ($object->getScopes() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'scopes'} = $values;
        }
        if (null !== $object->getTokenUrl()) {
            $data->{'tokenUrl'} = $object->getTokenUrl();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/^x-/', $key_1)) {
                $data->{$key_1} = $value_1;
            }
        }

        return $data;
    }
}
