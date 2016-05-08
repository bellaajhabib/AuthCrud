<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7f75b00c2d0f60eb8e341db52c30d297663f439c0b2d30d82f8e5d7a33b4e70c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_287614cf8059a6a9ede0a273af0c1a99fd5fd474377c4b2baf2b210ef9e7d08f = $this->env->getExtension("native_profiler");
        $__internal_287614cf8059a6a9ede0a273af0c1a99fd5fd474377c4b2baf2b210ef9e7d08f->enter($__internal_287614cf8059a6a9ede0a273af0c1a99fd5fd474377c4b2baf2b210ef9e7d08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_287614cf8059a6a9ede0a273af0c1a99fd5fd474377c4b2baf2b210ef9e7d08f->leave($__internal_287614cf8059a6a9ede0a273af0c1a99fd5fd474377c4b2baf2b210ef9e7d08f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_710941556d064da045bae12a12686d5037bfa82e67d3fc49304023639a89239f = $this->env->getExtension("native_profiler");
        $__internal_710941556d064da045bae12a12686d5037bfa82e67d3fc49304023639a89239f->enter($__internal_710941556d064da045bae12a12686d5037bfa82e67d3fc49304023639a89239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_710941556d064da045bae12a12686d5037bfa82e67d3fc49304023639a89239f->leave($__internal_710941556d064da045bae12a12686d5037bfa82e67d3fc49304023639a89239f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a9dfd9ee4c82d8ca044130e8b841f5719569aad3aad1da5bb29371b504255a8 = $this->env->getExtension("native_profiler");
        $__internal_8a9dfd9ee4c82d8ca044130e8b841f5719569aad3aad1da5bb29371b504255a8->enter($__internal_8a9dfd9ee4c82d8ca044130e8b841f5719569aad3aad1da5bb29371b504255a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8a9dfd9ee4c82d8ca044130e8b841f5719569aad3aad1da5bb29371b504255a8->leave($__internal_8a9dfd9ee4c82d8ca044130e8b841f5719569aad3aad1da5bb29371b504255a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32fba561cfb0c4eb4e7e4f4dc4d0b062c346ef7d027ccaf3edfc1ec7af23d1ed = $this->env->getExtension("native_profiler");
        $__internal_32fba561cfb0c4eb4e7e4f4dc4d0b062c346ef7d027ccaf3edfc1ec7af23d1ed->enter($__internal_32fba561cfb0c4eb4e7e4f4dc4d0b062c346ef7d027ccaf3edfc1ec7af23d1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_32fba561cfb0c4eb4e7e4f4dc4d0b062c346ef7d027ccaf3edfc1ec7af23d1ed->leave($__internal_32fba561cfb0c4eb4e7e4f4dc4d0b062c346ef7d027ccaf3edfc1ec7af23d1ed_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
