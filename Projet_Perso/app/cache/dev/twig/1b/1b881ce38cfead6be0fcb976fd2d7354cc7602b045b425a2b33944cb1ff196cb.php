<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c1a90e1bf50ddae093096da28fceb4b65099e55899c85279c5aecdf198266589 extends Twig_Template
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
        $__internal_742663779e5c5b25af8cd9c16cb6c1d0b1e1fb93a5ff2f7ea907e32bf4404322 = $this->env->getExtension("native_profiler");
        $__internal_742663779e5c5b25af8cd9c16cb6c1d0b1e1fb93a5ff2f7ea907e32bf4404322->enter($__internal_742663779e5c5b25af8cd9c16cb6c1d0b1e1fb93a5ff2f7ea907e32bf4404322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_742663779e5c5b25af8cd9c16cb6c1d0b1e1fb93a5ff2f7ea907e32bf4404322->leave($__internal_742663779e5c5b25af8cd9c16cb6c1d0b1e1fb93a5ff2f7ea907e32bf4404322_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
