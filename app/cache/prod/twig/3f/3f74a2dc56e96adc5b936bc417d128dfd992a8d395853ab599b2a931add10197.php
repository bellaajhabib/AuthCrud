<?php

/* @StocksAchat/Demande/list.html.twig */
class __TwigTemplate_32ab7695e3addfde69f357ff81a118e23b6d61e00f551c3ce0314df8805fc5c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@StocksAchat/Demande/list.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) ? $context["demandes"] : null));
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
    }

    public function getTemplateName()
    {
        return "@StocksAchat/Demande/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  58 => 22,  54 => 21,  40 => 9,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
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
