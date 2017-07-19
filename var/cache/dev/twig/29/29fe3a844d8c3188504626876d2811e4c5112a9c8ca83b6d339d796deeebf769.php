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
        $__internal_778c9c1b51324bf4d160531165ddf3fa564fb9562d9c4ac7364eb5442fa3b146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778c9c1b51324bf4d160531165ddf3fa564fb9562d9c4ac7364eb5442fa3b146->enter($__internal_778c9c1b51324bf4d160531165ddf3fa564fb9562d9c4ac7364eb5442fa3b146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_f434c7fa544e41b3dcd36ac1847e3152c260311ea13e8f1207ea05321dcf836e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f434c7fa544e41b3dcd36ac1847e3152c260311ea13e8f1207ea05321dcf836e->enter($__internal_f434c7fa544e41b3dcd36ac1847e3152c260311ea13e8f1207ea05321dcf836e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_778c9c1b51324bf4d160531165ddf3fa564fb9562d9c4ac7364eb5442fa3b146->leave($__internal_778c9c1b51324bf4d160531165ddf3fa564fb9562d9c4ac7364eb5442fa3b146_prof);

        
        $__internal_f434c7fa544e41b3dcd36ac1847e3152c260311ea13e8f1207ea05321dcf836e->leave($__internal_f434c7fa544e41b3dcd36ac1847e3152c260311ea13e8f1207ea05321dcf836e_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_3799a71acc89de9ad2da09c4c07a9e4df9f328244753c91a05eab7d0ebf50531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3799a71acc89de9ad2da09c4c07a9e4df9f328244753c91a05eab7d0ebf50531->enter($__internal_3799a71acc89de9ad2da09c4c07a9e4df9f328244753c91a05eab7d0ebf50531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_2e39d4a03cfae4f0693df896c2cfbce8b718509395d4429b5f59666e5b2230e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e39d4a03cfae4f0693df896c2cfbce8b718509395d4429b5f59666e5b2230e7->enter($__internal_2e39d4a03cfae4f0693df896c2cfbce8b718509395d4429b5f59666e5b2230e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_2e39d4a03cfae4f0693df896c2cfbce8b718509395d4429b5f59666e5b2230e7->leave($__internal_2e39d4a03cfae4f0693df896c2cfbce8b718509395d4429b5f59666e5b2230e7_prof);

        
        $__internal_3799a71acc89de9ad2da09c4c07a9e4df9f328244753c91a05eab7d0ebf50531->leave($__internal_3799a71acc89de9ad2da09c4c07a9e4df9f328244753c91a05eab7d0ebf50531_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_475528f5fcf51d1ddd8ab6f6466b4af7d1f0afd463fbf904a1b596dfbde4243c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475528f5fcf51d1ddd8ab6f6466b4af7d1f0afd463fbf904a1b596dfbde4243c->enter($__internal_475528f5fcf51d1ddd8ab6f6466b4af7d1f0afd463fbf904a1b596dfbde4243c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_89c593d05cd4004f36880d0f7bc51a2e82e77ca773eb93939b455257ed09fc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c593d05cd4004f36880d0f7bc51a2e82e77ca773eb93939b455257ed09fc55->enter($__internal_89c593d05cd4004f36880d0f7bc51a2e82e77ca773eb93939b455257ed09fc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_89c593d05cd4004f36880d0f7bc51a2e82e77ca773eb93939b455257ed09fc55->leave($__internal_89c593d05cd4004f36880d0f7bc51a2e82e77ca773eb93939b455257ed09fc55_prof);

        
        $__internal_475528f5fcf51d1ddd8ab6f6466b4af7d1f0afd463fbf904a1b596dfbde4243c->leave($__internal_475528f5fcf51d1ddd8ab6f6466b4af7d1f0afd463fbf904a1b596dfbde4243c_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_f848d5f6c136d46bfff360aa4b88904196bb9254c96d610bb8b3251a3ff22dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f848d5f6c136d46bfff360aa4b88904196bb9254c96d610bb8b3251a3ff22dc5->enter($__internal_f848d5f6c136d46bfff360aa4b88904196bb9254c96d610bb8b3251a3ff22dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_a566cc92a4246c8c4609cdb2cc63c20114aea02a67a4f9ae075321d325fcf42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a566cc92a4246c8c4609cdb2cc63c20114aea02a67a4f9ae075321d325fcf42b->enter($__internal_a566cc92a4246c8c4609cdb2cc63c20114aea02a67a4f9ae075321d325fcf42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

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
        
        $__internal_a566cc92a4246c8c4609cdb2cc63c20114aea02a67a4f9ae075321d325fcf42b->leave($__internal_a566cc92a4246c8c4609cdb2cc63c20114aea02a67a4f9ae075321d325fcf42b_prof);

        
        $__internal_f848d5f6c136d46bfff360aa4b88904196bb9254c96d610bb8b3251a3ff22dc5->leave($__internal_f848d5f6c136d46bfff360aa4b88904196bb9254c96d610bb8b3251a3ff22dc5_prof);

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
