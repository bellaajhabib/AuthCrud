<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_5d1c0609e741e1caf8e66ccebbf15abe7cd612563f4be2cc99d7f364ed053841 extends Twig_Template
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
        $__internal_af47263157f0351039d61734bc06a8d68be87679f428b1bfcd50531dfbaa3d28 = $this->env->getExtension("native_profiler");
        $__internal_af47263157f0351039d61734bc06a8d68be87679f428b1bfcd50531dfbaa3d28->enter($__internal_af47263157f0351039d61734bc06a8d68be87679f428b1bfcd50531dfbaa3d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_af47263157f0351039d61734bc06a8d68be87679f428b1bfcd50531dfbaa3d28->leave($__internal_af47263157f0351039d61734bc06a8d68be87679f428b1bfcd50531dfbaa3d28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
