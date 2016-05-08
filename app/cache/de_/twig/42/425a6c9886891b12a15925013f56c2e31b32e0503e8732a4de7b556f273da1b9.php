<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1509580a3fc230a0ee8b0cf0985eeb8f8e40f08aadddcf6aa77fa25ca60e70ff extends Twig_Template
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
        $__internal_8312e90db0c67320a5f9622c9694206e296cffb88dbc266a432a3fa92311e467 = $this->env->getExtension("native_profiler");
        $__internal_8312e90db0c67320a5f9622c9694206e296cffb88dbc266a432a3fa92311e467->enter($__internal_8312e90db0c67320a5f9622c9694206e296cffb88dbc266a432a3fa92311e467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8312e90db0c67320a5f9622c9694206e296cffb88dbc266a432a3fa92311e467->leave($__internal_8312e90db0c67320a5f9622c9694206e296cffb88dbc266a432a3fa92311e467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
