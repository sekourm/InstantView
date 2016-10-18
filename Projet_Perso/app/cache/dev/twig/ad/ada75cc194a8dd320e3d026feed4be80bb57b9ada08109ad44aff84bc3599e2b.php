<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e8e3e4c292abd6a0a214a162b17ca3c1c90b8618b5b63d79e91ca2a08f103081 extends Twig_Template
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
        $__internal_3ff22fc216e80f3f1bc572ae2ad1d061a667ba98ef10e4c26a7fbeff04bc934f = $this->env->getExtension("native_profiler");
        $__internal_3ff22fc216e80f3f1bc572ae2ad1d061a667ba98ef10e4c26a7fbeff04bc934f->enter($__internal_3ff22fc216e80f3f1bc572ae2ad1d061a667ba98ef10e4c26a7fbeff04bc934f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3ff22fc216e80f3f1bc572ae2ad1d061a667ba98ef10e4c26a7fbeff04bc934f->leave($__internal_3ff22fc216e80f3f1bc572ae2ad1d061a667ba98ef10e4c26a7fbeff04bc934f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
