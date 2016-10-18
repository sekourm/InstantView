<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f59032bc3c12d4c6182de05c6d2980351ab54f20f7357bf38dcdbf60178c0121 extends Twig_Template
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
        $__internal_efb5d7bbaba3bde1176843ac1bef77c096ec59b5320678103d630afdb61addf4 = $this->env->getExtension("native_profiler");
        $__internal_efb5d7bbaba3bde1176843ac1bef77c096ec59b5320678103d630afdb61addf4->enter($__internal_efb5d7bbaba3bde1176843ac1bef77c096ec59b5320678103d630afdb61addf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_efb5d7bbaba3bde1176843ac1bef77c096ec59b5320678103d630afdb61addf4->leave($__internal_efb5d7bbaba3bde1176843ac1bef77c096ec59b5320678103d630afdb61addf4_prof);

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
