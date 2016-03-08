<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_320203d595f87ba9c46fa5128d3761fb01eeaf3e8f889b659b86591825c53431 extends Twig_Template
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
        $__internal_d3e54ed1e54cbf3d8ea0cebcf4cfeafd318b36abcca8ee71b6a326f4f3f6dee6 = $this->env->getExtension("native_profiler");
        $__internal_d3e54ed1e54cbf3d8ea0cebcf4cfeafd318b36abcca8ee71b6a326f4f3f6dee6->enter($__internal_d3e54ed1e54cbf3d8ea0cebcf4cfeafd318b36abcca8ee71b6a326f4f3f6dee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e54ed1e54cbf3d8ea0cebcf4cfeafd318b36abcca8ee71b6a326f4f3f6dee6->leave($__internal_d3e54ed1e54cbf3d8ea0cebcf4cfeafd318b36abcca8ee71b6a326f4f3f6dee6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d11447dd0f9d091e07161d9276c2da1ad1864adca0600566711f2cef682ed33f = $this->env->getExtension("native_profiler");
        $__internal_d11447dd0f9d091e07161d9276c2da1ad1864adca0600566711f2cef682ed33f->enter($__internal_d11447dd0f9d091e07161d9276c2da1ad1864adca0600566711f2cef682ed33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d11447dd0f9d091e07161d9276c2da1ad1864adca0600566711f2cef682ed33f->leave($__internal_d11447dd0f9d091e07161d9276c2da1ad1864adca0600566711f2cef682ed33f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc25f45c0f6dd21ebfd7c30c001d4dc4059248edc3136ef0e860e5e67956a264 = $this->env->getExtension("native_profiler");
        $__internal_bc25f45c0f6dd21ebfd7c30c001d4dc4059248edc3136ef0e860e5e67956a264->enter($__internal_bc25f45c0f6dd21ebfd7c30c001d4dc4059248edc3136ef0e860e5e67956a264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc25f45c0f6dd21ebfd7c30c001d4dc4059248edc3136ef0e860e5e67956a264->leave($__internal_bc25f45c0f6dd21ebfd7c30c001d4dc4059248edc3136ef0e860e5e67956a264_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f7e2ed885e421a7c008b397fcb0fb5110251c428a008117be71e1143b4a259a = $this->env->getExtension("native_profiler");
        $__internal_2f7e2ed885e421a7c008b397fcb0fb5110251c428a008117be71e1143b4a259a->enter($__internal_2f7e2ed885e421a7c008b397fcb0fb5110251c428a008117be71e1143b4a259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f7e2ed885e421a7c008b397fcb0fb5110251c428a008117be71e1143b4a259a->leave($__internal_2f7e2ed885e421a7c008b397fcb0fb5110251c428a008117be71e1143b4a259a_prof);

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
