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
        $__internal_8028562b621eabbff530c3fec35fecac93d3212ababdefe5e1fd4024cd54b8ac = $this->env->getExtension("native_profiler");
        $__internal_8028562b621eabbff530c3fec35fecac93d3212ababdefe5e1fd4024cd54b8ac->enter($__internal_8028562b621eabbff530c3fec35fecac93d3212ababdefe5e1fd4024cd54b8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8028562b621eabbff530c3fec35fecac93d3212ababdefe5e1fd4024cd54b8ac->leave($__internal_8028562b621eabbff530c3fec35fecac93d3212ababdefe5e1fd4024cd54b8ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ee77fe2050213d4a4f4e2564734b8cbd5bb4a7f8222587268ae9d44bdd1be41 = $this->env->getExtension("native_profiler");
        $__internal_2ee77fe2050213d4a4f4e2564734b8cbd5bb4a7f8222587268ae9d44bdd1be41->enter($__internal_2ee77fe2050213d4a4f4e2564734b8cbd5bb4a7f8222587268ae9d44bdd1be41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2ee77fe2050213d4a4f4e2564734b8cbd5bb4a7f8222587268ae9d44bdd1be41->leave($__internal_2ee77fe2050213d4a4f4e2564734b8cbd5bb4a7f8222587268ae9d44bdd1be41_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74411ef80755df4fbd360d44ea5ce205f90204fafef213c2af0b4ac98cc6e6f3 = $this->env->getExtension("native_profiler");
        $__internal_74411ef80755df4fbd360d44ea5ce205f90204fafef213c2af0b4ac98cc6e6f3->enter($__internal_74411ef80755df4fbd360d44ea5ce205f90204fafef213c2af0b4ac98cc6e6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74411ef80755df4fbd360d44ea5ce205f90204fafef213c2af0b4ac98cc6e6f3->leave($__internal_74411ef80755df4fbd360d44ea5ce205f90204fafef213c2af0b4ac98cc6e6f3_prof);

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
