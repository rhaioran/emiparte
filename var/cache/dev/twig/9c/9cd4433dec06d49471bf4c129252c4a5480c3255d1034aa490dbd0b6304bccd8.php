<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_cb536136cd1ad946d894569799e276c2056df121aec2a9395547010539927ace extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e676ffe7ee27c4b9ba42da9574aacdc10e7e9a2a2c4af80c6128f3aeea95ad0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e676ffe7ee27c4b9ba42da9574aacdc10e7e9a2a2c4af80c6128f3aeea95ad0b->enter($__internal_e676ffe7ee27c4b9ba42da9574aacdc10e7e9a2a2c4af80c6128f3aeea95ad0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_36c38f3bca2bc29bb979ea87352625247600415cc39158cc1f00426f95204282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c38f3bca2bc29bb979ea87352625247600415cc39158cc1f00426f95204282->enter($__internal_36c38f3bca2bc29bb979ea87352625247600415cc39158cc1f00426f95204282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e676ffe7ee27c4b9ba42da9574aacdc10e7e9a2a2c4af80c6128f3aeea95ad0b->leave($__internal_e676ffe7ee27c4b9ba42da9574aacdc10e7e9a2a2c4af80c6128f3aeea95ad0b_prof);

        
        $__internal_36c38f3bca2bc29bb979ea87352625247600415cc39158cc1f00426f95204282->leave($__internal_36c38f3bca2bc29bb979ea87352625247600415cc39158cc1f00426f95204282_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_410d6fb60502191b9fdbae3bf246fd449f4ca6270f193c4ee2cb6276bd13f0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410d6fb60502191b9fdbae3bf246fd449f4ca6270f193c4ee2cb6276bd13f0dc->enter($__internal_410d6fb60502191b9fdbae3bf246fd449f4ca6270f193c4ee2cb6276bd13f0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b19c1eaa20a9ade4dfcefb760a425885c12023237a19a4817c58e02469f8d559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19c1eaa20a9ade4dfcefb760a425885c12023237a19a4817c58e02469f8d559->enter($__internal_b19c1eaa20a9ade4dfcefb760a425885c12023237a19a4817c58e02469f8d559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_b19c1eaa20a9ade4dfcefb760a425885c12023237a19a4817c58e02469f8d559->leave($__internal_b19c1eaa20a9ade4dfcefb760a425885c12023237a19a4817c58e02469f8d559_prof);

        
        $__internal_410d6fb60502191b9fdbae3bf246fd449f4ca6270f193c4ee2cb6276bd13f0dc->leave($__internal_410d6fb60502191b9fdbae3bf246fd449f4ca6270f193c4ee2cb6276bd13f0dc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
