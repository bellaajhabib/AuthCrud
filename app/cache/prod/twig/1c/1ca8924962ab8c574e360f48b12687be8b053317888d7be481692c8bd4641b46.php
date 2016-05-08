<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f1b5a40d77682b21a498268cd64b9c495f51cb6e253360ef8c64e8d6cd06a362 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\" />

            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
            echo "\" required=\"required\" />

            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">Se souvenir</label>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" />
        </form>
    ";
        }
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
        return array (  56 => 15,  50 => 12,  45 => 11,  43 => 10,  40 => 9,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
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
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
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
/*             <input type="submit" id="_submit" name="_submit" value="Se connecter" />*/
/*         </form>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
