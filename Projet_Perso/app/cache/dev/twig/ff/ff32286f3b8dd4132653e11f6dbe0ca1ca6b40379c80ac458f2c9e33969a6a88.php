<?php

/* Default/base.html.twig */
class __TwigTemplate_f0ec0e40a3b37da23511e1910c1b2ab76031dd8b2f34dccd00b6f9c34c7f72bb extends Twig_Template
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
        $__internal_8f3be8fd1146ae44753c82459fa90683a21d010db94c0b0cd65f5cab430ea3df = $this->env->getExtension("native_profiler");
        $__internal_8f3be8fd1146ae44753c82459fa90683a21d010db94c0b0cd65f5cab430ea3df->enter($__internal_8f3be8fd1146ae44753c82459fa90683a21d010db94c0b0cd65f5cab430ea3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/base.html.twig"));

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
        
        $__internal_8f3be8fd1146ae44753c82459fa90683a21d010db94c0b0cd65f5cab430ea3df->leave($__internal_8f3be8fd1146ae44753c82459fa90683a21d010db94c0b0cd65f5cab430ea3df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3be72ae11ee77a410085baa4622a5f9016a74553a3f3d354d974c4d8cee2fb68 = $this->env->getExtension("native_profiler");
        $__internal_3be72ae11ee77a410085baa4622a5f9016a74553a3f3d354d974c4d8cee2fb68->enter($__internal_3be72ae11ee77a410085baa4622a5f9016a74553a3f3d354d974c4d8cee2fb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "InstantView - Partage et echange tes données.";
        
        $__internal_3be72ae11ee77a410085baa4622a5f9016a74553a3f3d354d974c4d8cee2fb68->leave($__internal_3be72ae11ee77a410085baa4622a5f9016a74553a3f3d354d974c4d8cee2fb68_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d088b2a6833d5087b0065a28510246917338dd48edd0621392f56e45c3f1643 = $this->env->getExtension("native_profiler");
        $__internal_5d088b2a6833d5087b0065a28510246917338dd48edd0621392f56e45c3f1643->enter($__internal_5d088b2a6833d5087b0065a28510246917338dd48edd0621392f56e45c3f1643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5d088b2a6833d5087b0065a28510246917338dd48edd0621392f56e45c3f1643->leave($__internal_5d088b2a6833d5087b0065a28510246917338dd48edd0621392f56e45c3f1643_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_224e073685b82e78b53dcc4fefc0da44421dbddd7975cbe130e6245ec8a55a0b = $this->env->getExtension("native_profiler");
        $__internal_224e073685b82e78b53dcc4fefc0da44421dbddd7975cbe130e6245ec8a55a0b->enter($__internal_224e073685b82e78b53dcc4fefc0da44421dbddd7975cbe130e6245ec8a55a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        ";
        
        $__internal_224e073685b82e78b53dcc4fefc0da44421dbddd7975cbe130e6245ec8a55a0b->leave($__internal_224e073685b82e78b53dcc4fefc0da44421dbddd7975cbe130e6245ec8a55a0b_prof);

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
