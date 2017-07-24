<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_da26d14f00bc4a9c6a6910144bbdc3f214e8582fb677e8a38f3a41e9d2d1b68b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d10874c16bf80e9550db4449ed2fcecca06581a4b7a537bd3ed470098cd799a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d10874c16bf80e9550db4449ed2fcecca06581a4b7a537bd3ed470098cd799a->enter($__internal_2d10874c16bf80e9550db4449ed2fcecca06581a4b7a537bd3ed470098cd799a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_5c85dea3984077dc51bd9e703c9781ff3b97d645c411c4f369b3803430b820b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c85dea3984077dc51bd9e703c9781ff3b97d645c411c4f369b3803430b820b5->enter($__internal_5c85dea3984077dc51bd9e703c9781ff3b97d645c411c4f369b3803430b820b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d10874c16bf80e9550db4449ed2fcecca06581a4b7a537bd3ed470098cd799a->leave($__internal_2d10874c16bf80e9550db4449ed2fcecca06581a4b7a537bd3ed470098cd799a_prof);

        
        $__internal_5c85dea3984077dc51bd9e703c9781ff3b97d645c411c4f369b3803430b820b5->leave($__internal_5c85dea3984077dc51bd9e703c9781ff3b97d645c411c4f369b3803430b820b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
