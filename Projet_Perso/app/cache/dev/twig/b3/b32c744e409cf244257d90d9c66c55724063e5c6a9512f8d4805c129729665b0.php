<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cac02177131df0ffe7cd593aa6d1cdd84e632ff9979a9f29da2abbcbca795570 extends Twig_Template
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
        $__internal_9132242306c7849258712c94a536a755b4344d8c18f7e87ab488e9772b82f5a9 = $this->env->getExtension("native_profiler");
        $__internal_9132242306c7849258712c94a536a755b4344d8c18f7e87ab488e9772b82f5a9->enter($__internal_9132242306c7849258712c94a536a755b4344d8c18f7e87ab488e9772b82f5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9132242306c7849258712c94a536a755b4344d8c18f7e87ab488e9772b82f5a9->leave($__internal_9132242306c7849258712c94a536a755b4344d8c18f7e87ab488e9772b82f5a9_prof);

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
