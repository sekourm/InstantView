<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_01882e113f378d40660b1e2efb366d57eaf0b56bddc143e06f927e61a89063eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eb3562f189318e5659a6fe4fc0fff8be4653bce6d2f98084be7fecdc19dabb8 = $this->env->getExtension("native_profiler");
        $__internal_3eb3562f189318e5659a6fe4fc0fff8be4653bce6d2f98084be7fecdc19dabb8->enter($__internal_3eb3562f189318e5659a6fe4fc0fff8be4653bce6d2f98084be7fecdc19dabb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3eb3562f189318e5659a6fe4fc0fff8be4653bce6d2f98084be7fecdc19dabb8->leave($__internal_3eb3562f189318e5659a6fe4fc0fff8be4653bce6d2f98084be7fecdc19dabb8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_84cc0a7d0b89503c3afeb3e2f4c36c94f4be806a462ecdd043f5cce3f2558183 = $this->env->getExtension("native_profiler");
        $__internal_84cc0a7d0b89503c3afeb3e2f4c36c94f4be806a462ecdd043f5cce3f2558183->enter($__internal_84cc0a7d0b89503c3afeb3e2f4c36c94f4be806a462ecdd043f5cce3f2558183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_84cc0a7d0b89503c3afeb3e2f4c36c94f4be806a462ecdd043f5cce3f2558183->leave($__internal_84cc0a7d0b89503c3afeb3e2f4c36c94f4be806a462ecdd043f5cce3f2558183_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
