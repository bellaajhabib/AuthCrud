<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b911ea5c523daa844fa4b747aa7100e52fe41b51731d494866c91c319aeecb6e extends Twig_Template
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
        $__internal_c038277225404b0a56b6f6c24cb737414907534c0437fcd33d08456b9efb1a13 = $this->env->getExtension("native_profiler");
        $__internal_c038277225404b0a56b6f6c24cb737414907534c0437fcd33d08456b9efb1a13->enter($__internal_c038277225404b0a56b6f6c24cb737414907534c0437fcd33d08456b9efb1a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c038277225404b0a56b6f6c24cb737414907534c0437fcd33d08456b9efb1a13->leave($__internal_c038277225404b0a56b6f6c24cb737414907534c0437fcd33d08456b9efb1a13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
