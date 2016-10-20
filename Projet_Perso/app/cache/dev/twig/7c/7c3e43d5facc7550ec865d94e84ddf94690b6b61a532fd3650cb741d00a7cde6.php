<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c4cf70a0544bcb41e8beb714c4d470a8a3424471050f9769804299c3eea9f535 extends Twig_Template
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
        $__internal_0add37eec28c2f3055499ec2d4f268b65394d1bd37407f354efc351a137ca454 = $this->env->getExtension("native_profiler");
        $__internal_0add37eec28c2f3055499ec2d4f268b65394d1bd37407f354efc351a137ca454->enter($__internal_0add37eec28c2f3055499ec2d4f268b65394d1bd37407f354efc351a137ca454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0add37eec28c2f3055499ec2d4f268b65394d1bd37407f354efc351a137ca454->leave($__internal_0add37eec28c2f3055499ec2d4f268b65394d1bd37407f354efc351a137ca454_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
