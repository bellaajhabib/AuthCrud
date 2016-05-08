<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3d6bea177e312eec5ed51af0497e0834785033d12e03eeb17adbb7344478b081 extends Twig_Template
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
        $__internal_ec04cc1f883c772c0336bd67c6ee4277456c6ed99866cef459738f3d14b29b96 = $this->env->getExtension("native_profiler");
        $__internal_ec04cc1f883c772c0336bd67c6ee4277456c6ed99866cef459738f3d14b29b96->enter($__internal_ec04cc1f883c772c0336bd67c6ee4277456c6ed99866cef459738f3d14b29b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ec04cc1f883c772c0336bd67c6ee4277456c6ed99866cef459738f3d14b29b96->leave($__internal_ec04cc1f883c772c0336bd67c6ee4277456c6ed99866cef459738f3d14b29b96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
