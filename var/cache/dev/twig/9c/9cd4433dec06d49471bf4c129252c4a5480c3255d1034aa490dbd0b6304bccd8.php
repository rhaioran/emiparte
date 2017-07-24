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
        $__internal_36062ce5887c8ed16bea29b61be838a1639e53b4068462628d6d617af5994b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36062ce5887c8ed16bea29b61be838a1639e53b4068462628d6d617af5994b19->enter($__internal_36062ce5887c8ed16bea29b61be838a1639e53b4068462628d6d617af5994b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_473f0d8b7c6a38cb6fc3c351877c1fa9adc4b3fb134712090ae307eec1b572b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473f0d8b7c6a38cb6fc3c351877c1fa9adc4b3fb134712090ae307eec1b572b1->enter($__internal_473f0d8b7c6a38cb6fc3c351877c1fa9adc4b3fb134712090ae307eec1b572b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36062ce5887c8ed16bea29b61be838a1639e53b4068462628d6d617af5994b19->leave($__internal_36062ce5887c8ed16bea29b61be838a1639e53b4068462628d6d617af5994b19_prof);

        
        $__internal_473f0d8b7c6a38cb6fc3c351877c1fa9adc4b3fb134712090ae307eec1b572b1->leave($__internal_473f0d8b7c6a38cb6fc3c351877c1fa9adc4b3fb134712090ae307eec1b572b1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fd771f2c1b3efe71a696c040ebcdc6a3799d48609092a17419b5bd2a8dee6bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd771f2c1b3efe71a696c040ebcdc6a3799d48609092a17419b5bd2a8dee6bb8->enter($__internal_fd771f2c1b3efe71a696c040ebcdc6a3799d48609092a17419b5bd2a8dee6bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_13df064ed1e4da4fc8b6a84454bdaa80217472d7f3a814c73b9a2427a39280a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13df064ed1e4da4fc8b6a84454bdaa80217472d7f3a814c73b9a2427a39280a7->enter($__internal_13df064ed1e4da4fc8b6a84454bdaa80217472d7f3a814c73b9a2427a39280a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_13df064ed1e4da4fc8b6a84454bdaa80217472d7f3a814c73b9a2427a39280a7->leave($__internal_13df064ed1e4da4fc8b6a84454bdaa80217472d7f3a814c73b9a2427a39280a7_prof);

        
        $__internal_fd771f2c1b3efe71a696c040ebcdc6a3799d48609092a17419b5bd2a8dee6bb8->leave($__internal_fd771f2c1b3efe71a696c040ebcdc6a3799d48609092a17419b5bd2a8dee6bb8_prof);

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
