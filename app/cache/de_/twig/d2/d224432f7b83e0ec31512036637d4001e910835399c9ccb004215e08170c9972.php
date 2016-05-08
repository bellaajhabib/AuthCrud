<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e007d54ae44d53f86c38cfb367a44e936718023357ec2fa3d76098bf49828754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a7aeef198dcda57a8bf13f7e12b027402b65e5f8d6c23ca9266a37885e544428 = $this->env->getExtension("native_profiler");
        $__internal_a7aeef198dcda57a8bf13f7e12b027402b65e5f8d6c23ca9266a37885e544428->enter($__internal_a7aeef198dcda57a8bf13f7e12b027402b65e5f8d6c23ca9266a37885e544428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7aeef198dcda57a8bf13f7e12b027402b65e5f8d6c23ca9266a37885e544428->leave($__internal_a7aeef198dcda57a8bf13f7e12b027402b65e5f8d6c23ca9266a37885e544428_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c828a9a93384da60a03659175ac3b825521981d21673c813c243f416317b47f = $this->env->getExtension("native_profiler");
        $__internal_4c828a9a93384da60a03659175ac3b825521981d21673c813c243f416317b47f->enter($__internal_4c828a9a93384da60a03659175ac3b825521981d21673c813c243f416317b47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c828a9a93384da60a03659175ac3b825521981d21673c813c243f416317b47f->leave($__internal_4c828a9a93384da60a03659175ac3b825521981d21673c813c243f416317b47f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_258b96dbc8a1b07037f532cb84a5cc8e8901bc651eb9780c8f71f36ac5a0a66c = $this->env->getExtension("native_profiler");
        $__internal_258b96dbc8a1b07037f532cb84a5cc8e8901bc651eb9780c8f71f36ac5a0a66c->enter($__internal_258b96dbc8a1b07037f532cb84a5cc8e8901bc651eb9780c8f71f36ac5a0a66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_258b96dbc8a1b07037f532cb84a5cc8e8901bc651eb9780c8f71f36ac5a0a66c->leave($__internal_258b96dbc8a1b07037f532cb84a5cc8e8901bc651eb9780c8f71f36ac5a0a66c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b52d934733905d29ae5688c8cd2dd7a0f9eda66e99ccdb4b8391dbe6cac9079 = $this->env->getExtension("native_profiler");
        $__internal_6b52d934733905d29ae5688c8cd2dd7a0f9eda66e99ccdb4b8391dbe6cac9079->enter($__internal_6b52d934733905d29ae5688c8cd2dd7a0f9eda66e99ccdb4b8391dbe6cac9079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b52d934733905d29ae5688c8cd2dd7a0f9eda66e99ccdb4b8391dbe6cac9079->leave($__internal_6b52d934733905d29ae5688c8cd2dd7a0f9eda66e99ccdb4b8391dbe6cac9079_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
