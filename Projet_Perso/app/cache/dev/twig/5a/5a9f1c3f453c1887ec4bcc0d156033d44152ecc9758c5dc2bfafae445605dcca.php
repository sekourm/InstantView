<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_dd19515c6ae4ae3bbb44f7d084148de245f474670c81e75c741cf7cb5d6a3d3f extends Twig_Template
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
        $__internal_ae3bc113f2b12ac4f829913de1fa978f0c66d5b22679559b8e6ad22c6108a0cf = $this->env->getExtension("native_profiler");
        $__internal_ae3bc113f2b12ac4f829913de1fa978f0c66d5b22679559b8e6ad22c6108a0cf->enter($__internal_ae3bc113f2b12ac4f829913de1fa978f0c66d5b22679559b8e6ad22c6108a0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ae3bc113f2b12ac4f829913de1fa978f0c66d5b22679559b8e6ad22c6108a0cf->leave($__internal_ae3bc113f2b12ac4f829913de1fa978f0c66d5b22679559b8e6ad22c6108a0cf_prof);

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
