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
        $__internal_bfffe18d08d77dd8ae2b83f42447c67f494e1a5096fcadac459804ad6a707b6d = $this->env->getExtension("native_profiler");
        $__internal_bfffe18d08d77dd8ae2b83f42447c67f494e1a5096fcadac459804ad6a707b6d->enter($__internal_bfffe18d08d77dd8ae2b83f42447c67f494e1a5096fcadac459804ad6a707b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bfffe18d08d77dd8ae2b83f42447c67f494e1a5096fcadac459804ad6a707b6d->leave($__internal_bfffe18d08d77dd8ae2b83f42447c67f494e1a5096fcadac459804ad6a707b6d_prof);

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
