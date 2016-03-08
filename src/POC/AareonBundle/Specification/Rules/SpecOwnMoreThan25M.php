<?php

namespace POC\AareonBundle\Specification\Rules;

use POC\AareonBundle\Specification\Specification;

class SpecOwnMoreThan25M extends Specification
{

    public function isSatisfiedBy($team)
    {
        $team->getBudget() > 25000000 ? $x = true : $x = false;
        return(boolean)  $x;
    }

}