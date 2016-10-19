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
        $__internal_f1b39717c382c7460058fc498722fee9ed68f45df518f3a202fa77cc0e9193b2 = $this->env->getExtension("native_profiler");
        $__internal_f1b39717c382c7460058fc498722fee9ed68f45df518f3a202fa77cc0e9193b2->enter($__internal_f1b39717c382c7460058fc498722fee9ed68f45df518f3a202fa77cc0e9193b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/base.html.twig"));

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
        
        $__internal_f1b39717c382c7460058fc498722fee9ed68f45df518f3a202fa77cc0e9193b2->leave($__internal_f1b39717c382c7460058fc498722fee9ed68f45df518f3a202fa77cc0e9193b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27fc16eed19cfa2ca4dbf5893d9b4e56355bdc2a6db5c3d3b6cf3bd0fce06b19 = $this->env->getExtension("native_profiler");
        $__internal_27fc16eed19cfa2ca4dbf5893d9b4e56355bdc2a6db5c3d3b6cf3bd0fce06b19->enter($__internal_27fc16eed19cfa2ca4dbf5893d9b4e56355bdc2a6db5c3d3b6cf3bd0fce06b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "InstantView - Partage et echange tes données.";
        
        $__internal_27fc16eed19cfa2ca4dbf5893d9b4e56355bdc2a6db5c3d3b6cf3bd0fce06b19->leave($__internal_27fc16eed19cfa2ca4dbf5893d9b4e56355bdc2a6db5c3d3b6cf3bd0fce06b19_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0723e9a7ad038b765a5aa646cae3beb9cf4596b3d772367de28303e781be7b2 = $this->env->getExtension("native_profiler");
        $__internal_f0723e9a7ad038b765a5aa646cae3beb9cf4596b3d772367de28303e781be7b2->enter($__internal_f0723e9a7ad038b765a5aa646cae3beb9cf4596b3d772367de28303e781be7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0723e9a7ad038b765a5aa646cae3beb9cf4596b3d772367de28303e781be7b2->leave($__internal_f0723e9a7ad038b765a5aa646cae3beb9cf4596b3d772367de28303e781be7b2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3cf77867325a31a4ede1e96f5a8e525044a57c51ed98cddfeeb98c275eb9b66 = $this->env->getExtension("native_profiler");
        $__internal_f3cf77867325a31a4ede1e96f5a8e525044a57c51ed98cddfeeb98c275eb9b66->enter($__internal_f3cf77867325a31a4ede1e96f5a8e525044a57c51ed98cddfeeb98c275eb9b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        ";
        
        $__internal_f3cf77867325a31a4ede1e96f5a8e525044a57c51ed98cddfeeb98c275eb9b66->leave($__internal_f3cf77867325a31a4ede1e96f5a8e525044a57c51ed98cddfeeb98c275eb9b66_prof);

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
