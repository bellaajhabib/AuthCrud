<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_00923468920e63e1b114419837a8d319afb0d905f06d2d8285cd2fb97c36e720 extends Twig_Template
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
        $__internal_05d94a1c2e6b3d63f54ca59bcfafba261858552054f999c98d8b8fa7dd9868e8 = $this->env->getExtension("native_profiler");
        $__internal_05d94a1c2e6b3d63f54ca59bcfafba261858552054f999c98d8b8fa7dd9868e8->enter($__internal_05d94a1c2e6b3d63f54ca59bcfafba261858552054f999c98d8b8fa7dd9868e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_05d94a1c2e6b3d63f54ca59bcfafba261858552054f999c98d8b8fa7dd9868e8->leave($__internal_05d94a1c2e6b3d63f54ca59bcfafba261858552054f999c98d8b8fa7dd9868e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
