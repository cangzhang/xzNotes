<?php

/* base.html.twig */
class __TwigTemplate_4552f4ce0658571f96370e74157247237139a172bf3951cba5cf95051108c076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb8980fab67adcc2db2196712f139f038fa76d7ef0385682e8e6d775be3edcab = $this->env->getExtension("native_profiler");
        $__internal_bb8980fab67adcc2db2196712f139f038fa76d7ef0385682e8e6d775be3edcab->enter($__internal_bb8980fab67adcc2db2196712f139f038fa76d7ef0385682e8e6d775be3edcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bb8980fab67adcc2db2196712f139f038fa76d7ef0385682e8e6d775be3edcab->leave($__internal_bb8980fab67adcc2db2196712f139f038fa76d7ef0385682e8e6d775be3edcab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f350a55004abe56df23823e55e312cab72bc38580946e5aaf645225607efe13 = $this->env->getExtension("native_profiler");
        $__internal_4f350a55004abe56df23823e55e312cab72bc38580946e5aaf645225607efe13->enter($__internal_4f350a55004abe56df23823e55e312cab72bc38580946e5aaf645225607efe13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f350a55004abe56df23823e55e312cab72bc38580946e5aaf645225607efe13->leave($__internal_4f350a55004abe56df23823e55e312cab72bc38580946e5aaf645225607efe13_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6819cd68f4751324582590489b7a771968555dcbac91b0894d142d7925cc4a2d = $this->env->getExtension("native_profiler");
        $__internal_6819cd68f4751324582590489b7a771968555dcbac91b0894d142d7925cc4a2d->enter($__internal_6819cd68f4751324582590489b7a771968555dcbac91b0894d142d7925cc4a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6819cd68f4751324582590489b7a771968555dcbac91b0894d142d7925cc4a2d->leave($__internal_6819cd68f4751324582590489b7a771968555dcbac91b0894d142d7925cc4a2d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b95006d7f1286584283e254c30ac2be6cd8a784e4fd9b6ed1c2fcf078ce77d65 = $this->env->getExtension("native_profiler");
        $__internal_b95006d7f1286584283e254c30ac2be6cd8a784e4fd9b6ed1c2fcf078ce77d65->enter($__internal_b95006d7f1286584283e254c30ac2be6cd8a784e4fd9b6ed1c2fcf078ce77d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b95006d7f1286584283e254c30ac2be6cd8a784e4fd9b6ed1c2fcf078ce77d65->leave($__internal_b95006d7f1286584283e254c30ac2be6cd8a784e4fd9b6ed1c2fcf078ce77d65_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83ba938e01bb74a7c459093b4cf2f26051e973244216d244baf267efad0f89d2 = $this->env->getExtension("native_profiler");
        $__internal_83ba938e01bb74a7c459093b4cf2f26051e973244216d244baf267efad0f89d2->enter($__internal_83ba938e01bb74a7c459093b4cf2f26051e973244216d244baf267efad0f89d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83ba938e01bb74a7c459093b4cf2f26051e973244216d244baf267efad0f89d2->leave($__internal_83ba938e01bb74a7c459093b4cf2f26051e973244216d244baf267efad0f89d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
