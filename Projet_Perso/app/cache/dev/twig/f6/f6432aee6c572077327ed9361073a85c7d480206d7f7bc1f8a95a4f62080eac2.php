<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6483bd82ecf0411d6b40a13bcefb82cf3e99572c5a6b7504d8503cfa81f7428a extends Twig_Template
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
        $__internal_4c1cf5c232d6bccbe43c20c8d5085a63f394f05b40ca056a28f6a99643f38ccb = $this->env->getExtension("native_profiler");
        $__internal_4c1cf5c232d6bccbe43c20c8d5085a63f394f05b40ca056a28f6a99643f38ccb->enter($__internal_4c1cf5c232d6bccbe43c20c8d5085a63f394f05b40ca056a28f6a99643f38ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4c1cf5c232d6bccbe43c20c8d5085a63f394f05b40ca056a28f6a99643f38ccb->leave($__internal_4c1cf5c232d6bccbe43c20c8d5085a63f394f05b40ca056a28f6a99643f38ccb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
