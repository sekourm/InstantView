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
        $__internal_79f95e5482aae3a9b821f1b2e0c3996e15ca5d6259b4f770323ec139b5c364be = $this->env->getExtension("native_profiler");
        $__internal_79f95e5482aae3a9b821f1b2e0c3996e15ca5d6259b4f770323ec139b5c364be->enter($__internal_79f95e5482aae3a9b821f1b2e0c3996e15ca5d6259b4f770323ec139b5c364be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_79f95e5482aae3a9b821f1b2e0c3996e15ca5d6259b4f770323ec139b5c364be->leave($__internal_79f95e5482aae3a9b821f1b2e0c3996e15ca5d6259b4f770323ec139b5c364be_prof);

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
