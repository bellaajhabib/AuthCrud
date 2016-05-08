<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_5f0dbd57956a3c59a05f43ae3ec3a8de8dd31d0a5007127c0a5d400918f50237 extends Twig_Template
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
        $__internal_cc6fc350ef486b4a559274a7f17b6a8a165ed6e1ac165b95e2d47aab92dad456 = $this->env->getExtension("native_profiler");
        $__internal_cc6fc350ef486b4a559274a7f17b6a8a165ed6e1ac165b95e2d47aab92dad456->enter($__internal_cc6fc350ef486b4a559274a7f17b6a8a165ed6e1ac165b95e2d47aab92dad456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cc6fc350ef486b4a559274a7f17b6a8a165ed6e1ac165b95e2d47aab92dad456->leave($__internal_cc6fc350ef486b4a559274a7f17b6a8a165ed6e1ac165b95e2d47aab92dad456_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
