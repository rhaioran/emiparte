<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_74d2cafccded1b8b661f046fe878dade74b912df3b043d7e9e8ac628d4b60395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9983167d9f4623bddbc4702bda5d58fcbb4243dc3f4627d5267e8d17c17cd366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9983167d9f4623bddbc4702bda5d58fcbb4243dc3f4627d5267e8d17c17cd366->enter($__internal_9983167d9f4623bddbc4702bda5d58fcbb4243dc3f4627d5267e8d17c17cd366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $__internal_3549e42b76f6747700e36ef2f89cde3019cef54f89ae363006b9f352db46b42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3549e42b76f6747700e36ef2f89cde3019cef54f89ae363006b9f352db46b42a->enter($__internal_3549e42b76f6747700e36ef2f89cde3019cef54f89ae363006b9f352db46b42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9983167d9f4623bddbc4702bda5d58fcbb4243dc3f4627d5267e8d17c17cd366->leave($__internal_9983167d9f4623bddbc4702bda5d58fcbb4243dc3f4627d5267e8d17c17cd366_prof);

        
        $__internal_3549e42b76f6747700e36ef2f89cde3019cef54f89ae363006b9f352db46b42a->leave($__internal_3549e42b76f6747700e36ef2f89cde3019cef54f89ae363006b9f352db46b42a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_079872ca9ad9fb710b0cca2eaca49a25d33c1e139f92341ea016378f268c6838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079872ca9ad9fb710b0cca2eaca49a25d33c1e139f92341ea016378f268c6838->enter($__internal_079872ca9ad9fb710b0cca2eaca49a25d33c1e139f92341ea016378f268c6838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_594d7f61d40eebb410529b932579356b58413a4c18573e9d8a415a92c23dd73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594d7f61d40eebb410529b932579356b58413a4c18573e9d8a415a92c23dd73c->enter($__internal_594d7f61d40eebb410529b932579356b58413a4c18573e9d8a415a92c23dd73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        
        $__internal_594d7f61d40eebb410529b932579356b58413a4c18573e9d8a415a92c23dd73c->leave($__internal_594d7f61d40eebb410529b932579356b58413a4c18573e9d8a415a92c23dd73c_prof);

        
        $__internal_079872ca9ad9fb710b0cca2eaca49a25d33c1e139f92341ea016378f268c6838->leave($__internal_079872ca9ad9fb710b0cca2eaca49a25d33c1e139f92341ea016378f268c6838_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_2fbd7ceb173a15d84a2c80124b517f26c9ab963be1b79429b1f4702e3f64121e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fbd7ceb173a15d84a2c80124b517f26c9ab963be1b79429b1f4702e3f64121e->enter($__internal_2fbd7ceb173a15d84a2c80124b517f26c9ab963be1b79429b1f4702e3f64121e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_f8252baf5648a9fc1aaf22f307fe8c5b644901d006583a44511d784798fe441f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8252baf5648a9fc1aaf22f307fe8c5b644901d006583a44511d784798fe441f->enter($__internal_f8252baf5648a9fc1aaf22f307fe8c5b644901d006583a44511d784798fe441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_f8252baf5648a9fc1aaf22f307fe8c5b644901d006583a44511d784798fe441f->leave($__internal_f8252baf5648a9fc1aaf22f307fe8c5b644901d006583a44511d784798fe441f_prof);

        
        $__internal_2fbd7ceb173a15d84a2c80124b517f26c9ab963be1b79429b1f4702e3f64121e->leave($__internal_2fbd7ceb173a15d84a2c80124b517f26c9ab963be1b79429b1f4702e3f64121e_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_c287cce1962cd198cb93c2d5f95acaa001f72d26dc5823183c3484e7a192e3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c287cce1962cd198cb93c2d5f95acaa001f72d26dc5823183c3484e7a192e3da->enter($__internal_c287cce1962cd198cb93c2d5f95acaa001f72d26dc5823183c3484e7a192e3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_68fd563b9d316e80e045471bdf62a961fbea73b17ecab66502a92db38243e6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68fd563b9d316e80e045471bdf62a961fbea73b17ecab66502a92db38243e6d7->enter($__internal_68fd563b9d316e80e045471bdf62a961fbea73b17ecab66502a92db38243e6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                ";
        // line 24
        if ( !(($context["batch_translation_domain"] ?? $this->getContext($context, "batch_translation_domain")) === false)) {
            // line 25
            echo "                    ";
            $context["action_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["action_label"] ?? $this->getContext($context, "action_label")), array(), ($context["batch_translation_domain"] ?? $this->getContext($context, "batch_translation_domain")));
            // line 26
            echo "                ";
        }
        // line 27
        echo "                <h4 class=\"box-title\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("title_batch_confirmation", array("%action%" => ($context["action_label"] ?? $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 30
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "all_elements", array())) {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 33
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "idx", array())), array("%count%" => twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "idx", array()))), "SonataAdminBundle");
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["data"] ?? $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 48
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 55
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_68fd563b9d316e80e045471bdf62a961fbea73b17ecab66502a92db38243e6d7->leave($__internal_68fd563b9d316e80e045471bdf62a961fbea73b17ecab66502a92db38243e6d7_prof);

        
        $__internal_c287cce1962cd198cb93c2d5f95acaa001f72d26dc5823183c3484e7a192e3da->leave($__internal_c287cce1962cd198cb93c2d5f95acaa001f72d26dc5823183c3484e7a192e3da_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  163 => 52,  159 => 51,  153 => 49,  151 => 48,  146 => 46,  140 => 43,  134 => 40,  130 => 39,  125 => 37,  121 => 35,  118 => 34,  115 => 33,  109 => 31,  107 => 30,  100 => 27,  97 => 26,  94 => 25,  92 => 24,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                {% if batch_translation_domain is not same as(false) %}
                    {% set action_label = action_label|trans({}, batch_translation_domain) %}
                {% endif %}
                <h4 class=\"box-title\">{% trans with {'%action%': action_label} from 'SonataAdminBundle' %}title_batch_confirmation{% endtrans %}</h4>
            </div>
            <div class=\"box-body\">
                {% if data.all_elements %}
                    {{ 'message_batch_all_confirmation'|trans({}, 'SonataAdminBundle') }}
                {% else %}
                    {% transchoice data.idx|length with {'%count%': data.idx|length} from 'SonataAdminBundle' %}message_batch_confirmation{% endtranschoice %}
                {% endif %}
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"{{ data|json_encode }}\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <div style=\"display: none\">
                        {{ form_rest(form) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">{{ 'btn_execute_batch_action'|trans({}, 'SonataAdminBundle') }}</button>

                    {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateUrl('list') }}\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
                        </a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/batch_confirmation.html.twig");
    }
}
