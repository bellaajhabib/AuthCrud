<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3b7e287cdd976153f2124644c3c9830cd680cc7a14ba11cdc7b1cda87596805b extends Twig_Template
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
        $__internal_9ab27a9993f5f7fb02363f7e2a8bc77bcb1929628f326f9154c458519a0e82f6 = $this->env->getExtension("native_profiler");
        $__internal_9ab27a9993f5f7fb02363f7e2a8bc77bcb1929628f326f9154c458519a0e82f6->enter($__internal_9ab27a9993f5f7fb02363f7e2a8bc77bcb1929628f326f9154c458519a0e82f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9ab27a9993f5f7fb02363f7e2a8bc77bcb1929628f326f9154c458519a0e82f6->leave($__internal_9ab27a9993f5f7fb02363f7e2a8bc77bcb1929628f326f9154c458519a0e82f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
