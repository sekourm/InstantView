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
        $__internal_ae8949c5b2e2127b986417d88f43828d688e4af1f50827d11f04c87b2ae6916c = $this->env->getExtension("native_profiler");
        $__internal_ae8949c5b2e2127b986417d88f43828d688e4af1f50827d11f04c87b2ae6916c->enter($__internal_ae8949c5b2e2127b986417d88f43828d688e4af1f50827d11f04c87b2ae6916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ae8949c5b2e2127b986417d88f43828d688e4af1f50827d11f04c87b2ae6916c->leave($__internal_ae8949c5b2e2127b986417d88f43828d688e4af1f50827d11f04c87b2ae6916c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_db20b679d2526e1c97063a7cb639512033baedfffb028cf689d25b5edc7fde56 = $this->env->getExtension("native_profiler");
        $__internal_db20b679d2526e1c97063a7cb639512033baedfffb028cf689d25b5edc7fde56->enter($__internal_db20b679d2526e1c97063a7cb639512033baedfffb028cf689d25b5edc7fde56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_db20b679d2526e1c97063a7cb639512033baedfffb028cf689d25b5edc7fde56->leave($__internal_db20b679d2526e1c97063a7cb639512033baedfffb028cf689d25b5edc7fde56_prof);

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
