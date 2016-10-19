<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3e442c90293e71477e80fa45d01150d6981342471b26affb217d3258ad15cb1d extends Twig_Template
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
        $__internal_78fdbcf2ccfaf64f18047165190f170e4d23fdea411bef9b7e8f1563726a06fa = $this->env->getExtension("native_profiler");
        $__internal_78fdbcf2ccfaf64f18047165190f170e4d23fdea411bef9b7e8f1563726a06fa->enter($__internal_78fdbcf2ccfaf64f18047165190f170e4d23fdea411bef9b7e8f1563726a06fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_78fdbcf2ccfaf64f18047165190f170e4d23fdea411bef9b7e8f1563726a06fa->leave($__internal_78fdbcf2ccfaf64f18047165190f170e4d23fdea411bef9b7e8f1563726a06fa_prof);

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
