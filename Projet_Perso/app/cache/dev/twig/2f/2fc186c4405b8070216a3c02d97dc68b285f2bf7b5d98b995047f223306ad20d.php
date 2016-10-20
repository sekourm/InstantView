<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b023fffb39a88f3fc2b1fb1817b35eb546eb231e2e79639b5fb85731b47a0633 extends Twig_Template
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
        $__internal_51f805ca5190d8bb7127ab671daf3a966fd1955aea4e70822acdd9035c956097 = $this->env->getExtension("native_profiler");
        $__internal_51f805ca5190d8bb7127ab671daf3a966fd1955aea4e70822acdd9035c956097->enter($__internal_51f805ca5190d8bb7127ab671daf3a966fd1955aea4e70822acdd9035c956097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_51f805ca5190d8bb7127ab671daf3a966fd1955aea4e70822acdd9035c956097->leave($__internal_51f805ca5190d8bb7127ab671daf3a966fd1955aea4e70822acdd9035c956097_prof);

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
