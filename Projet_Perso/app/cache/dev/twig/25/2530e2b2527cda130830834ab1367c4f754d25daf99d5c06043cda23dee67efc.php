<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f63dca18a1f56b2080a6334e6967165ae9d575773de854f4531ad1a8995ccd5a extends Twig_Template
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
        $__internal_6f066cf4b075408bd7af6da547bcb72dbcc20c6d7c3899b66a580ecac9cd3d5f = $this->env->getExtension("native_profiler");
        $__internal_6f066cf4b075408bd7af6da547bcb72dbcc20c6d7c3899b66a580ecac9cd3d5f->enter($__internal_6f066cf4b075408bd7af6da547bcb72dbcc20c6d7c3899b66a580ecac9cd3d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6f066cf4b075408bd7af6da547bcb72dbcc20c6d7c3899b66a580ecac9cd3d5f->leave($__internal_6f066cf4b075408bd7af6da547bcb72dbcc20c6d7c3899b66a580ecac9cd3d5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
