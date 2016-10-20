<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ae4464deec54169e5b92d3795894152e57c4b6d57a3be3d0667a00146330cd0c extends Twig_Template
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
        $__internal_9270e5d7bd8544ef5e8c52945834184927004dfa0f6a522e5e2fa2ecdccdaefb = $this->env->getExtension("native_profiler");
        $__internal_9270e5d7bd8544ef5e8c52945834184927004dfa0f6a522e5e2fa2ecdccdaefb->enter($__internal_9270e5d7bd8544ef5e8c52945834184927004dfa0f6a522e5e2fa2ecdccdaefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9270e5d7bd8544ef5e8c52945834184927004dfa0f6a522e5e2fa2ecdccdaefb->leave($__internal_9270e5d7bd8544ef5e8c52945834184927004dfa0f6a522e5e2fa2ecdccdaefb_prof);

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
