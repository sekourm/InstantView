<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0923b06ba7894fc46595bdd16959a7474d4386d437f3eb81821f9fafab96fc3c extends Twig_Template
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
        $__internal_ecf492106e70c9d25ff6aecb9a07841a5b69341c8a920addeb5bee9cf0893bb8 = $this->env->getExtension("native_profiler");
        $__internal_ecf492106e70c9d25ff6aecb9a07841a5b69341c8a920addeb5bee9cf0893bb8->enter($__internal_ecf492106e70c9d25ff6aecb9a07841a5b69341c8a920addeb5bee9cf0893bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ecf492106e70c9d25ff6aecb9a07841a5b69341c8a920addeb5bee9cf0893bb8->leave($__internal_ecf492106e70c9d25ff6aecb9a07841a5b69341c8a920addeb5bee9cf0893bb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
