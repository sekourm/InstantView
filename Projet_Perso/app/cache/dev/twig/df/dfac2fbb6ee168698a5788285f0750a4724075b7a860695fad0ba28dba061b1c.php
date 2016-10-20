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
        $__internal_5d4466213c66829dfc58e27227aa4985c4973478b37a472cbaa0f4192c4697f3 = $this->env->getExtension("native_profiler");
        $__internal_5d4466213c66829dfc58e27227aa4985c4973478b37a472cbaa0f4192c4697f3->enter($__internal_5d4466213c66829dfc58e27227aa4985c4973478b37a472cbaa0f4192c4697f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5d4466213c66829dfc58e27227aa4985c4973478b37a472cbaa0f4192c4697f3->leave($__internal_5d4466213c66829dfc58e27227aa4985c4973478b37a472cbaa0f4192c4697f3_prof);

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
