<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f42d4d0a08a4fc8a44b5f403c7c2590829235b8465dc1543816c32772bc37a4c extends Twig_Template
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
        $__internal_47378b694344eb5c1a4895d82d5042fc91a671f6bc186814630cbc8070d12f50 = $this->env->getExtension("native_profiler");
        $__internal_47378b694344eb5c1a4895d82d5042fc91a671f6bc186814630cbc8070d12f50->enter($__internal_47378b694344eb5c1a4895d82d5042fc91a671f6bc186814630cbc8070d12f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_47378b694344eb5c1a4895d82d5042fc91a671f6bc186814630cbc8070d12f50->leave($__internal_47378b694344eb5c1a4895d82d5042fc91a671f6bc186814630cbc8070d12f50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
