<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_324a1c182cf97cd18f896a13c8174f4f96e374cf557ad3ced99b1a78dba850af extends Twig_Template
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
        $__internal_053e9e03cb4918ba4c47445a694b098cafa24ce38aa1d80b48ba64a65f06083f = $this->env->getExtension("native_profiler");
        $__internal_053e9e03cb4918ba4c47445a694b098cafa24ce38aa1d80b48ba64a65f06083f->enter($__internal_053e9e03cb4918ba4c47445a694b098cafa24ce38aa1d80b48ba64a65f06083f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_053e9e03cb4918ba4c47445a694b098cafa24ce38aa1d80b48ba64a65f06083f->leave($__internal_053e9e03cb4918ba4c47445a694b098cafa24ce38aa1d80b48ba64a65f06083f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
