<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4fb14e69f53ce02c38622af3ec645280e7c234cc88167856d25299542244383c extends Twig_Template
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
        $__internal_7c915eba7f3980df29eb0228a602bf528c4dd5b81f1144c5afd0bbee861d9f60 = $this->env->getExtension("native_profiler");
        $__internal_7c915eba7f3980df29eb0228a602bf528c4dd5b81f1144c5afd0bbee861d9f60->enter($__internal_7c915eba7f3980df29eb0228a602bf528c4dd5b81f1144c5afd0bbee861d9f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7c915eba7f3980df29eb0228a602bf528c4dd5b81f1144c5afd0bbee861d9f60->leave($__internal_7c915eba7f3980df29eb0228a602bf528c4dd5b81f1144c5afd0bbee861d9f60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
