<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f315110e6956aa452f8bc9de23c1a448311236ccd5ff23fea1b28d7ddd39f5eb extends Twig_Template
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
        $__internal_44eb313dc7b3173580b093a5ce24da4ace3d48e31dc089846a82942b718fd3f3 = $this->env->getExtension("native_profiler");
        $__internal_44eb313dc7b3173580b093a5ce24da4ace3d48e31dc089846a82942b718fd3f3->enter($__internal_44eb313dc7b3173580b093a5ce24da4ace3d48e31dc089846a82942b718fd3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_44eb313dc7b3173580b093a5ce24da4ace3d48e31dc089846a82942b718fd3f3->leave($__internal_44eb313dc7b3173580b093a5ce24da4ace3d48e31dc089846a82942b718fd3f3_prof);

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
