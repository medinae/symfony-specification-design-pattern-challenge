<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e193e76f1b46ed68d65572a052ab9e59c8b0c7b3945c7731184779579a526c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83fbffbc8945c51cfc657862d3a526b34dd173918e1d07928cf7881315360a8b = $this->env->getExtension("native_profiler");
        $__internal_83fbffbc8945c51cfc657862d3a526b34dd173918e1d07928cf7881315360a8b->enter($__internal_83fbffbc8945c51cfc657862d3a526b34dd173918e1d07928cf7881315360a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83fbffbc8945c51cfc657862d3a526b34dd173918e1d07928cf7881315360a8b->leave($__internal_83fbffbc8945c51cfc657862d3a526b34dd173918e1d07928cf7881315360a8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b84e98b085d66daf24debb3d4dbfb35552dc2473730def0eac049923a069709 = $this->env->getExtension("native_profiler");
        $__internal_5b84e98b085d66daf24debb3d4dbfb35552dc2473730def0eac049923a069709->enter($__internal_5b84e98b085d66daf24debb3d4dbfb35552dc2473730def0eac049923a069709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5b84e98b085d66daf24debb3d4dbfb35552dc2473730def0eac049923a069709->leave($__internal_5b84e98b085d66daf24debb3d4dbfb35552dc2473730def0eac049923a069709_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e67f0597dd08caceb4f71a9e479f8dea0dfa586c82915027e9a3d16b7d757427 = $this->env->getExtension("native_profiler");
        $__internal_e67f0597dd08caceb4f71a9e479f8dea0dfa586c82915027e9a3d16b7d757427->enter($__internal_e67f0597dd08caceb4f71a9e479f8dea0dfa586c82915027e9a3d16b7d757427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e67f0597dd08caceb4f71a9e479f8dea0dfa586c82915027e9a3d16b7d757427->leave($__internal_e67f0597dd08caceb4f71a9e479f8dea0dfa586c82915027e9a3d16b7d757427_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04011477181b384a2436e7549ceec63c8b3d41ec69893c2e2e962b7f3349c1f1 = $this->env->getExtension("native_profiler");
        $__internal_04011477181b384a2436e7549ceec63c8b3d41ec69893c2e2e962b7f3349c1f1->enter($__internal_04011477181b384a2436e7549ceec63c8b3d41ec69893c2e2e962b7f3349c1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_04011477181b384a2436e7549ceec63c8b3d41ec69893c2e2e962b7f3349c1f1->leave($__internal_04011477181b384a2436e7549ceec63c8b3d41ec69893c2e2e962b7f3349c1f1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
