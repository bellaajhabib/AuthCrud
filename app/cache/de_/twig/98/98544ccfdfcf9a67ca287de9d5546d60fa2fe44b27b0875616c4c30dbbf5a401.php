<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_80ce2aafb98d1109f6f0e04da2c6dd2aae0bd4575cd4819bacc8b1f8ac76dfcc extends Twig_Template
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
        $__internal_ab0ce0ecc645d1dc2e152cac0881f43ee9aeb377a9c2457259586271f62beb58 = $this->env->getExtension("native_profiler");
        $__internal_ab0ce0ecc645d1dc2e152cac0881f43ee9aeb377a9c2457259586271f62beb58->enter($__internal_ab0ce0ecc645d1dc2e152cac0881f43ee9aeb377a9c2457259586271f62beb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ab0ce0ecc645d1dc2e152cac0881f43ee9aeb377a9c2457259586271f62beb58->leave($__internal_ab0ce0ecc645d1dc2e152cac0881f43ee9aeb377a9c2457259586271f62beb58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
