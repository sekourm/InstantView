<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_661856b0a4f7d4277df8c19bae15fb8ee843b2730840be54ac91b7f21385642f extends Twig_Template
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
        $__internal_c5e1e8a40eb7990e81e14b4dbc00887e46daef0b64b1c3d2d86df898f78ddb80 = $this->env->getExtension("native_profiler");
        $__internal_c5e1e8a40eb7990e81e14b4dbc00887e46daef0b64b1c3d2d86df898f78ddb80->enter($__internal_c5e1e8a40eb7990e81e14b4dbc00887e46daef0b64b1c3d2d86df898f78ddb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c5e1e8a40eb7990e81e14b4dbc00887e46daef0b64b1c3d2d86df898f78ddb80->leave($__internal_c5e1e8a40eb7990e81e14b4dbc00887e46daef0b64b1c3d2d86df898f78ddb80_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
