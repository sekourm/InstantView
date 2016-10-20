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
        $__internal_99519045deaedc6571f5466a45c7b9b3a9ccaef80e3679bc2c5206ff449e51e6 = $this->env->getExtension("native_profiler");
        $__internal_99519045deaedc6571f5466a45c7b9b3a9ccaef80e3679bc2c5206ff449e51e6->enter($__internal_99519045deaedc6571f5466a45c7b9b3a9ccaef80e3679bc2c5206ff449e51e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_99519045deaedc6571f5466a45c7b9b3a9ccaef80e3679bc2c5206ff449e51e6->leave($__internal_99519045deaedc6571f5466a45c7b9b3a9ccaef80e3679bc2c5206ff449e51e6_prof);

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
