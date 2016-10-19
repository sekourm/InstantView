<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7bd307178ee28b823eaf539d7958106989f6508c955d9e5f94364fef283b18db extends Twig_Template
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
        $__internal_c50028340a71f392ab08e590f05ee19f62bde087f02256ec1b5b5f671e2512c4 = $this->env->getExtension("native_profiler");
        $__internal_c50028340a71f392ab08e590f05ee19f62bde087f02256ec1b5b5f671e2512c4->enter($__internal_c50028340a71f392ab08e590f05ee19f62bde087f02256ec1b5b5f671e2512c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c50028340a71f392ab08e590f05ee19f62bde087f02256ec1b5b5f671e2512c4->leave($__internal_c50028340a71f392ab08e590f05ee19f62bde087f02256ec1b5b5f671e2512c4_prof);

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
