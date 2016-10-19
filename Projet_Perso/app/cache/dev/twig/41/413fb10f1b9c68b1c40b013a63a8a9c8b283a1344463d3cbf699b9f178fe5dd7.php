<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5f0143455895fa3374c20168b9988e22dc97b7a4eb70b186bbe8d43858d6ae82 extends Twig_Template
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
        $__internal_78758b33873342008b878f2f4a96634723df7c35f2199913a05cbc936a1039cb = $this->env->getExtension("native_profiler");
        $__internal_78758b33873342008b878f2f4a96634723df7c35f2199913a05cbc936a1039cb->enter($__internal_78758b33873342008b878f2f4a96634723df7c35f2199913a05cbc936a1039cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78758b33873342008b878f2f4a96634723df7c35f2199913a05cbc936a1039cb->leave($__internal_78758b33873342008b878f2f4a96634723df7c35f2199913a05cbc936a1039cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f0cd5d87933a0fc2477b8cc255521703300d25482ae3f52eaf4110e5edc464f = $this->env->getExtension("native_profiler");
        $__internal_5f0cd5d87933a0fc2477b8cc255521703300d25482ae3f52eaf4110e5edc464f->enter($__internal_5f0cd5d87933a0fc2477b8cc255521703300d25482ae3f52eaf4110e5edc464f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f0cd5d87933a0fc2477b8cc255521703300d25482ae3f52eaf4110e5edc464f->leave($__internal_5f0cd5d87933a0fc2477b8cc255521703300d25482ae3f52eaf4110e5edc464f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a63340f86e4dd11c52ecec3fa96242e35036372261b8f7778018e8925fffb91 = $this->env->getExtension("native_profiler");
        $__internal_0a63340f86e4dd11c52ecec3fa96242e35036372261b8f7778018e8925fffb91->enter($__internal_0a63340f86e4dd11c52ecec3fa96242e35036372261b8f7778018e8925fffb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a63340f86e4dd11c52ecec3fa96242e35036372261b8f7778018e8925fffb91->leave($__internal_0a63340f86e4dd11c52ecec3fa96242e35036372261b8f7778018e8925fffb91_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b454dd152847f4f6a98bfa144ff0f3c087687057ab5797c60170ce063d44061c = $this->env->getExtension("native_profiler");
        $__internal_b454dd152847f4f6a98bfa144ff0f3c087687057ab5797c60170ce063d44061c->enter($__internal_b454dd152847f4f6a98bfa144ff0f3c087687057ab5797c60170ce063d44061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b454dd152847f4f6a98bfa144ff0f3c087687057ab5797c60170ce063d44061c->leave($__internal_b454dd152847f4f6a98bfa144ff0f3c087687057ab5797c60170ce063d44061c_prof);

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
