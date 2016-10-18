<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1f84b9f0d0068d19251f22d460fda87ec26b3bfe8e2411400923531ef84eb968 extends Twig_Template
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
        $__internal_88e76d18770d44864382019161e23dd7bd0acad7ed79ac9461251cb75075acf8 = $this->env->getExtension("native_profiler");
        $__internal_88e76d18770d44864382019161e23dd7bd0acad7ed79ac9461251cb75075acf8->enter($__internal_88e76d18770d44864382019161e23dd7bd0acad7ed79ac9461251cb75075acf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_88e76d18770d44864382019161e23dd7bd0acad7ed79ac9461251cb75075acf8->leave($__internal_88e76d18770d44864382019161e23dd7bd0acad7ed79ac9461251cb75075acf8_prof);

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
