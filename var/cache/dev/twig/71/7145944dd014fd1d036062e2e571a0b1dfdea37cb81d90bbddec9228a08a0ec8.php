<?php

/* SonataIntlBundle:CRUD:list_decimal.html.twig */
class __TwigTemplate_d9b5cf5e567389ab648c45807b3f015be8b2fce38e8291a61f32f1d99505ecca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_decimal.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1e407e659c46300c1258f8f2c6d7bb2a439667df20e96865d0852d823672859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e407e659c46300c1258f8f2c6d7bb2a439667df20e96865d0852d823672859->enter($__internal_a1e407e659c46300c1258f8f2c6d7bb2a439667df20e96865d0852d823672859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_decimal.html.twig"));

        $__internal_6478d0096ebfee2406add76d526ee1d1296ef88dc09f257dd405454852573453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6478d0096ebfee2406add76d526ee1d1296ef88dc09f257dd405454852573453->enter($__internal_6478d0096ebfee2406add76d526ee1d1296ef88dc09f257dd405454852573453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_decimal.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e407e659c46300c1258f8f2c6d7bb2a439667df20e96865d0852d823672859->leave($__internal_a1e407e659c46300c1258f8f2c6d7bb2a439667df20e96865d0852d823672859_prof);

        
        $__internal_6478d0096ebfee2406add76d526ee1d1296ef88dc09f257dd405454852573453->leave($__internal_6478d0096ebfee2406add76d526ee1d1296ef88dc09f257dd405454852573453_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6bd271688bff9070ee84114807a5fd16caadcec4ab0497f2538a2d3cd3fa3a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd271688bff9070ee84114807a5fd16caadcec4ab0497f2538a2d3cd3fa3a18->enter($__internal_6bd271688bff9070ee84114807a5fd16caadcec4ab0497f2538a2d3cd3fa3a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6e7a6fd74f50e781135c2823642c23bc030683f1ac8611e0b8d45e6c17328611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7a6fd74f50e781135c2823642c23bc030683f1ac8611e0b8d45e6c17328611->enter($__internal_6e7a6fd74f50e781135c2823642c23bc030683f1ac8611e0b8d45e6c17328611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if ((null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["attributes"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array()), array())) : (array()));
            // line 19
            echo "        ";
            $context["textAttributes"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array()), array())) : (array()));
            // line 20
            echo "        ";
            $context["locale"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array()), null)) : (null));
            // line 21
            echo "
        ";
            // line 22
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\NumberExtension')->formatDecimal(($context["value"] ?? $this->getContext($context, "value")), ($context["attributes"] ?? $this->getContext($context, "attributes")), ($context["textAttributes"] ?? $this->getContext($context, "textAttributes")), ($context["locale"] ?? $this->getContext($context, "locale")));
        }
        
        $__internal_6e7a6fd74f50e781135c2823642c23bc030683f1ac8611e0b8d45e6c17328611->leave($__internal_6e7a6fd74f50e781135c2823642c23bc030683f1ac8611e0b8d45e6c17328611_prof);

        
        $__internal_6bd271688bff9070ee84114807a5fd16caadcec4ab0497f2538a2d3cd3fa3a18->leave($__internal_6bd271688bff9070ee84114807a5fd16caadcec4ab0497f2538a2d3cd3fa3a18_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_decimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  61 => 21,  58 => 20,  55 => 19,  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {%- if value is null -%}
        &nbsp;
    {%- else -%}
        {% set attributes = field_description.options.attributes|default({}) %}
        {% set textAttributes = field_description.options.textAttributes|default({}) %}
        {% set locale = field_description.options.locale|default(null) %}

        {{ value | number_format_decimal(attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:list_decimal.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/list_decimal.html.twig");
    }
}
