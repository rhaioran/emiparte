<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_0658428af99f5e340af4616548a70506654d966e367d1d5b76e54c892eb20f41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f647be200ef14dc8b0233c61ccccfe484c45868324b6a67cb25898ce30b07927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f647be200ef14dc8b0233c61ccccfe484c45868324b6a67cb25898ce30b07927->enter($__internal_f647be200ef14dc8b0233c61ccccfe484c45868324b6a67cb25898ce30b07927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_438c7be0aa12524cb2d877597b75709371614192453c286ba7c065a608e64b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438c7be0aa12524cb2d877597b75709371614192453c286ba7c065a608e64b4e->enter($__internal_438c7be0aa12524cb2d877597b75709371614192453c286ba7c065a608e64b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f647be200ef14dc8b0233c61ccccfe484c45868324b6a67cb25898ce30b07927->leave($__internal_f647be200ef14dc8b0233c61ccccfe484c45868324b6a67cb25898ce30b07927_prof);

        
        $__internal_438c7be0aa12524cb2d877597b75709371614192453c286ba7c065a608e64b4e->leave($__internal_438c7be0aa12524cb2d877597b75709371614192453c286ba7c065a608e64b4e_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
