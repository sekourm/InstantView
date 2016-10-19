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
        $__internal_06ebafd11ce78592fd3e45871c45e68ac366d7ff007caab9842ea72ca735586a = $this->env->getExtension("native_profiler");
        $__internal_06ebafd11ce78592fd3e45871c45e68ac366d7ff007caab9842ea72ca735586a->enter($__internal_06ebafd11ce78592fd3e45871c45e68ac366d7ff007caab9842ea72ca735586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_06ebafd11ce78592fd3e45871c45e68ac366d7ff007caab9842ea72ca735586a->leave($__internal_06ebafd11ce78592fd3e45871c45e68ac366d7ff007caab9842ea72ca735586a_prof);

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
