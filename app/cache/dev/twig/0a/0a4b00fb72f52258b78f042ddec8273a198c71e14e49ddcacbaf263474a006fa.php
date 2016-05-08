<?php

/* ::layout.html.twig */
class __TwigTemplate_085a63f286d2dd06614db10893f23bce4d8f8cd64520748026b2e25ad4791b03 extends Twig_Template
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
        $__internal_4872f3d0996e67aaa3a654083e2a9eb4a76c2d482c88f43324fb31fe253f60cb = $this->env->getExtension("native_profiler");
        $__internal_4872f3d0996e67aaa3a654083e2a9eb4a76c2d482c88f43324fb31fe253f60cb->enter($__internal_4872f3d0996e67aaa3a654083e2a9eb4a76c2d482c88f43324fb31fe253f60cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_4872f3d0996e67aaa3a654083e2a9eb4a76c2d482c88f43324fb31fe253f60cb->leave($__internal_4872f3d0996e67aaa3a654083e2a9eb4a76c2d482c88f43324fb31fe253f60cb_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_39babe7368aea2be7f3e4dce1aeee344796317478190dafd993b92a04dc1b357 = $this->env->getExtension("native_profiler");
        $__internal_39babe7368aea2be7f3e4dce1aeee344796317478190dafd993b92a04dc1b357->enter($__internal_39babe7368aea2be7f3e4dce1aeee344796317478190dafd993b92a04dc1b357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Auth";
        
        $__internal_39babe7368aea2be7f3e4dce1aeee344796317478190dafd993b92a04dc1b357->leave($__internal_39babe7368aea2be7f3e4dce1aeee344796317478190dafd993b92a04dc1b357_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e585ef6a119160d9d1fc373933069f21ee5553f4ac7a1ebbeb1b3a27e70274da = $this->env->getExtension("native_profiler");
        $__internal_e585ef6a119160d9d1fc373933069f21ee5553f4ac7a1ebbeb1b3a27e70274da->enter($__internal_e585ef6a119160d9d1fc373933069f21ee5553f4ac7a1ebbeb1b3a27e70274da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e585ef6a119160d9d1fc373933069f21ee5553f4ac7a1ebbeb1b3a27e70274da->leave($__internal_e585ef6a119160d9d1fc373933069f21ee5553f4ac7a1ebbeb1b3a27e70274da_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_9770c6506d45d30cd197815da8d571395ebcc51a13edfbbb4ffa258c0129aacc = $this->env->getExtension("native_profiler");
        $__internal_9770c6506d45d30cd197815da8d571395ebcc51a13edfbbb4ffa258c0129aacc->enter($__internal_9770c6506d45d30cd197815da8d571395ebcc51a13edfbbb4ffa258c0129aacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "            ";
        
        $__internal_9770c6506d45d30cd197815da8d571395ebcc51a13edfbbb4ffa258c0129aacc->leave($__internal_9770c6506d45d30cd197815da8d571395ebcc51a13edfbbb4ffa258c0129aacc_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0223ef9f36ba68369ba23349d53776870dd99bb99cc413c1b76854e4059e5994 = $this->env->getExtension("native_profiler");
        $__internal_0223ef9f36ba68369ba23349d53776870dd99bb99cc413c1b76854e4059e5994->enter($__internal_0223ef9f36ba68369ba23349d53776870dd99bb99cc413c1b76854e4059e5994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/src/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_0223ef9f36ba68369ba23349d53776870dd99bb99cc413c1b76854e4059e5994->leave($__internal_0223ef9f36ba68369ba23349d53776870dd99bb99cc413c1b76854e4059e5994_prof);

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
        return array (  133 => 33,  128 => 32,  122 => 31,  115 => 26,  109 => 25,  99 => 15,  95 => 14,  91 => 12,  85 => 11,  73 => 9,  64 => 36,  62 => 31,  56 => 27,  54 => 25,  47 => 21,  42 => 18,  40 => 11,  35 => 9,  26 => 2,);
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
