<?php

/* SonataAdminBundle:CRUD:list__action_show.html.twig */
class __TwigTemplate_dc0ed6ca652cc9c7eba6a0bf48bbd16efa093a6078352f23c8fa8b988cdca128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62a2d7c3890b9df1f9bcce1ca22cd9d62ebbc6206f771a536512e86c81808ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a2d7c3890b9df1f9bcce1ca22cd9d62ebbc6206f771a536512e86c81808ee1->enter($__internal_62a2d7c3890b9df1f9bcce1ca22cd9d62ebbc6206f771a536512e86c81808ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_show.html.twig"));

        $__internal_176f68ed69fc6ee0e2f4d90abdeb71cb6e9d5b69d1301175f9e42a71f113e44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176f68ed69fc6ee0e2f4d90abdeb71cb6e9d5b69d1301175f9e42a71f113e44c->enter($__internal_176f68ed69fc6ee0e2f4d90abdeb71cb6e9d5b69d1301175f9e42a71f113e44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_show.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "show", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_62a2d7c3890b9df1f9bcce1ca22cd9d62ebbc6206f771a536512e86c81808ee1->leave($__internal_62a2d7c3890b9df1f9bcce1ca22cd9d62ebbc6206f771a536512e86c81808ee1_prof);

        
        $__internal_176f68ed69fc6ee0e2f4d90abdeb71cb6e9d5b69d1301175f9e42a71f113e44c->leave($__internal_176f68ed69fc6ee0e2f4d90abdeb71cb6e9d5b69d1301175f9e42a71f113e44c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('show', object) and admin.hasRoute('show') %}
    <a href=\"{{ admin.generateObjectUrl('show', object) }}\" class=\"btn btn-sm btn-default view_link\" title=\"{{ 'action_show'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
        {{ 'action_show'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "SonataAdminBundle:CRUD:list__action_show.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__action_show.html.twig");
    }
}
