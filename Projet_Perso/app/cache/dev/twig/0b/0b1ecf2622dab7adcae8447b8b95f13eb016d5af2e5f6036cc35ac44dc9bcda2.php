<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_704c5b7ce96fbcd675ea8a68a5106663549953e7e8ff44497b9d4d4cb249c5fe extends Twig_Template
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
        $__internal_582e8589e4101e2ffe93d9ef4e599d76e03027369f72cc608452c79b14de0ad8 = $this->env->getExtension("native_profiler");
        $__internal_582e8589e4101e2ffe93d9ef4e599d76e03027369f72cc608452c79b14de0ad8->enter($__internal_582e8589e4101e2ffe93d9ef4e599d76e03027369f72cc608452c79b14de0ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_582e8589e4101e2ffe93d9ef4e599d76e03027369f72cc608452c79b14de0ad8->leave($__internal_582e8589e4101e2ffe93d9ef4e599d76e03027369f72cc608452c79b14de0ad8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
