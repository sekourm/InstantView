<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b023fffb39a88f3fc2b1fb1817b35eb546eb231e2e79639b5fb85731b47a0633 extends Twig_Template
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
        $__internal_8ac084b5d7476936b7110db1c3e0d37ff740e8cc294da0349f76a3e71549ae3c = $this->env->getExtension("native_profiler");
        $__internal_8ac084b5d7476936b7110db1c3e0d37ff740e8cc294da0349f76a3e71549ae3c->enter($__internal_8ac084b5d7476936b7110db1c3e0d37ff740e8cc294da0349f76a3e71549ae3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8ac084b5d7476936b7110db1c3e0d37ff740e8cc294da0349f76a3e71549ae3c->leave($__internal_8ac084b5d7476936b7110db1c3e0d37ff740e8cc294da0349f76a3e71549ae3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
