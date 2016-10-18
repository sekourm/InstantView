<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7647bfb304a0e079899b9497aa486154d4953ec4145699d836516cfd166f352a extends Twig_Template
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
        $__internal_3788946b958960bd82d2db5757f95f5d0fdf7254cbe9ed87fab547f3bf75066e = $this->env->getExtension("native_profiler");
        $__internal_3788946b958960bd82d2db5757f95f5d0fdf7254cbe9ed87fab547f3bf75066e->enter($__internal_3788946b958960bd82d2db5757f95f5d0fdf7254cbe9ed87fab547f3bf75066e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3788946b958960bd82d2db5757f95f5d0fdf7254cbe9ed87fab547f3bf75066e->leave($__internal_3788946b958960bd82d2db5757f95f5d0fdf7254cbe9ed87fab547f3bf75066e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
