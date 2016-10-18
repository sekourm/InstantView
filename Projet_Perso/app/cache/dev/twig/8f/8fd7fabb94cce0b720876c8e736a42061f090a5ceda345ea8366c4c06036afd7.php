<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_112de34635081d10a460456f4bbc3ead1e99cbf10a023bd6ddf707b7f728981c extends Twig_Template
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
        $__internal_fc470aa3b2478354207d2b3767270e7c7f2a7372dc516d1f0e59b9266d1ea1e6 = $this->env->getExtension("native_profiler");
        $__internal_fc470aa3b2478354207d2b3767270e7c7f2a7372dc516d1f0e59b9266d1ea1e6->enter($__internal_fc470aa3b2478354207d2b3767270e7c7f2a7372dc516d1f0e59b9266d1ea1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_fc470aa3b2478354207d2b3767270e7c7f2a7372dc516d1f0e59b9266d1ea1e6->leave($__internal_fc470aa3b2478354207d2b3767270e7c7f2a7372dc516d1f0e59b9266d1ea1e6_prof);

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
