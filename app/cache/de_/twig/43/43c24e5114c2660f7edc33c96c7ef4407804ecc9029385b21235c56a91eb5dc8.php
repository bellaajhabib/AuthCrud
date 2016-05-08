<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0540ef6552b232ad80801cf07a803eeb91580661c0fbe162e2d41fcb985530de extends Twig_Template
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
        $__internal_2e71288d334bf888312a13cac1fc006491908382cd9e9d394d43e57d5116b382 = $this->env->getExtension("native_profiler");
        $__internal_2e71288d334bf888312a13cac1fc006491908382cd9e9d394d43e57d5116b382->enter($__internal_2e71288d334bf888312a13cac1fc006491908382cd9e9d394d43e57d5116b382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_2e71288d334bf888312a13cac1fc006491908382cd9e9d394d43e57d5116b382->leave($__internal_2e71288d334bf888312a13cac1fc006491908382cd9e9d394d43e57d5116b382_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
