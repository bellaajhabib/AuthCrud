<?php

/* ::layout.html.twig */
class __TwigTemplate_2b9b0388dd6b91b1ce92c474c35923559d52c2ee1bdd7c18bb5d3b2fdbc18ed5 extends Twig_Template
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
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "</head>

<body>
";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
        echo "
<div class=\"container\">

    <div class=\"row\">
            ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        </div>

</div>

";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Auth";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "
        <link rel=\"stylesheet\"
              href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/stocksachat/css/main.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />

    ";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "            ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/src/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  101 => 32,  98 => 31,  94 => 26,  91 => 25,  84 => 15,  80 => 14,  76 => 12,  73 => 11,  67 => 9,  61 => 36,  59 => 31,  53 => 27,  51 => 25,  44 => 21,  39 => 18,  37 => 11,  32 => 9,  23 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}Auth{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/* */
/*         <link rel="stylesheet"*/
/*               href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">*/
/* <link href="{{ asset('bundles/stocksachat/css/main.css')}}" media="all" rel="stylesheet" type="text/css" />*/
/* */
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* {{ render(controller('FOSUserBundle:Security:login')) }}*/
/* <div class="container">*/
/* */
/*     <div class="row">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('assets/vendor/jquery/src/jquery.js') }}"></script>*/
/*     <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
