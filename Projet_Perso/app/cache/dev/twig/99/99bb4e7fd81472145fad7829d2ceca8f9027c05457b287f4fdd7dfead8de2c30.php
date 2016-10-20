<?php

/* Default/base.html.twig */
class __TwigTemplate_9ca1cf3a4e8e063853d5788e02e1c21525e040957f20fb51f73337f25cd953b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2929899dad54728f3828dfe9939c8bc300ca29c198bf6c476f18e3cc3528991e = $this->env->getExtension("native_profiler");
        $__internal_2929899dad54728f3828dfe9939c8bc300ca29c198bf6c476f18e3cc3528991e->enter($__internal_2929899dad54728f3828dfe9939c8bc300ca29c198bf6c476f18e3cc3528991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/alert.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_2929899dad54728f3828dfe9939c8bc300ca29c198bf6c476f18e3cc3528991e->leave($__internal_2929899dad54728f3828dfe9939c8bc300ca29c198bf6c476f18e3cc3528991e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8039c63c3011bc5fb6e11d314fbfb7fc1335b8c262d121a11baed0d6c00a9ab = $this->env->getExtension("native_profiler");
        $__internal_b8039c63c3011bc5fb6e11d314fbfb7fc1335b8c262d121a11baed0d6c00a9ab->enter($__internal_b8039c63c3011bc5fb6e11d314fbfb7fc1335b8c262d121a11baed0d6c00a9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "InstantView - Partage et echange tes données.";
        
        $__internal_b8039c63c3011bc5fb6e11d314fbfb7fc1335b8c262d121a11baed0d6c00a9ab->leave($__internal_b8039c63c3011bc5fb6e11d314fbfb7fc1335b8c262d121a11baed0d6c00a9ab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a497a94c535b60d565056de887278174af96bdb10a0c437589b661ef0d6583fe = $this->env->getExtension("native_profiler");
        $__internal_a497a94c535b60d565056de887278174af96bdb10a0c437589b661ef0d6583fe->enter($__internal_a497a94c535b60d565056de887278174af96bdb10a0c437589b661ef0d6583fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a497a94c535b60d565056de887278174af96bdb10a0c437589b661ef0d6583fe->leave($__internal_a497a94c535b60d565056de887278174af96bdb10a0c437589b661ef0d6583fe_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe9facd5be84cbdb2e1e42da24d0fd6964a0339ca4692d53f8cd9dcd25bbd5e1 = $this->env->getExtension("native_profiler");
        $__internal_fe9facd5be84cbdb2e1e42da24d0fd6964a0339ca4692d53f8cd9dcd25bbd5e1->enter($__internal_fe9facd5be84cbdb2e1e42da24d0fd6964a0339ca4692d53f8cd9dcd25bbd5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        ";
        
        $__internal_fe9facd5be84cbdb2e1e42da24d0fd6964a0339ca4692d53f8cd9dcd25bbd5e1->leave($__internal_fe9facd5be84cbdb2e1e42da24d0fd6964a0339ca4692d53f8cd9dcd25bbd5e1_prof);

    }

    public function getTemplateName()
    {
        return "Default/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  90 => 13,  79 => 6,  67 => 5,  58 => 16,  56 => 13,  50 => 10,  46 => 9,  42 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}InstantView - Partage et echange tes données.{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <script src="{{ asset('js/jquery.js') }}"></script>*/
/*         <script src="{{ asset('js/alert.js') }}"></script>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
