<?php

/* Default/base.html.twig */
class __TwigTemplate_fde8a5fb4f54523caa82db140a5e9be1913c9f9b406f24da1065eeb5b663fd07 extends Twig_Template
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
        $__internal_b8a7bc4c6d0a591cf71b6be23c9038785e585266981404475acf36f83add0a75 = $this->env->getExtension("native_profiler");
        $__internal_b8a7bc4c6d0a591cf71b6be23c9038785e585266981404475acf36f83add0a75->enter($__internal_b8a7bc4c6d0a591cf71b6be23c9038785e585266981404475acf36f83add0a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/base.html.twig"));

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
        
        $__internal_b8a7bc4c6d0a591cf71b6be23c9038785e585266981404475acf36f83add0a75->leave($__internal_b8a7bc4c6d0a591cf71b6be23c9038785e585266981404475acf36f83add0a75_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7623ff9b9e5c07e1d9fda9d05cfe9eaaaac456ea604b0ee3497372ad487a8375 = $this->env->getExtension("native_profiler");
        $__internal_7623ff9b9e5c07e1d9fda9d05cfe9eaaaac456ea604b0ee3497372ad487a8375->enter($__internal_7623ff9b9e5c07e1d9fda9d05cfe9eaaaac456ea604b0ee3497372ad487a8375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "InstantView - Partage et echange tes données.";
        
        $__internal_7623ff9b9e5c07e1d9fda9d05cfe9eaaaac456ea604b0ee3497372ad487a8375->leave($__internal_7623ff9b9e5c07e1d9fda9d05cfe9eaaaac456ea604b0ee3497372ad487a8375_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef18ce8a0a8ca4a88f2d6d32bc831e1ffe1c4f7ad082b1cca8e1028ef1613178 = $this->env->getExtension("native_profiler");
        $__internal_ef18ce8a0a8ca4a88f2d6d32bc831e1ffe1c4f7ad082b1cca8e1028ef1613178->enter($__internal_ef18ce8a0a8ca4a88f2d6d32bc831e1ffe1c4f7ad082b1cca8e1028ef1613178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ef18ce8a0a8ca4a88f2d6d32bc831e1ffe1c4f7ad082b1cca8e1028ef1613178->leave($__internal_ef18ce8a0a8ca4a88f2d6d32bc831e1ffe1c4f7ad082b1cca8e1028ef1613178_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c7f09e4308ecc78d5416f91019c0eb18ac89fa5ebe81526eda8603624a51aca = $this->env->getExtension("native_profiler");
        $__internal_6c7f09e4308ecc78d5416f91019c0eb18ac89fa5ebe81526eda8603624a51aca->enter($__internal_6c7f09e4308ecc78d5416f91019c0eb18ac89fa5ebe81526eda8603624a51aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        ";
        
        $__internal_6c7f09e4308ecc78d5416f91019c0eb18ac89fa5ebe81526eda8603624a51aca->leave($__internal_6c7f09e4308ecc78d5416f91019c0eb18ac89fa5ebe81526eda8603624a51aca_prof);

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
