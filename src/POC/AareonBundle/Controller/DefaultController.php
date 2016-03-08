<?php

namespace POC\AareonBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use POC\AareonBundle\Entity\Team;
use POC\AareonBundle\Specification\Rules\SpecBeAPremierLeagueMember;
use POC\AareonBundle\Specification\Rules\SpecOwnMoreThan25M;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use POC\AareonBundle\Repository\TeamRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // totalBudget
        $teamService = $this->get('poc.aareon.teamservice');
        $totalBudget = $teamService->calculateTotalBudget();

        // teams
        $em = $this->getDoctrine()->getManager();
        $teams = $em->getRepository('POCAareonBundle:Team')->getAllTeamsSortedByDescBudget();

        $specification = new SpecOwnMoreThan25M();
        $specification->andSpec(new SpecBeAPremierLeagueMember());

        $validatedTeams = [];

        foreach ($teams as $team) {
            if ($specification->isSatisfiedBy($team)) {
                array_push($validatedTeams, $team);
            }
        }

        return $this->render('POCAareonBundle:Default:index.html.twig', array(
            'teams' => $validatedTeams,
            'totalBudget' => $totalBudget,
        ));
    }
}

