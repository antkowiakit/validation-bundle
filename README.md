Installation
-------
#### Step 1: Composer require
    composer require antkowiak/validation-bundle dev-master
#### Step 2: Enable the bundle
    new Antkowiak\ValidationBundle\AntkowiakValidationBundle()
Usage
-------
    $validator = $this->get('antkowiak.validator');
    
    $object = new Object(); //Object with assert on fields.
    $object->setEmail('1');

    $validator->isValid($object); //boolean
    $validator->getMessages($object); //array with messages
    /**
    * array:2 [
    *     "text" => array:1 [
    *         0 => "Ta wartość nie powinna być pusta."
    *     ]
    *     "email" => array:2 [
    *         0 => "Ta wartość nie jest prawidłowym adresem email."
    *         1 => "Ta wartość jest zbyt krótka. Powinna mieć 3 lub więcej znaków."
    *     ]
    * ]
    */
License
-------

This bundle is released under the MIT license. See the complete license in the
bundle:

    Resources/meta/LICENSE
