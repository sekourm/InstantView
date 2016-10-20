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
        $__internal_af9f1e20a123fa19a224ea63802cf7a0671a64a4e30c2d0f5c8bbb0b2b2b15d2 = $this->env->getExtension("native_profiler");
        $__internal_af9f1e20a123fa19a224ea63802cf7a0671a64a4e30c2d0f5c8bbb0b2b2b15d2->enter($__internal_af9f1e20a123fa19a224ea63802cf7a0671a64a4e30c2d0f5c8bbb0b2b2b15d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_af9f1e20a123fa19a224ea63802cf7a0671a64a4e30c2d0f5c8bbb0b2b2b15d2->leave($__internal_af9f1e20a123fa19a224ea63802cf7a0671a64a4e30c2d0f5c8bbb0b2b2b15d2_prof);

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
