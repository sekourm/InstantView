<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b35c68d6439e3d8ad34ce0161e0126bddb5e145ed2c0027e80ae39fac53637ba extends Twig_Template
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
        $__internal_42e446123eb673130e10651269a0191bf761e4a98e733db2c96999a869d263f5 = $this->env->getExtension("native_profiler");
        $__internal_42e446123eb673130e10651269a0191bf761e4a98e733db2c96999a869d263f5->enter($__internal_42e446123eb673130e10651269a0191bf761e4a98e733db2c96999a869d263f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_42e446123eb673130e10651269a0191bf761e4a98e733db2c96999a869d263f5->leave($__internal_42e446123eb673130e10651269a0191bf761e4a98e733db2c96999a869d263f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
