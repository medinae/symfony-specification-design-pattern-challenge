<?php

namespace POC\AareonBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Config\Definition\Exception\Exception;

class TeamService {

    /**
     *
     * @var EntityManager
     */
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function calculateTotalBudget()
    {
        $total = 0;
        $teams = $this->em->getRepository('POCAareonBundle:Team')->findAll();
        //$teams = null;

        if (isset($teams)) {
            foreach ($teams as $team) {
                $total += $team->getBudget();
            }
        } else {
            throw new Exception('No teams find in database. Impossible to calculate the total budget.');
        }

        return $total;
    }

}