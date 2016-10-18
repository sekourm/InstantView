<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_02f602c002c444aaac4c1a6f00524d9ba2db9a95d02ec7016b139d189bd61bd4 extends Twig_Template
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
        $__internal_47ac230c5dba9b507eb2bf80646b4d327ecfeb604abb3769ac6ff0f8b2f56b44 = $this->env->getExtension("native_profiler");
        $__internal_47ac230c5dba9b507eb2bf80646b4d327ecfeb604abb3769ac6ff0f8b2f56b44->enter($__internal_47ac230c5dba9b507eb2bf80646b4d327ecfeb604abb3769ac6ff0f8b2f56b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_47ac230c5dba9b507eb2bf80646b4d327ecfeb604abb3769ac6ff0f8b2f56b44->leave($__internal_47ac230c5dba9b507eb2bf80646b4d327ecfeb604abb3769ac6ff0f8b2f56b44_prof);

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
