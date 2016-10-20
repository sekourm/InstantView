<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5f0143455895fa3374c20168b9988e22dc97b7a4eb70b186bbe8d43858d6ae82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_26cab875b355c241a4ba57893b8dec3fb978b9c3c8162694dd5429f7dfcfd330 = $this->env->getExtension("native_profiler");
        $__internal_26cab875b355c241a4ba57893b8dec3fb978b9c3c8162694dd5429f7dfcfd330->enter($__internal_26cab875b355c241a4ba57893b8dec3fb978b9c3c8162694dd5429f7dfcfd330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26cab875b355c241a4ba57893b8dec3fb978b9c3c8162694dd5429f7dfcfd330->leave($__internal_26cab875b355c241a4ba57893b8dec3fb978b9c3c8162694dd5429f7dfcfd330_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2529d119cde76b1e786f684d36e85aa495f53aedc28d8a1546fb59dd692a7059 = $this->env->getExtension("native_profiler");
        $__internal_2529d119cde76b1e786f684d36e85aa495f53aedc28d8a1546fb59dd692a7059->enter($__internal_2529d119cde76b1e786f684d36e85aa495f53aedc28d8a1546fb59dd692a7059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2529d119cde76b1e786f684d36e85aa495f53aedc28d8a1546fb59dd692a7059->leave($__internal_2529d119cde76b1e786f684d36e85aa495f53aedc28d8a1546fb59dd692a7059_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5686680eff37eb4a7c1ee4daabde767fb5c74d370e45a5f3b3b386926d1c16e4 = $this->env->getExtension("native_profiler");
        $__internal_5686680eff37eb4a7c1ee4daabde767fb5c74d370e45a5f3b3b386926d1c16e4->enter($__internal_5686680eff37eb4a7c1ee4daabde767fb5c74d370e45a5f3b3b386926d1c16e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5686680eff37eb4a7c1ee4daabde767fb5c74d370e45a5f3b3b386926d1c16e4->leave($__internal_5686680eff37eb4a7c1ee4daabde767fb5c74d370e45a5f3b3b386926d1c16e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_881d9f2e11832b5ecaa44e3bd501cedbeab95c27ee1b1df271f2de3898d4b917 = $this->env->getExtension("native_profiler");
        $__internal_881d9f2e11832b5ecaa44e3bd501cedbeab95c27ee1b1df271f2de3898d4b917->enter($__internal_881d9f2e11832b5ecaa44e3bd501cedbeab95c27ee1b1df271f2de3898d4b917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_881d9f2e11832b5ecaa44e3bd501cedbeab95c27ee1b1df271f2de3898d4b917->leave($__internal_881d9f2e11832b5ecaa44e3bd501cedbeab95c27ee1b1df271f2de3898d4b917_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
