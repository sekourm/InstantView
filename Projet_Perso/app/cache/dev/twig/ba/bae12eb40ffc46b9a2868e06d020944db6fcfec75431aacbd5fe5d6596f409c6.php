<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0c9ae0050c35352672cd0084840e96b0734750dc780ee962ef1991997268d589 extends Twig_Template
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
        $__internal_1a3e1d0abb93b047243ab1ea9865c76008a1e94f6350dda29180400a55361f84 = $this->env->getExtension("native_profiler");
        $__internal_1a3e1d0abb93b047243ab1ea9865c76008a1e94f6350dda29180400a55361f84->enter($__internal_1a3e1d0abb93b047243ab1ea9865c76008a1e94f6350dda29180400a55361f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1a3e1d0abb93b047243ab1ea9865c76008a1e94f6350dda29180400a55361f84->leave($__internal_1a3e1d0abb93b047243ab1ea9865c76008a1e94f6350dda29180400a55361f84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
