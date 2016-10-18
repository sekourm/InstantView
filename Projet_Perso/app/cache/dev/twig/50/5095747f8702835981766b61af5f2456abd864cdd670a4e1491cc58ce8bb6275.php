<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d6600e2c9e133452ad01da1d4f0863d43afd2ebf5d6ab804bae08e90c84163d2 extends Twig_Template
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
        $__internal_6911197e388168667c8e7ccf80b3eb1de55adad8bbbd174cdcae5c3fa11e5384 = $this->env->getExtension("native_profiler");
        $__internal_6911197e388168667c8e7ccf80b3eb1de55adad8bbbd174cdcae5c3fa11e5384->enter($__internal_6911197e388168667c8e7ccf80b3eb1de55adad8bbbd174cdcae5c3fa11e5384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6911197e388168667c8e7ccf80b3eb1de55adad8bbbd174cdcae5c3fa11e5384->leave($__internal_6911197e388168667c8e7ccf80b3eb1de55adad8bbbd174cdcae5c3fa11e5384_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
