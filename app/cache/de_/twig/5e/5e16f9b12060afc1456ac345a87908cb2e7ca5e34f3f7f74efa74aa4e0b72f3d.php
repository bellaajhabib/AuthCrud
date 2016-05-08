<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_59ffb289c3bae1a8e96a366fd159381970102cb04fcc14adb42f758791f47b1b extends Twig_Template
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
        $__internal_50344f053d719963a199ff552b2cddfc2deaab3d1babe308182238c0ccce06cd = $this->env->getExtension("native_profiler");
        $__internal_50344f053d719963a199ff552b2cddfc2deaab3d1babe308182238c0ccce06cd->enter($__internal_50344f053d719963a199ff552b2cddfc2deaab3d1babe308182238c0ccce06cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_50344f053d719963a199ff552b2cddfc2deaab3d1babe308182238c0ccce06cd->leave($__internal_50344f053d719963a199ff552b2cddfc2deaab3d1babe308182238c0ccce06cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
