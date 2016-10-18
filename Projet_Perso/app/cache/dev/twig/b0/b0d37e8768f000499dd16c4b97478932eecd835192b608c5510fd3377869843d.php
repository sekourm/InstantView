<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_27f63132c4a66cefe54ec37654172247545a541c14399ae0b68a8359afcee753 extends Twig_Template
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
        $__internal_d45cc95212e697bc16707c50b6d9e8b29a123e7ec0e751ff13c766dec684ecdd = $this->env->getExtension("native_profiler");
        $__internal_d45cc95212e697bc16707c50b6d9e8b29a123e7ec0e751ff13c766dec684ecdd->enter($__internal_d45cc95212e697bc16707c50b6d9e8b29a123e7ec0e751ff13c766dec684ecdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d45cc95212e697bc16707c50b6d9e8b29a123e7ec0e751ff13c766dec684ecdd->leave($__internal_d45cc95212e697bc16707c50b6d9e8b29a123e7ec0e751ff13c766dec684ecdd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
