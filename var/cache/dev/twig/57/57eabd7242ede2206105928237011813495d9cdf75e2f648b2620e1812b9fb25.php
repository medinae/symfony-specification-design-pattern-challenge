<?php

/* ::base.html.twig */
class __TwigTemplate_96687b14708f96c0d7761a840606571d7919e4012c901dd0434dfa4a511a93c9 extends Twig_Template
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
        $__internal_cf223196c5d1f9877352daae65017beb436ab892bc594ce582fa12ce30a4c95b = $this->env->getExtension("native_profiler");
        $__internal_cf223196c5d1f9877352daae65017beb436ab892bc594ce582fa12ce30a4c95b->enter($__internal_cf223196c5d1f9877352daae65017beb436ab892bc594ce582fa12ce30a4c95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cf223196c5d1f9877352daae65017beb436ab892bc594ce582fa12ce30a4c95b->leave($__internal_cf223196c5d1f9877352daae65017beb436ab892bc594ce582fa12ce30a4c95b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7919b51540242af2523e29893e208a092bb26305aa6335fa7c4824f94c403856 = $this->env->getExtension("native_profiler");
        $__internal_7919b51540242af2523e29893e208a092bb26305aa6335fa7c4824f94c403856->enter($__internal_7919b51540242af2523e29893e208a092bb26305aa6335fa7c4824f94c403856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Premiere League Budget";
        
        $__internal_7919b51540242af2523e29893e208a092bb26305aa6335fa7c4824f94c403856->leave($__internal_7919b51540242af2523e29893e208a092bb26305aa6335fa7c4824f94c403856_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_579be917c811b0cda51923b115a4aacb088e22fd7af84366e99bc2cc14183791 = $this->env->getExtension("native_profiler");
        $__internal_579be917c811b0cda51923b115a4aacb088e22fd7af84366e99bc2cc14183791->enter($__internal_579be917c811b0cda51923b115a4aacb088e22fd7af84366e99bc2cc14183791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_579be917c811b0cda51923b115a4aacb088e22fd7af84366e99bc2cc14183791->leave($__internal_579be917c811b0cda51923b115a4aacb088e22fd7af84366e99bc2cc14183791_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a9bf13691faa4afbf0c924b440ca24385407d714c1b8dde509ee51b2a0ea0e3 = $this->env->getExtension("native_profiler");
        $__internal_8a9bf13691faa4afbf0c924b440ca24385407d714c1b8dde509ee51b2a0ea0e3->enter($__internal_8a9bf13691faa4afbf0c924b440ca24385407d714c1b8dde509ee51b2a0ea0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a9bf13691faa4afbf0c924b440ca24385407d714c1b8dde509ee51b2a0ea0e3->leave($__internal_8a9bf13691faa4afbf0c924b440ca24385407d714c1b8dde509ee51b2a0ea0e3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a6c9ac25d22acc3ae3e965160ce5b3afe4ccccb20dd53f0e37df5df47495d02 = $this->env->getExtension("native_profiler");
        $__internal_4a6c9ac25d22acc3ae3e965160ce5b3afe4ccccb20dd53f0e37df5df47495d02->enter($__internal_4a6c9ac25d22acc3ae3e965160ce5b3afe4ccccb20dd53f0e37df5df47495d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a6c9ac25d22acc3ae3e965160ce5b3afe4ccccb20dd53f0e37df5df47495d02->leave($__internal_4a6c9ac25d22acc3ae3e965160ce5b3afe4ccccb20dd53f0e37df5df47495d02_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Premiere League Budget{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
