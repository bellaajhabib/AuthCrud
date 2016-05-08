<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1bfb3e52cbb86b606d367ac6d89edd484883fd823d96d8a653c95467c1b9f7a5 extends Twig_Template
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
        $__internal_34fd5ff26eddd986684d17806e9bfc36b698dc7d0289c30b298a213256125805 = $this->env->getExtension("native_profiler");
        $__internal_34fd5ff26eddd986684d17806e9bfc36b698dc7d0289c30b298a213256125805->enter($__internal_34fd5ff26eddd986684d17806e9bfc36b698dc7d0289c30b298a213256125805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_34fd5ff26eddd986684d17806e9bfc36b698dc7d0289c30b298a213256125805->leave($__internal_34fd5ff26eddd986684d17806e9bfc36b698dc7d0289c30b298a213256125805_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
