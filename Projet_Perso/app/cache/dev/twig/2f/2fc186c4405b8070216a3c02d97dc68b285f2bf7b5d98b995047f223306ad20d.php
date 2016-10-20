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
        $__internal_961a7d50e44b538f4a303e478d25d2cb9435cace24e76e75c8419a46adeda674 = $this->env->getExtension("native_profiler");
        $__internal_961a7d50e44b538f4a303e478d25d2cb9435cace24e76e75c8419a46adeda674->enter($__internal_961a7d50e44b538f4a303e478d25d2cb9435cace24e76e75c8419a46adeda674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_961a7d50e44b538f4a303e478d25d2cb9435cace24e76e75c8419a46adeda674->leave($__internal_961a7d50e44b538f4a303e478d25d2cb9435cace24e76e75c8419a46adeda674_prof);

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
