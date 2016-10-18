<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_545d5fd60219fbc23d8c914e5b65e5cd4d9dc4a7cbdaf6db85962b76e9896bea extends Twig_Template
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
        $__internal_c52be0ac5fb1906e44160ca7e5bcfb6d0da8217ccbb444c1b20b5ccff799de24 = $this->env->getExtension("native_profiler");
        $__internal_c52be0ac5fb1906e44160ca7e5bcfb6d0da8217ccbb444c1b20b5ccff799de24->enter($__internal_c52be0ac5fb1906e44160ca7e5bcfb6d0da8217ccbb444c1b20b5ccff799de24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c52be0ac5fb1906e44160ca7e5bcfb6d0da8217ccbb444c1b20b5ccff799de24->leave($__internal_c52be0ac5fb1906e44160ca7e5bcfb6d0da8217ccbb444c1b20b5ccff799de24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
