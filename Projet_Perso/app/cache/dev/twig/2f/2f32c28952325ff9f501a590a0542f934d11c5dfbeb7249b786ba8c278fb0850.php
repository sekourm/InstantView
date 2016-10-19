<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b08dc7de2ca8035064b43f1787c4e9179d37768777b7d8b205c9cb2aaa6564f2 extends Twig_Template
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
        $__internal_08fb578a11d529be6a73b7b74431e0349ff91a9203357323dfa66450311dc0b2 = $this->env->getExtension("native_profiler");
        $__internal_08fb578a11d529be6a73b7b74431e0349ff91a9203357323dfa66450311dc0b2->enter($__internal_08fb578a11d529be6a73b7b74431e0349ff91a9203357323dfa66450311dc0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_08fb578a11d529be6a73b7b74431e0349ff91a9203357323dfa66450311dc0b2->leave($__internal_08fb578a11d529be6a73b7b74431e0349ff91a9203357323dfa66450311dc0b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
