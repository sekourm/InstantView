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
        $__internal_fb5435f2e4db3c39dc45b096bce686eb350b9c5290a6d4ee1dc8c73f8cdcb25b = $this->env->getExtension("native_profiler");
        $__internal_fb5435f2e4db3c39dc45b096bce686eb350b9c5290a6d4ee1dc8c73f8cdcb25b->enter($__internal_fb5435f2e4db3c39dc45b096bce686eb350b9c5290a6d4ee1dc8c73f8cdcb25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fb5435f2e4db3c39dc45b096bce686eb350b9c5290a6d4ee1dc8c73f8cdcb25b->leave($__internal_fb5435f2e4db3c39dc45b096bce686eb350b9c5290a6d4ee1dc8c73f8cdcb25b_prof);

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
