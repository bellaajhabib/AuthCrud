<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_117a2fbfe3db1fbbf07026e73bdf09188399be73ac7543b211af089514d9dcb4 extends Twig_Template
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
        $__internal_a2407bdfaf57fce6c8e8f76d8a7f9eadbcacdc80e109337348e32b369e47547b = $this->env->getExtension("native_profiler");
        $__internal_a2407bdfaf57fce6c8e8f76d8a7f9eadbcacdc80e109337348e32b369e47547b->enter($__internal_a2407bdfaf57fce6c8e8f76d8a7f9eadbcacdc80e109337348e32b369e47547b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a2407bdfaf57fce6c8e8f76d8a7f9eadbcacdc80e109337348e32b369e47547b->leave($__internal_a2407bdfaf57fce6c8e8f76d8a7f9eadbcacdc80e109337348e32b369e47547b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
