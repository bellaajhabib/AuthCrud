<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a9ca9fe2018057481411770a42635cf86f01012d02b1c467311b2aa15f077954 extends Twig_Template
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
        $__internal_ded36513ea310fa2f0fc2899bcfe06db22ee17154b04b002d8fdfbe3817e1e56 = $this->env->getExtension("native_profiler");
        $__internal_ded36513ea310fa2f0fc2899bcfe06db22ee17154b04b002d8fdfbe3817e1e56->enter($__internal_ded36513ea310fa2f0fc2899bcfe06db22ee17154b04b002d8fdfbe3817e1e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ded36513ea310fa2f0fc2899bcfe06db22ee17154b04b002d8fdfbe3817e1e56->leave($__internal_ded36513ea310fa2f0fc2899bcfe06db22ee17154b04b002d8fdfbe3817e1e56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
