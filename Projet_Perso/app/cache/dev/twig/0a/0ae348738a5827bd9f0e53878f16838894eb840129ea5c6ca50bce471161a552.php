<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_29657b22a218befeba63ac3d7ce4f684d6d4cac4c9bfdfc0d4e7ddd28e5652e4 extends Twig_Template
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
        $__internal_8e0cc3288f7df170c6175dc356ace27a27fc3f5405de35d0c5e8b352cb5897c5 = $this->env->getExtension("native_profiler");
        $__internal_8e0cc3288f7df170c6175dc356ace27a27fc3f5405de35d0c5e8b352cb5897c5->enter($__internal_8e0cc3288f7df170c6175dc356ace27a27fc3f5405de35d0c5e8b352cb5897c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8e0cc3288f7df170c6175dc356ace27a27fc3f5405de35d0c5e8b352cb5897c5->leave($__internal_8e0cc3288f7df170c6175dc356ace27a27fc3f5405de35d0c5e8b352cb5897c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
