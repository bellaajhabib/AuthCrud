<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ccb3c4b3cbe926c7932adcfd1db6f9d4b1f8d22a45b9fc64c40caf835fba7f28 extends Twig_Template
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
        $__internal_bac96329bf3da9714436fd4542380d43ee2be33077a599b6dace46a6ed35f356 = $this->env->getExtension("native_profiler");
        $__internal_bac96329bf3da9714436fd4542380d43ee2be33077a599b6dace46a6ed35f356->enter($__internal_bac96329bf3da9714436fd4542380d43ee2be33077a599b6dace46a6ed35f356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bac96329bf3da9714436fd4542380d43ee2be33077a599b6dace46a6ed35f356->leave($__internal_bac96329bf3da9714436fd4542380d43ee2be33077a599b6dace46a6ed35f356_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
