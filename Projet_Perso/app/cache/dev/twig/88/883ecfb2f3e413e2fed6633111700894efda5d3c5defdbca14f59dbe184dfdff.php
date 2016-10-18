<?php

/* Login/login.html.twig */
class __TwigTemplate_cf5473ff5373ca2030bc3f6d780ba3e5244e374e8aeb1119acf3616a5cd2c54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Default/base.html.twig", "Login/login.html.twig", 1);
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
        $__internal_81827f5779824b3e2b45e3dbeb9a2dee78a9efd1a937b62489c02cc7c019049e = $this->env->getExtension("native_profiler");
        $__internal_81827f5779824b3e2b45e3dbeb9a2dee78a9efd1a937b62489c02cc7c019049e->enter($__internal_81827f5779824b3e2b45e3dbeb9a2dee78a9efd1a937b62489c02cc7c019049e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Login/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81827f5779824b3e2b45e3dbeb9a2dee78a9efd1a937b62489c02cc7c019049e->leave($__internal_81827f5779824b3e2b45e3dbeb9a2dee78a9efd1a937b62489c02cc7c019049e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28d6b0542d700574c34720469c27a29662c98ab0dd02c65c128bbbedd6c838c5 = $this->env->getExtension("native_profiler");
        $__internal_28d6b0542d700574c34720469c27a29662c98ab0dd02c65c128bbbedd6c838c5->enter($__internal_28d6b0542d700574c34720469c27a29662c98ab0dd02c65c128bbbedd6c838c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/background.jpg"), "html", null, true);
        echo "\" alt=\"background_image\" class=\"background_image\"/>
    <div class=\"login-page\">
        <div class=\"form\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/blog.jpg"), "html", null, true);
        echo "\" alt=\"blog\" class=\"img_blog\"/>
            <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("app_action_login");
        echo "\" method=\"post\">
                <input type=\"email\" name=\"email\" placeholder=\"Email\"/>
                <input type=\"password\" name=\"password\" placeholder=\"Password\"/>
                <button type=\"submit\">login</button>
                <p class=\"message\">Pas encore inscrit ? <a href=\"/register\"> Creér un compte et rejoint nous !</a></p>
            </form>
        </div>
        ";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 16
            echo "            <div class=\"alert_success\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 18
                echo "                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                <div class=\"close\"></div>
            </div>
        ";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 24
            echo "            <div class=\"alert_error\">
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 26
                echo "                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                <div class=\"close\"></div>
            </div>
        ";
        }
        // line 31
        echo "    </div>
    </div>
";
        
        $__internal_28d6b0542d700574c34720469c27a29662c98ab0dd02c65c128bbbedd6c838c5->leave($__internal_28d6b0542d700574c34720469c27a29662c98ab0dd02c65c128bbbedd6c838c5_prof);

    }

    public function getTemplateName()
    {
        return "Login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  103 => 28,  94 => 26,  90 => 25,  87 => 24,  84 => 23,  79 => 20,  70 => 18,  66 => 17,  63 => 16,  61 => 15,  51 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'Default/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <img src="{{ asset('img/background.jpg') }}" alt="background_image" class="background_image"/>*/
/*     <div class="login-page">*/
/*         <div class="form">*/
/*             <img src="{{ asset('img/blog.jpg') }}" alt="blog" class="img_blog"/>*/
/*             <form action="{{ path('app_action_login') }}" method="post">*/
/*                 <input type="email" name="email" placeholder="Email"/>*/
/*                 <input type="password" name="password" placeholder="Password"/>*/
/*                 <button type="submit">login</button>*/
/*                 <p class="message">Pas encore inscrit ? <a href="/register"> Creér un compte et rejoint nous !</a></p>*/
/*             </form>*/
/*         </div>*/
/*         {% if app.session.flashBag.has('success') %}*/
/*             <div class="alert_success">*/
/*                 {% for msg in app.session.flashBag.get('success') %}*/
/*                     {{ msg }}*/
/*                 {% endfor %}*/
/*                 <div class="close"></div>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if app.session.flashBag.has('error') %}*/
/*             <div class="alert_error">*/
/*                 {% for msg in app.session.flashBag.get('error') %}*/
/*                     {{ msg }}*/
/*                 {% endfor %}*/
/*                 <div class="close"></div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
