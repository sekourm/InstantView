<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_77fe2f405fdcddab80dc6055709357ff31a44a489ac8365b5a48cb70c4935174 extends Twig_Template
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
        $__internal_cb358ce103d09932dfa3477d534c8e569364b249b53178abaa67c3b3341a1747 = $this->env->getExtension("native_profiler");
        $__internal_cb358ce103d09932dfa3477d534c8e569364b249b53178abaa67c3b3341a1747->enter($__internal_cb358ce103d09932dfa3477d534c8e569364b249b53178abaa67c3b3341a1747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cb358ce103d09932dfa3477d534c8e569364b249b53178abaa67c3b3341a1747->leave($__internal_cb358ce103d09932dfa3477d534c8e569364b249b53178abaa67c3b3341a1747_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
