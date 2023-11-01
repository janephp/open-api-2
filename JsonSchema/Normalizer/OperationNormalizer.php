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
class OperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi2\JsonSchema\Model\Operation;
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
        $object = new \Jane\Component\OpenApi2\JsonSchema\Model\Operation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($data['summary']);
            unset($data['summary']);
        }
        elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('externalDocs', $data) && $data['externalDocs'] !== null) {
            $object->setExternalDocs($this->denormalizer->denormalize($data['externalDocs'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\ExternalDocs', 'json', $context));
            unset($data['externalDocs']);
        }
        elseif (\array_key_exists('externalDocs', $data) && $data['externalDocs'] === null) {
            $object->setExternalDocs(null);
        }
        if (\array_key_exists('operationId', $data) && $data['operationId'] !== null) {
            $object->setOperationId($data['operationId']);
            unset($data['operationId']);
        }
        elseif (\array_key_exists('operationId', $data) && $data['operationId'] === null) {
            $object->setOperationId(null);
        }
        if (\array_key_exists('produces', $data) && $data['produces'] !== null) {
            $values_1 = [];
            foreach ($data['produces'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setProduces($values_1);
            unset($data['produces']);
        }
        elseif (\array_key_exists('produces', $data) && $data['produces'] === null) {
            $object->setProduces(null);
        }
        if (\array_key_exists('consumes', $data) && $data['consumes'] !== null) {
            $values_2 = [];
            foreach ($data['consumes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setConsumes($values_2);
            unset($data['consumes']);
        }
        elseif (\array_key_exists('consumes', $data) && $data['consumes'] === null) {
            $object->setConsumes(null);
        }
        if (\array_key_exists('parameters', $data) && $data['parameters'] !== null) {
            $values_3 = [];
            foreach ($data['parameters'] as $value_3) {
                $value_4 = $value_3;
                if (is_array($value_3) and isset($value_3['name']) and (isset($value_3['in']) and $value_3['in'] == 'body') and isset($value_3['schema'])) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\BodyParameter', 'json', $context);
                } elseif (is_array($value_3) and (isset($value_3['in']) and $value_3['in'] == 'header') and isset($value_3['name']) and (isset($value_3['type']) and ($value_3['type'] == 'string' or $value_3['type'] == 'number' or $value_3['type'] == 'boolean' or $value_3['type'] == 'integer' or $value_3['type'] == 'array'))) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\HeaderParameterSubSchema', 'json', $context);
                } elseif (is_array($value_3) and (isset($value_3['in']) and $value_3['in'] == 'formData') and isset($value_3['name']) and (isset($value_3['type']) and ($value_3['type'] == 'string' or $value_3['type'] == 'number' or $value_3['type'] == 'boolean' or $value_3['type'] == 'integer' or $value_3['type'] == 'array' or $value_3['type'] == 'file'))) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FormDataParameterSubSchema', 'json', $context);
                } elseif (is_array($value_3) and (isset($value_3['in']) and $value_3['in'] == 'query') and isset($value_3['name']) and (isset($value_3['type']) and ($value_3['type'] == 'string' or $value_3['type'] == 'number' or $value_3['type'] == 'boolean' or $value_3['type'] == 'integer' or $value_3['type'] == 'array'))) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\QueryParameterSubSchema', 'json', $context);
                } elseif (is_array($value_3) and (isset($value_3['required']) and $value_3['required'] == '1') and (isset($value_3['in']) and $value_3['in'] == 'path') and isset($value_3['name']) and (isset($value_3['type']) and ($value_3['type'] == 'string' or $value_3['type'] == 'number' or $value_3['type'] == 'boolean' or $value_3['type'] == 'integer' or $value_3['type'] == 'array'))) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PathParameterSubSchema', 'json', $context);
                } elseif (is_array($value_3) and isset($value_3['$ref'])) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\JsonReference', 'json', $context);
                }
                $values_3[] = $value_4;
            }
            $object->setParameters($values_3);
            unset($data['parameters']);
        }
        elseif (\array_key_exists('parameters', $data) && $data['parameters'] === null) {
            $object->setParameters(null);
        }
        if (\array_key_exists('responses', $data) && $data['responses'] !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['responses'] as $key => $value_5) {
                if (preg_match('/^([0-9]{3})$|^(default)$/', (string) $key) && isset($value_5)) {
                    $value_6 = $value_5;
                    if (is_array($value_5) and isset($value_5['description'])) {
                        $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Response', 'json', $context);
                    } elseif (is_array($value_5) and isset($value_5['$ref'])) {
                        $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\JsonReference', 'json', $context);
                    }
                    $values_4[$key] = $value_6;
                    continue;
                }
                if (preg_match('/^x-/', (string) $key) && isset($value_5)) {
                    $values_4[$key] = $value_5;
                    continue;
                }
            }
            $object->setResponses($values_4);
            unset($data['responses']);
        }
        elseif (\array_key_exists('responses', $data) && $data['responses'] === null) {
            $object->setResponses(null);
        }
        if (\array_key_exists('schemes', $data) && $data['schemes'] !== null) {
            $values_5 = [];
            foreach ($data['schemes'] as $value_7) {
                $values_5[] = $value_7;
            }
            $object->setSchemes($values_5);
            unset($data['schemes']);
        }
        elseif (\array_key_exists('schemes', $data) && $data['schemes'] === null) {
            $object->setSchemes(null);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->setDeprecated($data['deprecated']);
            unset($data['deprecated']);
        }
        elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->setDeprecated(null);
        }
        if (\array_key_exists('security', $data) && $data['security'] !== null) {
            $values_6 = [];
            foreach ($data['security'] as $value_8) {
                $values_7 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_8 as $key_1 => $value_9) {
                    $values_8 = [];
                    foreach ($value_9 as $value_10) {
                        $values_8[] = $value_10;
                    }
                    $values_7[$key_1] = $values_8;
                }
                $values_6[] = $values_7;
            }
            $object->setSecurity($values_6);
            unset($data['security']);
        }
        elseif (\array_key_exists('security', $data) && $data['security'] === null) {
            $object->setSecurity(null);
        }
        foreach ($data as $key_2 => $value_11) {
            if (preg_match('/^x-/', (string) $key_2)) {
                $object[$key_2] = $value_11;
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
        if ($object->isInitialized('tags') && null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data['tags'] = $values;
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('externalDocs') && null !== $object->getExternalDocs()) {
            $data['externalDocs'] = $this->normalizer->normalize($object->getExternalDocs(), 'json', $context);
        }
        if ($object->isInitialized('operationId') && null !== $object->getOperationId()) {
            $data['operationId'] = $object->getOperationId();
        }
        if ($object->isInitialized('produces') && null !== $object->getProduces()) {
            $values_1 = [];
            foreach ($object->getProduces() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['produces'] = $values_1;
        }
        if ($object->isInitialized('consumes') && null !== $object->getConsumes()) {
            $values_2 = [];
            foreach ($object->getConsumes() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['consumes'] = $values_2;
        }
        if ($object->isInitialized('parameters') && null !== $object->getParameters()) {
            $values_3 = [];
            foreach ($object->getParameters() as $value_3) {
                $value_4 = $value_3;
                if (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $values_3[] = $value_4;
            }
            $data['parameters'] = $values_3;
        }
        $values_4 = [];
        foreach ($object->getResponses() as $key => $value_5) {
            if (preg_match('/^([0-9]{3})$|^(default)$/', (string) $key) && !is_null($value_5)) {
                $value_6 = $value_5;
                if (is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                } elseif (is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $values_4[$key] = $value_6;
                continue;
            }
            if (preg_match('/^x-/', (string) $key) && !is_null($value_5)) {
                $values_4[$key] = $value_5;
                continue;
            }
        }
        $data['responses'] = $values_4;
        if ($object->isInitialized('schemes') && null !== $object->getSchemes()) {
            $values_5 = [];
            foreach ($object->getSchemes() as $value_7) {
                $values_5[] = $value_7;
            }
            $data['schemes'] = $values_5;
        }
        if ($object->isInitialized('deprecated') && null !== $object->getDeprecated()) {
            $data['deprecated'] = $object->getDeprecated();
        }
        if ($object->isInitialized('security') && null !== $object->getSecurity()) {
            $values_6 = [];
            foreach ($object->getSecurity() as $value_8) {
                $values_7 = [];
                foreach ($value_8 as $key_1 => $value_9) {
                    $values_8 = [];
                    foreach ($value_9 as $value_10) {
                        $values_8[] = $value_10;
                    }
                    $values_7[$key_1] = $values_8;
                }
                $values_6[] = $values_7;
            }
            $data['security'] = $values_6;
        }
        foreach ($object as $key_2 => $value_11) {
            if (preg_match('/^x-/', (string) $key_2)) {
                $data[$key_2] = $value_11;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation' => false];
    }
}