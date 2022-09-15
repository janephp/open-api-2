<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UninvoicedReportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UninvoicedReportResult';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UninvoicedReportResult';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\UninvoicedReportResult();
        if (\array_key_exists('total_hours', $data) && \is_int($data['total_hours'])) {
            $data['total_hours'] = (double) $data['total_hours'];
        }
        if (\array_key_exists('uninvoiced_hours', $data) && \is_int($data['uninvoiced_hours'])) {
            $data['uninvoiced_hours'] = (double) $data['uninvoiced_hours'];
        }
        if (\array_key_exists('uninvoiced_expenses', $data) && \is_int($data['uninvoiced_expenses'])) {
            $data['uninvoiced_expenses'] = (double) $data['uninvoiced_expenses'];
        }
        if (\array_key_exists('uninvoiced_amount', $data) && \is_int($data['uninvoiced_amount'])) {
            $data['uninvoiced_amount'] = (double) $data['uninvoiced_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_id', $data)) {
            $object->setClientId($data['client_id']);
        }
        if (\array_key_exists('client_name', $data)) {
            $object->setClientName($data['client_name']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (\array_key_exists('project_name', $data)) {
            $object->setProjectName($data['project_name']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
        }
        if (\array_key_exists('total_hours', $data)) {
            $object->setTotalHours($data['total_hours']);
        }
        if (\array_key_exists('uninvoiced_hours', $data)) {
            $object->setUninvoicedHours($data['uninvoiced_hours']);
        }
        if (\array_key_exists('uninvoiced_expenses', $data)) {
            $object->setUninvoicedExpenses($data['uninvoiced_expenses']);
        }
        if (\array_key_exists('uninvoiced_amount', $data)) {
            $object->setUninvoicedAmount($data['uninvoiced_amount']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if (null !== $object->getClientName()) {
            $data['client_name'] = $object->getClientName();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getProjectName()) {
            $data['project_name'] = $object->getProjectName();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getTotalHours()) {
            $data['total_hours'] = $object->getTotalHours();
        }
        if (null !== $object->getUninvoicedHours()) {
            $data['uninvoiced_hours'] = $object->getUninvoicedHours();
        }
        if (null !== $object->getUninvoicedExpenses()) {
            $data['uninvoiced_expenses'] = $object->getUninvoicedExpenses();
        }
        if (null !== $object->getUninvoicedAmount()) {
            $data['uninvoiced_amount'] = $object->getUninvoicedAmount();
        }
        return $data;
    }
}