<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cac29790ce7263d36fa5c3aa51f8fab8628c1ceac3a7e3a016d0eb987a562e48 extends Twig_Template
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
        $__internal_b8fe2f771994163cb802e39d091e394eb1878a14ae3c0251b02eacd461543157 = $this->env->getExtension("native_profiler");
        $__internal_b8fe2f771994163cb802e39d091e394eb1878a14ae3c0251b02eacd461543157->enter($__internal_b8fe2f771994163cb802e39d091e394eb1878a14ae3c0251b02eacd461543157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b8fe2f771994163cb802e39d091e394eb1878a14ae3c0251b02eacd461543157->leave($__internal_b8fe2f771994163cb802e39d091e394eb1878a14ae3c0251b02eacd461543157_prof);

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
