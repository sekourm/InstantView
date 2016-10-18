<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f4946d18801fc4bca667beee2dec09ed6a3ab8d33803f2ecd65cd1f4be0208e1 extends Twig_Template
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
        $__internal_073c922c30e9ab5e7821a60b59cb6db01b18ffe4d949ce424377db65330f7df1 = $this->env->getExtension("native_profiler");
        $__internal_073c922c30e9ab5e7821a60b59cb6db01b18ffe4d949ce424377db65330f7df1->enter($__internal_073c922c30e9ab5e7821a60b59cb6db01b18ffe4d949ce424377db65330f7df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_073c922c30e9ab5e7821a60b59cb6db01b18ffe4d949ce424377db65330f7df1->leave($__internal_073c922c30e9ab5e7821a60b59cb6db01b18ffe4d949ce424377db65330f7df1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
