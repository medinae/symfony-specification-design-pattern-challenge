<?php

namespace POC\AareonBundle\Specification;

use POC\AareonBundle\Specification\ClassInterfaces\SpecificationInterface;

class NotSpecification extends Specification implements SpecificationInterface {

    private $specification;

    public function __construct($specification) {
        $this->specification = $specification;
    }

    public function isSatisfiedBy($object) {
        return !$this->specification->isSatisfiedBy($object);
    }
}