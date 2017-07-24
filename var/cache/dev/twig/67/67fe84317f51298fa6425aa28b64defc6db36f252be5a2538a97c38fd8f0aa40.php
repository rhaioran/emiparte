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
        $__internal_5630b1aeea56de218d8d013752fce095bf9c278f448966324bd3e744cb39bd1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5630b1aeea56de218d8d013752fce095bf9c278f448966324bd3e744cb39bd1e->enter($__internal_5630b1aeea56de218d8d013752fce095bf9c278f448966324bd3e744cb39bd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_4a936336f5d5002b48adb113f23f45c334bbd191a11f41b7ca888b49116d80a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a936336f5d5002b48adb113f23f45c334bbd191a11f41b7ca888b49116d80a3->enter($__internal_4a936336f5d5002b48adb113f23f45c334bbd191a11f41b7ca888b49116d80a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5630b1aeea56de218d8d013752fce095bf9c278f448966324bd3e744cb39bd1e->leave($__internal_5630b1aeea56de218d8d013752fce095bf9c278f448966324bd3e744cb39bd1e_prof);

        
        $__internal_4a936336f5d5002b48adb113f23f45c334bbd191a11f41b7ca888b49116d80a3->leave($__internal_4a936336f5d5002b48adb113f23f45c334bbd191a11f41b7ca888b49116d80a3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_712544dd6073f4be4b72a5ae8ac52ef7dc236799d07ed5ceb5aabcb8e2ca5aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712544dd6073f4be4b72a5ae8ac52ef7dc236799d07ed5ceb5aabcb8e2ca5aa5->enter($__internal_712544dd6073f4be4b72a5ae8ac52ef7dc236799d07ed5ceb5aabcb8e2ca5aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3cd3905cf22a99ed56a52502f4b4555c87a8c9d91a4c52adf90888ae3f7bca73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd3905cf22a99ed56a52502f4b4555c87a8c9d91a4c52adf90888ae3f7bca73->enter($__internal_3cd3905cf22a99ed56a52502f4b4555c87a8c9d91a4c52adf90888ae3f7bca73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_3cd3905cf22a99ed56a52502f4b4555c87a8c9d91a4c52adf90888ae3f7bca73->leave($__internal_3cd3905cf22a99ed56a52502f4b4555c87a8c9d91a4c52adf90888ae3f7bca73_prof);

        
        $__internal_712544dd6073f4be4b72a5ae8ac52ef7dc236799d07ed5ceb5aabcb8e2ca5aa5->leave($__internal_712544dd6073f4be4b72a5ae8ac52ef7dc236799d07ed5ceb5aabcb8e2ca5aa5_prof);

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
