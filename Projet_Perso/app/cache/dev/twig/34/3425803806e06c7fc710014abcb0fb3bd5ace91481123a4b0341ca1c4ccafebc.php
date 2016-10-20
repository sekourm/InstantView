<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_850f562936125396b3a541f7e113f75b06d956bc5e82eb115a067d337a47bf4b extends Twig_Template
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
        $__internal_76d81917ef848762e00cb359d3410e5d2ef2eb3b3e71f3f92c1d0c23cec49c4f = $this->env->getExtension("native_profiler");
        $__internal_76d81917ef848762e00cb359d3410e5d2ef2eb3b3e71f3f92c1d0c23cec49c4f->enter($__internal_76d81917ef848762e00cb359d3410e5d2ef2eb3b3e71f3f92c1d0c23cec49c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_76d81917ef848762e00cb359d3410e5d2ef2eb3b3e71f3f92c1d0c23cec49c4f->leave($__internal_76d81917ef848762e00cb359d3410e5d2ef2eb3b3e71f3f92c1d0c23cec49c4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
