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
        $__internal_2f0661bc883c538925a6e2993bb122e1f3f81ffafc8e8bce91a15bbe3d0a3441 = $this->env->getExtension("native_profiler");
        $__internal_2f0661bc883c538925a6e2993bb122e1f3f81ffafc8e8bce91a15bbe3d0a3441->enter($__internal_2f0661bc883c538925a6e2993bb122e1f3f81ffafc8e8bce91a15bbe3d0a3441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2f0661bc883c538925a6e2993bb122e1f3f81ffafc8e8bce91a15bbe3d0a3441->leave($__internal_2f0661bc883c538925a6e2993bb122e1f3f81ffafc8e8bce91a15bbe3d0a3441_prof);

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
