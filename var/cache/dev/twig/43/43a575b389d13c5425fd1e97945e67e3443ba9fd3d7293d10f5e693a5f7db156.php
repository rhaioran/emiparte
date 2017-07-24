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
        $__internal_b6e5a75216629c822e2fe275760dc861af26b098fbbb00692366991513747aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e5a75216629c822e2fe275760dc861af26b098fbbb00692366991513747aaf->enter($__internal_b6e5a75216629c822e2fe275760dc861af26b098fbbb00692366991513747aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_cf01f24b199ad914e3df58c54f244f3ac9984bb90904afc4ef0c39527b91dfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf01f24b199ad914e3df58c54f244f3ac9984bb90904afc4ef0c39527b91dfc3->enter($__internal_cf01f24b199ad914e3df58c54f244f3ac9984bb90904afc4ef0c39527b91dfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6e5a75216629c822e2fe275760dc861af26b098fbbb00692366991513747aaf->leave($__internal_b6e5a75216629c822e2fe275760dc861af26b098fbbb00692366991513747aaf_prof);

        
        $__internal_cf01f24b199ad914e3df58c54f244f3ac9984bb90904afc4ef0c39527b91dfc3->leave($__internal_cf01f24b199ad914e3df58c54f244f3ac9984bb90904afc4ef0c39527b91dfc3_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_1aa184054a28d621e6f37d0b1b12d80eca54b0f4b265bfed205ecae9244a1ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa184054a28d621e6f37d0b1b12d80eca54b0f4b265bfed205ecae9244a1ef8->enter($__internal_1aa184054a28d621e6f37d0b1b12d80eca54b0f4b265bfed205ecae9244a1ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_35b90d1b6e7d4c9015b4c2795c30fe81a8edabdbd1da951d0b10fd26be435f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b90d1b6e7d4c9015b4c2795c30fe81a8edabdbd1da951d0b10fd26be435f19->enter($__internal_35b90d1b6e7d4c9015b4c2795c30fe81a8edabdbd1da951d0b10fd26be435f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_35b90d1b6e7d4c9015b4c2795c30fe81a8edabdbd1da951d0b10fd26be435f19->leave($__internal_35b90d1b6e7d4c9015b4c2795c30fe81a8edabdbd1da951d0b10fd26be435f19_prof);

        
        $__internal_1aa184054a28d621e6f37d0b1b12d80eca54b0f4b265bfed205ecae9244a1ef8->leave($__internal_1aa184054a28d621e6f37d0b1b12d80eca54b0f4b265bfed205ecae9244a1ef8_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_ba88e0bfee94239e09ca738e886d5a6a1bedd6bd3a8bdf8b41f3d5b3f8fa3ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba88e0bfee94239e09ca738e886d5a6a1bedd6bd3a8bdf8b41f3d5b3f8fa3ce0->enter($__internal_ba88e0bfee94239e09ca738e886d5a6a1bedd6bd3a8bdf8b41f3d5b3f8fa3ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_76172f754bd86adca5a162714e65b50ff32ac2a71a58d5d711b5f2869bd4c699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76172f754bd86adca5a162714e65b50ff32ac2a71a58d5d711b5f2869bd4c699->enter($__internal_76172f754bd86adca5a162714e65b50ff32ac2a71a58d5d711b5f2869bd4c699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_76172f754bd86adca5a162714e65b50ff32ac2a71a58d5d711b5f2869bd4c699->leave($__internal_76172f754bd86adca5a162714e65b50ff32ac2a71a58d5d711b5f2869bd4c699_prof);

        
        $__internal_ba88e0bfee94239e09ca738e886d5a6a1bedd6bd3a8bdf8b41f3d5b3f8fa3ce0->leave($__internal_ba88e0bfee94239e09ca738e886d5a6a1bedd6bd3a8bdf8b41f3d5b3f8fa3ce0_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_584d456d08578c9a7af77c9ed7ea2d8108e52fd98f3bbb18ec92a8d6a752e2c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584d456d08578c9a7af77c9ed7ea2d8108e52fd98f3bbb18ec92a8d6a752e2c7->enter($__internal_584d456d08578c9a7af77c9ed7ea2d8108e52fd98f3bbb18ec92a8d6a752e2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_e4a5937ddedf0c6f1f853da8209feadd378d4daac4177201130af7a7467e141e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a5937ddedf0c6f1f853da8209feadd378d4daac4177201130af7a7467e141e->enter($__internal_e4a5937ddedf0c6f1f853da8209feadd378d4daac4177201130af7a7467e141e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

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
        
        $__internal_e4a5937ddedf0c6f1f853da8209feadd378d4daac4177201130af7a7467e141e->leave($__internal_e4a5937ddedf0c6f1f853da8209feadd378d4daac4177201130af7a7467e141e_prof);

        
        $__internal_584d456d08578c9a7af77c9ed7ea2d8108e52fd98f3bbb18ec92a8d6a752e2c7->leave($__internal_584d456d08578c9a7af77c9ed7ea2d8108e52fd98f3bbb18ec92a8d6a752e2c7_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_1c81464b0df517d474e49b5908872b9b9b4689ec4d6fe04cd2d2b29f0d25539d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c81464b0df517d474e49b5908872b9b9b4689ec4d6fe04cd2d2b29f0d25539d->enter($__internal_1c81464b0df517d474e49b5908872b9b9b4689ec4d6fe04cd2d2b29f0d25539d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_14fe290d58c8ac169609b2ffcfd6339d52e52d4ef524870ee3029b60ac0a3953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fe290d58c8ac169609b2ffcfd6339d52e52d4ef524870ee3029b60ac0a3953->enter($__internal_14fe290d58c8ac169609b2ffcfd6339d52e52d4ef524870ee3029b60ac0a3953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

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
        
        $__internal_14fe290d58c8ac169609b2ffcfd6339d52e52d4ef524870ee3029b60ac0a3953->leave($__internal_14fe290d58c8ac169609b2ffcfd6339d52e52d4ef524870ee3029b60ac0a3953_prof);

        
        $__internal_1c81464b0df517d474e49b5908872b9b9b4689ec4d6fe04cd2d2b29f0d25539d->leave($__internal_1c81464b0df517d474e49b5908872b9b9b4689ec4d6fe04cd2d2b29f0d25539d_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_cfe45e13112b119fd9c46a4f02640d170705fa06361b1dcecc2ef97167277c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe45e13112b119fd9c46a4f02640d170705fa06361b1dcecc2ef97167277c58->enter($__internal_cfe45e13112b119fd9c46a4f02640d170705fa06361b1dcecc2ef97167277c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_71252e1b32a378e22bc6a9f9c81729508cab516ec9460b989e548c15d7f5e6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71252e1b32a378e22bc6a9f9c81729508cab516ec9460b989e548c15d7f5e6f2->enter($__internal_71252e1b32a378e22bc6a9f9c81729508cab516ec9460b989e548c15d7f5e6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_71252e1b32a378e22bc6a9f9c81729508cab516ec9460b989e548c15d7f5e6f2->leave($__internal_71252e1b32a378e22bc6a9f9c81729508cab516ec9460b989e548c15d7f5e6f2_prof);

        
        $__internal_cfe45e13112b119fd9c46a4f02640d170705fa06361b1dcecc2ef97167277c58->leave($__internal_cfe45e13112b119fd9c46a4f02640d170705fa06361b1dcecc2ef97167277c58_prof);

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
