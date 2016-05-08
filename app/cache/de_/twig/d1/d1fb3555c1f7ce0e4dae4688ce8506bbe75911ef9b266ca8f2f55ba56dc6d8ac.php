<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b40dcd0875304ace4abf3c7661573b1db98e98a99de6e4bbcd3755e7513bcf6a extends Twig_Template
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
        $__internal_fbc2f78053ff4d34c4062f21e19094930540bef6b17d4d5636c03b7b3494307a = $this->env->getExtension("native_profiler");
        $__internal_fbc2f78053ff4d34c4062f21e19094930540bef6b17d4d5636c03b7b3494307a->enter($__internal_fbc2f78053ff4d34c4062f21e19094930540bef6b17d4d5636c03b7b3494307a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fbc2f78053ff4d34c4062f21e19094930540bef6b17d4d5636c03b7b3494307a->leave($__internal_fbc2f78053ff4d34c4062f21e19094930540bef6b17d4d5636c03b7b3494307a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
