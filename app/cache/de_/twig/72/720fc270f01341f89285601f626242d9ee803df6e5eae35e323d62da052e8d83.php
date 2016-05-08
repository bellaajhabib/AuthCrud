<?php

/* ::base.html.twig */
class __TwigTemplate_9f3c04850fb82557ea476f81a9c492069cedef794f1f7b173bc1ba56812e8388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed1129b48f84d9c1b8869be8c01d28de46b60c41d2155faadb1abdc0c47c6079 = $this->env->getExtension("native_profiler");
        $__internal_ed1129b48f84d9c1b8869be8c01d28de46b60c41d2155faadb1abdc0c47c6079->enter($__internal_ed1129b48f84d9c1b8869be8c01d28de46b60c41d2155faadb1abdc0c47c6079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ed1129b48f84d9c1b8869be8c01d28de46b60c41d2155faadb1abdc0c47c6079->leave($__internal_ed1129b48f84d9c1b8869be8c01d28de46b60c41d2155faadb1abdc0c47c6079_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef649169849669bcd2889222c50b56825530bdc6ccf44abbc139f9dccd946b0e = $this->env->getExtension("native_profiler");
        $__internal_ef649169849669bcd2889222c50b56825530bdc6ccf44abbc139f9dccd946b0e->enter($__internal_ef649169849669bcd2889222c50b56825530bdc6ccf44abbc139f9dccd946b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ef649169849669bcd2889222c50b56825530bdc6ccf44abbc139f9dccd946b0e->leave($__internal_ef649169849669bcd2889222c50b56825530bdc6ccf44abbc139f9dccd946b0e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1397d3a51da9bcd011ee962c60e883b080fbcefed72349df206119fc06c7eafb = $this->env->getExtension("native_profiler");
        $__internal_1397d3a51da9bcd011ee962c60e883b080fbcefed72349df206119fc06c7eafb->enter($__internal_1397d3a51da9bcd011ee962c60e883b080fbcefed72349df206119fc06c7eafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1397d3a51da9bcd011ee962c60e883b080fbcefed72349df206119fc06c7eafb->leave($__internal_1397d3a51da9bcd011ee962c60e883b080fbcefed72349df206119fc06c7eafb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e0c9acaa36fa9de6a7c4898c16e5e193404e045ff3c42fabbc41913f29479fd = $this->env->getExtension("native_profiler");
        $__internal_6e0c9acaa36fa9de6a7c4898c16e5e193404e045ff3c42fabbc41913f29479fd->enter($__internal_6e0c9acaa36fa9de6a7c4898c16e5e193404e045ff3c42fabbc41913f29479fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6e0c9acaa36fa9de6a7c4898c16e5e193404e045ff3c42fabbc41913f29479fd->leave($__internal_6e0c9acaa36fa9de6a7c4898c16e5e193404e045ff3c42fabbc41913f29479fd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a82c50314cfd1f877cb65e909fbfa48ed87c8744667443a4ab0269c2ce52497 = $this->env->getExtension("native_profiler");
        $__internal_7a82c50314cfd1f877cb65e909fbfa48ed87c8744667443a4ab0269c2ce52497->enter($__internal_7a82c50314cfd1f877cb65e909fbfa48ed87c8744667443a4ab0269c2ce52497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a82c50314cfd1f877cb65e909fbfa48ed87c8744667443a4ab0269c2ce52497->leave($__internal_7a82c50314cfd1f877cb65e909fbfa48ed87c8744667443a4ab0269c2ce52497_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
