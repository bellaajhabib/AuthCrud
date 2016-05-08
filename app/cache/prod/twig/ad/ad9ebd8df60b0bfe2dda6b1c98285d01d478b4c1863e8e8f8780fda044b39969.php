<?php

/* @StocksAchat/Demande/index.html.twig */
class __TwigTemplate_738ea64c759dd5a0ae4c73fd7f7ab07f78dd5aa10f3da0bee9a9f3f5b2b9f629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@StocksAchat/Demande/index.html.twig", 2);
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
        return "@StocksAchat/Demande/index.html.twig";
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
