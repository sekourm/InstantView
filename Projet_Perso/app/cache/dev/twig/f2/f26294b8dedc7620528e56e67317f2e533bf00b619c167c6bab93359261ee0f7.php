<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_373d386a444dbaea81da6523cff87c49fdaeb9cd0d17b24431d0372efef3a46f extends Twig_Template
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
        $__internal_6dfacdfa4125028d8d5754ba117be173739481f948750e8ffbddfd58e467be32 = $this->env->getExtension("native_profiler");
        $__internal_6dfacdfa4125028d8d5754ba117be173739481f948750e8ffbddfd58e467be32->enter($__internal_6dfacdfa4125028d8d5754ba117be173739481f948750e8ffbddfd58e467be32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6dfacdfa4125028d8d5754ba117be173739481f948750e8ffbddfd58e467be32->leave($__internal_6dfacdfa4125028d8d5754ba117be173739481f948750e8ffbddfd58e467be32_prof);

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
