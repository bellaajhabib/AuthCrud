<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d2d5711a508fac7a9f42ca0bb54d8d6decf268159eada0cb843c1505adb8e30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99c4080a5463393578e1927430eee5648e971e0c8434b13fcb719affb4f3cc62 = $this->env->getExtension("native_profiler");
        $__internal_99c4080a5463393578e1927430eee5648e971e0c8434b13fcb719affb4f3cc62->enter($__internal_99c4080a5463393578e1927430eee5648e971e0c8434b13fcb719affb4f3cc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_99c4080a5463393578e1927430eee5648e971e0c8434b13fcb719affb4f3cc62->leave($__internal_99c4080a5463393578e1927430eee5648e971e0c8434b13fcb719affb4f3cc62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
