<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8a2f880983e25e679b34f9581ebfe3e05b0015ff7e20cb2519e3a5c80a328ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa2ec5b0630764b84126ebac489b633cb158f68a7e817c8d1a25309fffef3c16 = $this->env->getExtension("native_profiler");
        $__internal_aa2ec5b0630764b84126ebac489b633cb158f68a7e817c8d1a25309fffef3c16->enter($__internal_aa2ec5b0630764b84126ebac489b633cb158f68a7e817c8d1a25309fffef3c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa2ec5b0630764b84126ebac489b633cb158f68a7e817c8d1a25309fffef3c16->leave($__internal_aa2ec5b0630764b84126ebac489b633cb158f68a7e817c8d1a25309fffef3c16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee2b1efb68ec23b195daab98ca7f9e90cdade0938b9a50b308f801c173aa4807 = $this->env->getExtension("native_profiler");
        $__internal_ee2b1efb68ec23b195daab98ca7f9e90cdade0938b9a50b308f801c173aa4807->enter($__internal_ee2b1efb68ec23b195daab98ca7f9e90cdade0938b9a50b308f801c173aa4807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ee2b1efb68ec23b195daab98ca7f9e90cdade0938b9a50b308f801c173aa4807->leave($__internal_ee2b1efb68ec23b195daab98ca7f9e90cdade0938b9a50b308f801c173aa4807_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3914d98e8cd9919c336a1d42c3505949c91caaaec97b564a667900b1b73f75e = $this->env->getExtension("native_profiler");
        $__internal_b3914d98e8cd9919c336a1d42c3505949c91caaaec97b564a667900b1b73f75e->enter($__internal_b3914d98e8cd9919c336a1d42c3505949c91caaaec97b564a667900b1b73f75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b3914d98e8cd9919c336a1d42c3505949c91caaaec97b564a667900b1b73f75e->leave($__internal_b3914d98e8cd9919c336a1d42c3505949c91caaaec97b564a667900b1b73f75e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
