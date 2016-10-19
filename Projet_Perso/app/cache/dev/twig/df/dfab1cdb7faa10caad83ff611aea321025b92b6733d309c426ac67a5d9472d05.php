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
        $__internal_4be4ee55056a0f0ce18f84016fc7400f3517cc17a854bedcf01d2360e2627018 = $this->env->getExtension("native_profiler");
        $__internal_4be4ee55056a0f0ce18f84016fc7400f3517cc17a854bedcf01d2360e2627018->enter($__internal_4be4ee55056a0f0ce18f84016fc7400f3517cc17a854bedcf01d2360e2627018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4be4ee55056a0f0ce18f84016fc7400f3517cc17a854bedcf01d2360e2627018->leave($__internal_4be4ee55056a0f0ce18f84016fc7400f3517cc17a854bedcf01d2360e2627018_prof);

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
