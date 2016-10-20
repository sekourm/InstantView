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
        $__internal_8c3f066b50bb35151604d88b62d18e162c3ce56f8d84f044665d243dadfa5309 = $this->env->getExtension("native_profiler");
        $__internal_8c3f066b50bb35151604d88b62d18e162c3ce56f8d84f044665d243dadfa5309->enter($__internal_8c3f066b50bb35151604d88b62d18e162c3ce56f8d84f044665d243dadfa5309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8c3f066b50bb35151604d88b62d18e162c3ce56f8d84f044665d243dadfa5309->leave($__internal_8c3f066b50bb35151604d88b62d18e162c3ce56f8d84f044665d243dadfa5309_prof);

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
