<?php

/* Default/base.html.twig */
class __TwigTemplate_2998a0d05280c16b98fdcffd1b5422c15ab41ec06212dbd34b288ed30f359d93 extends Twig_Template
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
        $__internal_dac06653486752933f618c40f62e383152ee396d133c6cbb0dbd30e153eaa8ff = $this->env->getExtension("native_profiler");
        $__internal_dac06653486752933f618c40f62e383152ee396d133c6cbb0dbd30e153eaa8ff->enter($__internal_dac06653486752933f618c40f62e383152ee396d133c6cbb0dbd30e153eaa8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/base.html.twig"));

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
        
        $__internal_dac06653486752933f618c40f62e383152ee396d133c6cbb0dbd30e153eaa8ff->leave($__internal_dac06653486752933f618c40f62e383152ee396d133c6cbb0dbd30e153eaa8ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4123a94d6d795c5417840258d225838621b245d05ea396914736fde826834ed2 = $this->env->getExtension("native_profiler");
        $__internal_4123a94d6d795c5417840258d225838621b245d05ea396914736fde826834ed2->enter($__internal_4123a94d6d795c5417840258d225838621b245d05ea396914736fde826834ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "InstantView - Partage et echange tes données.";
        
        $__internal_4123a94d6d795c5417840258d225838621b245d05ea396914736fde826834ed2->leave($__internal_4123a94d6d795c5417840258d225838621b245d05ea396914736fde826834ed2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ca8a792f8c2ca2d8bbb1dd3c408c25ac87bf4f80502f596885f6c89249c043e = $this->env->getExtension("native_profiler");
        $__internal_6ca8a792f8c2ca2d8bbb1dd3c408c25ac87bf4f80502f596885f6c89249c043e->enter($__internal_6ca8a792f8c2ca2d8bbb1dd3c408c25ac87bf4f80502f596885f6c89249c043e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ca8a792f8c2ca2d8bbb1dd3c408c25ac87bf4f80502f596885f6c89249c043e->leave($__internal_6ca8a792f8c2ca2d8bbb1dd3c408c25ac87bf4f80502f596885f6c89249c043e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7440510d9ae2544ceaa9961e8990ccc3a9624fbb0b2991897c29d973b5cd36ad = $this->env->getExtension("native_profiler");
        $__internal_7440510d9ae2544ceaa9961e8990ccc3a9624fbb0b2991897c29d973b5cd36ad->enter($__internal_7440510d9ae2544ceaa9961e8990ccc3a9624fbb0b2991897c29d973b5cd36ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        ";
        
        $__internal_7440510d9ae2544ceaa9961e8990ccc3a9624fbb0b2991897c29d973b5cd36ad->leave($__internal_7440510d9ae2544ceaa9961e8990ccc3a9624fbb0b2991897c29d973b5cd36ad_prof);

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
