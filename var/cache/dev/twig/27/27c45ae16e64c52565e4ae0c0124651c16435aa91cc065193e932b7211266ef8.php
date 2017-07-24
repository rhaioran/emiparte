<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_051851623e785aaab9ded8bd33c67fdbb42c450485d8daf27ed90468e057e649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ddff6ab444418a1d1d3e11bcf1a23089357bda8ce9e9f59414f9e1f0c45d1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ddff6ab444418a1d1d3e11bcf1a23089357bda8ce9e9f59414f9e1f0c45d1e3->enter($__internal_8ddff6ab444418a1d1d3e11bcf1a23089357bda8ce9e9f59414f9e1f0c45d1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_35d286ba2b9733a1ae5d8bfd9fe8f85e572e57a147e8879645a4568a3a8d2953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d286ba2b9733a1ae5d8bfd9fe8f85e572e57a147e8879645a4568a3a8d2953->enter($__internal_35d286ba2b9733a1ae5d8bfd9fe8f85e572e57a147e8879645a4568a3a8d2953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddff6ab444418a1d1d3e11bcf1a23089357bda8ce9e9f59414f9e1f0c45d1e3->leave($__internal_8ddff6ab444418a1d1d3e11bcf1a23089357bda8ce9e9f59414f9e1f0c45d1e3_prof);

        
        $__internal_35d286ba2b9733a1ae5d8bfd9fe8f85e572e57a147e8879645a4568a3a8d2953->leave($__internal_35d286ba2b9733a1ae5d8bfd9fe8f85e572e57a147e8879645a4568a3a8d2953_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42414b82780bbc317be67acd943cd09232241c92bf3b633496cc1a6d2e82d0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42414b82780bbc317be67acd943cd09232241c92bf3b633496cc1a6d2e82d0cf->enter($__internal_42414b82780bbc317be67acd943cd09232241c92bf3b633496cc1a6d2e82d0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef55888c3b1c18fa951e83a26425df90712e3cb44627dfa615d8fa22af182b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef55888c3b1c18fa951e83a26425df90712e3cb44627dfa615d8fa22af182b4d->enter($__internal_ef55888c3b1c18fa951e83a26425df90712e3cb44627dfa615d8fa22af182b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ef55888c3b1c18fa951e83a26425df90712e3cb44627dfa615d8fa22af182b4d->leave($__internal_ef55888c3b1c18fa951e83a26425df90712e3cb44627dfa615d8fa22af182b4d_prof);

        
        $__internal_42414b82780bbc317be67acd943cd09232241c92bf3b633496cc1a6d2e82d0cf->leave($__internal_42414b82780bbc317be67acd943cd09232241c92bf3b633496cc1a6d2e82d0cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
