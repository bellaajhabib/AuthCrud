<?php

/* StocksAchatBundle:Demande:contact.html.twig */
class __TwigTemplate_36d3561499c97a3797110270d61c7e4b949e946f440ab55b8784bbd715d0050f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "StocksAchatBundle:Demande:contact.html.twig", 1);
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
        $__internal_0cbf643858cf38c66b38b24098294db2756c25bc94bf9847e01968d3bb085539 = $this->env->getExtension("native_profiler");
        $__internal_0cbf643858cf38c66b38b24098294db2756c25bc94bf9847e01968d3bb085539->enter($__internal_0cbf643858cf38c66b38b24098294db2756c25bc94bf9847e01968d3bb085539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StocksAchatBundle:Demande:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbf643858cf38c66b38b24098294db2756c25bc94bf9847e01968d3bb085539->leave($__internal_0cbf643858cf38c66b38b24098294db2756c25bc94bf9847e01968d3bb085539_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_604ab47c66422d39b981e79e68df8f50594daaf6ee7121b4b3eeac4a8491bdb1 = $this->env->getExtension("native_profiler");
        $__internal_604ab47c66422d39b981e79e68df8f50594daaf6ee7121b4b3eeac4a8491bdb1->enter($__internal_604ab47c66422d39b981e79e68df8f50594daaf6ee7121b4b3eeac4a8491bdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            <div class=\"form-group\">

                <label class=\"control-label\" for=\"nomEmetteur\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomEmetteur", array()), 'label');
        echo "</label>
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomEmetteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"numDemande\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numDemande", array()), 'label');
        echo "</label>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numDemande", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
                <div class=\"form-group\">

                    <label class=\"control-label\" for=\"objetDemande\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetDemande", array()), 'label');
        echo "</label>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objetDemande", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            <div class=\"form-group\">

                <label class=\"control-label\" for=\"dateEmission\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEmission", array()), 'label');
        echo "</label>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEmission", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

            </div>
            <div class=\"form-group\">

                    <label class=\"control-label\" for=\"adresseLivraison\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseLivraison", array()), 'label');
        echo "</label>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseLivraison", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

            </div>

                <br /><br />
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </form>
        </div>

</div>
";
        
        $__internal_604ab47c66422d39b981e79e68df8f50594daaf6ee7121b4b3eeac4a8491bdb1->leave($__internal_604ab47c66422d39b981e79e68df8f50594daaf6ee7121b4b3eeac4a8491bdb1_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eadbd9c230d71436ca3a7ba3fcc6d878aedf45f562a5b75051668cfb5c91903b = $this->env->getExtension("native_profiler");
        $__internal_eadbd9c230d71436ca3a7ba3fcc6d878aedf45f562a5b75051668cfb5c91903b->enter($__internal_eadbd9c230d71436ca3a7ba3fcc6d878aedf45f562a5b75051668cfb5c91903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/stocksachat/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_eadbd9c230d71436ca3a7ba3fcc6d878aedf45f562a5b75051668cfb5c91903b->leave($__internal_eadbd9c230d71436ca3a7ba3fcc6d878aedf45f562a5b75051668cfb5c91903b_prof);

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
        return array (  133 => 46,  127 => 45,  114 => 39,  106 => 34,  102 => 33,  94 => 28,  90 => 27,  83 => 23,  79 => 22,  72 => 18,  68 => 17,  62 => 14,  58 => 13,  52 => 10,  48 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
