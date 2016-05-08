<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_8877d122911b9ee98233b6eda704ebab3d01bf64ea2629f08319d0a9659ed67f extends Twig_Template
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
        $__internal_ffb3cbacaac6c93bbe968da1d3cdca84c5000af3cae8f83707e379f219263b88 = $this->env->getExtension("native_profiler");
        $__internal_ffb3cbacaac6c93bbe968da1d3cdca84c5000af3cae8f83707e379f219263b88->enter($__internal_ffb3cbacaac6c93bbe968da1d3cdca84c5000af3cae8f83707e379f219263b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ffb3cbacaac6c93bbe968da1d3cdca84c5000af3cae8f83707e379f219263b88->leave($__internal_ffb3cbacaac6c93bbe968da1d3cdca84c5000af3cae8f83707e379f219263b88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
