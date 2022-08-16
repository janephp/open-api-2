<?php

namespace Docker\Api\Validator;

class ImageRootFSValidator implements \Docker\Api\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Type' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Layers' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')))), 'BaseLayer' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string'))))), 'allowExtraFields' => true)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Docker\Api\Validator\ValidationException($violations);
        }
    }
}