<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9479ef1c6dd00f71e3c0d3d3977dff5583e14cc209ecd209765325c230740ee3 extends Twig_Template
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
        $__internal_a61c6f4e502e448052fc9085884bfce83f2eaa52d93d38e01f118cee913a975b = $this->env->getExtension("native_profiler");
        $__internal_a61c6f4e502e448052fc9085884bfce83f2eaa52d93d38e01f118cee913a975b->enter($__internal_a61c6f4e502e448052fc9085884bfce83f2eaa52d93d38e01f118cee913a975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a61c6f4e502e448052fc9085884bfce83f2eaa52d93d38e01f118cee913a975b->leave($__internal_a61c6f4e502e448052fc9085884bfce83f2eaa52d93d38e01f118cee913a975b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
