<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9321a3d030944faef6fecf084e6b23cd0897faca8a1b1aa72e0fb06e6aa118dd extends Twig_Template
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
        $__internal_dae2338b8447c416c380bee3625b083d857da934dbd05a8cd28777d9a70a660c = $this->env->getExtension("native_profiler");
        $__internal_dae2338b8447c416c380bee3625b083d857da934dbd05a8cd28777d9a70a660c->enter($__internal_dae2338b8447c416c380bee3625b083d857da934dbd05a8cd28777d9a70a660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_dae2338b8447c416c380bee3625b083d857da934dbd05a8cd28777d9a70a660c->leave($__internal_dae2338b8447c416c380bee3625b083d857da934dbd05a8cd28777d9a70a660c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
