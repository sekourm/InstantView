<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_21e4ec00c54f447a1f5e8df012534a30493979b72188e3cde5e509b3daa7e19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_271bbc22d3f4db6197be17949651b15e92e47ad2b9af974ece1e22eed7bf6d1c = $this->env->getExtension("native_profiler");
        $__internal_271bbc22d3f4db6197be17949651b15e92e47ad2b9af974ece1e22eed7bf6d1c->enter($__internal_271bbc22d3f4db6197be17949651b15e92e47ad2b9af974ece1e22eed7bf6d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_271bbc22d3f4db6197be17949651b15e92e47ad2b9af974ece1e22eed7bf6d1c->leave($__internal_271bbc22d3f4db6197be17949651b15e92e47ad2b9af974ece1e22eed7bf6d1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f5b0a949ad3bc9ea24d5f855bb8e7a3079c7bcfe0423518a73ccd14d2a97507 = $this->env->getExtension("native_profiler");
        $__internal_7f5b0a949ad3bc9ea24d5f855bb8e7a3079c7bcfe0423518a73ccd14d2a97507->enter($__internal_7f5b0a949ad3bc9ea24d5f855bb8e7a3079c7bcfe0423518a73ccd14d2a97507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7f5b0a949ad3bc9ea24d5f855bb8e7a3079c7bcfe0423518a73ccd14d2a97507->leave($__internal_7f5b0a949ad3bc9ea24d5f855bb8e7a3079c7bcfe0423518a73ccd14d2a97507_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6144b2a2059503fe101e00e15d885f3503063d28fbd0efdb12b606453369c624 = $this->env->getExtension("native_profiler");
        $__internal_6144b2a2059503fe101e00e15d885f3503063d28fbd0efdb12b606453369c624->enter($__internal_6144b2a2059503fe101e00e15d885f3503063d28fbd0efdb12b606453369c624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6144b2a2059503fe101e00e15d885f3503063d28fbd0efdb12b606453369c624->leave($__internal_6144b2a2059503fe101e00e15d885f3503063d28fbd0efdb12b606453369c624_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec51409be0165499c73d5fa3b83e4b73f97c2eba73945d2137c7f0d1fa4c57aa = $this->env->getExtension("native_profiler");
        $__internal_ec51409be0165499c73d5fa3b83e4b73f97c2eba73945d2137c7f0d1fa4c57aa->enter($__internal_ec51409be0165499c73d5fa3b83e4b73f97c2eba73945d2137c7f0d1fa4c57aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ec51409be0165499c73d5fa3b83e4b73f97c2eba73945d2137c7f0d1fa4c57aa->leave($__internal_ec51409be0165499c73d5fa3b83e4b73f97c2eba73945d2137c7f0d1fa4c57aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
