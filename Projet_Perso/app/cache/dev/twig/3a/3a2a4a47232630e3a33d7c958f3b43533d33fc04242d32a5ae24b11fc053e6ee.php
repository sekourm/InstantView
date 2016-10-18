<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e34fc7f2dd8a97b9fb10e40688af062c86dd5be50702379853f6369d11d86af7 extends Twig_Template
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
        $__internal_818764436c16d2e99fff2a187a6035ae7f0c113c4046acaf5bb2ca8301ef1266 = $this->env->getExtension("native_profiler");
        $__internal_818764436c16d2e99fff2a187a6035ae7f0c113c4046acaf5bb2ca8301ef1266->enter($__internal_818764436c16d2e99fff2a187a6035ae7f0c113c4046acaf5bb2ca8301ef1266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_818764436c16d2e99fff2a187a6035ae7f0c113c4046acaf5bb2ca8301ef1266->leave($__internal_818764436c16d2e99fff2a187a6035ae7f0c113c4046acaf5bb2ca8301ef1266_prof);

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
