<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_235cea6f046eb2720f071be728b263b40ff49258d3026dbd1b212d976199683d extends Twig_Template
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
        $__internal_97c1fb60935025bf9413611ae88a310531957e66730537f8a358c402ca9320ba = $this->env->getExtension("native_profiler");
        $__internal_97c1fb60935025bf9413611ae88a310531957e66730537f8a358c402ca9320ba->enter($__internal_97c1fb60935025bf9413611ae88a310531957e66730537f8a358c402ca9320ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_97c1fb60935025bf9413611ae88a310531957e66730537f8a358c402ca9320ba->leave($__internal_97c1fb60935025bf9413611ae88a310531957e66730537f8a358c402ca9320ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
