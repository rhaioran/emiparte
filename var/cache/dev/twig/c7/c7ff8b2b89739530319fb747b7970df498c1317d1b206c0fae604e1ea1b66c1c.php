<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_0e2fee2f671d225b80c5ad835ec27da953080c42825fd1ba4defb7df5849ab91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86ca1ee4ffc512207dcedfc80e07b5d1965f5c3b7a4ea79a41ab8cf22d07047d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ca1ee4ffc512207dcedfc80e07b5d1965f5c3b7a4ea79a41ab8cf22d07047d->enter($__internal_86ca1ee4ffc512207dcedfc80e07b5d1965f5c3b7a4ea79a41ab8cf22d07047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_3081d17bf423e38d101a0c59afd5378fc23ced8a32aa57e580e854ca8d31c10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3081d17bf423e38d101a0c59afd5378fc23ced8a32aa57e580e854ca8d31c10d->enter($__internal_3081d17bf423e38d101a0c59afd5378fc23ced8a32aa57e580e854ca8d31c10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86ca1ee4ffc512207dcedfc80e07b5d1965f5c3b7a4ea79a41ab8cf22d07047d->leave($__internal_86ca1ee4ffc512207dcedfc80e07b5d1965f5c3b7a4ea79a41ab8cf22d07047d_prof);

        
        $__internal_3081d17bf423e38d101a0c59afd5378fc23ced8a32aa57e580e854ca8d31c10d->leave($__internal_3081d17bf423e38d101a0c59afd5378fc23ced8a32aa57e580e854ca8d31c10d_prof);

    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_96eeaec9704ae9b2ceb71f089744e58aab72da2d2751f60bb8757255235088ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96eeaec9704ae9b2ceb71f089744e58aab72da2d2751f60bb8757255235088ff->enter($__internal_96eeaec9704ae9b2ceb71f089744e58aab72da2d2751f60bb8757255235088ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_4af4e7df54898f559cafd5100e8f3e8c9f386fb6118db06953ad3bb75e082dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af4e7df54898f559cafd5100e8f3e8c9f386fb6118db06953ad3bb75e082dea->enter($__internal_4af4e7df54898f559cafd5100e8f3e8c9f386fb6118db06953ad3bb75e082dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_4af4e7df54898f559cafd5100e8f3e8c9f386fb6118db06953ad3bb75e082dea->leave($__internal_4af4e7df54898f559cafd5100e8f3e8c9f386fb6118db06953ad3bb75e082dea_prof);

        
        $__internal_96eeaec9704ae9b2ceb71f089744e58aab72da2d2751f60bb8757255235088ff->leave($__internal_96eeaec9704ae9b2ceb71f089744e58aab72da2d2751f60bb8757255235088ff_prof);

    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e39585205c3a70f1db99a2180e20914d4b71523fd47af4cb01d484a8e1239943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39585205c3a70f1db99a2180e20914d4b71523fd47af4cb01d484a8e1239943->enter($__internal_e39585205c3a70f1db99a2180e20914d4b71523fd47af4cb01d484a8e1239943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_8620bc29b7d661af36c59fa6720ad635ecd19e14a6f54ff414007e35830bc09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8620bc29b7d661af36c59fa6720ad635ecd19e14a6f54ff414007e35830bc09b->enter($__internal_8620bc29b7d661af36c59fa6720ad635ecd19e14a6f54ff414007e35830bc09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_8620bc29b7d661af36c59fa6720ad635ecd19e14a6f54ff414007e35830bc09b->leave($__internal_8620bc29b7d661af36c59fa6720ad635ecd19e14a6f54ff414007e35830bc09b_prof);

        
        $__internal_e39585205c3a70f1db99a2180e20914d4b71523fd47af4cb01d484a8e1239943->leave($__internal_e39585205c3a70f1db99a2180e20914d4b71523fd47af4cb01d484a8e1239943_prof);

    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_79925ed09dd4db64c5682f4d1b4f4cbf82a164bf2cd5414f7f8a2b578d88aa7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79925ed09dd4db64c5682f4d1b4f4cbf82a164bf2cd5414f7f8a2b578d88aa7d->enter($__internal_79925ed09dd4db64c5682f4d1b4f4cbf82a164bf2cd5414f7f8a2b578d88aa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c86e2ed4993b5dd5f660bdb7017970ef20f97f41cc60e613129edf7cf80a3cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86e2ed4993b5dd5f660bdb7017970ef20f97f41cc60e613129edf7cf80a3cea->enter($__internal_c86e2ed4993b5dd5f660bdb7017970ef20f97f41cc60e613129edf7cf80a3cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_c86e2ed4993b5dd5f660bdb7017970ef20f97f41cc60e613129edf7cf80a3cea->leave($__internal_c86e2ed4993b5dd5f660bdb7017970ef20f97f41cc60e613129edf7cf80a3cea_prof);

        
        $__internal_79925ed09dd4db64c5682f4d1b4f4cbf82a164bf2cd5414f7f8a2b578d88aa7d->leave($__internal_79925ed09dd4db64c5682f4d1b4f4cbf82a164bf2cd5414f7f8a2b578d88aa7d_prof);

    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ec7b7a2e528b04be2b2fe0f67346365dd239221c2f6a55dc4193701df07b7eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7b7a2e528b04be2b2fe0f67346365dd239221c2f6a55dc4193701df07b7eb2->enter($__internal_ec7b7a2e528b04be2b2fe0f67346365dd239221c2f6a55dc4193701df07b7eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a34239f8d57c6fb049ba550311c1775d00428dd36ee6ca3b003e5612cd5769cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34239f8d57c6fb049ba550311c1775d00428dd36ee6ca3b003e5612cd5769cf->enter($__internal_a34239f8d57c6fb049ba550311c1775d00428dd36ee6ca3b003e5612cd5769cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "class", array()) . " ") . (((array_key_exists("widget_type", $context) && (($context["widget_type"] ?? $this->getContext($context, "widget_type")) != ""))) ? (((((($context["multiple"] ?? $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . ($context["widget_type"] ?? $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if ((array_key_exists("widget_type", $context) && (($context["widget_type"] ?? $this->getContext($context, "widget_type")) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo ((($context["multiple"] ?? $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => (($this->getAttribute(($context["attr"] ?? null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if ((array_key_exists("widget_type", $context) && (($context["widget_type"] ?? $this->getContext($context, "widget_type")) != "inline"))) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        if (        $this->hasBlock("form_message", $context, $blocks)) {
            // line 54
            echo "            ";
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 56
        echo "        ";
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 57
            echo "            </div>
        ";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a34239f8d57c6fb049ba550311c1775d00428dd36ee6ca3b003e5612cd5769cf->leave($__internal_a34239f8d57c6fb049ba550311c1775d00428dd36ee6ca3b003e5612cd5769cf_prof);

        
        $__internal_ec7b7a2e528b04be2b2fe0f67346365dd239221c2f6a55dc4193701df07b7eb2->leave($__internal_ec7b7a2e528b04be2b2fe0f67346365dd239221c2f6a55dc4193701df07b7eb2_prof);

    }

    // line 62
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_54c1d55f463e9fc5d8a3c2c789eba76cb07727094ade3913b2a21a8aa38e27c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c1d55f463e9fc5d8a3c2c789eba76cb07727094ade3913b2a21a8aa38e27c6->enter($__internal_54c1d55f463e9fc5d8a3c2c789eba76cb07727094ade3913b2a21a8aa38e27c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5ac58e88b7bbd975a237e424018c83628b169129aadd3a2a4132385893a6ee22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac58e88b7bbd975a237e424018c83628b169129aadd3a2a4132385893a6ee22->enter($__internal_5ac58e88b7bbd975a237e424018c83628b169129aadd3a2a4132385893a6ee22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 63
        echo "    ";
        ob_start();
        // line 64
        echo "        ";
        if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
            // line 65
            echo "            ";
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 66
            echo "        ";
        }
        // line 67
        echo "        ";
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 68
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 70
        echo "
        ";
        // line 71
        if (((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && array_key_exists("label_render", $context))) {
            // line 72
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && ($context["inline"] ?? $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 74
        echo "
        <input type=\"checkbox\" ";
        // line 75
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 76
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 77
            echo "            ";
            if ((array_key_exists("label_render", $context) && twig_in_filter(($context["widget_checkbox_label"] ?? $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 78
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 81
            echo "        ";
        }
        // line 82
        echo "        ";
        if ((($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 83
            echo "            </div>
            ";
            // line 84
            if (            $this->hasBlock("form_message", $context, $blocks)) {
                // line 85
                echo "                ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
            ";
            }
            // line 87
            echo "        ";
        }
        // line 88
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5ac58e88b7bbd975a237e424018c83628b169129aadd3a2a4132385893a6ee22->leave($__internal_5ac58e88b7bbd975a237e424018c83628b169129aadd3a2a4132385893a6ee22_prof);

        
        $__internal_54c1d55f463e9fc5d8a3c2c789eba76cb07727094ade3913b2a21a8aa38e27c6->leave($__internal_54c1d55f463e9fc5d8a3c2c789eba76cb07727094ade3913b2a21a8aa38e27c6_prof);

    }

    // line 91
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_367c12bc96a97684b5c7df5c93c3eec4d3210adabee89cdaad498647a5eb41d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367c12bc96a97684b5c7df5c93c3eec4d3210adabee89cdaad498647a5eb41d2->enter($__internal_367c12bc96a97684b5c7df5c93c3eec4d3210adabee89cdaad498647a5eb41d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        $__internal_28eea413e6ff48fdf1f6a83342c8ca0904a38959875991858cf4a6265ea11ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28eea413e6ff48fdf1f6a83342c8ca0904a38959875991858cf4a6265ea11ff1->enter($__internal_28eea413e6ff48fdf1f6a83342c8ca0904a38959875991858cf4a6265ea11ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 92
        echo "    ";
        $this->loadTemplate(($context["template"] ?? $this->getContext($context, "template")), "SonataAdminBundle:Form:filter_admin_fields.html.twig", 92)->display($context);
        
        $__internal_28eea413e6ff48fdf1f6a83342c8ca0904a38959875991858cf4a6265ea11ff1->leave($__internal_28eea413e6ff48fdf1f6a83342c8ca0904a38959875991858cf4a6265ea11ff1_prof);

        
        $__internal_367c12bc96a97684b5c7df5c93c3eec4d3210adabee89cdaad498647a5eb41d2->leave($__internal_367c12bc96a97684b5c7df5c93c3eec4d3210adabee89cdaad498647a5eb41d2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 92,  327 => 91,  316 => 88,  313 => 87,  307 => 85,  305 => 84,  302 => 83,  299 => 82,  296 => 81,  289 => 78,  286 => 77,  284 => 76,  272 => 75,  269 => 74,  261 => 72,  259 => 71,  256 => 70,  252 => 68,  249 => 67,  246 => 66,  243 => 65,  240 => 64,  237 => 63,  228 => 62,  217 => 59,  213 => 57,  210 => 56,  204 => 54,  201 => 53,  195 => 52,  191 => 50,  189 => 49,  184 => 47,  180 => 46,  164 => 45,  158 => 43,  155 => 42,  150 => 41,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  120 => 33,  107 => 30,  104 => 29,  95 => 28,  82 => 25,  79 => 24,  70 => 23,  57 => 20,  54 => 19,  45 => 18,  11 => 12,);
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

{% extends 'form_div_layout.html.twig' %}

{#
    Inspired from MopaBootstrapBundle: https://github.com/phiamo/MopaBootstrapBundle
#}

{% block choice_widget_collapsed %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock choice_widget_collapsed %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block form_widget_simple %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block choice_widget_expanded %}
    {% spaceless %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}
        {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type is defined and widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}
        {% if expanded %}
            {% set attr = attr|merge({'class': attr.class|default('')}) %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {% for child in form %}
            {% if widget_type is defined and widget_type != 'inline' %}
                <div class=\"{{ multiple ? 'checkbox' : 'radio' }}\">
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{ form_widget(child, {'attr': {'class': attr.widget_class|default('')}}) }}
            {{ child.vars.label|trans({}, translation_domain) }}
            </label>
            {% if widget_type is defined and widget_type != 'inline' %}
                </div>
            {% endif %}
        {% endfor %}
        {% if block('form_message') is defined %}
            {{ block('form_message') }}
        {% endif %}
        {% if expanded %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block checkbox_widget %}
    {% spaceless %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            <div class=\"checkbox\">
        {% endif %}

        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render is defined %}
            <label class=\"{% if inline is defined and inline %}checkbox-inline{% endif %}\">
        {% endif %}

        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            {% if label_render is defined and widget_checkbox_label in ['both', 'widget'] %}
                {{ label|trans({}, translation_domain) }}
                </label>
            {% endif %}
        {% endif %}
        {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}
            </div>
            {% if block('form_message') is defined %}
                {{ block('form_message') }}
            {% endif %}
        {% endif %}
    {% endspaceless %}
{% endblock checkbox_widget %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}
", "SonataAdminBundle:Form:filter_admin_fields.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
