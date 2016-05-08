<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_11976a77dafc99e57142842aa2a26cb007f40dbcceae3828e4e45213a4e0ce50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98a89e2fbdd42063896cd2a8b1de6e3cea23814d230af7771e67cfe86c34c74a = $this->env->getExtension("native_profiler");
        $__internal_98a89e2fbdd42063896cd2a8b1de6e3cea23814d230af7771e67cfe86c34c74a->enter($__internal_98a89e2fbdd42063896cd2a8b1de6e3cea23814d230af7771e67cfe86c34c74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a89e2fbdd42063896cd2a8b1de6e3cea23814d230af7771e67cfe86c34c74a->leave($__internal_98a89e2fbdd42063896cd2a8b1de6e3cea23814d230af7771e67cfe86c34c74a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d34cea3e9a130fc4df845667b2b39e9646e20791eabc2318196c91c5da87fffa = $this->env->getExtension("native_profiler");
        $__internal_d34cea3e9a130fc4df845667b2b39e9646e20791eabc2318196c91c5da87fffa->enter($__internal_d34cea3e9a130fc4df845667b2b39e9646e20791eabc2318196c91c5da87fffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d34cea3e9a130fc4df845667b2b39e9646e20791eabc2318196c91c5da87fffa->leave($__internal_d34cea3e9a130fc4df845667b2b39e9646e20791eabc2318196c91c5da87fffa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_703d3cfa75e235d8ebf94766f047cded298b13ddab4863d6556fd939458fb719 = $this->env->getExtension("native_profiler");
        $__internal_703d3cfa75e235d8ebf94766f047cded298b13ddab4863d6556fd939458fb719->enter($__internal_703d3cfa75e235d8ebf94766f047cded298b13ddab4863d6556fd939458fb719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_703d3cfa75e235d8ebf94766f047cded298b13ddab4863d6556fd939458fb719->leave($__internal_703d3cfa75e235d8ebf94766f047cded298b13ddab4863d6556fd939458fb719_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ac8d6b8d4cd037af849d94ff722a18e5dba6f45687ad6c917b1f5c6f26625ed = $this->env->getExtension("native_profiler");
        $__internal_9ac8d6b8d4cd037af849d94ff722a18e5dba6f45687ad6c917b1f5c6f26625ed->enter($__internal_9ac8d6b8d4cd037af849d94ff722a18e5dba6f45687ad6c917b1f5c6f26625ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ac8d6b8d4cd037af849d94ff722a18e5dba6f45687ad6c917b1f5c6f26625ed->leave($__internal_9ac8d6b8d4cd037af849d94ff722a18e5dba6f45687ad6c917b1f5c6f26625ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
