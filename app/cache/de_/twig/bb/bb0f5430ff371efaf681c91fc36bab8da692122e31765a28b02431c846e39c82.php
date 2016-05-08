<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_802cb46f220a3b33e51c8ccdedc02489ca134d394233190ba2064b70b76da7dd extends Twig_Template
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
        $__internal_0ada38609868500a034c377acd1975f77f6ff3b29a10f2e040dbbd9aa2800ece = $this->env->getExtension("native_profiler");
        $__internal_0ada38609868500a034c377acd1975f77f6ff3b29a10f2e040dbbd9aa2800ece->enter($__internal_0ada38609868500a034c377acd1975f77f6ff3b29a10f2e040dbbd9aa2800ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0ada38609868500a034c377acd1975f77f6ff3b29a10f2e040dbbd9aa2800ece->leave($__internal_0ada38609868500a034c377acd1975f77f6ff3b29a10f2e040dbbd9aa2800ece_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
