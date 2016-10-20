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
        $__internal_43446c625137fbb5620c47c146870aeb78ffef766c0cbc4406ddafa795d4f0e1 = $this->env->getExtension("native_profiler");
        $__internal_43446c625137fbb5620c47c146870aeb78ffef766c0cbc4406ddafa795d4f0e1->enter($__internal_43446c625137fbb5620c47c146870aeb78ffef766c0cbc4406ddafa795d4f0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_43446c625137fbb5620c47c146870aeb78ffef766c0cbc4406ddafa795d4f0e1->leave($__internal_43446c625137fbb5620c47c146870aeb78ffef766c0cbc4406ddafa795d4f0e1_prof);

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
