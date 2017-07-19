<?php

/* SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig */
class __TwigTemplate_7faed69f58f5f185989988628ea6869ce404608cb2b1bbc0debce15bc5d75674 extends Twig_Template
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
        $__internal_e51135f997a8e0e817c2750798638278e5f3e7d6ef905cb2530e01961c1be72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51135f997a8e0e817c2750798638278e5f3e7d6ef905cb2530e01961c1be72c->enter($__internal_e51135f997a8e0e817c2750798638278e5f3e7d6ef905cb2530e01961c1be72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        $__internal_c6ac04c36011acee11761452f78600eeec870301419c57a1056ff6557399d0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ac04c36011acee11761452f78600eeec870301419c57a1056ff6557399d0f6->enter($__internal_c6ac04c36011acee11761452f78600eeec870301419c57a1056ff6557399d0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e51135f997a8e0e817c2750798638278e5f3e7d6ef905cb2530e01961c1be72c->leave($__internal_e51135f997a8e0e817c2750798638278e5f3e7d6ef905cb2530e01961c1be72c_prof);

        
        $__internal_c6ac04c36011acee11761452f78600eeec870301419c57a1056ff6557399d0f6->leave($__internal_c6ac04c36011acee11761452f78600eeec870301419c57a1056ff6557399d0f6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for error in form.vars.errors %}
    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ error.message }}
    </div>
{% endfor %}
", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/Helper/render_form_dismissable_errors.html.twig");
    }
}
