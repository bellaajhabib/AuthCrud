<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_85a88df3125fd1b24007bc6c623e4cfa7f5f800dff2687d934c9a782b124dd67 extends Twig_Template
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
        $__internal_1e99f6fff200a742fa4c4c23c56783913a653fc222ad398842db04b98a8065ca = $this->env->getExtension("native_profiler");
        $__internal_1e99f6fff200a742fa4c4c23c56783913a653fc222ad398842db04b98a8065ca->enter($__internal_1e99f6fff200a742fa4c4c23c56783913a653fc222ad398842db04b98a8065ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1e99f6fff200a742fa4c4c23c56783913a653fc222ad398842db04b98a8065ca->leave($__internal_1e99f6fff200a742fa4c4c23c56783913a653fc222ad398842db04b98a8065ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
