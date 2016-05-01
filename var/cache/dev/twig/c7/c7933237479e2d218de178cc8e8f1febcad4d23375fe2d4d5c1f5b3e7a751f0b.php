<?php

/* notesBundle:Default:index.html.twig */
class __TwigTemplate_2106ee707c2f1447e16e169a3ea7278b4ea33abfc779184e1f119d119a82eb59 extends Twig_Template
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
        $__internal_24e166b3366d2f810127a061202a9a51badbcf92769a4aa6f4241be9f981c598 = $this->env->getExtension("native_profiler");
        $__internal_24e166b3366d2f810127a061202a9a51badbcf92769a4aa6f4241be9f981c598->enter($__internal_24e166b3366d2f810127a061202a9a51badbcf92769a4aa6f4241be9f981c598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notesBundle:Default:index.html.twig"));

        // line 1
        echo "<title>Notes</title>
this is a test.
</br>
<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">HOME</a>";
        
        $__internal_24e166b3366d2f810127a061202a9a51badbcf92769a4aa6f4241be9f981c598->leave($__internal_24e166b3366d2f810127a061202a9a51badbcf92769a4aa6f4241be9f981c598_prof);

    }

    public function getTemplateName()
    {
        return "notesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <title>Notes</title>*/
/* this is a test.*/
/* </br>*/
/* <a href="{{ path('homepage') }}">HOME</a>*/
