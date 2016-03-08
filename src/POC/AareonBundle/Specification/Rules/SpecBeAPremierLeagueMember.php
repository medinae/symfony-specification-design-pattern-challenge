<?php


namespace POC\AareonBundle\Specification\Rules;

use POC\AareonBundle\Specification\Specification;

class SpecBeAPremierLeagueMember extends Specification
{

    public function isSatisfiedBy($team)
    {
        $team->getChampionship() == 'Premier League' ? $x = true : $x = false;
        return(boolean)  $x;
    }

}