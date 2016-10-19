<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_819e0a5daf28376b9de566f737bcb118dd210a01c309b98f11f0e9466761fd33 extends Twig_Template
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
        $__internal_c4eec405c1769f01f2a8461092d39eb0f75442dac9b7822fb9c91754ff4cb39d = $this->env->getExtension("native_profiler");
        $__internal_c4eec405c1769f01f2a8461092d39eb0f75442dac9b7822fb9c91754ff4cb39d->enter($__internal_c4eec405c1769f01f2a8461092d39eb0f75442dac9b7822fb9c91754ff4cb39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c4eec405c1769f01f2a8461092d39eb0f75442dac9b7822fb9c91754ff4cb39d->leave($__internal_c4eec405c1769f01f2a8461092d39eb0f75442dac9b7822fb9c91754ff4cb39d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
