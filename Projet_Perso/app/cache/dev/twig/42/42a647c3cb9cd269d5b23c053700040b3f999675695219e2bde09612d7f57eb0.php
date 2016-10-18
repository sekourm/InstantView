<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_63db76388e5d9a9d40e516b0659d850187b9acfe7fcb342256476afa8a68a4ee extends Twig_Template
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
        $__internal_0fa15b7b99f8730b9f46afc2d5e2c24f3ba931c6201fd1227d7dfce14b460109 = $this->env->getExtension("native_profiler");
        $__internal_0fa15b7b99f8730b9f46afc2d5e2c24f3ba931c6201fd1227d7dfce14b460109->enter($__internal_0fa15b7b99f8730b9f46afc2d5e2c24f3ba931c6201fd1227d7dfce14b460109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0fa15b7b99f8730b9f46afc2d5e2c24f3ba931c6201fd1227d7dfce14b460109->leave($__internal_0fa15b7b99f8730b9f46afc2d5e2c24f3ba931c6201fd1227d7dfce14b460109_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
