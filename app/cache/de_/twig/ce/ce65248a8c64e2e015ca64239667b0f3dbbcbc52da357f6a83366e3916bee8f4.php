<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d31d8dbeae1141e6d54aa1ccc4198b2971907747cfb0ed76af877a4aaa6c6e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1a57e9b935545790b0c65336c79ee78b5d79e3976a2a1839a7ac1a721c226526 = $this->env->getExtension("native_profiler");
        $__internal_1a57e9b935545790b0c65336c79ee78b5d79e3976a2a1839a7ac1a721c226526->enter($__internal_1a57e9b935545790b0c65336c79ee78b5d79e3976a2a1839a7ac1a721c226526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a57e9b935545790b0c65336c79ee78b5d79e3976a2a1839a7ac1a721c226526->leave($__internal_1a57e9b935545790b0c65336c79ee78b5d79e3976a2a1839a7ac1a721c226526_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8ca6afb06c98b0bfd10848d73399633e13389b4cccdecaa1a71b44a3326aae3 = $this->env->getExtension("native_profiler");
        $__internal_e8ca6afb06c98b0bfd10848d73399633e13389b4cccdecaa1a71b44a3326aae3->enter($__internal_e8ca6afb06c98b0bfd10848d73399633e13389b4cccdecaa1a71b44a3326aae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e8ca6afb06c98b0bfd10848d73399633e13389b4cccdecaa1a71b44a3326aae3->leave($__internal_e8ca6afb06c98b0bfd10848d73399633e13389b4cccdecaa1a71b44a3326aae3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f40d9df04a27dfe88135c8d718416d97de4d94b995e3ef1d726acafc70ae75e = $this->env->getExtension("native_profiler");
        $__internal_6f40d9df04a27dfe88135c8d718416d97de4d94b995e3ef1d726acafc70ae75e->enter($__internal_6f40d9df04a27dfe88135c8d718416d97de4d94b995e3ef1d726acafc70ae75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6f40d9df04a27dfe88135c8d718416d97de4d94b995e3ef1d726acafc70ae75e->leave($__internal_6f40d9df04a27dfe88135c8d718416d97de4d94b995e3ef1d726acafc70ae75e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5510d35004630385cc4682fa67bb57869263e037a05db530b61dd15379394e7a = $this->env->getExtension("native_profiler");
        $__internal_5510d35004630385cc4682fa67bb57869263e037a05db530b61dd15379394e7a->enter($__internal_5510d35004630385cc4682fa67bb57869263e037a05db530b61dd15379394e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5510d35004630385cc4682fa67bb57869263e037a05db530b61dd15379394e7a->leave($__internal_5510d35004630385cc4682fa67bb57869263e037a05db530b61dd15379394e7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
