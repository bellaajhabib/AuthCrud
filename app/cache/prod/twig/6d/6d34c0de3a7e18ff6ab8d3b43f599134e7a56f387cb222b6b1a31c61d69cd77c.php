<?php

/* @StocksAchat/Demande/contact.html.twig */
class __TwigTemplate_d5b20db1b6e15071e0a64fa260172edc581c8516b640f3505d9b2876a3e16718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@StocksAchat/Demande/contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"panel panel-primary\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"panel-body\">
            <div class=\"form-group\">
                <h2>Demande d'achtas</h2>
            </div>
            <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("contact_demande");
        echo "\" method=\"post\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
            <div class=\"form-group\">

                <label class=\"control-label\" for=\"nomEmetteur\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomEmetteur", array()), 'label');
        echo "</label>
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomEmetteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"numDemande\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numDemande", array()), 'label');
        echo "</label>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "numDemande", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
                <div class=\"form-group\">

                    <label class=\"control-label\" for=\"objetDemande\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "objetDemande", array()), 'label');
        echo "</label>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "objetDemande", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            <div class=\"form-group\">

                <label class=\"control-label\" for=\"dateEmission\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateEmission", array()), 'label');
        echo "</label>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateEmission", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

            </div>
            <div class=\"form-group\">

                    <label class=\"control-label\" for=\"adresseLivraison\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresseLivraison", array()), 'label');
        echo "</label>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresseLivraison", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

            </div>

                <br /><br />
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </form>
        </div>

</div>
";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/stocksachat/js/main.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  118 => 46,  115 => 45,  105 => 39,  97 => 34,  93 => 33,  85 => 28,  81 => 27,  74 => 23,  70 => 22,  63 => 18,  59 => 17,  53 => 14,  49 => 13,  43 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="panel panel-primary" xmlns="http://www.w3.org/1999/html">*/
/*         <div class="panel-body">*/
/*             <div class="form-group">*/
/*                 <h2>Demande d'achtas</h2>*/
/*             </div>*/
/*             <form action="{{ path("contact_demande") }}" method="post">*/
/*                 {{ form_widget(form._token) }}*/
/*             <div class="form-group">*/
/* */
/*                 <label class="control-label" for="nomEmetteur">{{ form_label(form.nomEmetteur) }}</label>*/
/*                 {{ form_widget(form.nomEmetteur, {'attr':{'class': 'form-control' }} ) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="control-label" for="numDemande">{{ form_label(form.numDemande) }}</label>*/
/*                 {{ form_widget(form.numDemande, {'attr':{'class': 'form-control' }} ) }}*/
/*             </div>*/
/*                 <div class="form-group">*/
/* */
/*                     <label class="control-label" for="objetDemande">{{ form_label(form.objetDemande) }}</label>*/
/*                     {{ form_widget(form.objetDemande, {'attr':{'class': 'form-control' }} ) }}*/
/*                 </div>*/
/*             <div class="form-group">*/
/* */
/*                 <label class="control-label" for="dateEmission">{{ form_label(form.dateEmission) }}</label>*/
/*                 {{ form_widget(form.dateEmission, {'attr':{'class': 'form-control' }} ) }}*/
/* */
/*             </div>*/
/*             <div class="form-group">*/
/* */
/*                     <label class="control-label" for="adresseLivraison">{{ form_label(form.adresseLivraison) }}</label>*/
/*                     {{ form_widget(form.adresseLivraison, {'attr':{'class': 'form-control' }} ) }}*/
/* */
/*             </div>*/
/* */
/*                 <br /><br />*/
/*                 {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*         </form>*/
/*         </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{  asset('bundles/stocksachat/js/main.js') }}"></script>*/
/* {% endblock %}*/
/* */
