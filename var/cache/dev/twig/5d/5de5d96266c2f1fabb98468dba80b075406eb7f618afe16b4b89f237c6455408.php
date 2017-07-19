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
        $__internal_37c762ecbb3df64649e5952cbe92c9f70428008314217bc2145e954575f83263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c762ecbb3df64649e5952cbe92c9f70428008314217bc2145e954575f83263->enter($__internal_37c762ecbb3df64649e5952cbe92c9f70428008314217bc2145e954575f83263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e29bf9c152eb39494a79d43e506bf72c31126be3c9c654c4ee0e5fd3019b5aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29bf9c152eb39494a79d43e506bf72c31126be3c9c654c4ee0e5fd3019b5aff->enter($__internal_e29bf9c152eb39494a79d43e506bf72c31126be3c9c654c4ee0e5fd3019b5aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c762ecbb3df64649e5952cbe92c9f70428008314217bc2145e954575f83263->leave($__internal_37c762ecbb3df64649e5952cbe92c9f70428008314217bc2145e954575f83263_prof);

        
        $__internal_e29bf9c152eb39494a79d43e506bf72c31126be3c9c654c4ee0e5fd3019b5aff->leave($__internal_e29bf9c152eb39494a79d43e506bf72c31126be3c9c654c4ee0e5fd3019b5aff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1406d09f5c62871c8611c2166db4010eb4f6706685fd199421be6cd28a6ebc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1406d09f5c62871c8611c2166db4010eb4f6706685fd199421be6cd28a6ebc07->enter($__internal_1406d09f5c62871c8611c2166db4010eb4f6706685fd199421be6cd28a6ebc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f4e900daa0612de041dc2e3585f5b129ac79bcdf93cb643c1c151e9146c0725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4e900daa0612de041dc2e3585f5b129ac79bcdf93cb643c1c151e9146c0725->enter($__internal_2f4e900daa0612de041dc2e3585f5b129ac79bcdf93cb643c1c151e9146c0725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2f4e900daa0612de041dc2e3585f5b129ac79bcdf93cb643c1c151e9146c0725->leave($__internal_2f4e900daa0612de041dc2e3585f5b129ac79bcdf93cb643c1c151e9146c0725_prof);

        
        $__internal_1406d09f5c62871c8611c2166db4010eb4f6706685fd199421be6cd28a6ebc07->leave($__internal_1406d09f5c62871c8611c2166db4010eb4f6706685fd199421be6cd28a6ebc07_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b464e5562d1214631f7fabf891e5b2dd8dae1cf6bc4302843989a43e5cd6523d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b464e5562d1214631f7fabf891e5b2dd8dae1cf6bc4302843989a43e5cd6523d->enter($__internal_b464e5562d1214631f7fabf891e5b2dd8dae1cf6bc4302843989a43e5cd6523d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2eca34c085d745a9aa876f4e1dd01a601e2acc163989b84bc52c1756e92e2ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eca34c085d745a9aa876f4e1dd01a601e2acc163989b84bc52c1756e92e2ee0->enter($__internal_2eca34c085d745a9aa876f4e1dd01a601e2acc163989b84bc52c1756e92e2ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2eca34c085d745a9aa876f4e1dd01a601e2acc163989b84bc52c1756e92e2ee0->leave($__internal_2eca34c085d745a9aa876f4e1dd01a601e2acc163989b84bc52c1756e92e2ee0_prof);

        
        $__internal_b464e5562d1214631f7fabf891e5b2dd8dae1cf6bc4302843989a43e5cd6523d->leave($__internal_b464e5562d1214631f7fabf891e5b2dd8dae1cf6bc4302843989a43e5cd6523d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8744d91594dfb9cab9520c7507e4537ad818ede1574c982a2aa68fb212edd99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8744d91594dfb9cab9520c7507e4537ad818ede1574c982a2aa68fb212edd99->enter($__internal_a8744d91594dfb9cab9520c7507e4537ad818ede1574c982a2aa68fb212edd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f24f4b7ea97d52b8a0786329386913bd7d7b98b08a620437fb9046927994def8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24f4b7ea97d52b8a0786329386913bd7d7b98b08a620437fb9046927994def8->enter($__internal_f24f4b7ea97d52b8a0786329386913bd7d7b98b08a620437fb9046927994def8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f24f4b7ea97d52b8a0786329386913bd7d7b98b08a620437fb9046927994def8->leave($__internal_f24f4b7ea97d52b8a0786329386913bd7d7b98b08a620437fb9046927994def8_prof);

        
        $__internal_a8744d91594dfb9cab9520c7507e4537ad818ede1574c982a2aa68fb212edd99->leave($__internal_a8744d91594dfb9cab9520c7507e4537ad818ede1574c982a2aa68fb212edd99_prof);

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
