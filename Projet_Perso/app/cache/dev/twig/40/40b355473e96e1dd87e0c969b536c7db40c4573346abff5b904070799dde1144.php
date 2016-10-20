<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2e1a7cc2b0d353ac89e6c541d9c379a73ecd19b36b458d8b609cb76dacc07a8f extends Twig_Template
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
        $__internal_4ef33440b7d94655c884569e380a6e69d6913fba154c0dd31281a22c5320342e = $this->env->getExtension("native_profiler");
        $__internal_4ef33440b7d94655c884569e380a6e69d6913fba154c0dd31281a22c5320342e->enter($__internal_4ef33440b7d94655c884569e380a6e69d6913fba154c0dd31281a22c5320342e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4ef33440b7d94655c884569e380a6e69d6913fba154c0dd31281a22c5320342e->leave($__internal_4ef33440b7d94655c884569e380a6e69d6913fba154c0dd31281a22c5320342e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
