<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_83b962e8750eb017e065c70d9082962cce127b7229db9a307cad5dc36188cdef extends Twig_Template
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
        $__internal_4a995856ef0df75e506097c5961212b983c944da19c10881291a4a04df31f683 = $this->env->getExtension("native_profiler");
        $__internal_4a995856ef0df75e506097c5961212b983c944da19c10881291a4a04df31f683->enter($__internal_4a995856ef0df75e506097c5961212b983c944da19c10881291a4a04df31f683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4a995856ef0df75e506097c5961212b983c944da19c10881291a4a04df31f683->leave($__internal_4a995856ef0df75e506097c5961212b983c944da19c10881291a4a04df31f683_prof);

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
