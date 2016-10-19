<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7e441ec559a1aedc80029ab6db1963f3235a2373df603dcd66ff60eab7d96737 extends Twig_Template
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
        $__internal_2f487cd6f39680043d2cd2e637bc78e4def6ae5e2769fb8f732fad99fbcbbd41 = $this->env->getExtension("native_profiler");
        $__internal_2f487cd6f39680043d2cd2e637bc78e4def6ae5e2769fb8f732fad99fbcbbd41->enter($__internal_2f487cd6f39680043d2cd2e637bc78e4def6ae5e2769fb8f732fad99fbcbbd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2f487cd6f39680043d2cd2e637bc78e4def6ae5e2769fb8f732fad99fbcbbd41->leave($__internal_2f487cd6f39680043d2cd2e637bc78e4def6ae5e2769fb8f732fad99fbcbbd41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
