<?php

/* Content/index.html.twig */
class __TwigTemplate_ad7aa7b59d8c4de1574352b5909470f4b241402408b2bb20be58876e920257fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Default/base.html.twig", "Content/index.html.twig", 1);
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
        $__internal_3ee47642cc3d593a379f35e76ce962e3c1bcfc72a8e020da936d1b08cdc165fd = $this->env->getExtension("native_profiler");
        $__internal_3ee47642cc3d593a379f35e76ce962e3c1bcfc72a8e020da936d1b08cdc165fd->enter($__internal_3ee47642cc3d593a379f35e76ce962e3c1bcfc72a8e020da936d1b08cdc165fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Content/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee47642cc3d593a379f35e76ce962e3c1bcfc72a8e020da936d1b08cdc165fd->leave($__internal_3ee47642cc3d593a379f35e76ce962e3c1bcfc72a8e020da936d1b08cdc165fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd2d37b2695bb7b75f149e0e619a45e9431d6615d82c8f14e3a94789d49c27fe = $this->env->getExtension("native_profiler");
        $__internal_bd2d37b2695bb7b75f149e0e619a45e9431d6615d82c8f14e3a94789d49c27fe->enter($__internal_bd2d37b2695bb7b75f149e0e619a45e9431d6615d82c8f14e3a94789d49c27fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd2d37b2695bb7b75f149e0e619a45e9431d6615d82c8f14e3a94789d49c27fe->leave($__internal_bd2d37b2695bb7b75f149e0e619a45e9431d6615d82c8f14e3a94789d49c27fe_prof);

    }

    public function getTemplateName()
    {
        return "Content/index.html.twig";
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
