<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_14484b64a79b858cf70f1fdf8947c0074914a995fd1d3a1e6fce45e159c3e3b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc12e575e2ae3571b47e1051d1e9bab88421e8a319b60b03a32328ed6ee0999c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc12e575e2ae3571b47e1051d1e9bab88421e8a319b60b03a32328ed6ee0999c->enter($__internal_fc12e575e2ae3571b47e1051d1e9bab88421e8a319b60b03a32328ed6ee0999c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_a274990f744a1c52b877f1f794a4d9ab4394914d18523aa6e21ce4675fef3a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a274990f744a1c52b877f1f794a4d9ab4394914d18523aa6e21ce4675fef3a03->enter($__internal_a274990f744a1c52b877f1f794a4d9ab4394914d18523aa6e21ce4675fef3a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_fc12e575e2ae3571b47e1051d1e9bab88421e8a319b60b03a32328ed6ee0999c->leave($__internal_fc12e575e2ae3571b47e1051d1e9bab88421e8a319b60b03a32328ed6ee0999c_prof);

        
        $__internal_a274990f744a1c52b877f1f794a4d9ab4394914d18523aa6e21ce4675fef3a03->leave($__internal_a274990f744a1c52b877f1f794a4d9ab4394914d18523aa6e21ce4675fef3a03_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_0d380a44d7f99fd190abea08e0376bee059437b4e62ea152ddba1bc6071af9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d380a44d7f99fd190abea08e0376bee059437b4e62ea152ddba1bc6071af9f0->enter($__internal_0d380a44d7f99fd190abea08e0376bee059437b4e62ea152ddba1bc6071af9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_ddf39e36201a7b921488fb843529b3af90844ad2b59d3ad3d7f1901cd46be550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf39e36201a7b921488fb843529b3af90844ad2b59d3ad3d7f1901cd46be550->enter($__internal_ddf39e36201a7b921488fb843529b3af90844ad2b59d3ad3d7f1901cd46be550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_ddf39e36201a7b921488fb843529b3af90844ad2b59d3ad3d7f1901cd46be550->leave($__internal_ddf39e36201a7b921488fb843529b3af90844ad2b59d3ad3d7f1901cd46be550_prof);

        
        $__internal_0d380a44d7f99fd190abea08e0376bee059437b4e62ea152ddba1bc6071af9f0->leave($__internal_0d380a44d7f99fd190abea08e0376bee059437b4e62ea152ddba1bc6071af9f0_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_2c5b6edfcc0c7caacdca542e689a3e002ff62de87f66af8888d6f86943c9dafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5b6edfcc0c7caacdca542e689a3e002ff62de87f66af8888d6f86943c9dafc->enter($__internal_2c5b6edfcc0c7caacdca542e689a3e002ff62de87f66af8888d6f86943c9dafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_4da32a606c871f3ad7138cd1cc18d2a12d42a09694c820e45ccc2cc844a6c9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da32a606c871f3ad7138cd1cc18d2a12d42a09694c820e45ccc2cc844a6c9fb->enter($__internal_4da32a606c871f3ad7138cd1cc18d2a12d42a09694c820e45ccc2cc844a6c9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_4da32a606c871f3ad7138cd1cc18d2a12d42a09694c820e45ccc2cc844a6c9fb->leave($__internal_4da32a606c871f3ad7138cd1cc18d2a12d42a09694c820e45ccc2cc844a6c9fb_prof);

        
        $__internal_2c5b6edfcc0c7caacdca542e689a3e002ff62de87f66af8888d6f86943c9dafc->leave($__internal_2c5b6edfcc0c7caacdca542e689a3e002ff62de87f66af8888d6f86943c9dafc_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_ce23c0da28bedfb9ec2da3ddff04dacb2981c5b78612d348b340f8c20c64bfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce23c0da28bedfb9ec2da3ddff04dacb2981c5b78612d348b340f8c20c64bfab->enter($__internal_ce23c0da28bedfb9ec2da3ddff04dacb2981c5b78612d348b340f8c20c64bfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_b571248de06e1f5fad89596cae0d88bc85802d74061db261a0f3055083a18c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b571248de06e1f5fad89596cae0d88bc85802d74061db261a0f3055083a18c20->enter($__internal_b571248de06e1f5fad89596cae0d88bc85802d74061db261a0f3055083a18c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_b571248de06e1f5fad89596cae0d88bc85802d74061db261a0f3055083a18c20->leave($__internal_b571248de06e1f5fad89596cae0d88bc85802d74061db261a0f3055083a18c20_prof);

        
        $__internal_ce23c0da28bedfb9ec2da3ddff04dacb2981c5b78612d348b340f8c20c64bfab->leave($__internal_ce23c0da28bedfb9ec2da3ddff04dacb2981c5b78612d348b340f8c20c64bfab_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
