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
        $__internal_c0b63830af288dada05b75d38c94f2b7fd0458563cd97f3456df20805e0c6312 = $this->env->getExtension("native_profiler");
        $__internal_c0b63830af288dada05b75d38c94f2b7fd0458563cd97f3456df20805e0c6312->enter($__internal_c0b63830af288dada05b75d38c94f2b7fd0458563cd97f3456df20805e0c6312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c0b63830af288dada05b75d38c94f2b7fd0458563cd97f3456df20805e0c6312->leave($__internal_c0b63830af288dada05b75d38c94f2b7fd0458563cd97f3456df20805e0c6312_prof);

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
