<?php

namespace Jane\Component\OpenApi2\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class Oauth2ApplicationSecurityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2ApplicationSecurity';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi2\JsonSchema\Model\Oauth2ApplicationSecurity;
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi2\JsonSchema\Model\Oauth2ApplicationSecurity();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('flow', $data) && $data['flow'] !== null) {
            $object->setFlow($data['flow']);
            unset($data['flow']);
        }
        elseif (\array_key_exists('flow', $data) && $data['flow'] === null) {
            $object->setFlow(null);
        }
        if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['scopes'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setScopes($values);
            unset($data['scopes']);
        }
        elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
            $object->setScopes(null);
        }
        if (\array_key_exists('tokenUrl', $data) && $data['tokenUrl'] !== null) {
            $object->setTokenUrl($data['tokenUrl']);
            unset($data['tokenUrl']);
        }
        elseif (\array_key_exists('tokenUrl', $data) && $data['tokenUrl'] === null) {
            $object->setTokenUrl(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/^x-/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        $data['type'] = $object->getType();
        $data['flow'] = $object->getFlow();
        if ($object->isInitialized('scopes') && null !== $object->getScopes()) {
            $values = [];
            foreach ($object->getScopes() as $key => $value) {
                $values[$key] = $value;
            }
            $data['scopes'] = $values;
        }
        $data['tokenUrl'] = $object->getTokenUrl();
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/^x-/', (string) $key_1)) {
                $data[$key_1] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2ApplicationSecurity' => false];
    }
}