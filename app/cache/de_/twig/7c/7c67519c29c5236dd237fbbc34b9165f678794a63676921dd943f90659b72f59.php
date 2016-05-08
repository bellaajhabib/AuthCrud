<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1f8a8af0b7d2ed744ca5f6fe8978d431610cd20a32a02de6739c39fd427ca59b extends Twig_Template
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
        $__internal_49d539ae31c86fa2c7d54b587b18785891235bffa7b5df081ac4e9c8d5e8cd1e = $this->env->getExtension("native_profiler");
        $__internal_49d539ae31c86fa2c7d54b587b18785891235bffa7b5df081ac4e9c8d5e8cd1e->enter($__internal_49d539ae31c86fa2c7d54b587b18785891235bffa7b5df081ac4e9c8d5e8cd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_49d539ae31c86fa2c7d54b587b18785891235bffa7b5df081ac4e9c8d5e8cd1e->leave($__internal_49d539ae31c86fa2c7d54b587b18785891235bffa7b5df081ac4e9c8d5e8cd1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
