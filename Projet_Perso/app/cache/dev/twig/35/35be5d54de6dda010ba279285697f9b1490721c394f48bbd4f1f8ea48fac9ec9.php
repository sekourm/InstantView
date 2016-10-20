<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_efcfaf8a4b9349dc4b34ef6597ca58ff772c706f65eeac5a822203f83cf33d78 extends Twig_Template
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
        $__internal_4f7d3c5e0109bf8db8d0e2fc15d99a1f2016888b16183b7002d0d6bf86717267 = $this->env->getExtension("native_profiler");
        $__internal_4f7d3c5e0109bf8db8d0e2fc15d99a1f2016888b16183b7002d0d6bf86717267->enter($__internal_4f7d3c5e0109bf8db8d0e2fc15d99a1f2016888b16183b7002d0d6bf86717267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4f7d3c5e0109bf8db8d0e2fc15d99a1f2016888b16183b7002d0d6bf86717267->leave($__internal_4f7d3c5e0109bf8db8d0e2fc15d99a1f2016888b16183b7002d0d6bf86717267_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
