<?php

/* Default/base.html.twig */
class __TwigTemplate_2a5bdb848ef41164050e6b24842b0234a06e59d5d48b373b935a62e704415c0a extends Twig_Template
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
        $__internal_0ae3e6da842a25a03a9871c9f0e46b6cb1f9c2ebdd1c2b0fba016c3b6c9ff668 = $this->env->getExtension("native_profiler");
        $__internal_0ae3e6da842a25a03a9871c9f0e46b6cb1f9c2ebdd1c2b0fba016c3b6c9ff668->enter($__internal_0ae3e6da842a25a03a9871c9f0e46b6cb1f9c2ebdd1c2b0fba016c3b6c9ff668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/base.html.twig"));

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
        
        $__internal_0ae3e6da842a25a03a9871c9f0e46b6cb1f9c2ebdd1c2b0fba016c3b6c9ff668->leave($__internal_0ae3e6da842a25a03a9871c9f0e46b6cb1f9c2ebdd1c2b0fba016c3b6c9ff668_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99cd6a44e1a121194e96d38ea12ec9be1ea542ee5bd0cdd2e63a4da0bc6b93d1 = $this->env->getExtension("native_profiler");
        $__internal_99cd6a44e1a121194e96d38ea12ec9be1ea542ee5bd0cdd2e63a4da0bc6b93d1->enter($__internal_99cd6a44e1a121194e96d38ea12ec9be1ea542ee5bd0cdd2e63a4da0bc6b93d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "InstantView - Partage et echange tes données.";
        
        $__internal_99cd6a44e1a121194e96d38ea12ec9be1ea542ee5bd0cdd2e63a4da0bc6b93d1->leave($__internal_99cd6a44e1a121194e96d38ea12ec9be1ea542ee5bd0cdd2e63a4da0bc6b93d1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c19e66c03d91c99dc3ffe9816f3130f9709c28a2522b279274d0fe2ad85bd29 = $this->env->getExtension("native_profiler");
        $__internal_4c19e66c03d91c99dc3ffe9816f3130f9709c28a2522b279274d0fe2ad85bd29->enter($__internal_4c19e66c03d91c99dc3ffe9816f3130f9709c28a2522b279274d0fe2ad85bd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4c19e66c03d91c99dc3ffe9816f3130f9709c28a2522b279274d0fe2ad85bd29->leave($__internal_4c19e66c03d91c99dc3ffe9816f3130f9709c28a2522b279274d0fe2ad85bd29_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a3dc4827469a6e256e53c7664899af2f11627c3725de53707fdee5e4afb13d4 = $this->env->getExtension("native_profiler");
        $__internal_3a3dc4827469a6e256e53c7664899af2f11627c3725de53707fdee5e4afb13d4->enter($__internal_3a3dc4827469a6e256e53c7664899af2f11627c3725de53707fdee5e4afb13d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        ";
        
        $__internal_3a3dc4827469a6e256e53c7664899af2f11627c3725de53707fdee5e4afb13d4->leave($__internal_3a3dc4827469a6e256e53c7664899af2f11627c3725de53707fdee5e4afb13d4_prof);

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
