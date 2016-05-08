<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d8bff5b0fff177ab0e6f742765107897641e2a4cbf822f9caa08e7050450e204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93cd76486e6aa5d38320b6cee7a51ea925607174ee964cad1a38411c0ba943a2 = $this->env->getExtension("native_profiler");
        $__internal_93cd76486e6aa5d38320b6cee7a51ea925607174ee964cad1a38411c0ba943a2->enter($__internal_93cd76486e6aa5d38320b6cee7a51ea925607174ee964cad1a38411c0ba943a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93cd76486e6aa5d38320b6cee7a51ea925607174ee964cad1a38411c0ba943a2->leave($__internal_93cd76486e6aa5d38320b6cee7a51ea925607174ee964cad1a38411c0ba943a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81142d42ef867e275510974188253121f07fedadac6f178bcf01f54e69f49a85 = $this->env->getExtension("native_profiler");
        $__internal_81142d42ef867e275510974188253121f07fedadac6f178bcf01f54e69f49a85->enter($__internal_81142d42ef867e275510974188253121f07fedadac6f178bcf01f54e69f49a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_81142d42ef867e275510974188253121f07fedadac6f178bcf01f54e69f49a85->leave($__internal_81142d42ef867e275510974188253121f07fedadac6f178bcf01f54e69f49a85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_29f2ef7e7b7a3312a17ee5336198217c0cfc6a18ddc272601efc5e4163738b68 = $this->env->getExtension("native_profiler");
        $__internal_29f2ef7e7b7a3312a17ee5336198217c0cfc6a18ddc272601efc5e4163738b68->enter($__internal_29f2ef7e7b7a3312a17ee5336198217c0cfc6a18ddc272601efc5e4163738b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_29f2ef7e7b7a3312a17ee5336198217c0cfc6a18ddc272601efc5e4163738b68->leave($__internal_29f2ef7e7b7a3312a17ee5336198217c0cfc6a18ddc272601efc5e4163738b68_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4328b2a981c4099544198c18616556bcd20d2778b0b90bd9131755be09f17f0 = $this->env->getExtension("native_profiler");
        $__internal_c4328b2a981c4099544198c18616556bcd20d2778b0b90bd9131755be09f17f0->enter($__internal_c4328b2a981c4099544198c18616556bcd20d2778b0b90bd9131755be09f17f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c4328b2a981c4099544198c18616556bcd20d2778b0b90bd9131755be09f17f0->leave($__internal_c4328b2a981c4099544198c18616556bcd20d2778b0b90bd9131755be09f17f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
