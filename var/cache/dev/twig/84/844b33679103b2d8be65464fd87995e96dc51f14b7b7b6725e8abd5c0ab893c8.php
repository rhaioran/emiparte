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
        $__internal_882996eb869e814032af1f49762669d4e2fd687a4d71334e921303a471ed5418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882996eb869e814032af1f49762669d4e2fd687a4d71334e921303a471ed5418->enter($__internal_882996eb869e814032af1f49762669d4e2fd687a4d71334e921303a471ed5418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_72ea9791afc6620480e475840c2543c337bb5176675bfad232d5f7cdafbb60af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ea9791afc6620480e475840c2543c337bb5176675bfad232d5f7cdafbb60af->enter($__internal_72ea9791afc6620480e475840c2543c337bb5176675bfad232d5f7cdafbb60af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882996eb869e814032af1f49762669d4e2fd687a4d71334e921303a471ed5418->leave($__internal_882996eb869e814032af1f49762669d4e2fd687a4d71334e921303a471ed5418_prof);

        
        $__internal_72ea9791afc6620480e475840c2543c337bb5176675bfad232d5f7cdafbb60af->leave($__internal_72ea9791afc6620480e475840c2543c337bb5176675bfad232d5f7cdafbb60af_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_f049aa2d32ca4ad443e6c5da48408fcfe26e125980e8c6e92b8d969ef39c27eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f049aa2d32ca4ad443e6c5da48408fcfe26e125980e8c6e92b8d969ef39c27eb->enter($__internal_f049aa2d32ca4ad443e6c5da48408fcfe26e125980e8c6e92b8d969ef39c27eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_f81426f3f1a1119bbf27f2c41f325c80927fe58d0211fa296185e4fd9d651fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81426f3f1a1119bbf27f2c41f325c80927fe58d0211fa296185e4fd9d651fb0->enter($__internal_f81426f3f1a1119bbf27f2c41f325c80927fe58d0211fa296185e4fd9d651fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

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
        
        $__internal_f81426f3f1a1119bbf27f2c41f325c80927fe58d0211fa296185e4fd9d651fb0->leave($__internal_f81426f3f1a1119bbf27f2c41f325c80927fe58d0211fa296185e4fd9d651fb0_prof);

        
        $__internal_f049aa2d32ca4ad443e6c5da48408fcfe26e125980e8c6e92b8d969ef39c27eb->leave($__internal_f049aa2d32ca4ad443e6c5da48408fcfe26e125980e8c6e92b8d969ef39c27eb_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_d2216c9a26c546d36ccbf5dcd94b096ff1d2bb25b6d8d27acae6c3d5eaf798c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2216c9a26c546d36ccbf5dcd94b096ff1d2bb25b6d8d27acae6c3d5eaf798c2->enter($__internal_d2216c9a26c546d36ccbf5dcd94b096ff1d2bb25b6d8d27acae6c3d5eaf798c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_80091e16ccf7019413ee3f7113c7183493f14dc863b02a8c971e9c9972f00370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80091e16ccf7019413ee3f7113c7183493f14dc863b02a8c971e9c9972f00370->enter($__internal_80091e16ccf7019413ee3f7113c7183493f14dc863b02a8c971e9c9972f00370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_80091e16ccf7019413ee3f7113c7183493f14dc863b02a8c971e9c9972f00370->leave($__internal_80091e16ccf7019413ee3f7113c7183493f14dc863b02a8c971e9c9972f00370_prof);

        
        $__internal_d2216c9a26c546d36ccbf5dcd94b096ff1d2bb25b6d8d27acae6c3d5eaf798c2->leave($__internal_d2216c9a26c546d36ccbf5dcd94b096ff1d2bb25b6d8d27acae6c3d5eaf798c2_prof);

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
