<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_d365bdb0f1c4fd02337c7f4373faef18be68623e7a8a54e904ad44be57053e8a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d59b0048ba8e8d1a56fb05ab8970eb0c62364ba71acca96067975e90745b7831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59b0048ba8e8d1a56fb05ab8970eb0c62364ba71acca96067975e90745b7831->enter($__internal_d59b0048ba8e8d1a56fb05ab8970eb0c62364ba71acca96067975e90745b7831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_f3565da324e304c683bbcedaaabea992acb6b1a0b6f26949a98b4d32b541fb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3565da324e304c683bbcedaaabea992acb6b1a0b6f26949a98b4d32b541fb10->enter($__internal_f3565da324e304c683bbcedaaabea992acb6b1a0b6f26949a98b4d32b541fb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59b0048ba8e8d1a56fb05ab8970eb0c62364ba71acca96067975e90745b7831->leave($__internal_d59b0048ba8e8d1a56fb05ab8970eb0c62364ba71acca96067975e90745b7831_prof);

        
        $__internal_f3565da324e304c683bbcedaaabea992acb6b1a0b6f26949a98b4d32b541fb10->leave($__internal_f3565da324e304c683bbcedaaabea992acb6b1a0b6f26949a98b4d32b541fb10_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d2411040a20331f2abbc72efb4c8ad598c7aedadd295922911b570428af766a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2411040a20331f2abbc72efb4c8ad598c7aedadd295922911b570428af766a4->enter($__internal_d2411040a20331f2abbc72efb4c8ad598c7aedadd295922911b570428af766a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_98f2d95a90866ee2a18ce1745a8879982ca41ccfdf0ad912f38ea8235c0c2603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f2d95a90866ee2a18ce1745a8879982ca41ccfdf0ad912f38ea8235c0c2603->enter($__internal_98f2d95a90866ee2a18ce1745a8879982ca41ccfdf0ad912f38ea8235c0c2603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_98f2d95a90866ee2a18ce1745a8879982ca41ccfdf0ad912f38ea8235c0c2603->leave($__internal_98f2d95a90866ee2a18ce1745a8879982ca41ccfdf0ad912f38ea8235c0c2603_prof);

        
        $__internal_d2411040a20331f2abbc72efb4c8ad598c7aedadd295922911b570428af766a4->leave($__internal_d2411040a20331f2abbc72efb4c8ad598c7aedadd295922911b570428af766a4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
