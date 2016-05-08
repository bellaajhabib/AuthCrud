<?php

/* base.html.twig */
class __TwigTemplate_43375bcd8dc4e6ec5119a8f4b5dc9a99fa36b7a54647766d8579979a6c523d20 extends Twig_Template
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
        $__internal_9a909b695da0763f002eb95549ada92286e71c4c6882dc40013c64890bbc6835 = $this->env->getExtension("native_profiler");
        $__internal_9a909b695da0763f002eb95549ada92286e71c4c6882dc40013c64890bbc6835->enter($__internal_9a909b695da0763f002eb95549ada92286e71c4c6882dc40013c64890bbc6835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9a909b695da0763f002eb95549ada92286e71c4c6882dc40013c64890bbc6835->leave($__internal_9a909b695da0763f002eb95549ada92286e71c4c6882dc40013c64890bbc6835_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d15faae1e2b73165306ed0c40470a5eb8a21843a9365c3ada1d45fa491b96f7 = $this->env->getExtension("native_profiler");
        $__internal_6d15faae1e2b73165306ed0c40470a5eb8a21843a9365c3ada1d45fa491b96f7->enter($__internal_6d15faae1e2b73165306ed0c40470a5eb8a21843a9365c3ada1d45fa491b96f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6d15faae1e2b73165306ed0c40470a5eb8a21843a9365c3ada1d45fa491b96f7->leave($__internal_6d15faae1e2b73165306ed0c40470a5eb8a21843a9365c3ada1d45fa491b96f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e603a4fa6efecd613d4e05768c081327268d6d8a6f4da5cc0aac0f7d9d2fde1 = $this->env->getExtension("native_profiler");
        $__internal_2e603a4fa6efecd613d4e05768c081327268d6d8a6f4da5cc0aac0f7d9d2fde1->enter($__internal_2e603a4fa6efecd613d4e05768c081327268d6d8a6f4da5cc0aac0f7d9d2fde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2e603a4fa6efecd613d4e05768c081327268d6d8a6f4da5cc0aac0f7d9d2fde1->leave($__internal_2e603a4fa6efecd613d4e05768c081327268d6d8a6f4da5cc0aac0f7d9d2fde1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a4b252a77aba0f434478be8e5991a7edd2d20ab06621218b4eaaf485b1771f1 = $this->env->getExtension("native_profiler");
        $__internal_1a4b252a77aba0f434478be8e5991a7edd2d20ab06621218b4eaaf485b1771f1->enter($__internal_1a4b252a77aba0f434478be8e5991a7edd2d20ab06621218b4eaaf485b1771f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a4b252a77aba0f434478be8e5991a7edd2d20ab06621218b4eaaf485b1771f1->leave($__internal_1a4b252a77aba0f434478be8e5991a7edd2d20ab06621218b4eaaf485b1771f1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd6f1389bfbff40de6dc4733ae101ef37af7286edc4e6af4cc444512465ca22c = $this->env->getExtension("native_profiler");
        $__internal_cd6f1389bfbff40de6dc4733ae101ef37af7286edc4e6af4cc444512465ca22c->enter($__internal_cd6f1389bfbff40de6dc4733ae101ef37af7286edc4e6af4cc444512465ca22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cd6f1389bfbff40de6dc4733ae101ef37af7286edc4e6af4cc444512465ca22c->leave($__internal_cd6f1389bfbff40de6dc4733ae101ef37af7286edc4e6af4cc444512465ca22c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
