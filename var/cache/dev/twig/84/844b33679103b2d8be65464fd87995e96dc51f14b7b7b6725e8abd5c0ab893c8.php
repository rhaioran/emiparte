<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_cb8b575b9695baa83610817a24be4249a2b24fe6078da91d8625d75de8779afa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a021dfbcd3fc70c36038e2caf6b7ea2ee00136d156ffca6ba9593210fad03f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a021dfbcd3fc70c36038e2caf6b7ea2ee00136d156ffca6ba9593210fad03f11->enter($__internal_a021dfbcd3fc70c36038e2caf6b7ea2ee00136d156ffca6ba9593210fad03f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_6ec3343c85960dc28a4257854803938acf14880fef4d02a8e649405773887c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec3343c85960dc28a4257854803938acf14880fef4d02a8e649405773887c4b->enter($__internal_6ec3343c85960dc28a4257854803938acf14880fef4d02a8e649405773887c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a021dfbcd3fc70c36038e2caf6b7ea2ee00136d156ffca6ba9593210fad03f11->leave($__internal_a021dfbcd3fc70c36038e2caf6b7ea2ee00136d156ffca6ba9593210fad03f11_prof);

        
        $__internal_6ec3343c85960dc28a4257854803938acf14880fef4d02a8e649405773887c4b->leave($__internal_6ec3343c85960dc28a4257854803938acf14880fef4d02a8e649405773887c4b_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_cb0fa3a6e2fa5669c0ddff6809cf48b3160ceb003a9116c5d773c26bf21c404f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0fa3a6e2fa5669c0ddff6809cf48b3160ceb003a9116c5d773c26bf21c404f->enter($__internal_cb0fa3a6e2fa5669c0ddff6809cf48b3160ceb003a9116c5d773c26bf21c404f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_1ae9b2307901f73d4af1982fc32404efef54df7889eef4a4f902fd988978102b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae9b2307901f73d4af1982fc32404efef54df7889eef4a4f902fd988978102b->enter($__internal_1ae9b2307901f73d4af1982fc32404efef54df7889eef4a4f902fd988978102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_1ae9b2307901f73d4af1982fc32404efef54df7889eef4a4f902fd988978102b->leave($__internal_1ae9b2307901f73d4af1982fc32404efef54df7889eef4a4f902fd988978102b_prof);

        
        $__internal_cb0fa3a6e2fa5669c0ddff6809cf48b3160ceb003a9116c5d773c26bf21c404f->leave($__internal_cb0fa3a6e2fa5669c0ddff6809cf48b3160ceb003a9116c5d773c26bf21c404f_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_ec40df674bf783b8d15a7d3332fefbf49e96bf5b9a9c0fb11941a6f4093c0c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec40df674bf783b8d15a7d3332fefbf49e96bf5b9a9c0fb11941a6f4093c0c02->enter($__internal_ec40df674bf783b8d15a7d3332fefbf49e96bf5b9a9c0fb11941a6f4093c0c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_bcd1781d4c1e34c73d28b4866babaa8199f2ff2dbcf23688da9973a47075915b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd1781d4c1e34c73d28b4866babaa8199f2ff2dbcf23688da9973a47075915b->enter($__internal_bcd1781d4c1e34c73d28b4866babaa8199f2ff2dbcf23688da9973a47075915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bcd1781d4c1e34c73d28b4866babaa8199f2ff2dbcf23688da9973a47075915b->leave($__internal_bcd1781d4c1e34c73d28b4866babaa8199f2ff2dbcf23688da9973a47075915b_prof);

        
        $__internal_ec40df674bf783b8d15a7d3332fefbf49e96bf5b9a9c0fb11941a6f4093c0c02->leave($__internal_ec40df674bf783b8d15a7d3332fefbf49e96bf5b9a9c0fb11941a6f4093c0c02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 31,  97 => 29,  94 => 28,  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
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

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {% spaceless %}
        {% if value %}
            <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
        {% else %}
            <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
        {% endif %}
    {% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
