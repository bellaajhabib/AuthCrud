<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_dd9aaea1ef3f83e854f280aa35163ca9ba54c175502a30b339fdadb250701966 extends Twig_Template
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
        $__internal_daab9b00b993e3ce49a66745ffc595f9403129b415bbec43074010defb2c08fc = $this->env->getExtension("native_profiler");
        $__internal_daab9b00b993e3ce49a66745ffc595f9403129b415bbec43074010defb2c08fc->enter($__internal_daab9b00b993e3ce49a66745ffc595f9403129b415bbec43074010defb2c08fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_daab9b00b993e3ce49a66745ffc595f9403129b415bbec43074010defb2c08fc->leave($__internal_daab9b00b993e3ce49a66745ffc595f9403129b415bbec43074010defb2c08fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
