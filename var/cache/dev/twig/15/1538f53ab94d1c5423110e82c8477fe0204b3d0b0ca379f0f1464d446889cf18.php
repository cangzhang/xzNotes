<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6914fd9a14b479d13a8e5a909154f1a62bce414dc944f52c9c7fc89cde34c563 extends Twig_Template
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
        $__internal_3427228d2ca60275fa390c91501c3cabedb8dc6cb564f734d7bb1a022d57cb3e = $this->env->getExtension("native_profiler");
        $__internal_3427228d2ca60275fa390c91501c3cabedb8dc6cb564f734d7bb1a022d57cb3e->enter($__internal_3427228d2ca60275fa390c91501c3cabedb8dc6cb564f734d7bb1a022d57cb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3427228d2ca60275fa390c91501c3cabedb8dc6cb564f734d7bb1a022d57cb3e->leave($__internal_3427228d2ca60275fa390c91501c3cabedb8dc6cb564f734d7bb1a022d57cb3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_310d5af46f02ce61ec0789fb9bf96dce659ec5164c89dbbbf33302bee2eaa2fa = $this->env->getExtension("native_profiler");
        $__internal_310d5af46f02ce61ec0789fb9bf96dce659ec5164c89dbbbf33302bee2eaa2fa->enter($__internal_310d5af46f02ce61ec0789fb9bf96dce659ec5164c89dbbbf33302bee2eaa2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_310d5af46f02ce61ec0789fb9bf96dce659ec5164c89dbbbf33302bee2eaa2fa->leave($__internal_310d5af46f02ce61ec0789fb9bf96dce659ec5164c89dbbbf33302bee2eaa2fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0291816b049244868a730eff8e8dd589ab7307499955dece6981fa66b442f894 = $this->env->getExtension("native_profiler");
        $__internal_0291816b049244868a730eff8e8dd589ab7307499955dece6981fa66b442f894->enter($__internal_0291816b049244868a730eff8e8dd589ab7307499955dece6981fa66b442f894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0291816b049244868a730eff8e8dd589ab7307499955dece6981fa66b442f894->leave($__internal_0291816b049244868a730eff8e8dd589ab7307499955dece6981fa66b442f894_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_11f6b4280ae81b821044203074c341e3219e1a99480b0388e48a773dcb84b102 = $this->env->getExtension("native_profiler");
        $__internal_11f6b4280ae81b821044203074c341e3219e1a99480b0388e48a773dcb84b102->enter($__internal_11f6b4280ae81b821044203074c341e3219e1a99480b0388e48a773dcb84b102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_11f6b4280ae81b821044203074c341e3219e1a99480b0388e48a773dcb84b102->leave($__internal_11f6b4280ae81b821044203074c341e3219e1a99480b0388e48a773dcb84b102_prof);

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
