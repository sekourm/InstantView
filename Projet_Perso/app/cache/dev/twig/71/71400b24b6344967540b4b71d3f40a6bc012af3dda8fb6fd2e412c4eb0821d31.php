<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d263ba9b927dd0a8e7eba4d90b90a318636af6e487ecde954112eac09221ed07 extends Twig_Template
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
        $__internal_ee11109ed296f64fdeb0bf98ae067bc4b81a2fdf238f5cc4b51f847e51754684 = $this->env->getExtension("native_profiler");
        $__internal_ee11109ed296f64fdeb0bf98ae067bc4b81a2fdf238f5cc4b51f847e51754684->enter($__internal_ee11109ed296f64fdeb0bf98ae067bc4b81a2fdf238f5cc4b51f847e51754684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ee11109ed296f64fdeb0bf98ae067bc4b81a2fdf238f5cc4b51f847e51754684->leave($__internal_ee11109ed296f64fdeb0bf98ae067bc4b81a2fdf238f5cc4b51f847e51754684_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
