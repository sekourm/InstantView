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
        $__internal_7c9733a8cc2c444fa6b6582aa7b34ff1c311491358deec7e88a7037776c8a1b7 = $this->env->getExtension("native_profiler");
        $__internal_7c9733a8cc2c444fa6b6582aa7b34ff1c311491358deec7e88a7037776c8a1b7->enter($__internal_7c9733a8cc2c444fa6b6582aa7b34ff1c311491358deec7e88a7037776c8a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7c9733a8cc2c444fa6b6582aa7b34ff1c311491358deec7e88a7037776c8a1b7->leave($__internal_7c9733a8cc2c444fa6b6582aa7b34ff1c311491358deec7e88a7037776c8a1b7_prof);

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
