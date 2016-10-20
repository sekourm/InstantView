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
        $__internal_066fb0f13125035cba2351d92726c39909d36bd7a4c8467b84dc54da0d8b9607 = $this->env->getExtension("native_profiler");
        $__internal_066fb0f13125035cba2351d92726c39909d36bd7a4c8467b84dc54da0d8b9607->enter($__internal_066fb0f13125035cba2351d92726c39909d36bd7a4c8467b84dc54da0d8b9607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_066fb0f13125035cba2351d92726c39909d36bd7a4c8467b84dc54da0d8b9607->leave($__internal_066fb0f13125035cba2351d92726c39909d36bd7a4c8467b84dc54da0d8b9607_prof);

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
