<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f5f0850a5d967b6304dad90042b8c34b24d0ad810884204d77e47edbd1c706a9 extends Twig_Template
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
        $__internal_0a3168d6c02c1c3a8d33d4f88f37ef2e4dc2f34732d4eac995864c0098a1a2d5 = $this->env->getExtension("native_profiler");
        $__internal_0a3168d6c02c1c3a8d33d4f88f37ef2e4dc2f34732d4eac995864c0098a1a2d5->enter($__internal_0a3168d6c02c1c3a8d33d4f88f37ef2e4dc2f34732d4eac995864c0098a1a2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0a3168d6c02c1c3a8d33d4f88f37ef2e4dc2f34732d4eac995864c0098a1a2d5->leave($__internal_0a3168d6c02c1c3a8d33d4f88f37ef2e4dc2f34732d4eac995864c0098a1a2d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
