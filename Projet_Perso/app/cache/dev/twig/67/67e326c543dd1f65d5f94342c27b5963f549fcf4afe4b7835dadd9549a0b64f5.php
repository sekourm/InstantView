<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d9db2a17653b7acfe30ab422577eee379f63636a263b6ff696a794f23c61849a extends Twig_Template
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
        $__internal_eabd29392260cd823ac624b58a1d4d26c6f7a46231e147c6157b744634d6ce45 = $this->env->getExtension("native_profiler");
        $__internal_eabd29392260cd823ac624b58a1d4d26c6f7a46231e147c6157b744634d6ce45->enter($__internal_eabd29392260cd823ac624b58a1d4d26c6f7a46231e147c6157b744634d6ce45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_eabd29392260cd823ac624b58a1d4d26c6f7a46231e147c6157b744634d6ce45->leave($__internal_eabd29392260cd823ac624b58a1d4d26c6f7a46231e147c6157b744634d6ce45_prof);

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
