<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_476f3ba00fc75b49e2f0cdbeea594577c4a2cb8a3cb9ec055f210012d8be9f5f extends Twig_Template
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
        $__internal_4ac6a1bfd1af86cd22bd8351eb506c9a35c8ee83a3bc7b55d51dd19ff3c27a54 = $this->env->getExtension("native_profiler");
        $__internal_4ac6a1bfd1af86cd22bd8351eb506c9a35c8ee83a3bc7b55d51dd19ff3c27a54->enter($__internal_4ac6a1bfd1af86cd22bd8351eb506c9a35c8ee83a3bc7b55d51dd19ff3c27a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4ac6a1bfd1af86cd22bd8351eb506c9a35c8ee83a3bc7b55d51dd19ff3c27a54->leave($__internal_4ac6a1bfd1af86cd22bd8351eb506c9a35c8ee83a3bc7b55d51dd19ff3c27a54_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_222a87e21935f693f767a561c97b1c28251b8f1338813d2f4ef91c57e4241179 = $this->env->getExtension("native_profiler");
        $__internal_222a87e21935f693f767a561c97b1c28251b8f1338813d2f4ef91c57e4241179->enter($__internal_222a87e21935f693f767a561c97b1c28251b8f1338813d2f4ef91c57e4241179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_222a87e21935f693f767a561c97b1c28251b8f1338813d2f4ef91c57e4241179->leave($__internal_222a87e21935f693f767a561c97b1c28251b8f1338813d2f4ef91c57e4241179_prof);

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
