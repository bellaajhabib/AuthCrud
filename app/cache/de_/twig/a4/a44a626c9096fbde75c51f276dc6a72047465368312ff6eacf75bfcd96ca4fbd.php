<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_798aa9b9a51bd4018a736f879c697d59a7298f8c8f2c96b0fca9f58c3e8a154d extends Twig_Template
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
        $__internal_49e696a8213432b7afe7a7c628d36e64c8557fdda7cbbcebc9c4b94c4a0d34c6 = $this->env->getExtension("native_profiler");
        $__internal_49e696a8213432b7afe7a7c628d36e64c8557fdda7cbbcebc9c4b94c4a0d34c6->enter($__internal_49e696a8213432b7afe7a7c628d36e64c8557fdda7cbbcebc9c4b94c4a0d34c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_49e696a8213432b7afe7a7c628d36e64c8557fdda7cbbcebc9c4b94c4a0d34c6->leave($__internal_49e696a8213432b7afe7a7c628d36e64c8557fdda7cbbcebc9c4b94c4a0d34c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
