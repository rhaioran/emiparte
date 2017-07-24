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
        $__internal_d9556d134bdb82bc26a52200087887b9d38adc49c6f89c15e9330bb5526ff5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9556d134bdb82bc26a52200087887b9d38adc49c6f89c15e9330bb5526ff5de->enter($__internal_d9556d134bdb82bc26a52200087887b9d38adc49c6f89c15e9330bb5526ff5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_7afddd80019bc8eb04bde66bb88228e09c18d94bc0638e6e33b879bff0f68331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afddd80019bc8eb04bde66bb88228e09c18d94bc0638e6e33b879bff0f68331->enter($__internal_7afddd80019bc8eb04bde66bb88228e09c18d94bc0638e6e33b879bff0f68331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9556d134bdb82bc26a52200087887b9d38adc49c6f89c15e9330bb5526ff5de->leave($__internal_d9556d134bdb82bc26a52200087887b9d38adc49c6f89c15e9330bb5526ff5de_prof);

        
        $__internal_7afddd80019bc8eb04bde66bb88228e09c18d94bc0638e6e33b879bff0f68331->leave($__internal_7afddd80019bc8eb04bde66bb88228e09c18d94bc0638e6e33b879bff0f68331_prof);

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
