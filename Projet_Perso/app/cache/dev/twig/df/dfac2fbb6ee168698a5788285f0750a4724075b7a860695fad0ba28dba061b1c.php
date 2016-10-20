<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9e63c07fb97e70b58a45a33c46cd85059aa26941bee9c1e04f07a100b5077326 extends Twig_Template
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
        $__internal_9441b42b20515c95180093e6450a8694543370d273b1f276c914a13deeec1f41 = $this->env->getExtension("native_profiler");
        $__internal_9441b42b20515c95180093e6450a8694543370d273b1f276c914a13deeec1f41->enter($__internal_9441b42b20515c95180093e6450a8694543370d273b1f276c914a13deeec1f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9441b42b20515c95180093e6450a8694543370d273b1f276c914a13deeec1f41->leave($__internal_9441b42b20515c95180093e6450a8694543370d273b1f276c914a13deeec1f41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
