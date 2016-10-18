<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fddbb98e553c9d1ef5b5803ece85f82131556babdad0efe62e996c94a183c6e3 extends Twig_Template
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
        $__internal_9633c6a9d5a70525ccc838f9ea0bab5e560ad1cadf2c8534ffc090a5ff3103c8 = $this->env->getExtension("native_profiler");
        $__internal_9633c6a9d5a70525ccc838f9ea0bab5e560ad1cadf2c8534ffc090a5ff3103c8->enter($__internal_9633c6a9d5a70525ccc838f9ea0bab5e560ad1cadf2c8534ffc090a5ff3103c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9633c6a9d5a70525ccc838f9ea0bab5e560ad1cadf2c8534ffc090a5ff3103c8->leave($__internal_9633c6a9d5a70525ccc838f9ea0bab5e560ad1cadf2c8534ffc090a5ff3103c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee82a509c34bc037532fbb75c06b49daeb95ccf911357d360748c6dbc42d2298 = $this->env->getExtension("native_profiler");
        $__internal_ee82a509c34bc037532fbb75c06b49daeb95ccf911357d360748c6dbc42d2298->enter($__internal_ee82a509c34bc037532fbb75c06b49daeb95ccf911357d360748c6dbc42d2298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee82a509c34bc037532fbb75c06b49daeb95ccf911357d360748c6dbc42d2298->leave($__internal_ee82a509c34bc037532fbb75c06b49daeb95ccf911357d360748c6dbc42d2298_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_908da48dbd02a89beec94ef1ce10a676ab511bad63a73c7eafbe98ba6b94cce5 = $this->env->getExtension("native_profiler");
        $__internal_908da48dbd02a89beec94ef1ce10a676ab511bad63a73c7eafbe98ba6b94cce5->enter($__internal_908da48dbd02a89beec94ef1ce10a676ab511bad63a73c7eafbe98ba6b94cce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_908da48dbd02a89beec94ef1ce10a676ab511bad63a73c7eafbe98ba6b94cce5->leave($__internal_908da48dbd02a89beec94ef1ce10a676ab511bad63a73c7eafbe98ba6b94cce5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d79b1296ca7a456a86d387a82f79ee407293f09f0b7ad2311c3f38d69063ba1 = $this->env->getExtension("native_profiler");
        $__internal_6d79b1296ca7a456a86d387a82f79ee407293f09f0b7ad2311c3f38d69063ba1->enter($__internal_6d79b1296ca7a456a86d387a82f79ee407293f09f0b7ad2311c3f38d69063ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6d79b1296ca7a456a86d387a82f79ee407293f09f0b7ad2311c3f38d69063ba1->leave($__internal_6d79b1296ca7a456a86d387a82f79ee407293f09f0b7ad2311c3f38d69063ba1_prof);

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
