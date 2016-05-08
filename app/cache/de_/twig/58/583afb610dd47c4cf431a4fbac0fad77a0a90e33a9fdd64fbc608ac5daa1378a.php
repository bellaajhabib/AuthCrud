<?php

/* StocksAchatBundle:Demande:contact.html.twig */
class __TwigTemplate_36d3561499c97a3797110270d61c7e4b949e946f440ab55b8784bbd715d0050f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "StocksAchatBundle:Demande:contact.html.twig", 1);
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
        $__internal_83ad9bb9ba7ced76378947aff2cfe392e65752abd58555791329cac677214d6b = $this->env->getExtension("native_profiler");
        $__internal_83ad9bb9ba7ced76378947aff2cfe392e65752abd58555791329cac677214d6b->enter($__internal_83ad9bb9ba7ced76378947aff2cfe392e65752abd58555791329cac677214d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StocksAchatBundle:Demande:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83ad9bb9ba7ced76378947aff2cfe392e65752abd58555791329cac677214d6b->leave($__internal_83ad9bb9ba7ced76378947aff2cfe392e65752abd58555791329cac677214d6b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f78e3a519c4b110088c3c043bdc5604206698e297b2ce9060265db53903e5b0 = $this->env->getExtension("native_profiler");
        $__internal_4f78e3a519c4b110088c3c043bdc5604206698e297b2ce9060265db53903e5b0->enter($__internal_4f78e3a519c4b110088c3c043bdc5604206698e297b2ce9060265db53903e5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Collecty Sheet Create";
        
        $__internal_4f78e3a519c4b110088c3c043bdc5604206698e297b2ce9060265db53903e5b0->leave($__internal_4f78e3a519c4b110088c3c043bdc5604206698e297b2ce9060265db53903e5b0_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_db5a36701ad4650fa68c42d0fd52000a9876b74537498808d141bfc8e0e4e7fd = $this->env->getExtension("native_profiler");
        $__internal_db5a36701ad4650fa68c42d0fd52000a9876b74537498808d141bfc8e0e4e7fd->enter($__internal_db5a36701ad4650fa68c42d0fd52000a9876b74537498808d141bfc8e0e4e7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Collectify Sheet Create"), "html", null, true);
        
        $__internal_db5a36701ad4650fa68c42d0fd52000a9876b74537498808d141bfc8e0e4e7fd->leave($__internal_db5a36701ad4650fa68c42d0fd52000a9876b74537498808d141bfc8e0e4e7fd_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce01169247fc42d57862b42ab45dbb05fd65142bef7e05744a153400fe1a8299 = $this->env->getExtension("native_profiler");
        $__internal_ce01169247fc42d57862b42ab45dbb05fd65142bef7e05744a153400fe1a8299->enter($__internal_ce01169247fc42d57862b42ab45dbb05fd65142bef7e05744a153400fe1a8299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ce01169247fc42d57862b42ab45dbb05fd65142bef7e05744a153400fe1a8299->leave($__internal_ce01169247fc42d57862b42ab45dbb05fd65142bef7e05744a153400fe1a8299_prof);

    }

    public function getTemplateName()
    {
        return "StocksAchatBundle:Demande:contact.html.twig";
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
