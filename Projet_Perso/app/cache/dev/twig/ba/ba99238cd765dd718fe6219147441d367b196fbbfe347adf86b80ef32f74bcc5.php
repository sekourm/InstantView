<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_22167506316da6f1cced747a10ff52b1654638e95e754abd06e321386ca97dd4 extends Twig_Template
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
        $__internal_9eeabcea4306aa335c34905e62b4dbb9705590123982ef872bbb2474ea05c3b6 = $this->env->getExtension("native_profiler");
        $__internal_9eeabcea4306aa335c34905e62b4dbb9705590123982ef872bbb2474ea05c3b6->enter($__internal_9eeabcea4306aa335c34905e62b4dbb9705590123982ef872bbb2474ea05c3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9eeabcea4306aa335c34905e62b4dbb9705590123982ef872bbb2474ea05c3b6->leave($__internal_9eeabcea4306aa335c34905e62b4dbb9705590123982ef872bbb2474ea05c3b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
