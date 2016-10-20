<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_62997b4182ee9d68f5c929d8f35038a9cbfe7cec6065451a10768379ef3ef711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_71083911f6ddb8cf086c7319c3240aa1a7885062a18ede39fb68906398ef483a = $this->env->getExtension("native_profiler");
        $__internal_71083911f6ddb8cf086c7319c3240aa1a7885062a18ede39fb68906398ef483a->enter($__internal_71083911f6ddb8cf086c7319c3240aa1a7885062a18ede39fb68906398ef483a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71083911f6ddb8cf086c7319c3240aa1a7885062a18ede39fb68906398ef483a->leave($__internal_71083911f6ddb8cf086c7319c3240aa1a7885062a18ede39fb68906398ef483a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b66d0039c82a77c2364faba35b34b71673ed4645774d0afdeba8f854becf1d4c = $this->env->getExtension("native_profiler");
        $__internal_b66d0039c82a77c2364faba35b34b71673ed4645774d0afdeba8f854becf1d4c->enter($__internal_b66d0039c82a77c2364faba35b34b71673ed4645774d0afdeba8f854becf1d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b66d0039c82a77c2364faba35b34b71673ed4645774d0afdeba8f854becf1d4c->leave($__internal_b66d0039c82a77c2364faba35b34b71673ed4645774d0afdeba8f854becf1d4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92e431b551ba43221d1a024d45bc9901a19d61777bb5941beb9072bd307235f3 = $this->env->getExtension("native_profiler");
        $__internal_92e431b551ba43221d1a024d45bc9901a19d61777bb5941beb9072bd307235f3->enter($__internal_92e431b551ba43221d1a024d45bc9901a19d61777bb5941beb9072bd307235f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92e431b551ba43221d1a024d45bc9901a19d61777bb5941beb9072bd307235f3->leave($__internal_92e431b551ba43221d1a024d45bc9901a19d61777bb5941beb9072bd307235f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_215c67c2d0ed56bfb2c15a74b4284f7d87872f926a1803ab65034258eeda4617 = $this->env->getExtension("native_profiler");
        $__internal_215c67c2d0ed56bfb2c15a74b4284f7d87872f926a1803ab65034258eeda4617->enter($__internal_215c67c2d0ed56bfb2c15a74b4284f7d87872f926a1803ab65034258eeda4617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_215c67c2d0ed56bfb2c15a74b4284f7d87872f926a1803ab65034258eeda4617->leave($__internal_215c67c2d0ed56bfb2c15a74b4284f7d87872f926a1803ab65034258eeda4617_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
