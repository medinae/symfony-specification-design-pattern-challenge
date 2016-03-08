<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_571d83ec7d6b33ac7d0a52c14f925f9d676ed132cfa3bfd4fb33fc93edd4ec7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afca9f4e82098b99a44d55e943d96c4e8307f7fd6a1c26a4dd080580c3cfd714 = $this->env->getExtension("native_profiler");
        $__internal_afca9f4e82098b99a44d55e943d96c4e8307f7fd6a1c26a4dd080580c3cfd714->enter($__internal_afca9f4e82098b99a44d55e943d96c4e8307f7fd6a1c26a4dd080580c3cfd714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_afca9f4e82098b99a44d55e943d96c4e8307f7fd6a1c26a4dd080580c3cfd714->leave($__internal_afca9f4e82098b99a44d55e943d96c4e8307f7fd6a1c26a4dd080580c3cfd714_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
