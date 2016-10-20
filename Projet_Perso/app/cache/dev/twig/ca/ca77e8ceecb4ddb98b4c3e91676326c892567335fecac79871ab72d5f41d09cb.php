<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_44ea19e774036302aa0739fce1386ef8eefc47f10b37a54348aadbe688100a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f308cd510506894308e7e2f58e21b30071b927e9c80b4b901a5a374b9b82a3c4 = $this->env->getExtension("native_profiler");
        $__internal_f308cd510506894308e7e2f58e21b30071b927e9c80b4b901a5a374b9b82a3c4->enter($__internal_f308cd510506894308e7e2f58e21b30071b927e9c80b4b901a5a374b9b82a3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f308cd510506894308e7e2f58e21b30071b927e9c80b4b901a5a374b9b82a3c4->leave($__internal_f308cd510506894308e7e2f58e21b30071b927e9c80b4b901a5a374b9b82a3c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29b47dabc71e2813c3f4a6a7accb8f13b4e09b853c088ef2f3ff9a25fe280bbf = $this->env->getExtension("native_profiler");
        $__internal_29b47dabc71e2813c3f4a6a7accb8f13b4e09b853c088ef2f3ff9a25fe280bbf->enter($__internal_29b47dabc71e2813c3f4a6a7accb8f13b4e09b853c088ef2f3ff9a25fe280bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_29b47dabc71e2813c3f4a6a7accb8f13b4e09b853c088ef2f3ff9a25fe280bbf->leave($__internal_29b47dabc71e2813c3f4a6a7accb8f13b4e09b853c088ef2f3ff9a25fe280bbf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d5f906611adeb1d817dab6e3535231cf1bbb01dae366529b40338896814c664 = $this->env->getExtension("native_profiler");
        $__internal_3d5f906611adeb1d817dab6e3535231cf1bbb01dae366529b40338896814c664->enter($__internal_3d5f906611adeb1d817dab6e3535231cf1bbb01dae366529b40338896814c664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3d5f906611adeb1d817dab6e3535231cf1bbb01dae366529b40338896814c664->leave($__internal_3d5f906611adeb1d817dab6e3535231cf1bbb01dae366529b40338896814c664_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d34ba7490d4a806546dfc5a6f7426775bb29a3acbd931bf0dad2583ef653bba = $this->env->getExtension("native_profiler");
        $__internal_6d34ba7490d4a806546dfc5a6f7426775bb29a3acbd931bf0dad2583ef653bba->enter($__internal_6d34ba7490d4a806546dfc5a6f7426775bb29a3acbd931bf0dad2583ef653bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6d34ba7490d4a806546dfc5a6f7426775bb29a3acbd931bf0dad2583ef653bba->leave($__internal_6d34ba7490d4a806546dfc5a6f7426775bb29a3acbd931bf0dad2583ef653bba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
