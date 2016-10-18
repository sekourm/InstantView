<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8f7ef14f92ac8393c38576555de4999be694fcc57ff28a07c3fba28d0fa8e7d6 extends Twig_Template
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
        $__internal_5711f53fb56f4d8006809d68ef9a5545ebafb3cfb2911e3dcbbf44df98fe4255 = $this->env->getExtension("native_profiler");
        $__internal_5711f53fb56f4d8006809d68ef9a5545ebafb3cfb2911e3dcbbf44df98fe4255->enter($__internal_5711f53fb56f4d8006809d68ef9a5545ebafb3cfb2911e3dcbbf44df98fe4255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5711f53fb56f4d8006809d68ef9a5545ebafb3cfb2911e3dcbbf44df98fe4255->leave($__internal_5711f53fb56f4d8006809d68ef9a5545ebafb3cfb2911e3dcbbf44df98fe4255_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
