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
        $__internal_6b9812f1ff9c3fa674862398d641f1c7f0e157039cf5da0de51d8085bcebc461 = $this->env->getExtension("native_profiler");
        $__internal_6b9812f1ff9c3fa674862398d641f1c7f0e157039cf5da0de51d8085bcebc461->enter($__internal_6b9812f1ff9c3fa674862398d641f1c7f0e157039cf5da0de51d8085bcebc461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b9812f1ff9c3fa674862398d641f1c7f0e157039cf5da0de51d8085bcebc461->leave($__internal_6b9812f1ff9c3fa674862398d641f1c7f0e157039cf5da0de51d8085bcebc461_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07af39697de0ce21f30640fe73e55b112117aa607ba9d5a8d7cdcc9958597152 = $this->env->getExtension("native_profiler");
        $__internal_07af39697de0ce21f30640fe73e55b112117aa607ba9d5a8d7cdcc9958597152->enter($__internal_07af39697de0ce21f30640fe73e55b112117aa607ba9d5a8d7cdcc9958597152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07af39697de0ce21f30640fe73e55b112117aa607ba9d5a8d7cdcc9958597152->leave($__internal_07af39697de0ce21f30640fe73e55b112117aa607ba9d5a8d7cdcc9958597152_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b5ceacd78aa69e9a8dcf75149ad31984b10b3b0dd1572aa624e9bd1e4123e2f = $this->env->getExtension("native_profiler");
        $__internal_4b5ceacd78aa69e9a8dcf75149ad31984b10b3b0dd1572aa624e9bd1e4123e2f->enter($__internal_4b5ceacd78aa69e9a8dcf75149ad31984b10b3b0dd1572aa624e9bd1e4123e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b5ceacd78aa69e9a8dcf75149ad31984b10b3b0dd1572aa624e9bd1e4123e2f->leave($__internal_4b5ceacd78aa69e9a8dcf75149ad31984b10b3b0dd1572aa624e9bd1e4123e2f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a8390170965beb0c17c0c6162cee0c2c6e6942e870200ff3abd53cb3b3acbf8 = $this->env->getExtension("native_profiler");
        $__internal_6a8390170965beb0c17c0c6162cee0c2c6e6942e870200ff3abd53cb3b3acbf8->enter($__internal_6a8390170965beb0c17c0c6162cee0c2c6e6942e870200ff3abd53cb3b3acbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6a8390170965beb0c17c0c6162cee0c2c6e6942e870200ff3abd53cb3b3acbf8->leave($__internal_6a8390170965beb0c17c0c6162cee0c2c6e6942e870200ff3abd53cb3b3acbf8_prof);

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
