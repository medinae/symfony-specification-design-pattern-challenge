<?php

/* ::base.html.twig */
class __TwigTemplate_1b009fded828c8a85beab7cc3fc8cdf61811098d4f9a912aea59ba6027181826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ebcc2d8a119676a3cc7c2d56889a8389ba869c8675a4e4e775f8b0619b554b5 = $this->env->getExtension("native_profiler");
        $__internal_3ebcc2d8a119676a3cc7c2d56889a8389ba869c8675a4e4e775f8b0619b554b5->enter($__internal_3ebcc2d8a119676a3cc7c2d56889a8389ba869c8675a4e4e775f8b0619b554b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://code.highcharts.com/highcharts.js\"></script>
        <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_3ebcc2d8a119676a3cc7c2d56889a8389ba869c8675a4e4e775f8b0619b554b5->leave($__internal_3ebcc2d8a119676a3cc7c2d56889a8389ba869c8675a4e4e775f8b0619b554b5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d241718767574764913f70cbafe7b8fb7059b7187c555c81d9af86e0a1bbaca3 = $this->env->getExtension("native_profiler");
        $__internal_d241718767574764913f70cbafe7b8fb7059b7187c555c81d9af86e0a1bbaca3->enter($__internal_d241718767574764913f70cbafe7b8fb7059b7187c555c81d9af86e0a1bbaca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d241718767574764913f70cbafe7b8fb7059b7187c555c81d9af86e0a1bbaca3->leave($__internal_d241718767574764913f70cbafe7b8fb7059b7187c555c81d9af86e0a1bbaca3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d04d05756ec86c210738b93bef365c14191517da663df74cb79287354bd3947 = $this->env->getExtension("native_profiler");
        $__internal_3d04d05756ec86c210738b93bef365c14191517da663df74cb79287354bd3947->enter($__internal_3d04d05756ec86c210738b93bef365c14191517da663df74cb79287354bd3947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3d04d05756ec86c210738b93bef365c14191517da663df74cb79287354bd3947->leave($__internal_3d04d05756ec86c210738b93bef365c14191517da663df74cb79287354bd3947_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f333b5d3e953ece47b060a4baf57a6f0065d72e98a5c6e7ca62e98bad07e0d4c = $this->env->getExtension("native_profiler");
        $__internal_f333b5d3e953ece47b060a4baf57a6f0065d72e98a5c6e7ca62e98bad07e0d4c->enter($__internal_f333b5d3e953ece47b060a4baf57a6f0065d72e98a5c6e7ca62e98bad07e0d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f333b5d3e953ece47b060a4baf57a6f0065d72e98a5c6e7ca62e98bad07e0d4c->leave($__internal_f333b5d3e953ece47b060a4baf57a6f0065d72e98a5c6e7ca62e98bad07e0d4c_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_45ba83e15bfaaeb71ccf24972d0b5d68130f2fcb3fb8c4878236ddd84538769d = $this->env->getExtension("native_profiler");
        $__internal_45ba83e15bfaaeb71ccf24972d0b5d68130f2fcb3fb8c4878236ddd84538769d->enter($__internal_45ba83e15bfaaeb71ccf24972d0b5d68130f2fcb3fb8c4878236ddd84538769d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_45ba83e15bfaaeb71ccf24972d0b5d68130f2fcb3fb8c4878236ddd84538769d->leave($__internal_45ba83e15bfaaeb71ccf24972d0b5d68130f2fcb3fb8c4878236ddd84538769d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 14,  86 => 13,  75 => 6,  63 => 5,  54 => 15,  51 => 14,  49 => 13,  43 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/*         <script src="http://code.highcharts.com/highcharts.js"></script>*/
/*         <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
