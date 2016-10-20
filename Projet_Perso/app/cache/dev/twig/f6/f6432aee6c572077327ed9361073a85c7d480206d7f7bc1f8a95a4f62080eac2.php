<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6483bd82ecf0411d6b40a13bcefb82cf3e99572c5a6b7504d8503cfa81f7428a extends Twig_Template
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
        $__internal_7fab34f3409d7500839e92f7516d1d502708cb28b432dac134fef984652bfdd0 = $this->env->getExtension("native_profiler");
        $__internal_7fab34f3409d7500839e92f7516d1d502708cb28b432dac134fef984652bfdd0->enter($__internal_7fab34f3409d7500839e92f7516d1d502708cb28b432dac134fef984652bfdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7fab34f3409d7500839e92f7516d1d502708cb28b432dac134fef984652bfdd0->leave($__internal_7fab34f3409d7500839e92f7516d1d502708cb28b432dac134fef984652bfdd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
