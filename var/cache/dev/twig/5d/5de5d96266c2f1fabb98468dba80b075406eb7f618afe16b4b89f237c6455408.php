<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ad34e1208679def680df001e6e5166b2b17a11e57ca567e5b9556b1897dcc57a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0f9ad0ac3e721c01f84df6c5a3e10356add199b7cadda411ae849414938b708d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9ad0ac3e721c01f84df6c5a3e10356add199b7cadda411ae849414938b708d->enter($__internal_0f9ad0ac3e721c01f84df6c5a3e10356add199b7cadda411ae849414938b708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_230c55a57e93ca54a581f0a6088fd3a2d79add15c46a70c5479ef165ef954135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230c55a57e93ca54a581f0a6088fd3a2d79add15c46a70c5479ef165ef954135->enter($__internal_230c55a57e93ca54a581f0a6088fd3a2d79add15c46a70c5479ef165ef954135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9ad0ac3e721c01f84df6c5a3e10356add199b7cadda411ae849414938b708d->leave($__internal_0f9ad0ac3e721c01f84df6c5a3e10356add199b7cadda411ae849414938b708d_prof);

        
        $__internal_230c55a57e93ca54a581f0a6088fd3a2d79add15c46a70c5479ef165ef954135->leave($__internal_230c55a57e93ca54a581f0a6088fd3a2d79add15c46a70c5479ef165ef954135_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c02d46b733869164ba18568b9728b272bed2d3fac833abb10576c47d47920ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02d46b733869164ba18568b9728b272bed2d3fac833abb10576c47d47920ca9->enter($__internal_c02d46b733869164ba18568b9728b272bed2d3fac833abb10576c47d47920ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36784602bd4d3e89adb50d738d1bc710161d5f8647c5797be6bc1c402db45a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36784602bd4d3e89adb50d738d1bc710161d5f8647c5797be6bc1c402db45a32->enter($__internal_36784602bd4d3e89adb50d738d1bc710161d5f8647c5797be6bc1c402db45a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_36784602bd4d3e89adb50d738d1bc710161d5f8647c5797be6bc1c402db45a32->leave($__internal_36784602bd4d3e89adb50d738d1bc710161d5f8647c5797be6bc1c402db45a32_prof);

        
        $__internal_c02d46b733869164ba18568b9728b272bed2d3fac833abb10576c47d47920ca9->leave($__internal_c02d46b733869164ba18568b9728b272bed2d3fac833abb10576c47d47920ca9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfdb84750729b343ba074acfc6f0e6714f44f28fe84d4928b090c69a0c812ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdb84750729b343ba074acfc6f0e6714f44f28fe84d4928b090c69a0c812ca8->enter($__internal_dfdb84750729b343ba074acfc6f0e6714f44f28fe84d4928b090c69a0c812ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d6edd6e4592e5047ed365f261f6a0e2581146bc34683fd1eed50159b8fe22ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6edd6e4592e5047ed365f261f6a0e2581146bc34683fd1eed50159b8fe22ea8->enter($__internal_d6edd6e4592e5047ed365f261f6a0e2581146bc34683fd1eed50159b8fe22ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d6edd6e4592e5047ed365f261f6a0e2581146bc34683fd1eed50159b8fe22ea8->leave($__internal_d6edd6e4592e5047ed365f261f6a0e2581146bc34683fd1eed50159b8fe22ea8_prof);

        
        $__internal_dfdb84750729b343ba074acfc6f0e6714f44f28fe84d4928b090c69a0c812ca8->leave($__internal_dfdb84750729b343ba074acfc6f0e6714f44f28fe84d4928b090c69a0c812ca8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22ec3e718ce6b26c2ecbd84fcfd7487c286e74df2c800658ae2893383cc1d957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ec3e718ce6b26c2ecbd84fcfd7487c286e74df2c800658ae2893383cc1d957->enter($__internal_22ec3e718ce6b26c2ecbd84fcfd7487c286e74df2c800658ae2893383cc1d957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b18b8fd1397f0caa67f91c1140be41ce9b6734b5287905e7723f201e5ad38ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18b8fd1397f0caa67f91c1140be41ce9b6734b5287905e7723f201e5ad38ba7->enter($__internal_b18b8fd1397f0caa67f91c1140be41ce9b6734b5287905e7723f201e5ad38ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b18b8fd1397f0caa67f91c1140be41ce9b6734b5287905e7723f201e5ad38ba7->leave($__internal_b18b8fd1397f0caa67f91c1140be41ce9b6734b5287905e7723f201e5ad38ba7_prof);

        
        $__internal_22ec3e718ce6b26c2ecbd84fcfd7487c286e74df2c800658ae2893383cc1d957->leave($__internal_22ec3e718ce6b26c2ecbd84fcfd7487c286e74df2c800658ae2893383cc1d957_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
