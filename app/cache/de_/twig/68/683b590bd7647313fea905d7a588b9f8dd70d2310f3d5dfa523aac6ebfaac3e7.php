<?php

/* @StocksAchat/Demande/contact.html.twig */
class __TwigTemplate_4431b7288b629476e7f4f492118ace98d9bd5c0cc5943575b7f5096e441ea910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@StocksAchat/Demande/contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98621428efa951154d6e02f014302545e95f0c87bd6678505f12f81602497550 = $this->env->getExtension("native_profiler");
        $__internal_98621428efa951154d6e02f014302545e95f0c87bd6678505f12f81602497550->enter($__internal_98621428efa951154d6e02f014302545e95f0c87bd6678505f12f81602497550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@StocksAchat/Demande/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98621428efa951154d6e02f014302545e95f0c87bd6678505f12f81602497550->leave($__internal_98621428efa951154d6e02f014302545e95f0c87bd6678505f12f81602497550_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e5360bbe51d63990f357328c4d4601f6fb475439159fc12e52d2a6ca008497d = $this->env->getExtension("native_profiler");
        $__internal_5e5360bbe51d63990f357328c4d4601f6fb475439159fc12e52d2a6ca008497d->enter($__internal_5e5360bbe51d63990f357328c4d4601f6fb475439159fc12e52d2a6ca008497d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Collecty Sheet Create";
        
        $__internal_5e5360bbe51d63990f357328c4d4601f6fb475439159fc12e52d2a6ca008497d->leave($__internal_5e5360bbe51d63990f357328c4d4601f6fb475439159fc12e52d2a6ca008497d_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_b253d08ef38eb5bc7cd6830b8b83af618687a934e48dc872432d16d193d11ae7 = $this->env->getExtension("native_profiler");
        $__internal_b253d08ef38eb5bc7cd6830b8b83af618687a934e48dc872432d16d193d11ae7->enter($__internal_b253d08ef38eb5bc7cd6830b8b83af618687a934e48dc872432d16d193d11ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Collectify Sheet Create"), "html", null, true);
        
        $__internal_b253d08ef38eb5bc7cd6830b8b83af618687a934e48dc872432d16d193d11ae7->leave($__internal_b253d08ef38eb5bc7cd6830b8b83af618687a934e48dc872432d16d193d11ae7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1db08dab63e72765d36111a3795e875a478c89f359d82dbbbcea614cac68bf7 = $this->env->getExtension("native_profiler");
        $__internal_d1db08dab63e72765d36111a3795e875a478c89f359d82dbbbcea614cac68bf7->enter($__internal_d1db08dab63e72765d36111a3795e875a478c89f359d82dbbbcea614cac68bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        
        $__internal_d1db08dab63e72765d36111a3795e875a478c89f359d82dbbbcea614cac68bf7->leave($__internal_d1db08dab63e72765d36111a3795e875a478c89f359d82dbbbcea614cac68bf7_prof);

    }

    public function getTemplateName()
    {
        return "@StocksAchat/Demande/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 9,  71 => 8,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Collecty Sheet Create{% endblock %}*/
/* {% block pageTitle %}{{ 'Collectify Sheet Create'|upper }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*     {{ form_label(form.name) }} {{ form_widget(form.name) }}*/
/*     {{ form_rest(form) }}*/
/* {% endblock %}*/
/* */
/* */
