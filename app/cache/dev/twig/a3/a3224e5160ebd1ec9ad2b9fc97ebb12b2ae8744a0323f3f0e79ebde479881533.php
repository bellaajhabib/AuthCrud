<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e15e542f9d6b9c0bfa22741fc2929fa9ec266fc32af838c1b4d9c70bc09df114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f495120dada8de046c768977301bd3b6f98a5b2513927a3892ab2c857dfc69ab = $this->env->getExtension("native_profiler");
        $__internal_f495120dada8de046c768977301bd3b6f98a5b2513927a3892ab2c857dfc69ab->enter($__internal_f495120dada8de046c768977301bd3b6f98a5b2513927a3892ab2c857dfc69ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f495120dada8de046c768977301bd3b6f98a5b2513927a3892ab2c857dfc69ab->leave($__internal_f495120dada8de046c768977301bd3b6f98a5b2513927a3892ab2c857dfc69ab_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e79e7713c9a6ba7cce24e59b43e5c5076b4a45a953c0d9c810bc80f44628283 = $this->env->getExtension("native_profiler");
        $__internal_2e79e7713c9a6ba7cce24e59b43e5c5076b4a45a953c0d9c810bc80f44628283->enter($__internal_2e79e7713c9a6ba7cce24e59b43e5c5076b4a45a953c0d9c810bc80f44628283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "<div style=\"padding-top:30px\" class=\"panel-body\" >
        <form action=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\" id=\"loginform\" class=\"form-horizontal\" role=\"form\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />

            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\" />

            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">Se souvenir</label>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" class=\"btn btn-success\"/>
        </form>
    ";
        }
        // line 27
        echo "    </div>
";
        
        $__internal_2e79e7713c9a6ba7cce24e59b43e5c5076b4a45a953c0d9c810bc80f44628283->leave($__internal_2e79e7713c9a6ba7cce24e59b43e5c5076b4a45a953c0d9c810bc80f44628283_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  67 => 16,  61 => 13,  57 => 12,  54 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     {% if not is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* <div style="padding-top:30px" class="panel-body" >*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post" id="loginform" class="form-horizontal" role="form">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <label for="username">Username</label>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*             <label for="password">Password</label>*/
/*             <input type="password" id="password" name="_password" required="required" />*/
/* */
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*             <label for="remember_me">Se souvenir</label>*/
/* */
/*             <input type="submit" id="_submit" name="_submit" value="Se connecter" class="btn btn-success"/>*/
/*         </form>*/
/*     {% endif %}*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
