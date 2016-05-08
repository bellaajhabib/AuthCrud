<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a22bd58fee43525734060b1f3ea4b9a03ccc260c99589dc9dc40ed44ee749cd0 extends Twig_Template
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
        $__internal_716f029135205ba072f3ce0f4a512a95c8e2e3bc9113316af2d4b723edb35c70 = $this->env->getExtension("native_profiler");
        $__internal_716f029135205ba072f3ce0f4a512a95c8e2e3bc9113316af2d4b723edb35c70->enter($__internal_716f029135205ba072f3ce0f4a512a95c8e2e3bc9113316af2d4b723edb35c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_716f029135205ba072f3ce0f4a512a95c8e2e3bc9113316af2d4b723edb35c70->leave($__internal_716f029135205ba072f3ce0f4a512a95c8e2e3bc9113316af2d4b723edb35c70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
