<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_76a60f74aa94ab787e5fb988412a630442b38ed2807c96e53110d703a2a07b59 extends Twig_Template
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
        $__internal_ed692da77999efb0c2ea0a5dd01817ad8b3e318d3db87d0afa2d9c5c095d6e26 = $this->env->getExtension("native_profiler");
        $__internal_ed692da77999efb0c2ea0a5dd01817ad8b3e318d3db87d0afa2d9c5c095d6e26->enter($__internal_ed692da77999efb0c2ea0a5dd01817ad8b3e318d3db87d0afa2d9c5c095d6e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ed692da77999efb0c2ea0a5dd01817ad8b3e318d3db87d0afa2d9c5c095d6e26->leave($__internal_ed692da77999efb0c2ea0a5dd01817ad8b3e318d3db87d0afa2d9c5c095d6e26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
