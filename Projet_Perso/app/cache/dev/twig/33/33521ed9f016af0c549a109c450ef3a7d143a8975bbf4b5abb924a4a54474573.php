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
        $__internal_ed339c65f608af2fb9c82e667e210343b0d7b88d7ab3313a70f62358d15be5e6 = $this->env->getExtension("native_profiler");
        $__internal_ed339c65f608af2fb9c82e667e210343b0d7b88d7ab3313a70f62358d15be5e6->enter($__internal_ed339c65f608af2fb9c82e667e210343b0d7b88d7ab3313a70f62358d15be5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ed339c65f608af2fb9c82e667e210343b0d7b88d7ab3313a70f62358d15be5e6->leave($__internal_ed339c65f608af2fb9c82e667e210343b0d7b88d7ab3313a70f62358d15be5e6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_567baf7aacef28f613ab5d7ef14528bf639f852b73187b10d9187b93f1b3a5e2 = $this->env->getExtension("native_profiler");
        $__internal_567baf7aacef28f613ab5d7ef14528bf639f852b73187b10d9187b93f1b3a5e2->enter($__internal_567baf7aacef28f613ab5d7ef14528bf639f852b73187b10d9187b93f1b3a5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_567baf7aacef28f613ab5d7ef14528bf639f852b73187b10d9187b93f1b3a5e2->leave($__internal_567baf7aacef28f613ab5d7ef14528bf639f852b73187b10d9187b93f1b3a5e2_prof);

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
