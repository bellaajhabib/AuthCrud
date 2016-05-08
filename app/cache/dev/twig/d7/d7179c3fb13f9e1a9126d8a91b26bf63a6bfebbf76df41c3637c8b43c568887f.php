<?php

/* StocksAchatBundle:Demande:index.html.twig */
class __TwigTemplate_f35e5f96622a958867928b1af1bbbf05e516249ac07b035e07329d373771173c extends Twig_Template
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
        $__internal_ccdb6041d324bf85885a29f198a1ffe58d2ba2b32297845b78e1912628eb8b44 = $this->env->getExtension("native_profiler");
        $__internal_ccdb6041d324bf85885a29f198a1ffe58d2ba2b32297845b78e1912628eb8b44->enter($__internal_ccdb6041d324bf85885a29f198a1ffe58d2ba2b32297845b78e1912628eb8b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StocksAchatBundle:Demande:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccdb6041d324bf85885a29f198a1ffe58d2ba2b32297845b78e1912628eb8b44->leave($__internal_ccdb6041d324bf85885a29f198a1ffe58d2ba2b32297845b78e1912628eb8b44_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_91339e81e3e90442e86c16f63d9f464c11d9e76d777e96ec881442f4957eac89 = $this->env->getExtension("native_profiler");
        $__internal_91339e81e3e90442e86c16f63d9f464c11d9e76d777e96ec881442f4957eac89->enter($__internal_91339e81e3e90442e86c16f63d9f464c11d9e76d777e96ec881442f4957eac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"panel panel-default panel-demande\">
        <div class=\"panel-body text-center\"><h3>Demande d'achat</h3></div>
    </div>
";
        
        $__internal_91339e81e3e90442e86c16f63d9f464c11d9e76d777e96ec881442f4957eac89->leave($__internal_91339e81e3e90442e86c16f63d9f464c11d9e76d777e96ec881442f4957eac89_prof);

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
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="panel panel-default panel-demande">*/
/*         <div class="panel-body text-center"><h3>Demande d'achat</h3></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
