<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_14300f0d421e50c51b154e413ae860d4ce8bcbc323a0f1324f3adcdf31b529f0 extends Twig_Template
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
        $__internal_ef773de98b8b6617064d11f544e9b6fc93ab34571beeadf03e246c6f7001be27 = $this->env->getExtension("native_profiler");
        $__internal_ef773de98b8b6617064d11f544e9b6fc93ab34571beeadf03e246c6f7001be27->enter($__internal_ef773de98b8b6617064d11f544e9b6fc93ab34571beeadf03e246c6f7001be27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ef773de98b8b6617064d11f544e9b6fc93ab34571beeadf03e246c6f7001be27->leave($__internal_ef773de98b8b6617064d11f544e9b6fc93ab34571beeadf03e246c6f7001be27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
