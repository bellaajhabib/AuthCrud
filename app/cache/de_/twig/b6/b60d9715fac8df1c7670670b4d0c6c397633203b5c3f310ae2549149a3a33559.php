<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_24d7950f3fddbe98714c391ca5b59f064e0b4c30fdd58cdb110f9d3fa9a4287b extends Twig_Template
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
        $__internal_caad53431c127c612cd91739bdfdf929cc520aaa75214ad14e832e83555eec71 = $this->env->getExtension("native_profiler");
        $__internal_caad53431c127c612cd91739bdfdf929cc520aaa75214ad14e832e83555eec71->enter($__internal_caad53431c127c612cd91739bdfdf929cc520aaa75214ad14e832e83555eec71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_caad53431c127c612cd91739bdfdf929cc520aaa75214ad14e832e83555eec71->leave($__internal_caad53431c127c612cd91739bdfdf929cc520aaa75214ad14e832e83555eec71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
