<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_e86d3e932b3249f0172b08af777472a584e764926be028fb45974173c45455ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ca8d90142ab78adfc1e3003558f70716cfec5922195f251c773334e30f999c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca8d90142ab78adfc1e3003558f70716cfec5922195f251c773334e30f999c6->enter($__internal_3ca8d90142ab78adfc1e3003558f70716cfec5922195f251c773334e30f999c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_4c05ace48a6aa3c32e0f315950d2feed24b09431f79a2943f4f2c9af9524a3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c05ace48a6aa3c32e0f315950d2feed24b09431f79a2943f4f2c9af9524a3ca->enter($__internal_4c05ace48a6aa3c32e0f315950d2feed24b09431f79a2943f4f2c9af9524a3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_3ca8d90142ab78adfc1e3003558f70716cfec5922195f251c773334e30f999c6->leave($__internal_3ca8d90142ab78adfc1e3003558f70716cfec5922195f251c773334e30f999c6_prof);

        
        $__internal_4c05ace48a6aa3c32e0f315950d2feed24b09431f79a2943f4f2c9af9524a3ca->leave($__internal_4c05ace48a6aa3c32e0f315950d2feed24b09431f79a2943f4f2c9af9524a3ca_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_3d3caf9eec5f22eee449f5a63f27fef55071d2f6749e5ac86c48f3e338f51851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3caf9eec5f22eee449f5a63f27fef55071d2f6749e5ac86c48f3e338f51851->enter($__internal_3d3caf9eec5f22eee449f5a63f27fef55071d2f6749e5ac86c48f3e338f51851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_c823d5c02a20184c1ada592cc46398b316201685882f0f9fbeda58fde1ec8b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c823d5c02a20184c1ada592cc46398b316201685882f0f9fbeda58fde1ec8b80->enter($__internal_c823d5c02a20184c1ada592cc46398b316201685882f0f9fbeda58fde1ec8b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_c823d5c02a20184c1ada592cc46398b316201685882f0f9fbeda58fde1ec8b80->leave($__internal_c823d5c02a20184c1ada592cc46398b316201685882f0f9fbeda58fde1ec8b80_prof);

        
        $__internal_3d3caf9eec5f22eee449f5a63f27fef55071d2f6749e5ac86c48f3e338f51851->leave($__internal_3d3caf9eec5f22eee449f5a63f27fef55071d2f6749e5ac86c48f3e338f51851_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
