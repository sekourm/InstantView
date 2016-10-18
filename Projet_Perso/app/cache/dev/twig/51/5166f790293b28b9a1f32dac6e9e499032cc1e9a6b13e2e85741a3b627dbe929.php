<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_60e69e9e668338cdc9d665c840e4a5811e6c6208e31439b0c51ebb822427c06c extends Twig_Template
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
        $__internal_d0b3783261f0d1992674a52388cdb95cd3458292416b123fce176f39e67519b2 = $this->env->getExtension("native_profiler");
        $__internal_d0b3783261f0d1992674a52388cdb95cd3458292416b123fce176f39e67519b2->enter($__internal_d0b3783261f0d1992674a52388cdb95cd3458292416b123fce176f39e67519b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d0b3783261f0d1992674a52388cdb95cd3458292416b123fce176f39e67519b2->leave($__internal_d0b3783261f0d1992674a52388cdb95cd3458292416b123fce176f39e67519b2_prof);

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
