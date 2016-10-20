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
        $__internal_46e8be05f20ee872752eb3146e8702fea2f38f5293980dfe4498f3ef040c99f6 = $this->env->getExtension("native_profiler");
        $__internal_46e8be05f20ee872752eb3146e8702fea2f38f5293980dfe4498f3ef040c99f6->enter($__internal_46e8be05f20ee872752eb3146e8702fea2f38f5293980dfe4498f3ef040c99f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_46e8be05f20ee872752eb3146e8702fea2f38f5293980dfe4498f3ef040c99f6->leave($__internal_46e8be05f20ee872752eb3146e8702fea2f38f5293980dfe4498f3ef040c99f6_prof);

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
