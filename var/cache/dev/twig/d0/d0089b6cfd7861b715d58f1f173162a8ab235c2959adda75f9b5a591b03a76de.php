<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_3cffa3d97575caea0d377681982bbc25484aa56fe415541413581c27e03042c0 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3001c8264cbb86f6bbfcdc9c81d4c3d03e8cbff5754f5eab763eff8a1f949df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3001c8264cbb86f6bbfcdc9c81d4c3d03e8cbff5754f5eab763eff8a1f949df->enter($__internal_a3001c8264cbb86f6bbfcdc9c81d4c3d03e8cbff5754f5eab763eff8a1f949df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_ee7dc568268eec4a98184f642018fe29723221b9622b6901a645c1a97f0c49dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7dc568268eec4a98184f642018fe29723221b9622b6901a645c1a97f0c49dc->enter($__internal_ee7dc568268eec4a98184f642018fe29723221b9622b6901a645c1a97f0c49dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3001c8264cbb86f6bbfcdc9c81d4c3d03e8cbff5754f5eab763eff8a1f949df->leave($__internal_a3001c8264cbb86f6bbfcdc9c81d4c3d03e8cbff5754f5eab763eff8a1f949df_prof);

        
        $__internal_ee7dc568268eec4a98184f642018fe29723221b9622b6901a645c1a97f0c49dc->leave($__internal_ee7dc568268eec4a98184f642018fe29723221b9622b6901a645c1a97f0c49dc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
