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
        $__internal_08267c846842e313612dbbd85ff4045264240236bd411b7f30b3ed1173a839b2 = $this->env->getExtension("native_profiler");
        $__internal_08267c846842e313612dbbd85ff4045264240236bd411b7f30b3ed1173a839b2->enter($__internal_08267c846842e313612dbbd85ff4045264240236bd411b7f30b3ed1173a839b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/base.html.twig"));

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
        
        $__internal_08267c846842e313612dbbd85ff4045264240236bd411b7f30b3ed1173a839b2->leave($__internal_08267c846842e313612dbbd85ff4045264240236bd411b7f30b3ed1173a839b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e747c3aae81a29560a47ffffb6a88c36dc40568ca13e8d510cad3f92f86b081 = $this->env->getExtension("native_profiler");
        $__internal_3e747c3aae81a29560a47ffffb6a88c36dc40568ca13e8d510cad3f92f86b081->enter($__internal_3e747c3aae81a29560a47ffffb6a88c36dc40568ca13e8d510cad3f92f86b081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "InstantView - Partage et echange tes données.";
        
        $__internal_3e747c3aae81a29560a47ffffb6a88c36dc40568ca13e8d510cad3f92f86b081->leave($__internal_3e747c3aae81a29560a47ffffb6a88c36dc40568ca13e8d510cad3f92f86b081_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f577d094ea879cdf68ae8a1e861a0446b1a6bcfa6821fd4c6c1721640a95e934 = $this->env->getExtension("native_profiler");
        $__internal_f577d094ea879cdf68ae8a1e861a0446b1a6bcfa6821fd4c6c1721640a95e934->enter($__internal_f577d094ea879cdf68ae8a1e861a0446b1a6bcfa6821fd4c6c1721640a95e934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f577d094ea879cdf68ae8a1e861a0446b1a6bcfa6821fd4c6c1721640a95e934->leave($__internal_f577d094ea879cdf68ae8a1e861a0446b1a6bcfa6821fd4c6c1721640a95e934_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_76b3760f97def48592b97343b15fd1ce157ed69912bd7a5ac446711778f7e1b6 = $this->env->getExtension("native_profiler");
        $__internal_76b3760f97def48592b97343b15fd1ce157ed69912bd7a5ac446711778f7e1b6->enter($__internal_76b3760f97def48592b97343b15fd1ce157ed69912bd7a5ac446711778f7e1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        ";
        
        $__internal_76b3760f97def48592b97343b15fd1ce157ed69912bd7a5ac446711778f7e1b6->leave($__internal_76b3760f97def48592b97343b15fd1ce157ed69912bd7a5ac446711778f7e1b6_prof);

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
