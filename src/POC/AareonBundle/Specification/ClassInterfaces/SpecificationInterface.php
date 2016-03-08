<?php

namespace POC\AareonBundle\Specification\ClassInterfaces;

/**
 * Contrat pour le fonctionnement de nos specifications
 *
 * Interface SpecificationInterface
 * @package POC\AareonBundle\Specification\ClassInterfaces
 */
interface SpecificationInterface
{

    public function isSatisfiedBy($object);

    public function andSpec(SpecificationInterface $specification);

    public function orSpec(SpecificationInterface $specification);

    public function notSpec(SpecificationInterface $specification);

}