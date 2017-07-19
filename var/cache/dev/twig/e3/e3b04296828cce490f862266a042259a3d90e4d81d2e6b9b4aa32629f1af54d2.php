<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_286a140db50228967c13ee4c8782169e5c3256433a6abebced9e795c8a83f363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75c66311a058968d3e6e64f4a14d181b1e07131dbc1cf8cd2a3262a93c3f1749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c66311a058968d3e6e64f4a14d181b1e07131dbc1cf8cd2a3262a93c3f1749->enter($__internal_75c66311a058968d3e6e64f4a14d181b1e07131dbc1cf8cd2a3262a93c3f1749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_d0fc75065abe2faec52cdc4f2661c6f3fae18239633768245c0fea00c6a52a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fc75065abe2faec52cdc4f2661c6f3fae18239633768245c0fea00c6a52a3c->enter($__internal_d0fc75065abe2faec52cdc4f2661c6f3fae18239633768245c0fea00c6a52a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75c66311a058968d3e6e64f4a14d181b1e07131dbc1cf8cd2a3262a93c3f1749->leave($__internal_75c66311a058968d3e6e64f4a14d181b1e07131dbc1cf8cd2a3262a93c3f1749_prof);

        
        $__internal_d0fc75065abe2faec52cdc4f2661c6f3fae18239633768245c0fea00c6a52a3c->leave($__internal_d0fc75065abe2faec52cdc4f2661c6f3fae18239633768245c0fea00c6a52a3c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
