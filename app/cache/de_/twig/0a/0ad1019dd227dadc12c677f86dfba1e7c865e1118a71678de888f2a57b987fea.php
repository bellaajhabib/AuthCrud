<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_044cf807ad98ad291310db6aeedf64414dd7aa33b5d5b8d1bda7220929dcf383 extends Twig_Template
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
        $__internal_788ad6a0ba181ce093ec5f4ace9c71c52d9d775aff8270ad791d54b4e9377400 = $this->env->getExtension("native_profiler");
        $__internal_788ad6a0ba181ce093ec5f4ace9c71c52d9d775aff8270ad791d54b4e9377400->enter($__internal_788ad6a0ba181ce093ec5f4ace9c71c52d9d775aff8270ad791d54b4e9377400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_788ad6a0ba181ce093ec5f4ace9c71c52d9d775aff8270ad791d54b4e9377400->leave($__internal_788ad6a0ba181ce093ec5f4ace9c71c52d9d775aff8270ad791d54b4e9377400_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
