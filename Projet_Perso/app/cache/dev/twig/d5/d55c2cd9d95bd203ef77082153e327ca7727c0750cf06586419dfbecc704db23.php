<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8751c1869a29454427dd1691a98472ce2da3df6b8f45931877f6edcd2802d1c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_df9cc3c4e040e52fa6ed656dea2cb4ad8a3fcad8538e74cda5246e3c34eb82ee = $this->env->getExtension("native_profiler");
        $__internal_df9cc3c4e040e52fa6ed656dea2cb4ad8a3fcad8538e74cda5246e3c34eb82ee->enter($__internal_df9cc3c4e040e52fa6ed656dea2cb4ad8a3fcad8538e74cda5246e3c34eb82ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df9cc3c4e040e52fa6ed656dea2cb4ad8a3fcad8538e74cda5246e3c34eb82ee->leave($__internal_df9cc3c4e040e52fa6ed656dea2cb4ad8a3fcad8538e74cda5246e3c34eb82ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8def55fd9b06de72be3c64b980b046b4b34eb1186c0730b001e144351deb54f = $this->env->getExtension("native_profiler");
        $__internal_d8def55fd9b06de72be3c64b980b046b4b34eb1186c0730b001e144351deb54f->enter($__internal_d8def55fd9b06de72be3c64b980b046b4b34eb1186c0730b001e144351deb54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8def55fd9b06de72be3c64b980b046b4b34eb1186c0730b001e144351deb54f->leave($__internal_d8def55fd9b06de72be3c64b980b046b4b34eb1186c0730b001e144351deb54f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77ddd90c1a61402909c79adc0e6d8f4b8564bbca76db24d94848b9e6a609afc9 = $this->env->getExtension("native_profiler");
        $__internal_77ddd90c1a61402909c79adc0e6d8f4b8564bbca76db24d94848b9e6a609afc9->enter($__internal_77ddd90c1a61402909c79adc0e6d8f4b8564bbca76db24d94848b9e6a609afc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77ddd90c1a61402909c79adc0e6d8f4b8564bbca76db24d94848b9e6a609afc9->leave($__internal_77ddd90c1a61402909c79adc0e6d8f4b8564bbca76db24d94848b9e6a609afc9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79f56da8abad9f6418b0ade051968ff20fd4ba2a2ee12c51b5d28a645c7c8d1c = $this->env->getExtension("native_profiler");
        $__internal_79f56da8abad9f6418b0ade051968ff20fd4ba2a2ee12c51b5d28a645c7c8d1c->enter($__internal_79f56da8abad9f6418b0ade051968ff20fd4ba2a2ee12c51b5d28a645c7c8d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_79f56da8abad9f6418b0ade051968ff20fd4ba2a2ee12c51b5d28a645c7c8d1c->leave($__internal_79f56da8abad9f6418b0ade051968ff20fd4ba2a2ee12c51b5d28a645c7c8d1c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
