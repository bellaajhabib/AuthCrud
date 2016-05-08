<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3a08111c1a453f49d3445f5691bc7e548ad6c2b12b99a0197a49d496435a9b1e extends Twig_Template
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
        $__internal_f870e177faef3135ddf4568e549385f2c1664b995207edfb6074a6a625a9c37f = $this->env->getExtension("native_profiler");
        $__internal_f870e177faef3135ddf4568e549385f2c1664b995207edfb6074a6a625a9c37f->enter($__internal_f870e177faef3135ddf4568e549385f2c1664b995207edfb6074a6a625a9c37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f870e177faef3135ddf4568e549385f2c1664b995207edfb6074a6a625a9c37f->leave($__internal_f870e177faef3135ddf4568e549385f2c1664b995207edfb6074a6a625a9c37f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
