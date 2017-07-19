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
        $__internal_372ec67de2eab2442bcc1282539f82aa0f9a1e7a11bb3d641bc27be031eff37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372ec67de2eab2442bcc1282539f82aa0f9a1e7a11bb3d641bc27be031eff37b->enter($__internal_372ec67de2eab2442bcc1282539f82aa0f9a1e7a11bb3d641bc27be031eff37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_798db281110e0a00350587bbbca3e3d8e80690dca99b2d9337a8074cd82acaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798db281110e0a00350587bbbca3e3d8e80690dca99b2d9337a8074cd82acaed->enter($__internal_798db281110e0a00350587bbbca3e3d8e80690dca99b2d9337a8074cd82acaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_372ec67de2eab2442bcc1282539f82aa0f9a1e7a11bb3d641bc27be031eff37b->leave($__internal_372ec67de2eab2442bcc1282539f82aa0f9a1e7a11bb3d641bc27be031eff37b_prof);

        
        $__internal_798db281110e0a00350587bbbca3e3d8e80690dca99b2d9337a8074cd82acaed->leave($__internal_798db281110e0a00350587bbbca3e3d8e80690dca99b2d9337a8074cd82acaed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93912b003815399a689e45a4265b609afbbd02293b37542a0e57532a971f4179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93912b003815399a689e45a4265b609afbbd02293b37542a0e57532a971f4179->enter($__internal_93912b003815399a689e45a4265b609afbbd02293b37542a0e57532a971f4179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_02463fa1cd83128cb0118e41c1c8d56ae10974001333a820da920334a0685cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02463fa1cd83128cb0118e41c1c8d56ae10974001333a820da920334a0685cbb->enter($__internal_02463fa1cd83128cb0118e41c1c8d56ae10974001333a820da920334a0685cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_02463fa1cd83128cb0118e41c1c8d56ae10974001333a820da920334a0685cbb->leave($__internal_02463fa1cd83128cb0118e41c1c8d56ae10974001333a820da920334a0685cbb_prof);

        
        $__internal_93912b003815399a689e45a4265b609afbbd02293b37542a0e57532a971f4179->leave($__internal_93912b003815399a689e45a4265b609afbbd02293b37542a0e57532a971f4179_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df67045de85aaa9f00adccd382c22bcbf6bf29253a02e225930e2d6ec98c85f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df67045de85aaa9f00adccd382c22bcbf6bf29253a02e225930e2d6ec98c85f0->enter($__internal_df67045de85aaa9f00adccd382c22bcbf6bf29253a02e225930e2d6ec98c85f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_de6548e7582cce1c75c60b83a9963a0463c51575ecc55d1c0cd4982112bc2431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6548e7582cce1c75c60b83a9963a0463c51575ecc55d1c0cd4982112bc2431->enter($__internal_de6548e7582cce1c75c60b83a9963a0463c51575ecc55d1c0cd4982112bc2431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_de6548e7582cce1c75c60b83a9963a0463c51575ecc55d1c0cd4982112bc2431->leave($__internal_de6548e7582cce1c75c60b83a9963a0463c51575ecc55d1c0cd4982112bc2431_prof);

        
        $__internal_df67045de85aaa9f00adccd382c22bcbf6bf29253a02e225930e2d6ec98c85f0->leave($__internal_df67045de85aaa9f00adccd382c22bcbf6bf29253a02e225930e2d6ec98c85f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76946f2a5a1938f8bd3aee77c843bd4ce9754a1e4971806b4fe8bd9a60c27db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76946f2a5a1938f8bd3aee77c843bd4ce9754a1e4971806b4fe8bd9a60c27db7->enter($__internal_76946f2a5a1938f8bd3aee77c843bd4ce9754a1e4971806b4fe8bd9a60c27db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81ee4b15c850d297c3a44a3fc28e62ab1ccb568ae953a4f0b455dd18f433cadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ee4b15c850d297c3a44a3fc28e62ab1ccb568ae953a4f0b455dd18f433cadf->enter($__internal_81ee4b15c850d297c3a44a3fc28e62ab1ccb568ae953a4f0b455dd18f433cadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_81ee4b15c850d297c3a44a3fc28e62ab1ccb568ae953a4f0b455dd18f433cadf->leave($__internal_81ee4b15c850d297c3a44a3fc28e62ab1ccb568ae953a4f0b455dd18f433cadf_prof);

        
        $__internal_76946f2a5a1938f8bd3aee77c843bd4ce9754a1e4971806b4fe8bd9a60c27db7->leave($__internal_76946f2a5a1938f8bd3aee77c843bd4ce9754a1e4971806b4fe8bd9a60c27db7_prof);

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
