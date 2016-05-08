<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_79267ea136c1dea924249314a8b4b223417163dd6062c1a592b9993620856618 extends Twig_Template
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
        $__internal_031c85f3cae61455dea1ee4f403db097b8896f1296da6f5848ab683501133391 = $this->env->getExtension("native_profiler");
        $__internal_031c85f3cae61455dea1ee4f403db097b8896f1296da6f5848ab683501133391->enter($__internal_031c85f3cae61455dea1ee4f403db097b8896f1296da6f5848ab683501133391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_031c85f3cae61455dea1ee4f403db097b8896f1296da6f5848ab683501133391->leave($__internal_031c85f3cae61455dea1ee4f403db097b8896f1296da6f5848ab683501133391_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
