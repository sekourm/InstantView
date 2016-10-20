<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3e442c90293e71477e80fa45d01150d6981342471b26affb217d3258ad15cb1d extends Twig_Template
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
        $__internal_73a655ee1eee29e1bfdce94fbde86f7d5f4bf006aa4444caea8394cefb5791d2 = $this->env->getExtension("native_profiler");
        $__internal_73a655ee1eee29e1bfdce94fbde86f7d5f4bf006aa4444caea8394cefb5791d2->enter($__internal_73a655ee1eee29e1bfdce94fbde86f7d5f4bf006aa4444caea8394cefb5791d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_73a655ee1eee29e1bfdce94fbde86f7d5f4bf006aa4444caea8394cefb5791d2->leave($__internal_73a655ee1eee29e1bfdce94fbde86f7d5f4bf006aa4444caea8394cefb5791d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
