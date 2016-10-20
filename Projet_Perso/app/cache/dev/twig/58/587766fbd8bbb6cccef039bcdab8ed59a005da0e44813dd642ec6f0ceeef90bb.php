<?php

/* :Content:index.html.twig */
class __TwigTemplate_ad7aa7b59d8c4de1574352b5909470f4b241402408b2bb20be58876e920257fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Default/base.html.twig", ":Content:index.html.twig", 1);
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
        $__internal_a31e0c1eaf9f678f5784128e7703b0ff7f7b19ee76c72047a7e511832c9f5df5 = $this->env->getExtension("native_profiler");
        $__internal_a31e0c1eaf9f678f5784128e7703b0ff7f7b19ee76c72047a7e511832c9f5df5->enter($__internal_a31e0c1eaf9f678f5784128e7703b0ff7f7b19ee76c72047a7e511832c9f5df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Content:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31e0c1eaf9f678f5784128e7703b0ff7f7b19ee76c72047a7e511832c9f5df5->leave($__internal_a31e0c1eaf9f678f5784128e7703b0ff7f7b19ee76c72047a7e511832c9f5df5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a583962ce5ad33920a4a50659521a2cc898e0375bc48b75dabfbc830441dd28 = $this->env->getExtension("native_profiler");
        $__internal_4a583962ce5ad33920a4a50659521a2cc898e0375bc48b75dabfbc830441dd28->enter($__internal_4a583962ce5ad33920a4a50659521a2cc898e0375bc48b75dabfbc830441dd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 5
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "Users", array()), "username", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "content", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4a583962ce5ad33920a4a50659521a2cc898e0375bc48b75dabfbc830441dd28->leave($__internal_4a583962ce5ad33920a4a50659521a2cc898e0375bc48b75dabfbc830441dd28_prof);

    }

    public function getTemplateName()
    {
        return ":Content:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'Default/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for user in result %}*/
/*         <li>{{ user.Users.username }}</li>*/
/*         <li>{{ user.content }}</li>*/
/*     {% endfor %}*/
/* {% endblock %}*/
