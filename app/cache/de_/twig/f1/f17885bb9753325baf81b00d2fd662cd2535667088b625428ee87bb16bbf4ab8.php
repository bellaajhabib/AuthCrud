<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ba3df7ded56eabfc6f774678199d71f0c4f57a94c568af23a5de1506d07aa52e extends Twig_Template
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
        $__internal_a695c5f2864c3edb9825e9bfc7013f6efcc489bc83b672fd393a66547ae7877a = $this->env->getExtension("native_profiler");
        $__internal_a695c5f2864c3edb9825e9bfc7013f6efcc489bc83b672fd393a66547ae7877a->enter($__internal_a695c5f2864c3edb9825e9bfc7013f6efcc489bc83b672fd393a66547ae7877a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a695c5f2864c3edb9825e9bfc7013f6efcc489bc83b672fd393a66547ae7877a->leave($__internal_a695c5f2864c3edb9825e9bfc7013f6efcc489bc83b672fd393a66547ae7877a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
