<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f68e95041b8344ede0d05028017f0e2ea609b16b980b13bd4a7439b6655bc635 extends Twig_Template
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
        $__internal_d68371c2d01ee72412e43347dd0569a77a1ae9418456180a503ac899ebbd0f3d = $this->env->getExtension("native_profiler");
        $__internal_d68371c2d01ee72412e43347dd0569a77a1ae9418456180a503ac899ebbd0f3d->enter($__internal_d68371c2d01ee72412e43347dd0569a77a1ae9418456180a503ac899ebbd0f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d68371c2d01ee72412e43347dd0569a77a1ae9418456180a503ac899ebbd0f3d->leave($__internal_d68371c2d01ee72412e43347dd0569a77a1ae9418456180a503ac899ebbd0f3d_prof);

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
