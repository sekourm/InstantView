<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_64bf672bf5128c821ee8bd0123a915711944b4630e93b203d7697a61649d24f8 extends Twig_Template
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
        $__internal_7d704f0616740a019089890a83ed2779507aa5e3024a9b0da513a792c4c7fda0 = $this->env->getExtension("native_profiler");
        $__internal_7d704f0616740a019089890a83ed2779507aa5e3024a9b0da513a792c4c7fda0->enter($__internal_7d704f0616740a019089890a83ed2779507aa5e3024a9b0da513a792c4c7fda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7d704f0616740a019089890a83ed2779507aa5e3024a9b0da513a792c4c7fda0->leave($__internal_7d704f0616740a019089890a83ed2779507aa5e3024a9b0da513a792c4c7fda0_prof);

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
