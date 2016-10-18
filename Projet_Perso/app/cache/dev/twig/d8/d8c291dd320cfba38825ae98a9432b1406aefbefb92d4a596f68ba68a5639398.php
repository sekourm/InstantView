<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_60be574f962cca572dd0bfc369d73e2ee196f45f42d89ec03c6de95aa3381064 extends Twig_Template
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
        $__internal_e13b56b1cea7e9605cab055ae5cb14d5954e5ab867349c955a9c86363830decf = $this->env->getExtension("native_profiler");
        $__internal_e13b56b1cea7e9605cab055ae5cb14d5954e5ab867349c955a9c86363830decf->enter($__internal_e13b56b1cea7e9605cab055ae5cb14d5954e5ab867349c955a9c86363830decf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e13b56b1cea7e9605cab055ae5cb14d5954e5ab867349c955a9c86363830decf->leave($__internal_e13b56b1cea7e9605cab055ae5cb14d5954e5ab867349c955a9c86363830decf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebdef321bb296712ade2f0b771553d0be6abd970f33c273672f10df2cd1d8941 = $this->env->getExtension("native_profiler");
        $__internal_ebdef321bb296712ade2f0b771553d0be6abd970f33c273672f10df2cd1d8941->enter($__internal_ebdef321bb296712ade2f0b771553d0be6abd970f33c273672f10df2cd1d8941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ebdef321bb296712ade2f0b771553d0be6abd970f33c273672f10df2cd1d8941->leave($__internal_ebdef321bb296712ade2f0b771553d0be6abd970f33c273672f10df2cd1d8941_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_105b57e1a514ef48e7caa04a4aeca9c8c26a531e8c72be65250b08dbc7f8d6a3 = $this->env->getExtension("native_profiler");
        $__internal_105b57e1a514ef48e7caa04a4aeca9c8c26a531e8c72be65250b08dbc7f8d6a3->enter($__internal_105b57e1a514ef48e7caa04a4aeca9c8c26a531e8c72be65250b08dbc7f8d6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_105b57e1a514ef48e7caa04a4aeca9c8c26a531e8c72be65250b08dbc7f8d6a3->leave($__internal_105b57e1a514ef48e7caa04a4aeca9c8c26a531e8c72be65250b08dbc7f8d6a3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3c0ef28cb11156affd495aebf4b9b138d174ff2f140b0c9a665b79323574725 = $this->env->getExtension("native_profiler");
        $__internal_f3c0ef28cb11156affd495aebf4b9b138d174ff2f140b0c9a665b79323574725->enter($__internal_f3c0ef28cb11156affd495aebf4b9b138d174ff2f140b0c9a665b79323574725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f3c0ef28cb11156affd495aebf4b9b138d174ff2f140b0c9a665b79323574725->leave($__internal_f3c0ef28cb11156affd495aebf4b9b138d174ff2f140b0c9a665b79323574725_prof);

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
