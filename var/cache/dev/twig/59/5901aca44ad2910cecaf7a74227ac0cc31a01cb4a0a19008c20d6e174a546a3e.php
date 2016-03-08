<?php

/* POCAareonBundle:Default:index.html.twig */
class __TwigTemplate_ac87fb1fe4f19328873981d99e540515acb4fe772ef46f7e889afc43b811162f extends Twig_Template
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
        $__internal_8d6484d3a6784e207f6a81c6c13da93c5a0f7293e63b0b0c5c994c1959a99e9d = $this->env->getExtension("native_profiler");
        $__internal_8d6484d3a6784e207f6a81c6c13da93c5a0f7293e63b0b0c5c994c1959a99e9d->enter($__internal_8d6484d3a6784e207f6a81c6c13da93c5a0f7293e63b0b0c5c994c1959a99e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POCAareonBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d6484d3a6784e207f6a81c6c13da93c5a0f7293e63b0b0c5c994c1959a99e9d->leave($__internal_8d6484d3a6784e207f6a81c6c13da93c5a0f7293e63b0b0c5c994c1959a99e9d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c39829cf47f01982bb1a23538db038d59ea791e2012a484f32b15b3996b9d38 = $this->env->getExtension("native_profiler");
        $__internal_5c39829cf47f01982bb1a23538db038d59ea791e2012a484f32b15b3996b9d38->enter($__internal_5c39829cf47f01982bb1a23538db038d59ea791e2012a484f32b15b3996b9d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Teams list</h1>
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


    <script type=\"text/javascript\">
        ";
        // line 18
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
    </script>

    <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>

";
        
        $__internal_5c39829cf47f01982bb1a23538db038d59ea791e2012a484f32b15b3996b9d38->leave($__internal_5c39829cf47f01982bb1a23538db038d59ea791e2012a484f32b15b3996b9d38_prof);

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
        return array (  75 => 18,  66 => 12,  62 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Teams list</h1>*/
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
/* */
/*     <script type="text/javascript">*/
/*         {{ chart(chart) }}*/
/*     </script>*/
/* */
/*     <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* */
/* {% endblock %}*/
/* */
