<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_af355f901d763d38d224052d734e624be9634d597427c4dff5cba2639bc343d3 extends Twig_Template
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
        $__internal_7c62bf410665e7784dd56aac26b0844033d4c6c9818fc73a9781856b79872909 = $this->env->getExtension("native_profiler");
        $__internal_7c62bf410665e7784dd56aac26b0844033d4c6c9818fc73a9781856b79872909->enter($__internal_7c62bf410665e7784dd56aac26b0844033d4c6c9818fc73a9781856b79872909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7c62bf410665e7784dd56aac26b0844033d4c6c9818fc73a9781856b79872909->leave($__internal_7c62bf410665e7784dd56aac26b0844033d4c6c9818fc73a9781856b79872909_prof);

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
