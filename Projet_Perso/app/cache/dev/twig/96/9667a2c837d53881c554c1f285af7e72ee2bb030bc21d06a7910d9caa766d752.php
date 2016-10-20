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
        $__internal_37a6d5c4794614bbf7418af9330813902f45ba5132485f44c4103577a1c5d51a = $this->env->getExtension("native_profiler");
        $__internal_37a6d5c4794614bbf7418af9330813902f45ba5132485f44c4103577a1c5d51a->enter($__internal_37a6d5c4794614bbf7418af9330813902f45ba5132485f44c4103577a1c5d51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_37a6d5c4794614bbf7418af9330813902f45ba5132485f44c4103577a1c5d51a->leave($__internal_37a6d5c4794614bbf7418af9330813902f45ba5132485f44c4103577a1c5d51a_prof);

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
