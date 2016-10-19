<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bb1e51d09db9ee8041d2e3dd30e77a101c3b7937647c8ffbdaa1ebbe6841ebe4 extends Twig_Template
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
        $__internal_f949b9b190ef1c4ef5cd80666c9461e3dce45ad22c61537c4e8f55af381e0254 = $this->env->getExtension("native_profiler");
        $__internal_f949b9b190ef1c4ef5cd80666c9461e3dce45ad22c61537c4e8f55af381e0254->enter($__internal_f949b9b190ef1c4ef5cd80666c9461e3dce45ad22c61537c4e8f55af381e0254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f949b9b190ef1c4ef5cd80666c9461e3dce45ad22c61537c4e8f55af381e0254->leave($__internal_f949b9b190ef1c4ef5cd80666c9461e3dce45ad22c61537c4e8f55af381e0254_prof);

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
