<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_62997b4182ee9d68f5c929d8f35038a9cbfe7cec6065451a10768379ef3ef711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b0c62f718d2c364a57a21ebbba6cbcee66e7d05981f4dd342370f056aff8016 = $this->env->getExtension("native_profiler");
        $__internal_6b0c62f718d2c364a57a21ebbba6cbcee66e7d05981f4dd342370f056aff8016->enter($__internal_6b0c62f718d2c364a57a21ebbba6cbcee66e7d05981f4dd342370f056aff8016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b0c62f718d2c364a57a21ebbba6cbcee66e7d05981f4dd342370f056aff8016->leave($__internal_6b0c62f718d2c364a57a21ebbba6cbcee66e7d05981f4dd342370f056aff8016_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e3b89294b948cf22748bde0a3b004325ace436f69857cb0b7f10a0797577d32 = $this->env->getExtension("native_profiler");
        $__internal_9e3b89294b948cf22748bde0a3b004325ace436f69857cb0b7f10a0797577d32->enter($__internal_9e3b89294b948cf22748bde0a3b004325ace436f69857cb0b7f10a0797577d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e3b89294b948cf22748bde0a3b004325ace436f69857cb0b7f10a0797577d32->leave($__internal_9e3b89294b948cf22748bde0a3b004325ace436f69857cb0b7f10a0797577d32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_13b683494e62df6b69ee07ea94765bf9c98038245b3310ce2fb0b7157bd86105 = $this->env->getExtension("native_profiler");
        $__internal_13b683494e62df6b69ee07ea94765bf9c98038245b3310ce2fb0b7157bd86105->enter($__internal_13b683494e62df6b69ee07ea94765bf9c98038245b3310ce2fb0b7157bd86105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_13b683494e62df6b69ee07ea94765bf9c98038245b3310ce2fb0b7157bd86105->leave($__internal_13b683494e62df6b69ee07ea94765bf9c98038245b3310ce2fb0b7157bd86105_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b81ff93acfd34cf0ea85cf41491755dd03cf0e7a1d1d0f5ca24d56db1e0eed6f = $this->env->getExtension("native_profiler");
        $__internal_b81ff93acfd34cf0ea85cf41491755dd03cf0e7a1d1d0f5ca24d56db1e0eed6f->enter($__internal_b81ff93acfd34cf0ea85cf41491755dd03cf0e7a1d1d0f5ca24d56db1e0eed6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b81ff93acfd34cf0ea85cf41491755dd03cf0e7a1d1d0f5ca24d56db1e0eed6f->leave($__internal_b81ff93acfd34cf0ea85cf41491755dd03cf0e7a1d1d0f5ca24d56db1e0eed6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
