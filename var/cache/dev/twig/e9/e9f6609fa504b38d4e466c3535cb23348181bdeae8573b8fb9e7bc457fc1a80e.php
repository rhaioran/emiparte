<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_1cbcebe63a5b43fc46875e1e9e758fdf4380733484b1fa2cdd5eb985dbb2062c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b05d9096277a0af5f292dd446e35ecba37a15fa5d142841bba5767761b99c5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05d9096277a0af5f292dd446e35ecba37a15fa5d142841bba5767761b99c5d6->enter($__internal_b05d9096277a0af5f292dd446e35ecba37a15fa5d142841bba5767761b99c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_aae8fb2cae493597d139b6ca7a7ce4a3e502cac336e21a886cc650098903381c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae8fb2cae493597d139b6ca7a7ce4a3e502cac336e21a886cc650098903381c->enter($__internal_aae8fb2cae493597d139b6ca7a7ce4a3e502cac336e21a886cc650098903381c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b05d9096277a0af5f292dd446e35ecba37a15fa5d142841bba5767761b99c5d6->leave($__internal_b05d9096277a0af5f292dd446e35ecba37a15fa5d142841bba5767761b99c5d6_prof);

        
        $__internal_aae8fb2cae493597d139b6ca7a7ce4a3e502cac336e21a886cc650098903381c->leave($__internal_aae8fb2cae493597d139b6ca7a7ce4a3e502cac336e21a886cc650098903381c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
