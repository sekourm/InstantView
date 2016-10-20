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
        $__internal_688a016997e1de98ea719e642f286a5102b489563c75cb16538f7db74146f26c = $this->env->getExtension("native_profiler");
        $__internal_688a016997e1de98ea719e642f286a5102b489563c75cb16538f7db74146f26c->enter($__internal_688a016997e1de98ea719e642f286a5102b489563c75cb16538f7db74146f26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_688a016997e1de98ea719e642f286a5102b489563c75cb16538f7db74146f26c->leave($__internal_688a016997e1de98ea719e642f286a5102b489563c75cb16538f7db74146f26c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb12659665864b9e5d6fef5a3fb10641fef0b6fd333852cf69d05b2407ae67b7 = $this->env->getExtension("native_profiler");
        $__internal_bb12659665864b9e5d6fef5a3fb10641fef0b6fd333852cf69d05b2407ae67b7->enter($__internal_bb12659665864b9e5d6fef5a3fb10641fef0b6fd333852cf69d05b2407ae67b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bb12659665864b9e5d6fef5a3fb10641fef0b6fd333852cf69d05b2407ae67b7->leave($__internal_bb12659665864b9e5d6fef5a3fb10641fef0b6fd333852cf69d05b2407ae67b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0acdecbc72ac488b237dcc35415fb4bd9bdbda39f5fcfec05274b15f1c9e176a = $this->env->getExtension("native_profiler");
        $__internal_0acdecbc72ac488b237dcc35415fb4bd9bdbda39f5fcfec05274b15f1c9e176a->enter($__internal_0acdecbc72ac488b237dcc35415fb4bd9bdbda39f5fcfec05274b15f1c9e176a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0acdecbc72ac488b237dcc35415fb4bd9bdbda39f5fcfec05274b15f1c9e176a->leave($__internal_0acdecbc72ac488b237dcc35415fb4bd9bdbda39f5fcfec05274b15f1c9e176a_prof);

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
