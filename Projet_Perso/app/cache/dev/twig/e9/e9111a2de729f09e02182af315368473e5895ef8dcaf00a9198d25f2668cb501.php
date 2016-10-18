<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f4de5393e0c56481626824b04dc6253e2d4a5a21ffbe41e2c1a387ab132504b0 extends Twig_Template
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
        $__internal_b0ab2f9cb033c7a9b4f202eeee9ca5b85df2ad881470cae24c7df211582bacfb = $this->env->getExtension("native_profiler");
        $__internal_b0ab2f9cb033c7a9b4f202eeee9ca5b85df2ad881470cae24c7df211582bacfb->enter($__internal_b0ab2f9cb033c7a9b4f202eeee9ca5b85df2ad881470cae24c7df211582bacfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b0ab2f9cb033c7a9b4f202eeee9ca5b85df2ad881470cae24c7df211582bacfb->leave($__internal_b0ab2f9cb033c7a9b4f202eeee9ca5b85df2ad881470cae24c7df211582bacfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
