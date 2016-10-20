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
        $__internal_19a7d869666e66c749be13f3ce0909dc9f5d92be0f7a91af8648472b424fdb09 = $this->env->getExtension("native_profiler");
        $__internal_19a7d869666e66c749be13f3ce0909dc9f5d92be0f7a91af8648472b424fdb09->enter($__internal_19a7d869666e66c749be13f3ce0909dc9f5d92be0f7a91af8648472b424fdb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_19a7d869666e66c749be13f3ce0909dc9f5d92be0f7a91af8648472b424fdb09->leave($__internal_19a7d869666e66c749be13f3ce0909dc9f5d92be0f7a91af8648472b424fdb09_prof);

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
