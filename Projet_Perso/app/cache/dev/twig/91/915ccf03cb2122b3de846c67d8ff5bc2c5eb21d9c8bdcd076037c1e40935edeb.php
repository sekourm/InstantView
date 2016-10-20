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
        $__internal_1ce169a24548c08d9f087fe4afa5d512354d54d4ca8c4b76476e15f18ba3b6ba = $this->env->getExtension("native_profiler");
        $__internal_1ce169a24548c08d9f087fe4afa5d512354d54d4ca8c4b76476e15f18ba3b6ba->enter($__internal_1ce169a24548c08d9f087fe4afa5d512354d54d4ca8c4b76476e15f18ba3b6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1ce169a24548c08d9f087fe4afa5d512354d54d4ca8c4b76476e15f18ba3b6ba->leave($__internal_1ce169a24548c08d9f087fe4afa5d512354d54d4ca8c4b76476e15f18ba3b6ba_prof);

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
