<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9ea2a3d6433eb7e408cd3958645b7fd7163eddaeee41f182bd74f026ef4a1a2c extends Twig_Template
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
        $__internal_c18eb5c99e4a5e462df4740f91482765f35ca83de352a5ae26bff9ddb70afdbb = $this->env->getExtension("native_profiler");
        $__internal_c18eb5c99e4a5e462df4740f91482765f35ca83de352a5ae26bff9ddb70afdbb->enter($__internal_c18eb5c99e4a5e462df4740f91482765f35ca83de352a5ae26bff9ddb70afdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18eb5c99e4a5e462df4740f91482765f35ca83de352a5ae26bff9ddb70afdbb->leave($__internal_c18eb5c99e4a5e462df4740f91482765f35ca83de352a5ae26bff9ddb70afdbb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd7ab6871c03be81232f6386c36756e2c29dbb4678b1693e30121c78baf538bb = $this->env->getExtension("native_profiler");
        $__internal_cd7ab6871c03be81232f6386c36756e2c29dbb4678b1693e30121c78baf538bb->enter($__internal_cd7ab6871c03be81232f6386c36756e2c29dbb4678b1693e30121c78baf538bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd7ab6871c03be81232f6386c36756e2c29dbb4678b1693e30121c78baf538bb->leave($__internal_cd7ab6871c03be81232f6386c36756e2c29dbb4678b1693e30121c78baf538bb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9f6da237408bdde9d63832e025cabb72e7ae6296814119a54bfd69b66ba6ae2 = $this->env->getExtension("native_profiler");
        $__internal_c9f6da237408bdde9d63832e025cabb72e7ae6296814119a54bfd69b66ba6ae2->enter($__internal_c9f6da237408bdde9d63832e025cabb72e7ae6296814119a54bfd69b66ba6ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9f6da237408bdde9d63832e025cabb72e7ae6296814119a54bfd69b66ba6ae2->leave($__internal_c9f6da237408bdde9d63832e025cabb72e7ae6296814119a54bfd69b66ba6ae2_prof);

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
