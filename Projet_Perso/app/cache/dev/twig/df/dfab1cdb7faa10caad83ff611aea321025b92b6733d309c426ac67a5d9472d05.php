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
        $__internal_7a409420f5e9a213c0057f7691193c647aa3b8424383c60fe61312eded808ef2 = $this->env->getExtension("native_profiler");
        $__internal_7a409420f5e9a213c0057f7691193c647aa3b8424383c60fe61312eded808ef2->enter($__internal_7a409420f5e9a213c0057f7691193c647aa3b8424383c60fe61312eded808ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7a409420f5e9a213c0057f7691193c647aa3b8424383c60fe61312eded808ef2->leave($__internal_7a409420f5e9a213c0057f7691193c647aa3b8424383c60fe61312eded808ef2_prof);

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
