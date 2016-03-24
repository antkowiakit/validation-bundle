<?php
namespace Antkowiak\ValidationBundle\Service;

use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class Validator
{
    private $validator;


    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function isValid($value)
    {
        return (0 === count($this->validator->validate($value)));
    }

    public function getMessages($value)
    {
        $messages = [];
        $validator = $this->validator->validate($value);
        /** @var ConstraintViolation $violation */
        foreach ($validator as $violation) {
            $messages[$violation->getPropertyPath()][] = $violation->getMessage();
        }

        return $messages;
    }
}
