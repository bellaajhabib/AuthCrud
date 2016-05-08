<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_102e52f68e9aa73c262b96d45dca907f9caab50aaacf61dd3863fd70e1e1d13a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61f81db42162129dd30108cd304ce356dc047540975c3f4a20e3ae0aa198d0e2 = $this->env->getExtension("native_profiler");
        $__internal_61f81db42162129dd30108cd304ce356dc047540975c3f4a20e3ae0aa198d0e2->enter($__internal_61f81db42162129dd30108cd304ce356dc047540975c3f4a20e3ae0aa198d0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
</head>
<body>
<div>
    ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " |
        <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>
    ";
        }
        // line 12
        echo "</div>

";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "        <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 17
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
<div>
    ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "</div>
</body>
</html>
";
        
        $__internal_61f81db42162129dd30108cd304ce356dc047540975c3f4a20e3ae0aa198d0e2->leave($__internal_61f81db42162129dd30108cd304ce356dc047540975c3f4a20e3ae0aa198d0e2_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b41db68422ee16227dfeebcea83aadc97c655f0966a899268044cf0ba54be916 = $this->env->getExtension("native_profiler");
        $__internal_b41db68422ee16227dfeebcea83aadc97c655f0966a899268044cf0ba54be916->enter($__internal_b41db68422ee16227dfeebcea83aadc97c655f0966a899268044cf0ba54be916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 24
        echo "    ";
        
        $__internal_b41db68422ee16227dfeebcea83aadc97c655f0966a899268044cf0ba54be916->leave($__internal_b41db68422ee16227dfeebcea83aadc97c655f0966a899268044cf0ba54be916_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  91 => 23,  81 => 25,  79 => 23,  75 => 21,  62 => 17,  57 => 16,  52 => 15,  48 => 14,  44 => 12,  39 => 10,  34 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/* </head>*/
/* <body>*/
/* <div>*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         {{ app.user.username }} |*/
/*         <a href="{{ path('fos_user_security_logout') }}">Se déconnecter</a>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% for type, messages in app.session.flashbag.all() %}*/
/*     {% for message in messages %}*/
/*         <div class="flash-{{ type }}">*/
/*             {{ message }}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endfor %}*/
/* */
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
