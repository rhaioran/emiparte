<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_01ae92483b88cb5642946cd0f38389d9c4239387311abd4f4dcd768ff0fc2018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec3c19672e0db5311bda82a00b9661824cc89e516181bb6be7e0f1c57885b539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3c19672e0db5311bda82a00b9661824cc89e516181bb6be7e0f1c57885b539->enter($__internal_ec3c19672e0db5311bda82a00b9661824cc89e516181bb6be7e0f1c57885b539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_cf933eeed325628ddaba7c94c64009a20277cc730a5221981fbfb80ca5201196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf933eeed325628ddaba7c94c64009a20277cc730a5221981fbfb80ca5201196->enter($__internal_cf933eeed325628ddaba7c94c64009a20277cc730a5221981fbfb80ca5201196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3c19672e0db5311bda82a00b9661824cc89e516181bb6be7e0f1c57885b539->leave($__internal_ec3c19672e0db5311bda82a00b9661824cc89e516181bb6be7e0f1c57885b539_prof);

        
        $__internal_cf933eeed325628ddaba7c94c64009a20277cc730a5221981fbfb80ca5201196->leave($__internal_cf933eeed325628ddaba7c94c64009a20277cc730a5221981fbfb80ca5201196_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
