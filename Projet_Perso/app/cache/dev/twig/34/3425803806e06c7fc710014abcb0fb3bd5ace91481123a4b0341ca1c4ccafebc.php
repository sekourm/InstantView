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
        $__internal_60d7eba913d8f711e4f722fc9636369e897404966e6b8c9a6549d6c141c022f0 = $this->env->getExtension("native_profiler");
        $__internal_60d7eba913d8f711e4f722fc9636369e897404966e6b8c9a6549d6c141c022f0->enter($__internal_60d7eba913d8f711e4f722fc9636369e897404966e6b8c9a6549d6c141c022f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_60d7eba913d8f711e4f722fc9636369e897404966e6b8c9a6549d6c141c022f0->leave($__internal_60d7eba913d8f711e4f722fc9636369e897404966e6b8c9a6549d6c141c022f0_prof);

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
