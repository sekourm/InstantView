<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_19f056a41933c510baeb52ade4bd0aab38c3a511643652ccef39ddbb62f76443 extends Twig_Template
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
        $__internal_c27ff610857bb17c94582ae1c2440d500bb4e4993557a389154cfd99636a8418 = $this->env->getExtension("native_profiler");
        $__internal_c27ff610857bb17c94582ae1c2440d500bb4e4993557a389154cfd99636a8418->enter($__internal_c27ff610857bb17c94582ae1c2440d500bb4e4993557a389154cfd99636a8418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_c27ff610857bb17c94582ae1c2440d500bb4e4993557a389154cfd99636a8418->leave($__internal_c27ff610857bb17c94582ae1c2440d500bb4e4993557a389154cfd99636a8418_prof);

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
