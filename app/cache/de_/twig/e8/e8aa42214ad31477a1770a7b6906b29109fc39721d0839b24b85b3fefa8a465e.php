<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ceb4f6a575c1906c232a5fbc6333d525d582bf675be6048b19bf06a2b9910c5a extends Twig_Template
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
        $__internal_acf1d8f18ccd963b7715e3237943fd40ed19dfeff9c0affdf9296ce4d5945e5f = $this->env->getExtension("native_profiler");
        $__internal_acf1d8f18ccd963b7715e3237943fd40ed19dfeff9c0affdf9296ce4d5945e5f->enter($__internal_acf1d8f18ccd963b7715e3237943fd40ed19dfeff9c0affdf9296ce4d5945e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_acf1d8f18ccd963b7715e3237943fd40ed19dfeff9c0affdf9296ce4d5945e5f->leave($__internal_acf1d8f18ccd963b7715e3237943fd40ed19dfeff9c0affdf9296ce4d5945e5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
