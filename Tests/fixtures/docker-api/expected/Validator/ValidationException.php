<?php

namespace Docker\Api\Validator;

use Symfony\Component\Validator\ConstraintViolationListInterface;
class ValidationException extends \RuntimeException
{
    /** @var ConstraintViolationListInterface */
    private $violationList;
    public function __construct(ConstraintViolationListInterface $violationList)
    {
        $this->violationList = $violationList;
        parent::__construct(sprintf('Model validation failed with %d errors: %s', $violationList->count(), (string) $violationList), 400);
    }
    public function getViolationList() : ConstraintViolationListInterface
    {
        return $this->violationList;
    }
}