<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8cefd3558ec871552eb14a35f8eef615b73307627c45b4c7f367657a41bc3980 extends Twig_Template
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
        $__internal_eadfe6058bfb0e7cb5a4e9f5721ed2d0a13bcb087c0db99bb530d96aba9c0efd = $this->env->getExtension("native_profiler");
        $__internal_eadfe6058bfb0e7cb5a4e9f5721ed2d0a13bcb087c0db99bb530d96aba9c0efd->enter($__internal_eadfe6058bfb0e7cb5a4e9f5721ed2d0a13bcb087c0db99bb530d96aba9c0efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_eadfe6058bfb0e7cb5a4e9f5721ed2d0a13bcb087c0db99bb530d96aba9c0efd->leave($__internal_eadfe6058bfb0e7cb5a4e9f5721ed2d0a13bcb087c0db99bb530d96aba9c0efd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
