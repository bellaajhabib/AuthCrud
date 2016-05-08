<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3370957d97776a9936f27fcbc51c7798ec40daf8646d682a81d6c628c7ff936b extends Twig_Template
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
        $__internal_d26271c4abe777ccf18e9f38a67f109d172ea0bc5f78c285e45bf0a6813f7d47 = $this->env->getExtension("native_profiler");
        $__internal_d26271c4abe777ccf18e9f38a67f109d172ea0bc5f78c285e45bf0a6813f7d47->enter($__internal_d26271c4abe777ccf18e9f38a67f109d172ea0bc5f78c285e45bf0a6813f7d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_d26271c4abe777ccf18e9f38a67f109d172ea0bc5f78c285e45bf0a6813f7d47->leave($__internal_d26271c4abe777ccf18e9f38a67f109d172ea0bc5f78c285e45bf0a6813f7d47_prof);

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
