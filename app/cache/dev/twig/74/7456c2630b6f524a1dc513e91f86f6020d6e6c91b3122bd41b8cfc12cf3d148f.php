<?php

/* StocksAchatBundle:Demande:list.html.twig */
class __TwigTemplate_ca909ce3f4da65beceb745b4aab8c33247389b569a47c2d3404e9abad145912d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "StocksAchatBundle:Demande:list.html.twig", 1);
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
        $__internal_b43acb7e09af4391cfbc08ca8196f9d3ddc86bc20552ed303c4a2df8b3450484 = $this->env->getExtension("native_profiler");
        $__internal_b43acb7e09af4391cfbc08ca8196f9d3ddc86bc20552ed303c4a2df8b3450484->enter($__internal_b43acb7e09af4391cfbc08ca8196f9d3ddc86bc20552ed303c4a2df8b3450484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StocksAchatBundle:Demande:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b43acb7e09af4391cfbc08ca8196f9d3ddc86bc20552ed303c4a2df8b3450484->leave($__internal_b43acb7e09af4391cfbc08ca8196f9d3ddc86bc20552ed303c4a2df8b3450484_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ff408899321961e589c5a522334bd9ee20d8c55f0f0d9f64f2cb0cafff5c84b = $this->env->getExtension("native_profiler");
        $__internal_9ff408899321961e589c5a522334bd9ee20d8c55f0f0d9f64f2cb0cafff5c84b->enter($__internal_9ff408899321961e589c5a522334bd9ee20d8c55f0f0d9f64f2cb0cafff5c84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("contact_demande");
            echo "\">Créer une nouvelle fiche</a><br /><br />
";
        }
        // line 9
        echo "        <hr />

    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>#</th>
            <th> Nom de l'émetteur </th>
            <th>Date d'émission de la demande</th>
            <th>L'adresse de livraison</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) ? $context["demandes"] : $this->getContext($context, "demandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 22
            echo "        <tr>
            <th scope=\"row\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "id", array()), "html", null, true);
            echo "</th>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "nomEmetteur", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "numDemande", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "adresseLivraison", array()), "html", null, true);
            echo "</td>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_9ff408899321961e589c5a522334bd9ee20d8c55f0f0d9f64f2cb0cafff5c84b->leave($__internal_9ff408899321961e589c5a522334bd9ee20d8c55f0f0d9f64f2cb0cafff5c84b_prof);

    }

    public function getTemplateName()
    {
        return "StocksAchatBundle:Demande:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  67 => 22,  63 => 21,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*   {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* <a href="{{ path('contact_demande') }}">Créer une nouvelle fiche</a><br /><br />*/
/* {% endif %}*/
/*         <hr />*/
/* */
/*     <table class="table table-bordered">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th> Nom de l'émetteur </th>*/
/*             <th>Date d'émission de la demande</th>*/
/*             <th>L'adresse de livraison</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for demande in demandes %}*/
/*         <tr>*/
/*             <th scope="row">{{ demande.id }}</th>*/
/*             <td>{{ demande.nomEmetteur }}</td>*/
/*             <td>{{ demande.numDemande }}</td>*/
/*             <td>{{ demande.adresseLivraison }}</td>*/
/*         </tr>*/
/* */
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
