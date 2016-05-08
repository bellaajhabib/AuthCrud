<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_71fc25e87a952e1c28fbbec9df88bf35ae9204fd6973dc9b490d8fa2a409b400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26ef4382d38690ba10270672102d19f55f587c7e0a00890b6f063dace6b22dbb = $this->env->getExtension("native_profiler");
        $__internal_26ef4382d38690ba10270672102d19f55f587c7e0a00890b6f063dace6b22dbb->enter($__internal_26ef4382d38690ba10270672102d19f55f587c7e0a00890b6f063dace6b22dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_26ef4382d38690ba10270672102d19f55f587c7e0a00890b6f063dace6b22dbb->leave($__internal_26ef4382d38690ba10270672102d19f55f587c7e0a00890b6f063dace6b22dbb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8d25fb520a0d50282538064563324d3fb2dff567105df330aabce30e8a99036 = $this->env->getExtension("native_profiler");
        $__internal_f8d25fb520a0d50282538064563324d3fb2dff567105df330aabce30e8a99036->enter($__internal_f8d25fb520a0d50282538064563324d3fb2dff567105df330aabce30e8a99036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f8d25fb520a0d50282538064563324d3fb2dff567105df330aabce30e8a99036->leave($__internal_f8d25fb520a0d50282538064563324d3fb2dff567105df330aabce30e8a99036_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
