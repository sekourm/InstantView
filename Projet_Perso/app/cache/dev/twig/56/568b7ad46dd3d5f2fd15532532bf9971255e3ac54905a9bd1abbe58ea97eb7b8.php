<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b39987f464100913487af37b3901520c52386cc23e7ef08b832918aadad12433 extends Twig_Template
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
        $__internal_16e3acfb3d70a5572dbc33ed4cb942b6a36e6b531efa18384b60ff8a859bb528 = $this->env->getExtension("native_profiler");
        $__internal_16e3acfb3d70a5572dbc33ed4cb942b6a36e6b531efa18384b60ff8a859bb528->enter($__internal_16e3acfb3d70a5572dbc33ed4cb942b6a36e6b531efa18384b60ff8a859bb528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_16e3acfb3d70a5572dbc33ed4cb942b6a36e6b531efa18384b60ff8a859bb528->leave($__internal_16e3acfb3d70a5572dbc33ed4cb942b6a36e6b531efa18384b60ff8a859bb528_prof);

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
