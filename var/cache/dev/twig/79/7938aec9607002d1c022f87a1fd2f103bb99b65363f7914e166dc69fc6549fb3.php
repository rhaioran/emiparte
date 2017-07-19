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
        $__internal_6f988b88d243f336f6c0552e100712afe8f58eb8c2ca679030c004eadfb4c983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f988b88d243f336f6c0552e100712afe8f58eb8c2ca679030c004eadfb4c983->enter($__internal_6f988b88d243f336f6c0552e100712afe8f58eb8c2ca679030c004eadfb4c983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_6875128fbf6dd1461464d2430c0ccea8677d190dbfe3bfb3d1e53676ca219c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6875128fbf6dd1461464d2430c0ccea8677d190dbfe3bfb3d1e53676ca219c44->enter($__internal_6875128fbf6dd1461464d2430c0ccea8677d190dbfe3bfb3d1e53676ca219c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f988b88d243f336f6c0552e100712afe8f58eb8c2ca679030c004eadfb4c983->leave($__internal_6f988b88d243f336f6c0552e100712afe8f58eb8c2ca679030c004eadfb4c983_prof);

        
        $__internal_6875128fbf6dd1461464d2430c0ccea8677d190dbfe3bfb3d1e53676ca219c44->leave($__internal_6875128fbf6dd1461464d2430c0ccea8677d190dbfe3bfb3d1e53676ca219c44_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_2eaf4157aa7efec47da8f8a63893ad911624f3bccd899a6a1e5157f3d589e9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eaf4157aa7efec47da8f8a63893ad911624f3bccd899a6a1e5157f3d589e9ba->enter($__internal_2eaf4157aa7efec47da8f8a63893ad911624f3bccd899a6a1e5157f3d589e9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90a3f2de48f7856525a9e7d4f6a54ca97b8785ae27fb5b3e013c1d30c6f82c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a3f2de48f7856525a9e7d4f6a54ca97b8785ae27fb5b3e013c1d30c6f82c70->enter($__internal_90a3f2de48f7856525a9e7d4f6a54ca97b8785ae27fb5b3e013c1d30c6f82c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_90a3f2de48f7856525a9e7d4f6a54ca97b8785ae27fb5b3e013c1d30c6f82c70->leave($__internal_90a3f2de48f7856525a9e7d4f6a54ca97b8785ae27fb5b3e013c1d30c6f82c70_prof);

        
        $__internal_2eaf4157aa7efec47da8f8a63893ad911624f3bccd899a6a1e5157f3d589e9ba->leave($__internal_2eaf4157aa7efec47da8f8a63893ad911624f3bccd899a6a1e5157f3d589e9ba_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_e66727b344d8bbfbaa2e7eb93f9037f3b27dadaa1d20c410ad336d4fa9a3f67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66727b344d8bbfbaa2e7eb93f9037f3b27dadaa1d20c410ad336d4fa9a3f67f->enter($__internal_e66727b344d8bbfbaa2e7eb93f9037f3b27dadaa1d20c410ad336d4fa9a3f67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_dca150aacea99759ee80a462b5b43d8ee05a0f2f9260daab0401fbada0146830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca150aacea99759ee80a462b5b43d8ee05a0f2f9260daab0401fbada0146830->enter($__internal_dca150aacea99759ee80a462b5b43d8ee05a0f2f9260daab0401fbada0146830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dca150aacea99759ee80a462b5b43d8ee05a0f2f9260daab0401fbada0146830->leave($__internal_dca150aacea99759ee80a462b5b43d8ee05a0f2f9260daab0401fbada0146830_prof);

        
        $__internal_e66727b344d8bbfbaa2e7eb93f9037f3b27dadaa1d20c410ad336d4fa9a3f67f->leave($__internal_e66727b344d8bbfbaa2e7eb93f9037f3b27dadaa1d20c410ad336d4fa9a3f67f_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c157502b59c467d2b2375465a2f76231c2c555868691ea71e0d831e6945cf71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c157502b59c467d2b2375465a2f76231c2c555868691ea71e0d831e6945cf71d->enter($__internal_c157502b59c467d2b2375465a2f76231c2c555868691ea71e0d831e6945cf71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_9b88fcfb5be13ae689bf4764742e6ae6ed9c8abca2c92593dbba410c014970d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b88fcfb5be13ae689bf4764742e6ae6ed9c8abca2c92593dbba410c014970d8->enter($__internal_9b88fcfb5be13ae689bf4764742e6ae6ed9c8abca2c92593dbba410c014970d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_9b88fcfb5be13ae689bf4764742e6ae6ed9c8abca2c92593dbba410c014970d8->leave($__internal_9b88fcfb5be13ae689bf4764742e6ae6ed9c8abca2c92593dbba410c014970d8_prof);

        
        $__internal_c157502b59c467d2b2375465a2f76231c2c555868691ea71e0d831e6945cf71d->leave($__internal_c157502b59c467d2b2375465a2f76231c2c555868691ea71e0d831e6945cf71d_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e9816e2044502280e25307214e1293122fb2dde1f67061b0a1179566647aa745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9816e2044502280e25307214e1293122fb2dde1f67061b0a1179566647aa745->enter($__internal_e9816e2044502280e25307214e1293122fb2dde1f67061b0a1179566647aa745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_8a6412385b460058ed74017f3e99cab8bb5904eceb3c96bb405236b9839b3fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6412385b460058ed74017f3e99cab8bb5904eceb3c96bb405236b9839b3fb0->enter($__internal_8a6412385b460058ed74017f3e99cab8bb5904eceb3c96bb405236b9839b3fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_8a6412385b460058ed74017f3e99cab8bb5904eceb3c96bb405236b9839b3fb0->leave($__internal_8a6412385b460058ed74017f3e99cab8bb5904eceb3c96bb405236b9839b3fb0_prof);

        
        $__internal_e9816e2044502280e25307214e1293122fb2dde1f67061b0a1179566647aa745->leave($__internal_e9816e2044502280e25307214e1293122fb2dde1f67061b0a1179566647aa745_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_88290bc5e7b36519da4093591f7b731a260b06062c45079786332804c4d46bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88290bc5e7b36519da4093591f7b731a260b06062c45079786332804c4d46bd9->enter($__internal_88290bc5e7b36519da4093591f7b731a260b06062c45079786332804c4d46bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_9c95dccfece7cc61c4eadce1f6caf811e1e000b4fab6c5e193a3dccd20efce3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c95dccfece7cc61c4eadce1f6caf811e1e000b4fab6c5e193a3dccd20efce3b->enter($__internal_9c95dccfece7cc61c4eadce1f6caf811e1e000b4fab6c5e193a3dccd20efce3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_9c95dccfece7cc61c4eadce1f6caf811e1e000b4fab6c5e193a3dccd20efce3b->leave($__internal_9c95dccfece7cc61c4eadce1f6caf811e1e000b4fab6c5e193a3dccd20efce3b_prof);

        
        $__internal_88290bc5e7b36519da4093591f7b731a260b06062c45079786332804c4d46bd9->leave($__internal_88290bc5e7b36519da4093591f7b731a260b06062c45079786332804c4d46bd9_prof);

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
