<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7cf9ad44eba82f78f33fbebeb119a75357d75fdde56b877691eed6ba3511474c extends Twig_Template
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
        $__internal_e98d8908a2a88c9d2357e74b80eecce51b21ff881706bd7ad750b548fee0385e = $this->env->getExtension("native_profiler");
        $__internal_e98d8908a2a88c9d2357e74b80eecce51b21ff881706bd7ad750b548fee0385e->enter($__internal_e98d8908a2a88c9d2357e74b80eecce51b21ff881706bd7ad750b548fee0385e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e98d8908a2a88c9d2357e74b80eecce51b21ff881706bd7ad750b548fee0385e->leave($__internal_e98d8908a2a88c9d2357e74b80eecce51b21ff881706bd7ad750b548fee0385e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
