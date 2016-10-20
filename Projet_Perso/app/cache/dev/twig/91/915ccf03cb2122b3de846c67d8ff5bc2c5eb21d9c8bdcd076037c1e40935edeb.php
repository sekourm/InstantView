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
        $__internal_183e763d261be1f3f7dc7ba92c7fb5cb19279024718e6600df04f906f26b7fc8 = $this->env->getExtension("native_profiler");
        $__internal_183e763d261be1f3f7dc7ba92c7fb5cb19279024718e6600df04f906f26b7fc8->enter($__internal_183e763d261be1f3f7dc7ba92c7fb5cb19279024718e6600df04f906f26b7fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_183e763d261be1f3f7dc7ba92c7fb5cb19279024718e6600df04f906f26b7fc8->leave($__internal_183e763d261be1f3f7dc7ba92c7fb5cb19279024718e6600df04f906f26b7fc8_prof);

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
