<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a1faed4053551b7a1b08bc2767b2e9a96ee5a192353d16adc8a8e104de9de771 extends Twig_Template
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
        $__internal_d5d0f8902e13afa6194f571588c5cc29612ee620b5094ecd61e4f6db1f0eae75 = $this->env->getExtension("native_profiler");
        $__internal_d5d0f8902e13afa6194f571588c5cc29612ee620b5094ecd61e4f6db1f0eae75->enter($__internal_d5d0f8902e13afa6194f571588c5cc29612ee620b5094ecd61e4f6db1f0eae75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d5d0f8902e13afa6194f571588c5cc29612ee620b5094ecd61e4f6db1f0eae75->leave($__internal_d5d0f8902e13afa6194f571588c5cc29612ee620b5094ecd61e4f6db1f0eae75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
