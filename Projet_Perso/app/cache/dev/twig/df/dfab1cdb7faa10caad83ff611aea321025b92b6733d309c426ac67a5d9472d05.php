<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8caaae9821dc8cf77bf859bf3ad2f598acc16f1dc1bb8c0f4e145f8519303a59 extends Twig_Template
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
        $__internal_e90d0d1ba91d8d6659d47110876e92b56c1ba13cea1f819b65689e67e833b043 = $this->env->getExtension("native_profiler");
        $__internal_e90d0d1ba91d8d6659d47110876e92b56c1ba13cea1f819b65689e67e833b043->enter($__internal_e90d0d1ba91d8d6659d47110876e92b56c1ba13cea1f819b65689e67e833b043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e90d0d1ba91d8d6659d47110876e92b56c1ba13cea1f819b65689e67e833b043->leave($__internal_e90d0d1ba91d8d6659d47110876e92b56c1ba13cea1f819b65689e67e833b043_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
