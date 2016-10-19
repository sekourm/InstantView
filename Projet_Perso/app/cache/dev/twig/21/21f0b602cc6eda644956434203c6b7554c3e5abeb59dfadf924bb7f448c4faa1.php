<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_62997b4182ee9d68f5c929d8f35038a9cbfe7cec6065451a10768379ef3ef711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2036c759a22b19bc2449c966fec4ac2e8a8f27b4404c1ec5a662b250169af935 = $this->env->getExtension("native_profiler");
        $__internal_2036c759a22b19bc2449c966fec4ac2e8a8f27b4404c1ec5a662b250169af935->enter($__internal_2036c759a22b19bc2449c966fec4ac2e8a8f27b4404c1ec5a662b250169af935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2036c759a22b19bc2449c966fec4ac2e8a8f27b4404c1ec5a662b250169af935->leave($__internal_2036c759a22b19bc2449c966fec4ac2e8a8f27b4404c1ec5a662b250169af935_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90ec5bb37b037d7ec7594c146c6b5450960b1313f9e43b7b67166943189a3afc = $this->env->getExtension("native_profiler");
        $__internal_90ec5bb37b037d7ec7594c146c6b5450960b1313f9e43b7b67166943189a3afc->enter($__internal_90ec5bb37b037d7ec7594c146c6b5450960b1313f9e43b7b67166943189a3afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_90ec5bb37b037d7ec7594c146c6b5450960b1313f9e43b7b67166943189a3afc->leave($__internal_90ec5bb37b037d7ec7594c146c6b5450960b1313f9e43b7b67166943189a3afc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_417e009502665f5bdef478f4413a55ec9a0461cf672566a70c2a557b3492e868 = $this->env->getExtension("native_profiler");
        $__internal_417e009502665f5bdef478f4413a55ec9a0461cf672566a70c2a557b3492e868->enter($__internal_417e009502665f5bdef478f4413a55ec9a0461cf672566a70c2a557b3492e868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_417e009502665f5bdef478f4413a55ec9a0461cf672566a70c2a557b3492e868->leave($__internal_417e009502665f5bdef478f4413a55ec9a0461cf672566a70c2a557b3492e868_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e469a4cedb6f0ce57b7419dbf048339dd15696950a7cfcd3856c34d5b495e1a5 = $this->env->getExtension("native_profiler");
        $__internal_e469a4cedb6f0ce57b7419dbf048339dd15696950a7cfcd3856c34d5b495e1a5->enter($__internal_e469a4cedb6f0ce57b7419dbf048339dd15696950a7cfcd3856c34d5b495e1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e469a4cedb6f0ce57b7419dbf048339dd15696950a7cfcd3856c34d5b495e1a5->leave($__internal_e469a4cedb6f0ce57b7419dbf048339dd15696950a7cfcd3856c34d5b495e1a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
