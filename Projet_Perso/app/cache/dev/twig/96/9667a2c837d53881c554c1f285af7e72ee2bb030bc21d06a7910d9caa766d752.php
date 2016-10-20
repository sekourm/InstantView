<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e88e6123d8e35d4cfede171dd48d6fabdfd08f80421e9000ada6ddd8ac25c05d extends Twig_Template
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
        $__internal_1b7ef092a62c0f8a8ac74813cd2b2080743dcb9b5e1c4acdd9f232e22bdea8e3 = $this->env->getExtension("native_profiler");
        $__internal_1b7ef092a62c0f8a8ac74813cd2b2080743dcb9b5e1c4acdd9f232e22bdea8e3->enter($__internal_1b7ef092a62c0f8a8ac74813cd2b2080743dcb9b5e1c4acdd9f232e22bdea8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1b7ef092a62c0f8a8ac74813cd2b2080743dcb9b5e1c4acdd9f232e22bdea8e3->leave($__internal_1b7ef092a62c0f8a8ac74813cd2b2080743dcb9b5e1c4acdd9f232e22bdea8e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
