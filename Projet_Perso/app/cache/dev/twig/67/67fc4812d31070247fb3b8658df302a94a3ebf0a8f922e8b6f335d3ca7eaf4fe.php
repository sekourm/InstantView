<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_367d7e50799658973b0e4847e02a6819b8b8b5b41842cb8ae89aca599a850cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_018fbf246d4f1f887d79ab80b3abacc780aef44d94886591e28a23f4dfc715d9 = $this->env->getExtension("native_profiler");
        $__internal_018fbf246d4f1f887d79ab80b3abacc780aef44d94886591e28a23f4dfc715d9->enter($__internal_018fbf246d4f1f887d79ab80b3abacc780aef44d94886591e28a23f4dfc715d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_018fbf246d4f1f887d79ab80b3abacc780aef44d94886591e28a23f4dfc715d9->leave($__internal_018fbf246d4f1f887d79ab80b3abacc780aef44d94886591e28a23f4dfc715d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
