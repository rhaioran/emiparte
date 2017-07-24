<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_d5ace458ec4f50d9b8ff1d6f70924cfd58d8ad056e0b86b0bdd257830035079d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c80728955e1d1e38aa82d79ee271ecf5c401340a99d1e19eaf7d2bdc0efa4293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80728955e1d1e38aa82d79ee271ecf5c401340a99d1e19eaf7d2bdc0efa4293->enter($__internal_c80728955e1d1e38aa82d79ee271ecf5c401340a99d1e19eaf7d2bdc0efa4293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_2d06c123e6735cd5fca9e1d1627ae033524b4b47a0d7d3e4d7f6191ef5a43522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d06c123e6735cd5fca9e1d1627ae033524b4b47a0d7d3e4d7f6191ef5a43522->enter($__internal_2d06c123e6735cd5fca9e1d1627ae033524b4b47a0d7d3e4d7f6191ef5a43522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80728955e1d1e38aa82d79ee271ecf5c401340a99d1e19eaf7d2bdc0efa4293->leave($__internal_c80728955e1d1e38aa82d79ee271ecf5c401340a99d1e19eaf7d2bdc0efa4293_prof);

        
        $__internal_2d06c123e6735cd5fca9e1d1627ae033524b4b47a0d7d3e4d7f6191ef5a43522->leave($__internal_2d06c123e6735cd5fca9e1d1627ae033524b4b47a0d7d3e4d7f6191ef5a43522_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8a3a1a19b846a549450edae05fcae3dec7251f15adacec9588c0ca975aefb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a3a1a19b846a549450edae05fcae3dec7251f15adacec9588c0ca975aefb63->enter($__internal_d8a3a1a19b846a549450edae05fcae3dec7251f15adacec9588c0ca975aefb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8c872c62f0a60972581e11fe7b3631ae726e0f84db8308ffc0d8431cb1f6635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c872c62f0a60972581e11fe7b3631ae726e0f84db8308ffc0d8431cb1f6635->enter($__internal_b8c872c62f0a60972581e11fe7b3631ae726e0f84db8308ffc0d8431cb1f6635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b8c872c62f0a60972581e11fe7b3631ae726e0f84db8308ffc0d8431cb1f6635->leave($__internal_b8c872c62f0a60972581e11fe7b3631ae726e0f84db8308ffc0d8431cb1f6635_prof);

        
        $__internal_d8a3a1a19b846a549450edae05fcae3dec7251f15adacec9588c0ca975aefb63->leave($__internal_d8a3a1a19b846a549450edae05fcae3dec7251f15adacec9588c0ca975aefb63_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_4bec68d49aac6038a0f7354ff45c40e29c854618711bd79cf0a704ed98ccffca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bec68d49aac6038a0f7354ff45c40e29c854618711bd79cf0a704ed98ccffca->enter($__internal_4bec68d49aac6038a0f7354ff45c40e29c854618711bd79cf0a704ed98ccffca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_589c56ce94ec96e8ba51fac18d3c9fe9ac055f982acb49a62b090df1ab825968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589c56ce94ec96e8ba51fac18d3c9fe9ac055f982acb49a62b090df1ab825968->enter($__internal_589c56ce94ec96e8ba51fac18d3c9fe9ac055f982acb49a62b090df1ab825968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_589c56ce94ec96e8ba51fac18d3c9fe9ac055f982acb49a62b090df1ab825968->leave($__internal_589c56ce94ec96e8ba51fac18d3c9fe9ac055f982acb49a62b090df1ab825968_prof);

        
        $__internal_4bec68d49aac6038a0f7354ff45c40e29c854618711bd79cf0a704ed98ccffca->leave($__internal_4bec68d49aac6038a0f7354ff45c40e29c854618711bd79cf0a704ed98ccffca_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c04b89ca80a4093ef314f7d5faac457ae8bb204c9f8c1bf74ea5038678927bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04b89ca80a4093ef314f7d5faac457ae8bb204c9f8c1bf74ea5038678927bbe->enter($__internal_c04b89ca80a4093ef314f7d5faac457ae8bb204c9f8c1bf74ea5038678927bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_12d25f8ee29b55b36c82491e67f49c891f6d49faff2ffbf44b344c071138875d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d25f8ee29b55b36c82491e67f49c891f6d49faff2ffbf44b344c071138875d->enter($__internal_12d25f8ee29b55b36c82491e67f49c891f6d49faff2ffbf44b344c071138875d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_12d25f8ee29b55b36c82491e67f49c891f6d49faff2ffbf44b344c071138875d->leave($__internal_12d25f8ee29b55b36c82491e67f49c891f6d49faff2ffbf44b344c071138875d_prof);

        
        $__internal_c04b89ca80a4093ef314f7d5faac457ae8bb204c9f8c1bf74ea5038678927bbe->leave($__internal_c04b89ca80a4093ef314f7d5faac457ae8bb204c9f8c1bf74ea5038678927bbe_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_53992c66e8ea3b3f7c8e93f531e42fe0f84b5215dff76da33a35d6c1b2d4d53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53992c66e8ea3b3f7c8e93f531e42fe0f84b5215dff76da33a35d6c1b2d4d53c->enter($__internal_53992c66e8ea3b3f7c8e93f531e42fe0f84b5215dff76da33a35d6c1b2d4d53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_a8038a6dd8005aafec39a67e0a697577e6363072b302ca4820c9b7ea2eda1124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8038a6dd8005aafec39a67e0a697577e6363072b302ca4820c9b7ea2eda1124->enter($__internal_a8038a6dd8005aafec39a67e0a697577e6363072b302ca4820c9b7ea2eda1124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_a8038a6dd8005aafec39a67e0a697577e6363072b302ca4820c9b7ea2eda1124->leave($__internal_a8038a6dd8005aafec39a67e0a697577e6363072b302ca4820c9b7ea2eda1124_prof);

        
        $__internal_53992c66e8ea3b3f7c8e93f531e42fe0f84b5215dff76da33a35d6c1b2d4d53c->leave($__internal_53992c66e8ea3b3f7c8e93f531e42fe0f84b5215dff76da33a35d6c1b2d4d53c_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_45a4c022b2b1b9441f80fbf12054d73c7bc4f080a11f4fe0a33b5950f280d211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a4c022b2b1b9441f80fbf12054d73c7bc4f080a11f4fe0a33b5950f280d211->enter($__internal_45a4c022b2b1b9441f80fbf12054d73c7bc4f080a11f4fe0a33b5950f280d211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_747dcfbbf332522d850647837d4d8e5f0baf740e804efa6bd8c111a8ccd868ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747dcfbbf332522d850647837d4d8e5f0baf740e804efa6bd8c111a8ccd868ff->enter($__internal_747dcfbbf332522d850647837d4d8e5f0baf740e804efa6bd8c111a8ccd868ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_747dcfbbf332522d850647837d4d8e5f0baf740e804efa6bd8c111a8ccd868ff->leave($__internal_747dcfbbf332522d850647837d4d8e5f0baf740e804efa6bd8c111a8ccd868ff_prof);

        
        $__internal_45a4c022b2b1b9441f80fbf12054d73c7bc4f080a11f4fe0a33b5950f280d211->leave($__internal_45a4c022b2b1b9441f80fbf12054d73c7bc4f080a11f4fe0a33b5950f280d211_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  152 => 34,  134 => 30,  124 => 27,  115 => 26,  102 => 23,  93 => 22,  79 => 18,  73 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 32,);
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

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
