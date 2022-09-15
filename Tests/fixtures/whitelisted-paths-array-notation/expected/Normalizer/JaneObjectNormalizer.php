<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = array('Jane\\OpenApi2\\Tests\\Expected\\Model\\Contact' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ContactNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ContactClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ContactClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Client' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Company' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\CompanyNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceMessage' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceMessageNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceMessageRecipient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceMessageRecipientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoicePayment' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoicePaymentNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoicePaymentPaymentGateway' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoicePaymentPaymentGatewayNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Invoice' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceEstimate' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceEstimateNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceRetainer' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceRetainerNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceCreator' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceCreatorNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceLineItem' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceLineItemNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceLineItemProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceLineItemProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceItemCategory' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceItemCategoryNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateMessage' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EstimateMessageNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateMessageRecipient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EstimateMessageRecipientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Estimate' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EstimateNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EstimateClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateCreator' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EstimateCreatorNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateLineItem' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EstimateLineItemNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateItemCategory' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EstimateItemCategoryNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Expense' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseExpenseCategory' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseExpenseCategoryNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseUser' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseUserNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseReceipt' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseReceiptNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseInvoice' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseInvoiceNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseCategory' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseCategoryNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Task' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TaskNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntry' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryUser' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryUserNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryTask' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryTaskNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryExternalReference' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryExternalReferenceNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryInvoice' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryInvoiceNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UserAssignment' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\UserAssignmentNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UserAssignmentProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\UserAssignmentProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UserAssignmentUser' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\UserAssignmentUserNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TaskAssignment' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TaskAssignmentNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TaskAssignmentProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TaskAssignmentProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TaskAssignmentTask' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TaskAssignmentTaskNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Project' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Role' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\RoleNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\BillableRate' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\BillableRateNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\CostRate' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\CostRateNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectAssignment' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectAssignmentNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectAssignmentProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectAssignmentProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectAssignmentClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectAssignmentClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\User' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\UserNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseReportsResult' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseReportsResultNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UninvoicedReportResult' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\UninvoicedReportResultNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeReportsResult' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeReportsResultNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectBudgetReportResult' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectBudgetReportResultNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectsNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ErrorNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\PaginationLinksNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\CompanyPatchBody' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\CompanyPatchBodyNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jane\\OpenApi2\\Tests\\Expected\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}