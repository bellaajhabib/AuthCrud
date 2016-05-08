<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d7afe8e38acb408a809b858685e98489bd4c584a792013dfcea891392727024b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_dc6774f6908c19e1071b3b7ba09011dd9c781a5163e6d7aeb203ab1ecaa75d2a = $this->env->getExtension("native_profiler");
        $__internal_dc6774f6908c19e1071b3b7ba09011dd9c781a5163e6d7aeb203ab1ecaa75d2a->enter($__internal_dc6774f6908c19e1071b3b7ba09011dd9c781a5163e6d7aeb203ab1ecaa75d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc6774f6908c19e1071b3b7ba09011dd9c781a5163e6d7aeb203ab1ecaa75d2a->leave($__internal_dc6774f6908c19e1071b3b7ba09011dd9c781a5163e6d7aeb203ab1ecaa75d2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d625b55b67c1fb2a01904a2fdbb8577d57ab91ac3d29ca16deb2e513343fbae = $this->env->getExtension("native_profiler");
        $__internal_2d625b55b67c1fb2a01904a2fdbb8577d57ab91ac3d29ca16deb2e513343fbae->enter($__internal_2d625b55b67c1fb2a01904a2fdbb8577d57ab91ac3d29ca16deb2e513343fbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2d625b55b67c1fb2a01904a2fdbb8577d57ab91ac3d29ca16deb2e513343fbae->leave($__internal_2d625b55b67c1fb2a01904a2fdbb8577d57ab91ac3d29ca16deb2e513343fbae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a35864327948f2af30cb4121bc1ae671f2628f20ef1bdbb6157868265c21595 = $this->env->getExtension("native_profiler");
        $__internal_4a35864327948f2af30cb4121bc1ae671f2628f20ef1bdbb6157868265c21595->enter($__internal_4a35864327948f2af30cb4121bc1ae671f2628f20ef1bdbb6157868265c21595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4a35864327948f2af30cb4121bc1ae671f2628f20ef1bdbb6157868265c21595->leave($__internal_4a35864327948f2af30cb4121bc1ae671f2628f20ef1bdbb6157868265c21595_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
