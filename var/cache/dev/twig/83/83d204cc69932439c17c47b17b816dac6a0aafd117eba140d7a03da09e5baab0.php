<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bb9e450def5868987e579a7cc6e773efed597584433a491810365c6281b725de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f0a04388063f4524bfb532b31ef3812055a3eb8738b627e14a1a69008b98933 = $this->env->getExtension("native_profiler");
        $__internal_4f0a04388063f4524bfb532b31ef3812055a3eb8738b627e14a1a69008b98933->enter($__internal_4f0a04388063f4524bfb532b31ef3812055a3eb8738b627e14a1a69008b98933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f0a04388063f4524bfb532b31ef3812055a3eb8738b627e14a1a69008b98933->leave($__internal_4f0a04388063f4524bfb532b31ef3812055a3eb8738b627e14a1a69008b98933_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e3cc0b05d7dd4d18eeab75525a07c57bb4cdcdc81740ac9eaf96ca749110263 = $this->env->getExtension("native_profiler");
        $__internal_7e3cc0b05d7dd4d18eeab75525a07c57bb4cdcdc81740ac9eaf96ca749110263->enter($__internal_7e3cc0b05d7dd4d18eeab75525a07c57bb4cdcdc81740ac9eaf96ca749110263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e3cc0b05d7dd4d18eeab75525a07c57bb4cdcdc81740ac9eaf96ca749110263->leave($__internal_7e3cc0b05d7dd4d18eeab75525a07c57bb4cdcdc81740ac9eaf96ca749110263_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_330bcdf386bc378fef30d1df1ce3adbc22ba9e526df5da632be6bd38194cedf2 = $this->env->getExtension("native_profiler");
        $__internal_330bcdf386bc378fef30d1df1ce3adbc22ba9e526df5da632be6bd38194cedf2->enter($__internal_330bcdf386bc378fef30d1df1ce3adbc22ba9e526df5da632be6bd38194cedf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_330bcdf386bc378fef30d1df1ce3adbc22ba9e526df5da632be6bd38194cedf2->leave($__internal_330bcdf386bc378fef30d1df1ce3adbc22ba9e526df5da632be6bd38194cedf2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_969d582d456c4ad680333f7ced30edcb35c1f8572d646da61bdf980ca04ef237 = $this->env->getExtension("native_profiler");
        $__internal_969d582d456c4ad680333f7ced30edcb35c1f8572d646da61bdf980ca04ef237->enter($__internal_969d582d456c4ad680333f7ced30edcb35c1f8572d646da61bdf980ca04ef237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_969d582d456c4ad680333f7ced30edcb35c1f8572d646da61bdf980ca04ef237->leave($__internal_969d582d456c4ad680333f7ced30edcb35c1f8572d646da61bdf980ca04ef237_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
