<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f5b2ad8b1fc3f7440e93796bf34a5a902783b8508f64d9693775a4ea96cdc91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_66861f5e2a092e71ea7e2925bc74abb729901ddd2bebdbc70ef9d83d657ced73 = $this->env->getExtension("native_profiler");
        $__internal_66861f5e2a092e71ea7e2925bc74abb729901ddd2bebdbc70ef9d83d657ced73->enter($__internal_66861f5e2a092e71ea7e2925bc74abb729901ddd2bebdbc70ef9d83d657ced73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66861f5e2a092e71ea7e2925bc74abb729901ddd2bebdbc70ef9d83d657ced73->leave($__internal_66861f5e2a092e71ea7e2925bc74abb729901ddd2bebdbc70ef9d83d657ced73_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc7aeb434a2d9a2a144e3dcf5a70a7bdef2572e07dc457a8cd7844f692d28f22 = $this->env->getExtension("native_profiler");
        $__internal_fc7aeb434a2d9a2a144e3dcf5a70a7bdef2572e07dc457a8cd7844f692d28f22->enter($__internal_fc7aeb434a2d9a2a144e3dcf5a70a7bdef2572e07dc457a8cd7844f692d28f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fc7aeb434a2d9a2a144e3dcf5a70a7bdef2572e07dc457a8cd7844f692d28f22->leave($__internal_fc7aeb434a2d9a2a144e3dcf5a70a7bdef2572e07dc457a8cd7844f692d28f22_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_46fa5fae0ac66614e00c549ec307f7a20b56e08a48b1353f67f82de4a544e403 = $this->env->getExtension("native_profiler");
        $__internal_46fa5fae0ac66614e00c549ec307f7a20b56e08a48b1353f67f82de4a544e403->enter($__internal_46fa5fae0ac66614e00c549ec307f7a20b56e08a48b1353f67f82de4a544e403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_46fa5fae0ac66614e00c549ec307f7a20b56e08a48b1353f67f82de4a544e403->leave($__internal_46fa5fae0ac66614e00c549ec307f7a20b56e08a48b1353f67f82de4a544e403_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
