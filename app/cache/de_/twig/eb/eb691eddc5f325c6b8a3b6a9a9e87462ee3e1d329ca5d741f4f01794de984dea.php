<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_844453a73e44f0650fd11ab67a3a930f1ac778f95b71b51bb0e1ad3e5816a794 extends Twig_Template
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
        $__internal_82f15f30453e703ec6d2bd859a941e053baf43baaabd94a1ae8cc9203528bed2 = $this->env->getExtension("native_profiler");
        $__internal_82f15f30453e703ec6d2bd859a941e053baf43baaabd94a1ae8cc9203528bed2->enter($__internal_82f15f30453e703ec6d2bd859a941e053baf43baaabd94a1ae8cc9203528bed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_82f15f30453e703ec6d2bd859a941e053baf43baaabd94a1ae8cc9203528bed2->leave($__internal_82f15f30453e703ec6d2bd859a941e053baf43baaabd94a1ae8cc9203528bed2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
