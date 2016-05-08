<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_83657cdd3cd40329d67486cf24c2b32d15c9b5f8be2a346d13df8440e7a022d5 extends Twig_Template
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
        $__internal_249721d899b5c90c159b9944c8c097754320dbfff30ffa7d3dbb631d8b1198b6 = $this->env->getExtension("native_profiler");
        $__internal_249721d899b5c90c159b9944c8c097754320dbfff30ffa7d3dbb631d8b1198b6->enter($__internal_249721d899b5c90c159b9944c8c097754320dbfff30ffa7d3dbb631d8b1198b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_249721d899b5c90c159b9944c8c097754320dbfff30ffa7d3dbb631d8b1198b6->leave($__internal_249721d899b5c90c159b9944c8c097754320dbfff30ffa7d3dbb631d8b1198b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
