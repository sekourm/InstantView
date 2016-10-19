<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_54334ec7f83c43bab2af833b3925fb333a809b317a9ce4bb584bd4baee46df99 extends Twig_Template
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
        $__internal_64656d8594b18c7a8f2cddf4e30f618bd01ffa5cb2603e9c01455d23246e93ae = $this->env->getExtension("native_profiler");
        $__internal_64656d8594b18c7a8f2cddf4e30f618bd01ffa5cb2603e9c01455d23246e93ae->enter($__internal_64656d8594b18c7a8f2cddf4e30f618bd01ffa5cb2603e9c01455d23246e93ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_64656d8594b18c7a8f2cddf4e30f618bd01ffa5cb2603e9c01455d23246e93ae->leave($__internal_64656d8594b18c7a8f2cddf4e30f618bd01ffa5cb2603e9c01455d23246e93ae_prof);

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
