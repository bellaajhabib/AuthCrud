<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_045c0754d86df2f4cfef72aa476a43136a57ef61d4e980dc8a25f9de593adcc0 extends Twig_Template
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
        $__internal_8aa8566ca4ff03c721e647822cd5018a4d5367a3ebf77d3b57641718ede4ab35 = $this->env->getExtension("native_profiler");
        $__internal_8aa8566ca4ff03c721e647822cd5018a4d5367a3ebf77d3b57641718ede4ab35->enter($__internal_8aa8566ca4ff03c721e647822cd5018a4d5367a3ebf77d3b57641718ede4ab35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8aa8566ca4ff03c721e647822cd5018a4d5367a3ebf77d3b57641718ede4ab35->leave($__internal_8aa8566ca4ff03c721e647822cd5018a4d5367a3ebf77d3b57641718ede4ab35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
