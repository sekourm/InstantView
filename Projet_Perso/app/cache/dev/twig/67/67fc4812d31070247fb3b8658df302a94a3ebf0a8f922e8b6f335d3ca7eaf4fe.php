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
        $__internal_5fcfed3d2049a2e12084e3b8f4b2bbb6e5cd501ae606701e7c71a69e6b52e1a3 = $this->env->getExtension("native_profiler");
        $__internal_5fcfed3d2049a2e12084e3b8f4b2bbb6e5cd501ae606701e7c71a69e6b52e1a3->enter($__internal_5fcfed3d2049a2e12084e3b8f4b2bbb6e5cd501ae606701e7c71a69e6b52e1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5fcfed3d2049a2e12084e3b8f4b2bbb6e5cd501ae606701e7c71a69e6b52e1a3->leave($__internal_5fcfed3d2049a2e12084e3b8f4b2bbb6e5cd501ae606701e7c71a69e6b52e1a3_prof);

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
