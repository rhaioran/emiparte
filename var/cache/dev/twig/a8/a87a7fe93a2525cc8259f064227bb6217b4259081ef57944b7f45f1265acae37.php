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
        $__internal_da8a27262beceb346e6000e21171b96d373624fef404e58de8a8da5b644af2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8a27262beceb346e6000e21171b96d373624fef404e58de8a8da5b644af2ab->enter($__internal_da8a27262beceb346e6000e21171b96d373624fef404e58de8a8da5b644af2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_b27df64b3ef595a41f737482aded800efe2c408ad98db6d476c5d9fad548ed62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27df64b3ef595a41f737482aded800efe2c408ad98db6d476c5d9fad548ed62->enter($__internal_b27df64b3ef595a41f737482aded800efe2c408ad98db6d476c5d9fad548ed62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_da8a27262beceb346e6000e21171b96d373624fef404e58de8a8da5b644af2ab->leave($__internal_da8a27262beceb346e6000e21171b96d373624fef404e58de8a8da5b644af2ab_prof);

        
        $__internal_b27df64b3ef595a41f737482aded800efe2c408ad98db6d476c5d9fad548ed62->leave($__internal_b27df64b3ef595a41f737482aded800efe2c408ad98db6d476c5d9fad548ed62_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_7cca0a7ad2273dafdc479f61dec7674c501d0fd0da32771c6ce5229c75c60a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cca0a7ad2273dafdc479f61dec7674c501d0fd0da32771c6ce5229c75c60a33->enter($__internal_7cca0a7ad2273dafdc479f61dec7674c501d0fd0da32771c6ce5229c75c60a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_afd00e65db5909f491975e01812cee57f1a933b01b712f48119916e2f44cecaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd00e65db5909f491975e01812cee57f1a933b01b712f48119916e2f44cecaa->enter($__internal_afd00e65db5909f491975e01812cee57f1a933b01b712f48119916e2f44cecaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_afd00e65db5909f491975e01812cee57f1a933b01b712f48119916e2f44cecaa->leave($__internal_afd00e65db5909f491975e01812cee57f1a933b01b712f48119916e2f44cecaa_prof);

        
        $__internal_7cca0a7ad2273dafdc479f61dec7674c501d0fd0da32771c6ce5229c75c60a33->leave($__internal_7cca0a7ad2273dafdc479f61dec7674c501d0fd0da32771c6ce5229c75c60a33_prof);

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
