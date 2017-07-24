<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8728290f8643f668c2b6548ff3d40e3707e89710ba669e236795973cd75e150c extends Twig_Template
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
        $__internal_434cafcc9195d5343edfac45ad52783ba44c69204dc4e04714a92c49027a3f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434cafcc9195d5343edfac45ad52783ba44c69204dc4e04714a92c49027a3f19->enter($__internal_434cafcc9195d5343edfac45ad52783ba44c69204dc4e04714a92c49027a3f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_42bc85b1035bfb2b893d87d6bd84337b46f9a00d5ec6f8ba87d4f79ebd03aa88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bc85b1035bfb2b893d87d6bd84337b46f9a00d5ec6f8ba87d4f79ebd03aa88->enter($__internal_42bc85b1035bfb2b893d87d6bd84337b46f9a00d5ec6f8ba87d4f79ebd03aa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_434cafcc9195d5343edfac45ad52783ba44c69204dc4e04714a92c49027a3f19->leave($__internal_434cafcc9195d5343edfac45ad52783ba44c69204dc4e04714a92c49027a3f19_prof);

        
        $__internal_42bc85b1035bfb2b893d87d6bd84337b46f9a00d5ec6f8ba87d4f79ebd03aa88->leave($__internal_42bc85b1035bfb2b893d87d6bd84337b46f9a00d5ec6f8ba87d4f79ebd03aa88_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2112c46e7de2efc8a0b7c64143c2f1579d525695312c564a21dff5620699a26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2112c46e7de2efc8a0b7c64143c2f1579d525695312c564a21dff5620699a26c->enter($__internal_2112c46e7de2efc8a0b7c64143c2f1579d525695312c564a21dff5620699a26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3c55a196ca1f65d2b22eb4a2105f960d16db1bf9ec8c09d9619e20f2be287e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c55a196ca1f65d2b22eb4a2105f960d16db1bf9ec8c09d9619e20f2be287e26->enter($__internal_3c55a196ca1f65d2b22eb4a2105f960d16db1bf9ec8c09d9619e20f2be287e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3c55a196ca1f65d2b22eb4a2105f960d16db1bf9ec8c09d9619e20f2be287e26->leave($__internal_3c55a196ca1f65d2b22eb4a2105f960d16db1bf9ec8c09d9619e20f2be287e26_prof);

        
        $__internal_2112c46e7de2efc8a0b7c64143c2f1579d525695312c564a21dff5620699a26c->leave($__internal_2112c46e7de2efc8a0b7c64143c2f1579d525695312c564a21dff5620699a26c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5a787ae88b08528b90d01bc8c3770f2f8332a9a861c1dc54c93c904fb08ba71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a787ae88b08528b90d01bc8c3770f2f8332a9a861c1dc54c93c904fb08ba71->enter($__internal_f5a787ae88b08528b90d01bc8c3770f2f8332a9a861c1dc54c93c904fb08ba71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_20274bd08f3a5671658368ea12c892a40592333ff730b760e1c26960d01fe48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20274bd08f3a5671658368ea12c892a40592333ff730b760e1c26960d01fe48a->enter($__internal_20274bd08f3a5671658368ea12c892a40592333ff730b760e1c26960d01fe48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20274bd08f3a5671658368ea12c892a40592333ff730b760e1c26960d01fe48a->leave($__internal_20274bd08f3a5671658368ea12c892a40592333ff730b760e1c26960d01fe48a_prof);

        
        $__internal_f5a787ae88b08528b90d01bc8c3770f2f8332a9a861c1dc54c93c904fb08ba71->leave($__internal_f5a787ae88b08528b90d01bc8c3770f2f8332a9a861c1dc54c93c904fb08ba71_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_703adcf8367b15fb6a965d58fd95dfc0a40e2e1e3e52a631e6c42378cfaf30f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703adcf8367b15fb6a965d58fd95dfc0a40e2e1e3e52a631e6c42378cfaf30f8->enter($__internal_703adcf8367b15fb6a965d58fd95dfc0a40e2e1e3e52a631e6c42378cfaf30f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72cac07a71e9ce74b1b3fb1266b0af990576f4157eb3c12eacf6d63f3b186257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cac07a71e9ce74b1b3fb1266b0af990576f4157eb3c12eacf6d63f3b186257->enter($__internal_72cac07a71e9ce74b1b3fb1266b0af990576f4157eb3c12eacf6d63f3b186257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72cac07a71e9ce74b1b3fb1266b0af990576f4157eb3c12eacf6d63f3b186257->leave($__internal_72cac07a71e9ce74b1b3fb1266b0af990576f4157eb3c12eacf6d63f3b186257_prof);

        
        $__internal_703adcf8367b15fb6a965d58fd95dfc0a40e2e1e3e52a631e6c42378cfaf30f8->leave($__internal_703adcf8367b15fb6a965d58fd95dfc0a40e2e1e3e52a631e6c42378cfaf30f8_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
