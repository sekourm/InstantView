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
        $__internal_06218968a42bffd16bdb5bc08457f80171126c2023fea38d733f1d2bb4b221f4 = $this->env->getExtension("native_profiler");
        $__internal_06218968a42bffd16bdb5bc08457f80171126c2023fea38d733f1d2bb4b221f4->enter($__internal_06218968a42bffd16bdb5bc08457f80171126c2023fea38d733f1d2bb4b221f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_06218968a42bffd16bdb5bc08457f80171126c2023fea38d733f1d2bb4b221f4->leave($__internal_06218968a42bffd16bdb5bc08457f80171126c2023fea38d733f1d2bb4b221f4_prof);

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
