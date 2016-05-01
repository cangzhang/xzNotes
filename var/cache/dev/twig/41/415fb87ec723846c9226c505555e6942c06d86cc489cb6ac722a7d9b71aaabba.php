<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_74289f21372d84f6ca34c95186379913ec3c459777de0320e176afcc96ceacb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e6443c0c9083cbc964cbf04dcee33293c3a901d2e7f07f6306d8db00610bb7b = $this->env->getExtension("native_profiler");
        $__internal_3e6443c0c9083cbc964cbf04dcee33293c3a901d2e7f07f6306d8db00610bb7b->enter($__internal_3e6443c0c9083cbc964cbf04dcee33293c3a901d2e7f07f6306d8db00610bb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e6443c0c9083cbc964cbf04dcee33293c3a901d2e7f07f6306d8db00610bb7b->leave($__internal_3e6443c0c9083cbc964cbf04dcee33293c3a901d2e7f07f6306d8db00610bb7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3501697884c7b9a75c3e3ca8b3536f81825f7bbf0ec9cc111a839031e9933b39 = $this->env->getExtension("native_profiler");
        $__internal_3501697884c7b9a75c3e3ca8b3536f81825f7bbf0ec9cc111a839031e9933b39->enter($__internal_3501697884c7b9a75c3e3ca8b3536f81825f7bbf0ec9cc111a839031e9933b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3501697884c7b9a75c3e3ca8b3536f81825f7bbf0ec9cc111a839031e9933b39->leave($__internal_3501697884c7b9a75c3e3ca8b3536f81825f7bbf0ec9cc111a839031e9933b39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12802eab3955bceba3b928472f41c96ce6900f8e7ce6ae68ecbae822fb15046e = $this->env->getExtension("native_profiler");
        $__internal_12802eab3955bceba3b928472f41c96ce6900f8e7ce6ae68ecbae822fb15046e->enter($__internal_12802eab3955bceba3b928472f41c96ce6900f8e7ce6ae68ecbae822fb15046e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_12802eab3955bceba3b928472f41c96ce6900f8e7ce6ae68ecbae822fb15046e->leave($__internal_12802eab3955bceba3b928472f41c96ce6900f8e7ce6ae68ecbae822fb15046e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e367a42d08b4e2ff332c18be6b433090a5ade0cde9d1447b4d68680752017f33 = $this->env->getExtension("native_profiler");
        $__internal_e367a42d08b4e2ff332c18be6b433090a5ade0cde9d1447b4d68680752017f33->enter($__internal_e367a42d08b4e2ff332c18be6b433090a5ade0cde9d1447b4d68680752017f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e367a42d08b4e2ff332c18be6b433090a5ade0cde9d1447b4d68680752017f33->leave($__internal_e367a42d08b4e2ff332c18be6b433090a5ade0cde9d1447b4d68680752017f33_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
