<?php

/* :Register:register.html.twig */
class __TwigTemplate_a69066ad57ff55690138732085a01c5e69de1eaf2e09d04fa08ea70b245ffd44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Default/base.html.twig", ":Register:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06be49e9a328e710e8fd3862aaa9591b81aaf7beefb9e764c202d9d5aa9272e8 = $this->env->getExtension("native_profiler");
        $__internal_06be49e9a328e710e8fd3862aaa9591b81aaf7beefb9e764c202d9d5aa9272e8->enter($__internal_06be49e9a328e710e8fd3862aaa9591b81aaf7beefb9e764c202d9d5aa9272e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06be49e9a328e710e8fd3862aaa9591b81aaf7beefb9e764c202d9d5aa9272e8->leave($__internal_06be49e9a328e710e8fd3862aaa9591b81aaf7beefb9e764c202d9d5aa9272e8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ef7a6e9a26d55eb54f5ab9dee18a80aab2a0a6ace08fdbc97589c7f4dea5f6b = $this->env->getExtension("native_profiler");
        $__internal_9ef7a6e9a26d55eb54f5ab9dee18a80aab2a0a6ace08fdbc97589c7f4dea5f6b->enter($__internal_9ef7a6e9a26d55eb54f5ab9dee18a80aab2a0a6ace08fdbc97589c7f4dea5f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/background.jpg"), "html", null, true);
        echo "\"
         alt=\"background_image\" class=\"background_image\"/>
    <div class=\"login-page\">
        <div class=\"form\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/blog.jpg"), "html", null, true);
        echo "\" alt=\"blog\" class=\"img_blog\"/>

            <form method=\"post\">

                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "

                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "

                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "

                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "

                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array(), "array"), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array(), "array"), 'widget');
        echo "

                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array(), "array"), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array(), "array"), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array(), "array"), 'widget');
        echo "

                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                <button type=\"submit\">login</button>

            </form>

            <p class=\"message\">Déjà inscrit ? <a href=\"/\"> Venez vous connecter, on vous attends !</a></p></div>
    </div>

    ";
        // line 39
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 40
            echo "        <div class=\"alert_error stop_li\">
            ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
            echo "
            ";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
            echo "
            ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
            echo "
            ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
            echo "
            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array(), "array"), 'errors');
            echo "
            <div class=\"close\"></div>
        </div>
    ";
        }
        // line 49
        echo "
";
        
        $__internal_9ef7a6e9a26d55eb54f5ab9dee18a80aab2a0a6ace08fdbc97589c7f4dea5f6b->leave($__internal_9ef7a6e9a26d55eb54f5ab9dee18a80aab2a0a6ace08fdbc97589c7f4dea5f6b_prof);

    }

    public function getTemplateName()
    {
        return ":Register:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 49,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  130 => 41,  127 => 40,  125 => 39,  113 => 30,  108 => 28,  104 => 27,  100 => 26,  95 => 24,  91 => 23,  86 => 21,  82 => 20,  77 => 18,  73 => 17,  68 => 15,  64 => 14,  59 => 12,  55 => 11,  48 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'Default/base.html.twig' %}*/
/* {% block body %}*/
/*     <img src="{{ asset('img/background.jpg') }}"*/
/*          alt="background_image" class="background_image"/>*/
/*     <div class="login-page">*/
/*         <div class="form">*/
/*             <img src="{{ asset('img/blog.jpg') }}" alt="blog" class="img_blog"/>*/
/* */
/*             <form method="post">*/
/* */
/*                 {{ form_label(form.username) }}*/
/*                 {{ form_widget(form.username) }}*/
/* */
/*                 {{ form_label(form.name) }}*/
/*                 {{ form_widget(form.name) }}*/
/* */
/*                 {{ form_label(form.lastname) }}*/
/*                 {{ form_widget(form.lastname) }}*/
/* */
/*                 {{ form_label(form.email) }}*/
/*                 {{ form_widget(form.email) }}*/
/* */
/*                 {{ form_label(form.password['first']) }}*/
/*                 {{ form_widget(form.password['first']) }}*/
/* */
/*                 {{ form_label(form.password['second']) }}*/
/*                 {{ form_errors(form.password['second']) }}*/
/*                 {{ form_widget(form.password['second']) }}*/
/* */
/*                 {{ form_row(form._token) }}*/
/* */
/*                 <button type="submit">login</button>*/
/* */
/*             </form>*/
/* */
/*             <p class="message">Déjà inscrit ? <a href="/"> Venez vous connecter, on vous attends !</a></p></div>*/
/*     </div>*/
/* */
/*     {% if not form.vars.valid %}*/
/*         <div class="alert_error stop_li">*/
/*             {{ form_errors(form.username) }}*/
/*             {{ form_errors(form.name) }}*/
/*             {{ form_errors(form.lastname) }}*/
/*             {{ form_errors(form.email) }}*/
/*             {{ form_errors(form.password['first']) }}*/
/*             <div class="close"></div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
