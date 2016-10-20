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
        $__internal_a281adaf74bd2d094381317d8e7fc6c135c83e68f03da8411f81997e05add4a9 = $this->env->getExtension("native_profiler");
        $__internal_a281adaf74bd2d094381317d8e7fc6c135c83e68f03da8411f81997e05add4a9->enter($__internal_a281adaf74bd2d094381317d8e7fc6c135c83e68f03da8411f81997e05add4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a281adaf74bd2d094381317d8e7fc6c135c83e68f03da8411f81997e05add4a9->leave($__internal_a281adaf74bd2d094381317d8e7fc6c135c83e68f03da8411f81997e05add4a9_prof);

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
