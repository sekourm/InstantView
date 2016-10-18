<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_04a349164647ec93c9e96176cdb07fa6a6714b7d8f0999978155f86bb3c040e6 extends Twig_Template
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
        $__internal_68583d1fe3fd37fb5d9ae8dae3541f8783cca4ab954e8e6341bc651a14adfa6a = $this->env->getExtension("native_profiler");
        $__internal_68583d1fe3fd37fb5d9ae8dae3541f8783cca4ab954e8e6341bc651a14adfa6a->enter($__internal_68583d1fe3fd37fb5d9ae8dae3541f8783cca4ab954e8e6341bc651a14adfa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_68583d1fe3fd37fb5d9ae8dae3541f8783cca4ab954e8e6341bc651a14adfa6a->leave($__internal_68583d1fe3fd37fb5d9ae8dae3541f8783cca4ab954e8e6341bc651a14adfa6a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
