<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e23a2bfcda672b2b8155a5ba671d9eb4fbc4ddeb164d985330b8f5e76181a534 extends Twig_Template
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
        $__internal_6c2eafe005ffed4bfb10515e5af28a797ea99c4709b54eaf9f6098d241614c9f = $this->env->getExtension("native_profiler");
        $__internal_6c2eafe005ffed4bfb10515e5af28a797ea99c4709b54eaf9f6098d241614c9f->enter($__internal_6c2eafe005ffed4bfb10515e5af28a797ea99c4709b54eaf9f6098d241614c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c2eafe005ffed4bfb10515e5af28a797ea99c4709b54eaf9f6098d241614c9f->leave($__internal_6c2eafe005ffed4bfb10515e5af28a797ea99c4709b54eaf9f6098d241614c9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ce107e127262d2b076d939b386e1f7f9f47c2c6425af495edf1e0ba8fda149d = $this->env->getExtension("native_profiler");
        $__internal_3ce107e127262d2b076d939b386e1f7f9f47c2c6425af495edf1e0ba8fda149d->enter($__internal_3ce107e127262d2b076d939b386e1f7f9f47c2c6425af495edf1e0ba8fda149d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ce107e127262d2b076d939b386e1f7f9f47c2c6425af495edf1e0ba8fda149d->leave($__internal_3ce107e127262d2b076d939b386e1f7f9f47c2c6425af495edf1e0ba8fda149d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a67e3e4ebde76f10b34822fabb4cd701e7a157933c5f184a65c745e523c2a97 = $this->env->getExtension("native_profiler");
        $__internal_3a67e3e4ebde76f10b34822fabb4cd701e7a157933c5f184a65c745e523c2a97->enter($__internal_3a67e3e4ebde76f10b34822fabb4cd701e7a157933c5f184a65c745e523c2a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a67e3e4ebde76f10b34822fabb4cd701e7a157933c5f184a65c745e523c2a97->leave($__internal_3a67e3e4ebde76f10b34822fabb4cd701e7a157933c5f184a65c745e523c2a97_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b7a7a26c6cd8b628ae01c7ecb8459e2cf60fee37dee8c85110e7fd107e0ac8c = $this->env->getExtension("native_profiler");
        $__internal_4b7a7a26c6cd8b628ae01c7ecb8459e2cf60fee37dee8c85110e7fd107e0ac8c->enter($__internal_4b7a7a26c6cd8b628ae01c7ecb8459e2cf60fee37dee8c85110e7fd107e0ac8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b7a7a26c6cd8b628ae01c7ecb8459e2cf60fee37dee8c85110e7fd107e0ac8c->leave($__internal_4b7a7a26c6cd8b628ae01c7ecb8459e2cf60fee37dee8c85110e7fd107e0ac8c_prof);

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
