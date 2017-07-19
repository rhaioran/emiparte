<?php

/* SonataAdminBundle:CRUD:dashboard__action.html.twig */
class __TwigTemplate_4cac65de538edce9cfc4f449bf970a7ea533a9d4f01dc9575fc7b5a1f8f1d134 extends Twig_Template
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
        $__internal_b5669658299214b65f88cf064c61221afe8fa729e58946d35a073abebc3a78bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5669658299214b65f88cf064c61221afe8fa729e58946d35a073abebc3a78bb->enter($__internal_b5669658299214b65f88cf064c61221afe8fa729e58946d35a073abebc3a78bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        $__internal_09787443858db6ab738e1fdc1c8cbffe2ab4c210105cc92e04d211025dd378e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09787443858db6ab738e1fdc1c8cbffe2ab4c210105cc92e04d211025dd378e2->enter($__internal_09787443858db6ab738e1fdc1c8cbffe2ab4c210105cc92e04d211025dd378e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute(($context["action"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_b5669658299214b65f88cf064c61221afe8fa729e58946d35a073abebc3a78bb->leave($__internal_b5669658299214b65f88cf064c61221afe8fa729e58946d35a073abebc3a78bb_prof);

        
        $__internal_09787443858db6ab738e1fdc1c8cbffe2ab4c210105cc92e04d211025dd378e2->leave($__internal_09787443858db6ab738e1fdc1c8cbffe2ab4c210105cc92e04d211025dd378e2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
    <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
    {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
</a>
", "SonataAdminBundle:CRUD:dashboard__action.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/dashboard__action.html.twig");
    }
}
