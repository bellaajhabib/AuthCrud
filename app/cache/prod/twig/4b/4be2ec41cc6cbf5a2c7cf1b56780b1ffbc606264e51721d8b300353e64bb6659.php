<?php

/* StocksAchatBundle:Demande:index.html.twig */
class __TwigTemplate_4e2753979c501eaf4493f444444c120dbca682ff42da64baef8b9544b1b2f7c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "StocksAchatBundle:Demande:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"panel panel-default panel-demande\">
        <div class=\"panel-body\">Demande d'achat</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "StocksAchatBundle:Demande:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="panel panel-default panel-demande">*/
/*         <div class="panel-body">Demande d'achat</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
