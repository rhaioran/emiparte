<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_cf4f179b23c607725ee9eb4d06a6b8af675557f0380248fcb52e1efe50107887 extends Twig_Template
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
        $__internal_24fe8574e27a0feda3d6876be52f39fa456600b80363c363fd4ae0a5663c57ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fe8574e27a0feda3d6876be52f39fa456600b80363c363fd4ae0a5663c57ee->enter($__internal_24fe8574e27a0feda3d6876be52f39fa456600b80363c363fd4ae0a5663c57ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_30ace3168b4b101b6fffa758e794cc38e9e74356c52652e03a6ab1acb55460d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ace3168b4b101b6fffa758e794cc38e9e74356c52652e03a6ab1acb55460d5->enter($__internal_30ace3168b4b101b6fffa758e794cc38e9e74356c52652e03a6ab1acb55460d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_24fe8574e27a0feda3d6876be52f39fa456600b80363c363fd4ae0a5663c57ee->leave($__internal_24fe8574e27a0feda3d6876be52f39fa456600b80363c363fd4ae0a5663c57ee_prof);

        
        $__internal_30ace3168b4b101b6fffa758e794cc38e9e74356c52652e03a6ab1acb55460d5->leave($__internal_30ace3168b4b101b6fffa758e794cc38e9e74356c52652e03a6ab1acb55460d5_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
