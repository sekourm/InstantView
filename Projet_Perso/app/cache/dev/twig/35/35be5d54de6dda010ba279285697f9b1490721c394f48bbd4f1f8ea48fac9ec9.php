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
        $__internal_b57ccf64233f7c820a50ab6a2196933b78137d697e19ab1872df311b25d61261 = $this->env->getExtension("native_profiler");
        $__internal_b57ccf64233f7c820a50ab6a2196933b78137d697e19ab1872df311b25d61261->enter($__internal_b57ccf64233f7c820a50ab6a2196933b78137d697e19ab1872df311b25d61261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b57ccf64233f7c820a50ab6a2196933b78137d697e19ab1872df311b25d61261->leave($__internal_b57ccf64233f7c820a50ab6a2196933b78137d697e19ab1872df311b25d61261_prof);

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
