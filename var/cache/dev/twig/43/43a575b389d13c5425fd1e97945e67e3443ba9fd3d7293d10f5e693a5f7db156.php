<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_e2d3aaa8ba6bd3d43faded994622de3aa5432a2dd77c13fbf51515b1aa64402a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f8866b21baa1127543d5fc2c69c9539705b22890a095b5eef72f71a1544a1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8866b21baa1127543d5fc2c69c9539705b22890a095b5eef72f71a1544a1a7->enter($__internal_3f8866b21baa1127543d5fc2c69c9539705b22890a095b5eef72f71a1544a1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_1a6821698560d693a220f5fa3b0563b28e48c50f86509ed1fc419531b0f14cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6821698560d693a220f5fa3b0563b28e48c50f86509ed1fc419531b0f14cc4->enter($__internal_1a6821698560d693a220f5fa3b0563b28e48c50f86509ed1fc419531b0f14cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f8866b21baa1127543d5fc2c69c9539705b22890a095b5eef72f71a1544a1a7->leave($__internal_3f8866b21baa1127543d5fc2c69c9539705b22890a095b5eef72f71a1544a1a7_prof);

        
        $__internal_1a6821698560d693a220f5fa3b0563b28e48c50f86509ed1fc419531b0f14cc4->leave($__internal_1a6821698560d693a220f5fa3b0563b28e48c50f86509ed1fc419531b0f14cc4_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_3504d2f0872c74d00c6d13f47963ecc15b9cd7146cff98c2d3ad709f7dd94a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3504d2f0872c74d00c6d13f47963ecc15b9cd7146cff98c2d3ad709f7dd94a32->enter($__internal_3504d2f0872c74d00c6d13f47963ecc15b9cd7146cff98c2d3ad709f7dd94a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_8254a88ed0d322afe67d296196487445312c774ddec8a9999163b08f7e9f7c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8254a88ed0d322afe67d296196487445312c774ddec8a9999163b08f7e9f7c39->enter($__internal_8254a88ed0d322afe67d296196487445312c774ddec8a9999163b08f7e9f7c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_8254a88ed0d322afe67d296196487445312c774ddec8a9999163b08f7e9f7c39->leave($__internal_8254a88ed0d322afe67d296196487445312c774ddec8a9999163b08f7e9f7c39_prof);

        
        $__internal_3504d2f0872c74d00c6d13f47963ecc15b9cd7146cff98c2d3ad709f7dd94a32->leave($__internal_3504d2f0872c74d00c6d13f47963ecc15b9cd7146cff98c2d3ad709f7dd94a32_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_293dace3dcf7c9689434d00d85a44feace37cc8b090c75ad0634dfd2446a0f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293dace3dcf7c9689434d00d85a44feace37cc8b090c75ad0634dfd2446a0f9e->enter($__internal_293dace3dcf7c9689434d00d85a44feace37cc8b090c75ad0634dfd2446a0f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_4b0a3ee5f7e3678fa46d554545c28469b476ab7c3f4186543a1ea1cba8a2baf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0a3ee5f7e3678fa46d554545c28469b476ab7c3f4186543a1ea1cba8a2baf3->enter($__internal_4b0a3ee5f7e3678fa46d554545c28469b476ab7c3f4186543a1ea1cba8a2baf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_4b0a3ee5f7e3678fa46d554545c28469b476ab7c3f4186543a1ea1cba8a2baf3->leave($__internal_4b0a3ee5f7e3678fa46d554545c28469b476ab7c3f4186543a1ea1cba8a2baf3_prof);

        
        $__internal_293dace3dcf7c9689434d00d85a44feace37cc8b090c75ad0634dfd2446a0f9e->leave($__internal_293dace3dcf7c9689434d00d85a44feace37cc8b090c75ad0634dfd2446a0f9e_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_78932eec3608274e95cc2990f3fb2f195be2175d1839579496c21c8b8475f15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78932eec3608274e95cc2990f3fb2f195be2175d1839579496c21c8b8475f15b->enter($__internal_78932eec3608274e95cc2990f3fb2f195be2175d1839579496c21c8b8475f15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6c27bf294805b6551bcdd844efec711d17cdfa0a6e6e84dbf6671965ed1139c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c27bf294805b6551bcdd844efec711d17cdfa0a6e6e84dbf6671965ed1139c0->enter($__internal_6c27bf294805b6551bcdd844efec711d17cdfa0a6e6e84dbf6671965ed1139c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6c27bf294805b6551bcdd844efec711d17cdfa0a6e6e84dbf6671965ed1139c0->leave($__internal_6c27bf294805b6551bcdd844efec711d17cdfa0a6e6e84dbf6671965ed1139c0_prof);

        
        $__internal_78932eec3608274e95cc2990f3fb2f195be2175d1839579496c21c8b8475f15b->leave($__internal_78932eec3608274e95cc2990f3fb2f195be2175d1839579496c21c8b8475f15b_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_bf4b791afd2e4ec6565ca8cd226870f33b3e58258d16c1b94746e36286e9b76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4b791afd2e4ec6565ca8cd226870f33b3e58258d16c1b94746e36286e9b76d->enter($__internal_bf4b791afd2e4ec6565ca8cd226870f33b3e58258d16c1b94746e36286e9b76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_0c6e7e53b07e93dc1aacca038bf73df448d1e3920660fae67ab68cee2539500e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6e7e53b07e93dc1aacca038bf73df448d1e3920660fae67ab68cee2539500e->enter($__internal_0c6e7e53b07e93dc1aacca038bf73df448d1e3920660fae67ab68cee2539500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute(($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0c6e7e53b07e93dc1aacca038bf73df448d1e3920660fae67ab68cee2539500e->leave($__internal_0c6e7e53b07e93dc1aacca038bf73df448d1e3920660fae67ab68cee2539500e_prof);

        
        $__internal_bf4b791afd2e4ec6565ca8cd226870f33b3e58258d16c1b94746e36286e9b76d->leave($__internal_bf4b791afd2e4ec6565ca8cd226870f33b3e58258d16c1b94746e36286e9b76d_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_c2d37cabeeeafe2bb684948b82a26e7ee295496dcc8b10a632e2c51096b32990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d37cabeeeafe2bb684948b82a26e7ee295496dcc8b10a632e2c51096b32990->enter($__internal_c2d37cabeeeafe2bb684948b82a26e7ee295496dcc8b10a632e2c51096b32990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_04d448478ad928fb0245e87c44a35ae14bb38371f4031e5494934349a28dd4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d448478ad928fb0245e87c44a35ae14bb38371f4031e5494934349a28dd4d5->enter($__internal_04d448478ad928fb0245e87c44a35ae14bb38371f4031e5494934349a28dd4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_04d448478ad928fb0245e87c44a35ae14bb38371f4031e5494934349a28dd4d5->leave($__internal_04d448478ad928fb0245e87c44a35ae14bb38371f4031e5494934349a28dd4d5_prof);

        
        $__internal_c2d37cabeeeafe2bb684948b82a26e7ee295496dcc8b10a632e2c51096b32990->leave($__internal_c2d37cabeeeafe2bb684948b82a26e7ee295496dcc8b10a632e2c51096b32990_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
