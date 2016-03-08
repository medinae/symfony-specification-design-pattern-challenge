<?php

/* POCAareonBundle:Default:index.html.twig */
class __TwigTemplate_7223ddbc55cf8737d480930c37741caa86f426df6c55bf1c87a5fa742472d62a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "POCAareonBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_548a523b70924d6a0a08620d7f0e8fed0c66b78896c715a8477fd2bbb483ac2a = $this->env->getExtension("native_profiler");
        $__internal_548a523b70924d6a0a08620d7f0e8fed0c66b78896c715a8477fd2bbb483ac2a->enter($__internal_548a523b70924d6a0a08620d7f0e8fed0c66b78896c715a8477fd2bbb483ac2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POCAareonBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_548a523b70924d6a0a08620d7f0e8fed0c66b78896c715a8477fd2bbb483ac2a->leave($__internal_548a523b70924d6a0a08620d7f0e8fed0c66b78896c715a8477fd2bbb483ac2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53cdb930f9bd82d105e352ed939b6aab7e76b193eb1408b63cda4000581b69c6 = $this->env->getExtension("native_profiler");
        $__internal_53cdb930f9bd82d105e352ed939b6aab7e76b193eb1408b63cda4000581b69c6->enter($__internal_53cdb930f9bd82d105e352ed939b6aab7e76b193eb1408b63cda4000581b69c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Budgets of PL Teams</h1>
    <ul>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 8
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["team"], "championship", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["team"], "budget", array()), 2, ".", ","), "html", null, true);
            echo "£</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        <br/>

        <h3>League total budget : ";
        // line 12
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalBudget"]) ? $context["totalBudget"] : $this->getContext($context, "totalBudget")), 3, ".", ","), "html", null, true);
        echo "£</h3>

    </ul>

";
        
        $__internal_53cdb930f9bd82d105e352ed939b6aab7e76b193eb1408b63cda4000581b69c6->leave($__internal_53cdb930f9bd82d105e352ed939b6aab7e76b193eb1408b63cda4000581b69c6_prof);

    }

    public function getTemplateName()
    {
        return "POCAareonBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  62 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Budgets of PL Teams</h1>*/
/*     <ul>*/
/*         {% for team in teams  %}*/
/*             <li>{{ team.name }} - {{ team.championship }} - {{ team.budget|number_format(2, '.', ',') }}£</li>*/
/*         {% endfor  %}*/
/*         <br/>*/
/* */
/*         <h3>League total budget : {{ totalBudget|number_format(3, '.', ',') }}£</h3>*/
/* */
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
