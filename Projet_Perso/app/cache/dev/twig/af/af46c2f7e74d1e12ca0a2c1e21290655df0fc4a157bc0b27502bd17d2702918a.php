<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_70915676f4af6bc4e052835e6faaaa32d96a97b4aa74ae1593fb28eeeb0df623 extends Twig_Template
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
        $__internal_ccc68d0b905a3c5f9a8f8c7ac845db87b1cadface7aac45e08b17a640d877901 = $this->env->getExtension("native_profiler");
        $__internal_ccc68d0b905a3c5f9a8f8c7ac845db87b1cadface7aac45e08b17a640d877901->enter($__internal_ccc68d0b905a3c5f9a8f8c7ac845db87b1cadface7aac45e08b17a640d877901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ccc68d0b905a3c5f9a8f8c7ac845db87b1cadface7aac45e08b17a640d877901->leave($__internal_ccc68d0b905a3c5f9a8f8c7ac845db87b1cadface7aac45e08b17a640d877901_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
