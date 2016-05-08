<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8c5d5d9bb478dcdd33f05d33c08a64c374dc3a882ef6d57bf7b73ef37f31c1ee extends Twig_Template
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
        $__internal_1347228e0d2e0a5d6b29ead0948cbd910e40351c0f77228cb7a164ccedf7d694 = $this->env->getExtension("native_profiler");
        $__internal_1347228e0d2e0a5d6b29ead0948cbd910e40351c0f77228cb7a164ccedf7d694->enter($__internal_1347228e0d2e0a5d6b29ead0948cbd910e40351c0f77228cb7a164ccedf7d694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1347228e0d2e0a5d6b29ead0948cbd910e40351c0f77228cb7a164ccedf7d694->leave($__internal_1347228e0d2e0a5d6b29ead0948cbd910e40351c0f77228cb7a164ccedf7d694_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
