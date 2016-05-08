<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c665183d84e7afbf01e6f1744c6227942e73090fa018027ed82c80aeedf251fb extends Twig_Template
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
        $__internal_59bf8e2359c28bc88c6edb69571cf9b0787b839ef3d115d31d6966aa18a007ca = $this->env->getExtension("native_profiler");
        $__internal_59bf8e2359c28bc88c6edb69571cf9b0787b839ef3d115d31d6966aa18a007ca->enter($__internal_59bf8e2359c28bc88c6edb69571cf9b0787b839ef3d115d31d6966aa18a007ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_59bf8e2359c28bc88c6edb69571cf9b0787b839ef3d115d31d6966aa18a007ca->leave($__internal_59bf8e2359c28bc88c6edb69571cf9b0787b839ef3d115d31d6966aa18a007ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
