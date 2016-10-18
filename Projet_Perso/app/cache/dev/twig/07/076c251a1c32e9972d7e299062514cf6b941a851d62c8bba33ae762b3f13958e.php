<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9d6e8670a4bb1c5859baea64fe5b240f110fcf232d2895484e5e20ebde00a99b extends Twig_Template
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
        $__internal_658fcea97f588ddde878dabdfb208d7d6cdde8fe5dc05800b187e3e4edc981ec = $this->env->getExtension("native_profiler");
        $__internal_658fcea97f588ddde878dabdfb208d7d6cdde8fe5dc05800b187e3e4edc981ec->enter($__internal_658fcea97f588ddde878dabdfb208d7d6cdde8fe5dc05800b187e3e4edc981ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_658fcea97f588ddde878dabdfb208d7d6cdde8fe5dc05800b187e3e4edc981ec->leave($__internal_658fcea97f588ddde878dabdfb208d7d6cdde8fe5dc05800b187e3e4edc981ec_prof);

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
