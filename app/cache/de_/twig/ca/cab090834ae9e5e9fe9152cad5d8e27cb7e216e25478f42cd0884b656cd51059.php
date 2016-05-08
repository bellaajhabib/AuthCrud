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
        $__internal_e952c51631f759eba3d99943611845a41a3be504357a7a55adc24aa6c6da41cb = $this->env->getExtension("native_profiler");
        $__internal_e952c51631f759eba3d99943611845a41a3be504357a7a55adc24aa6c6da41cb->enter($__internal_e952c51631f759eba3d99943611845a41a3be504357a7a55adc24aa6c6da41cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e952c51631f759eba3d99943611845a41a3be504357a7a55adc24aa6c6da41cb->leave($__internal_e952c51631f759eba3d99943611845a41a3be504357a7a55adc24aa6c6da41cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_088bb6ba3a55177ae65f1358414c437869430ca8dee917e033f5954df4a7ba99 = $this->env->getExtension("native_profiler");
        $__internal_088bb6ba3a55177ae65f1358414c437869430ca8dee917e033f5954df4a7ba99->enter($__internal_088bb6ba3a55177ae65f1358414c437869430ca8dee917e033f5954df4a7ba99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_088bb6ba3a55177ae65f1358414c437869430ca8dee917e033f5954df4a7ba99->leave($__internal_088bb6ba3a55177ae65f1358414c437869430ca8dee917e033f5954df4a7ba99_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_460e8ef0b4c3f0fb2f2cb70e3abfee926e94f18bf79fbebb3eea0d7353a069fe = $this->env->getExtension("native_profiler");
        $__internal_460e8ef0b4c3f0fb2f2cb70e3abfee926e94f18bf79fbebb3eea0d7353a069fe->enter($__internal_460e8ef0b4c3f0fb2f2cb70e3abfee926e94f18bf79fbebb3eea0d7353a069fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_460e8ef0b4c3f0fb2f2cb70e3abfee926e94f18bf79fbebb3eea0d7353a069fe->leave($__internal_460e8ef0b4c3f0fb2f2cb70e3abfee926e94f18bf79fbebb3eea0d7353a069fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7b0b0b93c993514d48d2f88c1da83a243cd8d4f8149b6f6e6a41d7f9548feda = $this->env->getExtension("native_profiler");
        $__internal_f7b0b0b93c993514d48d2f88c1da83a243cd8d4f8149b6f6e6a41d7f9548feda->enter($__internal_f7b0b0b93c993514d48d2f88c1da83a243cd8d4f8149b6f6e6a41d7f9548feda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7b0b0b93c993514d48d2f88c1da83a243cd8d4f8149b6f6e6a41d7f9548feda->leave($__internal_f7b0b0b93c993514d48d2f88c1da83a243cd8d4f8149b6f6e6a41d7f9548feda_prof);

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
