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
        $__internal_0f37338d1a8bf5194384ab2991c1351041dabcbe4057ff4fd3e9e4797d6cd9de = $this->env->getExtension("native_profiler");
        $__internal_0f37338d1a8bf5194384ab2991c1351041dabcbe4057ff4fd3e9e4797d6cd9de->enter($__internal_0f37338d1a8bf5194384ab2991c1351041dabcbe4057ff4fd3e9e4797d6cd9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0f37338d1a8bf5194384ab2991c1351041dabcbe4057ff4fd3e9e4797d6cd9de->leave($__internal_0f37338d1a8bf5194384ab2991c1351041dabcbe4057ff4fd3e9e4797d6cd9de_prof);

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
