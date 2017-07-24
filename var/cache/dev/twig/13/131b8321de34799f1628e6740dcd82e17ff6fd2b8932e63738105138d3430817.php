<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_930f89b7d457d1fa5d56cccb4c419a55778538b0a2f0ad15dc733a8ef2fdcd2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_218d8850d439c987d23b4dd43268c0445dd419a8d6f27d9ded22aa4a04ed0a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218d8850d439c987d23b4dd43268c0445dd419a8d6f27d9ded22aa4a04ed0a0b->enter($__internal_218d8850d439c987d23b4dd43268c0445dd419a8d6f27d9ded22aa4a04ed0a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_3ac4089adc7dd75fb78cdabfa7f74a167f109da42c3a7f76591320ac41506b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac4089adc7dd75fb78cdabfa7f74a167f109da42c3a7f76591320ac41506b9e->enter($__internal_3ac4089adc7dd75fb78cdabfa7f74a167f109da42c3a7f76591320ac41506b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_218d8850d439c987d23b4dd43268c0445dd419a8d6f27d9ded22aa4a04ed0a0b->leave($__internal_218d8850d439c987d23b4dd43268c0445dd419a8d6f27d9ded22aa4a04ed0a0b_prof);

        
        $__internal_3ac4089adc7dd75fb78cdabfa7f74a167f109da42c3a7f76591320ac41506b9e->leave($__internal_3ac4089adc7dd75fb78cdabfa7f74a167f109da42c3a7f76591320ac41506b9e_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_2db966ff3dd837d91ff20228f02be20c6c452c1305317103395e8ee2acde9662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db966ff3dd837d91ff20228f02be20c6c452c1305317103395e8ee2acde9662->enter($__internal_2db966ff3dd837d91ff20228f02be20c6c452c1305317103395e8ee2acde9662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_23c3038228d83998ac38f4b5220710f8313c16817f363feaf9e837a0df40aeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c3038228d83998ac38f4b5220710f8313c16817f363feaf9e837a0df40aeef->enter($__internal_23c3038228d83998ac38f4b5220710f8313c16817f363feaf9e837a0df40aeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_23c3038228d83998ac38f4b5220710f8313c16817f363feaf9e837a0df40aeef->leave($__internal_23c3038228d83998ac38f4b5220710f8313c16817f363feaf9e837a0df40aeef_prof);

        
        $__internal_2db966ff3dd837d91ff20228f02be20c6c452c1305317103395e8ee2acde9662->leave($__internal_2db966ff3dd837d91ff20228f02be20c6c452c1305317103395e8ee2acde9662_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_75dfaefeb4b120422d79279bc6984ea9b3581bb13d1e8e02e668c9fd3d124597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75dfaefeb4b120422d79279bc6984ea9b3581bb13d1e8e02e668c9fd3d124597->enter($__internal_75dfaefeb4b120422d79279bc6984ea9b3581bb13d1e8e02e668c9fd3d124597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_6b486a7d7603d053d4ad5ff2589cc2969d8af8bb147b74d50a4e52aa517ea118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b486a7d7603d053d4ad5ff2589cc2969d8af8bb147b74d50a4e52aa517ea118->enter($__internal_6b486a7d7603d053d4ad5ff2589cc2969d8af8bb147b74d50a4e52aa517ea118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_6b486a7d7603d053d4ad5ff2589cc2969d8af8bb147b74d50a4e52aa517ea118->leave($__internal_6b486a7d7603d053d4ad5ff2589cc2969d8af8bb147b74d50a4e52aa517ea118_prof);

        
        $__internal_75dfaefeb4b120422d79279bc6984ea9b3581bb13d1e8e02e668c9fd3d124597->leave($__internal_75dfaefeb4b120422d79279bc6984ea9b3581bb13d1e8e02e668c9fd3d124597_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcce334e0a35dfcb694ef438802f81344c7fe55183638669627381fe2a3b556d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcce334e0a35dfcb694ef438802f81344c7fe55183638669627381fe2a3b556d->enter($__internal_bcce334e0a35dfcb694ef438802f81344c7fe55183638669627381fe2a3b556d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cb9b7470b1d7c9e99ab64e9d9912ea78576b4c474dcc6d5c86033034e1fa2542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9b7470b1d7c9e99ab64e9d9912ea78576b4c474dcc6d5c86033034e1fa2542->enter($__internal_cb9b7470b1d7c9e99ab64e9d9912ea78576b4c474dcc6d5c86033034e1fa2542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_cb9b7470b1d7c9e99ab64e9d9912ea78576b4c474dcc6d5c86033034e1fa2542->leave($__internal_cb9b7470b1d7c9e99ab64e9d9912ea78576b4c474dcc6d5c86033034e1fa2542_prof);

        
        $__internal_bcce334e0a35dfcb694ef438802f81344c7fe55183638669627381fe2a3b556d->leave($__internal_bcce334e0a35dfcb694ef438802f81344c7fe55183638669627381fe2a3b556d_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07f1e954cd8011338796133d63a63a2e5081c7db417bc37f79a464acf978d35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f1e954cd8011338796133d63a63a2e5081c7db417bc37f79a464acf978d35f->enter($__internal_07f1e954cd8011338796133d63a63a2e5081c7db417bc37f79a464acf978d35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4657934874f56b68de74d323d7649fd705641037b84cafdad9f5a67ccb9a4d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4657934874f56b68de74d323d7649fd705641037b84cafdad9f5a67ccb9a4d23->enter($__internal_4657934874f56b68de74d323d7649fd705641037b84cafdad9f5a67ccb9a4d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_4657934874f56b68de74d323d7649fd705641037b84cafdad9f5a67ccb9a4d23->leave($__internal_4657934874f56b68de74d323d7649fd705641037b84cafdad9f5a67ccb9a4d23_prof);

        
        $__internal_07f1e954cd8011338796133d63a63a2e5081c7db417bc37f79a464acf978d35f->leave($__internal_07f1e954cd8011338796133d63a63a2e5081c7db417bc37f79a464acf978d35f_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_e508feafc26868b7500ee9a7eab6a13e5078c0d8fba810708c1fbc3ef03c80ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e508feafc26868b7500ee9a7eab6a13e5078c0d8fba810708c1fbc3ef03c80ed->enter($__internal_e508feafc26868b7500ee9a7eab6a13e5078c0d8fba810708c1fbc3ef03c80ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_bf8a977f0eeefda434cdb4e75c63c854b1ed8a3123413b53b6bd21b102bc78aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8a977f0eeefda434cdb4e75c63c854b1ed8a3123413b53b6bd21b102bc78aa->enter($__internal_bf8a977f0eeefda434cdb4e75c63c854b1ed8a3123413b53b6bd21b102bc78aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_bf8a977f0eeefda434cdb4e75c63c854b1ed8a3123413b53b6bd21b102bc78aa->leave($__internal_bf8a977f0eeefda434cdb4e75c63c854b1ed8a3123413b53b6bd21b102bc78aa_prof);

        
        $__internal_e508feafc26868b7500ee9a7eab6a13e5078c0d8fba810708c1fbc3ef03c80ed->leave($__internal_e508feafc26868b7500ee9a7eab6a13e5078c0d8fba810708c1fbc3ef03c80ed_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_47452ab84a520de9c4efd21096ebff7aa3c0521ed20c0bd00df5f08246ae2af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47452ab84a520de9c4efd21096ebff7aa3c0521ed20c0bd00df5f08246ae2af8->enter($__internal_47452ab84a520de9c4efd21096ebff7aa3c0521ed20c0bd00df5f08246ae2af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_895ec7f74ec366692faf8be487d179061e2bde3fe4dc4c34e86d324a9daecfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895ec7f74ec366692faf8be487d179061e2bde3fe4dc4c34e86d324a9daecfee->enter($__internal_895ec7f74ec366692faf8be487d179061e2bde3fe4dc4c34e86d324a9daecfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_895ec7f74ec366692faf8be487d179061e2bde3fe4dc4c34e86d324a9daecfee->leave($__internal_895ec7f74ec366692faf8be487d179061e2bde3fe4dc4c34e86d324a9daecfee_prof);

        
        $__internal_47452ab84a520de9c4efd21096ebff7aa3c0521ed20c0bd00df5f08246ae2af8->leave($__internal_47452ab84a520de9c4efd21096ebff7aa3c0521ed20c0bd00df5f08246ae2af8_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_7335630dd43af7654c1fa64d0b2bdbab2ed892d003a87a47fd76e4c8c8819d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7335630dd43af7654c1fa64d0b2bdbab2ed892d003a87a47fd76e4c8c8819d0f->enter($__internal_7335630dd43af7654c1fa64d0b2bdbab2ed892d003a87a47fd76e4c8c8819d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_237de15da7c3cf42ed7edde9ccb477fade7c282234d412349c7357901b848a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237de15da7c3cf42ed7edde9ccb477fade7c282234d412349c7357901b848a81->enter($__internal_237de15da7c3cf42ed7edde9ccb477fade7c282234d412349c7357901b848a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo ($context["_title"] ?? $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_237de15da7c3cf42ed7edde9ccb477fade7c282234d412349c7357901b848a81->leave($__internal_237de15da7c3cf42ed7edde9ccb477fade7c282234d412349c7357901b848a81_prof);

        
        $__internal_7335630dd43af7654c1fa64d0b2bdbab2ed892d003a87a47fd76e4c8c8819d0f->leave($__internal_7335630dd43af7654c1fa64d0b2bdbab2ed892d003a87a47fd76e4c8c8819d0f_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_dd01848cb715d46cf9484e827d932d776a3170beca320684d17a1d60bd28c365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd01848cb715d46cf9484e827d932d776a3170beca320684d17a1d60bd28c365->enter($__internal_dd01848cb715d46cf9484e827d932d776a3170beca320684d17a1d60bd28c365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_f8e85faf5e4aba47ea9f4bdf1c43ecc9e209ddaed1b119557eb2ea1974ecdd1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e85faf5e4aba47ea9f4bdf1c43ecc9e209ddaed1b119557eb2ea1974ecdd1b->enter($__internal_f8e85faf5e4aba47ea9f4bdf1c43ecc9e209ddaed1b119557eb2ea1974ecdd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_f8e85faf5e4aba47ea9f4bdf1c43ecc9e209ddaed1b119557eb2ea1974ecdd1b->leave($__internal_f8e85faf5e4aba47ea9f4bdf1c43ecc9e209ddaed1b119557eb2ea1974ecdd1b_prof);

        
        $__internal_dd01848cb715d46cf9484e827d932d776a3170beca320684d17a1d60bd28c365->leave($__internal_dd01848cb715d46cf9484e827d932d776a3170beca320684d17a1d60bd28c365_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b54faabd4c70976cb851286a05f3252f40cedc69b8371ef928c9ec9cac431c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54faabd4c70976cb851286a05f3252f40cedc69b8371ef928c9ec9cac431c08->enter($__internal_b54faabd4c70976cb851286a05f3252f40cedc69b8371ef928c9ec9cac431c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_f292132d06fa4fb9d42c18d9f17123b9cc75d94016470b930ca41c8823d6350f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f292132d06fa4fb9d42c18d9f17123b9cc75d94016470b930ca41c8823d6350f->enter($__internal_f292132d06fa4fb9d42c18d9f17123b9cc75d94016470b930ca41c8823d6350f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_f292132d06fa4fb9d42c18d9f17123b9cc75d94016470b930ca41c8823d6350f->leave($__internal_f292132d06fa4fb9d42c18d9f17123b9cc75d94016470b930ca41c8823d6350f_prof);

        
        $__internal_b54faabd4c70976cb851286a05f3252f40cedc69b8371ef928c9ec9cac431c08->leave($__internal_b54faabd4c70976cb851286a05f3252f40cedc69b8371ef928c9ec9cac431c08_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_2720b6d311057f6beeaf8e4923e2cb5e7dc87484ae11595c962a9cc4ce22ea46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2720b6d311057f6beeaf8e4923e2cb5e7dc87484ae11595c962a9cc4ce22ea46->enter($__internal_2720b6d311057f6beeaf8e4923e2cb5e7dc87484ae11595c962a9cc4ce22ea46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_ee471b7db2e98fc3fe182a2e8da5c1369504b0131e23247a39eccb9eb5781708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee471b7db2e98fc3fe182a2e8da5c1369504b0131e23247a39eccb9eb5781708->enter($__internal_ee471b7db2e98fc3fe182a2e8da5c1369504b0131e23247a39eccb9eb5781708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_ee471b7db2e98fc3fe182a2e8da5c1369504b0131e23247a39eccb9eb5781708->leave($__internal_ee471b7db2e98fc3fe182a2e8da5c1369504b0131e23247a39eccb9eb5781708_prof);

        
        $__internal_2720b6d311057f6beeaf8e4923e2cb5e7dc87484ae11595c962a9cc4ce22ea46->leave($__internal_2720b6d311057f6beeaf8e4923e2cb5e7dc87484ae11595c962a9cc4ce22ea46_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_f8fd18bb32c1dd0e564222a4732205e82e1bfb760eb98ba656811b97922305fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fd18bb32c1dd0e564222a4732205e82e1bfb760eb98ba656811b97922305fd->enter($__internal_f8fd18bb32c1dd0e564222a4732205e82e1bfb760eb98ba656811b97922305fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_432db951018975874a1662d5f29a3bf6004260e7f3761d546dffcd8fd94b5f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432db951018975874a1662d5f29a3bf6004260e7f3761d546dffcd8fd94b5f19->enter($__internal_432db951018975874a1662d5f29a3bf6004260e7f3761d546dffcd8fd94b5f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_432db951018975874a1662d5f29a3bf6004260e7f3761d546dffcd8fd94b5f19->leave($__internal_432db951018975874a1662d5f29a3bf6004260e7f3761d546dffcd8fd94b5f19_prof);

        
        $__internal_f8fd18bb32c1dd0e564222a4732205e82e1bfb760eb98ba656811b97922305fd->leave($__internal_f8fd18bb32c1dd0e564222a4732205e82e1bfb760eb98ba656811b97922305fd_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_006a144c4febc983043daf5f2c6d9c193d0500f7006724b19c1c3f03553413a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006a144c4febc983043daf5f2c6d9c193d0500f7006724b19c1c3f03553413a9->enter($__internal_006a144c4febc983043daf5f2c6d9c193d0500f7006724b19c1c3f03553413a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_b4815f6192d29d5b4f496a20b0305d327912cda76062ce185012a5c42ef5f0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4815f6192d29d5b4f496a20b0305d327912cda76062ce185012a5c42ef5f0b4->enter($__internal_b4815f6192d29d5b4f496a20b0305d327912cda76062ce185012a5c42ef5f0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_b4815f6192d29d5b4f496a20b0305d327912cda76062ce185012a5c42ef5f0b4->leave($__internal_b4815f6192d29d5b4f496a20b0305d327912cda76062ce185012a5c42ef5f0b4_prof);

        
        $__internal_006a144c4febc983043daf5f2c6d9c193d0500f7006724b19c1c3f03553413a9->leave($__internal_006a144c4febc983043daf5f2c6d9c193d0500f7006724b19c1c3f03553413a9_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_df7255ff14357c598b681fe240bafbdfe0d67ba8ed32451d1d3db7a3c2f15069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7255ff14357c598b681fe240bafbdfe0d67ba8ed32451d1d3db7a3c2f15069->enter($__internal_df7255ff14357c598b681fe240bafbdfe0d67ba8ed32451d1d3db7a3c2f15069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_ad5a2be84b01be9d4379d1db03ec3b34a4067f838865b027b84a28ab9b77e76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5a2be84b01be9d4379d1db03ec3b34a4067f838865b027b84a28ab9b77e76f->enter($__internal_ad5a2be84b01be9d4379d1db03ec3b34a4067f838865b027b84a28ab9b77e76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_ad5a2be84b01be9d4379d1db03ec3b34a4067f838865b027b84a28ab9b77e76f->leave($__internal_ad5a2be84b01be9d4379d1db03ec3b34a4067f838865b027b84a28ab9b77e76f_prof);

        
        $__internal_df7255ff14357c598b681fe240bafbdfe0d67ba8ed32451d1d3db7a3c2f15069->leave($__internal_df7255ff14357c598b681fe240bafbdfe0d67ba8ed32451d1d3db7a3c2f15069_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_979d1dff52f064133097780aefdda68f2d9243f1ba0c3244f335bcb7de85871f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979d1dff52f064133097780aefdda68f2d9243f1ba0c3244f335bcb7de85871f->enter($__internal_979d1dff52f064133097780aefdda68f2d9243f1ba0c3244f335bcb7de85871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_368a49df15f677a82bda22c14cfaa5c4ddf5a855709bd15e45af2e38a78c4c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368a49df15f677a82bda22c14cfaa5c4ddf5a855709bd15e45af2e38a78c4c42->enter($__internal_368a49df15f677a82bda22c14cfaa5c4ddf5a855709bd15e45af2e38a78c4c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_368a49df15f677a82bda22c14cfaa5c4ddf5a855709bd15e45af2e38a78c4c42->leave($__internal_368a49df15f677a82bda22c14cfaa5c4ddf5a855709bd15e45af2e38a78c4c42_prof);

        
        $__internal_979d1dff52f064133097780aefdda68f2d9243f1ba0c3244f335bcb7de85871f->leave($__internal_979d1dff52f064133097780aefdda68f2d9243f1ba0c3244f335bcb7de85871f_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_861ccc1b69524b68d9ba0384cbb86d46256396c5e67401d093875c707294831a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861ccc1b69524b68d9ba0384cbb86d46256396c5e67401d093875c707294831a->enter($__internal_861ccc1b69524b68d9ba0384cbb86d46256396c5e67401d093875c707294831a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_7c42ebcd10f1889eb201a91771a2dfd0dfc09579d18427fa710458d45754affa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c42ebcd10f1889eb201a91771a2dfd0dfc09579d18427fa710458d45754affa->enter($__internal_7c42ebcd10f1889eb201a91771a2dfd0dfc09579d18427fa710458d45754affa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_7c42ebcd10f1889eb201a91771a2dfd0dfc09579d18427fa710458d45754affa->leave($__internal_7c42ebcd10f1889eb201a91771a2dfd0dfc09579d18427fa710458d45754affa_prof);

        
        $__internal_861ccc1b69524b68d9ba0384cbb86d46256396c5e67401d093875c707294831a->leave($__internal_861ccc1b69524b68d9ba0384cbb86d46256396c5e67401d093875c707294831a_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_afc77158db26cc8d66dda1a80019a55d4475c5a025276f6326fb5147ab5cff25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc77158db26cc8d66dda1a80019a55d4475c5a025276f6326fb5147ab5cff25->enter($__internal_afc77158db26cc8d66dda1a80019a55d4475c5a025276f6326fb5147ab5cff25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_fbb77961a23b8c46572d1a15a68b8423fb58052024edc73bd1c5622d2bfb5bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb77961a23b8c46572d1a15a68b8423fb58052024edc73bd1c5622d2bfb5bee->enter($__internal_fbb77961a23b8c46572d1a15a68b8423fb58052024edc73bd1c5622d2bfb5bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_fbb77961a23b8c46572d1a15a68b8423fb58052024edc73bd1c5622d2bfb5bee->leave($__internal_fbb77961a23b8c46572d1a15a68b8423fb58052024edc73bd1c5622d2bfb5bee_prof);

        
        $__internal_afc77158db26cc8d66dda1a80019a55d4475c5a025276f6326fb5147ab5cff25->leave($__internal_afc77158db26cc8d66dda1a80019a55d4475c5a025276f6326fb5147ab5cff25_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_0864055a17bb245c3f2c50d9cd7391ddcb31d55eda609ff4d8c1aa7a8779eb20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0864055a17bb245c3f2c50d9cd7391ddcb31d55eda609ff4d8c1aa7a8779eb20->enter($__internal_0864055a17bb245c3f2c50d9cd7391ddcb31d55eda609ff4d8c1aa7a8779eb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_834f3ac7686d5ac26c904be0590ca31b3f247a9596b27e8cf1131452d0a5335f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834f3ac7686d5ac26c904be0590ca31b3f247a9596b27e8cf1131452d0a5335f->enter($__internal_834f3ac7686d5ac26c904be0590ca31b3f247a9596b27e8cf1131452d0a5335f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_834f3ac7686d5ac26c904be0590ca31b3f247a9596b27e8cf1131452d0a5335f->leave($__internal_834f3ac7686d5ac26c904be0590ca31b3f247a9596b27e8cf1131452d0a5335f_prof);

        
        $__internal_0864055a17bb245c3f2c50d9cd7391ddcb31d55eda609ff4d8c1aa7a8779eb20->leave($__internal_0864055a17bb245c3f2c50d9cd7391ddcb31d55eda609ff4d8c1aa7a8779eb20_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_521746f4dc6c2b21eb3f12eae2b5e7c7062e2d78eca9368bfe05eefbf8a0b8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521746f4dc6c2b21eb3f12eae2b5e7c7062e2d78eca9368bfe05eefbf8a0b8ca->enter($__internal_521746f4dc6c2b21eb3f12eae2b5e7c7062e2d78eca9368bfe05eefbf8a0b8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_c362555c50f6d02052c0dbe218dcd0878178bf55d1735e6624af3bfa5243cd5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c362555c50f6d02052c0dbe218dcd0878178bf55d1735e6624af3bfa5243cd5e->enter($__internal_c362555c50f6d02052c0dbe218dcd0878178bf55d1735e6624af3bfa5243cd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_c362555c50f6d02052c0dbe218dcd0878178bf55d1735e6624af3bfa5243cd5e->leave($__internal_c362555c50f6d02052c0dbe218dcd0878178bf55d1735e6624af3bfa5243cd5e_prof);

        
        $__internal_521746f4dc6c2b21eb3f12eae2b5e7c7062e2d78eca9368bfe05eefbf8a0b8ca->leave($__internal_521746f4dc6c2b21eb3f12eae2b5e7c7062e2d78eca9368bfe05eefbf8a0b8ca_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_ca353c77d90f9dbc2cffc75fbe5a93c7a0746d88e3a898b323c100e49d4192f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca353c77d90f9dbc2cffc75fbe5a93c7a0746d88e3a898b323c100e49d4192f8->enter($__internal_ca353c77d90f9dbc2cffc75fbe5a93c7a0746d88e3a898b323c100e49d4192f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_a3d4ff916a5ab3a10439f5ecc36b0f8fc3bdbf2aed1e6af3fa4f8be6ca191b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d4ff916a5ab3a10439f5ecc36b0f8fc3bdbf2aed1e6af3fa4f8be6ca191b60->enter($__internal_a3d4ff916a5ab3a10439f5ecc36b0f8fc3bdbf2aed1e6af3fa4f8be6ca191b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_a3d4ff916a5ab3a10439f5ecc36b0f8fc3bdbf2aed1e6af3fa4f8be6ca191b60->leave($__internal_a3d4ff916a5ab3a10439f5ecc36b0f8fc3bdbf2aed1e6af3fa4f8be6ca191b60_prof);

        
        $__internal_ca353c77d90f9dbc2cffc75fbe5a93c7a0746d88e3a898b323c100e49d4192f8->leave($__internal_ca353c77d90f9dbc2cffc75fbe5a93c7a0746d88e3a898b323c100e49d4192f8_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_9e13327a6e10d729f880bebd11236ddfca3cd1f388446df9e501c4ecdd9c12f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e13327a6e10d729f880bebd11236ddfca3cd1f388446df9e501c4ecdd9c12f3->enter($__internal_9e13327a6e10d729f880bebd11236ddfca3cd1f388446df9e501c4ecdd9c12f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_7ab8dae87542fd285dd6ee8188f225af6f2a2f5543ff41ec79a45b04e8dfb5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab8dae87542fd285dd6ee8188f225af6f2a2f5543ff41ec79a45b04e8dfb5f1->enter($__internal_7ab8dae87542fd285dd6ee8188f225af6f2a2f5543ff41ec79a45b04e8dfb5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_7ab8dae87542fd285dd6ee8188f225af6f2a2f5543ff41ec79a45b04e8dfb5f1->leave($__internal_7ab8dae87542fd285dd6ee8188f225af6f2a2f5543ff41ec79a45b04e8dfb5f1_prof);

        
        $__internal_9e13327a6e10d729f880bebd11236ddfca3cd1f388446df9e501c4ecdd9c12f3->leave($__internal_9e13327a6e10d729f880bebd11236ddfca3cd1f388446df9e501c4ecdd9c12f3_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_84375c6f078622af2770c8e1895fbcf433cae45c3e9c88ff098747fe97c1b313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84375c6f078622af2770c8e1895fbcf433cae45c3e9c88ff098747fe97c1b313->enter($__internal_84375c6f078622af2770c8e1895fbcf433cae45c3e9c88ff098747fe97c1b313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_63a34f0ad4a71e6bd62065b0eeb28e4642f7f006ad2bffc38c380b02cf195d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a34f0ad4a71e6bd62065b0eeb28e4642f7f006ad2bffc38c380b02cf195d82->enter($__internal_63a34f0ad4a71e6bd62065b0eeb28e4642f7f006ad2bffc38c380b02cf195d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_63a34f0ad4a71e6bd62065b0eeb28e4642f7f006ad2bffc38c380b02cf195d82->leave($__internal_63a34f0ad4a71e6bd62065b0eeb28e4642f7f006ad2bffc38c380b02cf195d82_prof);

        
        $__internal_84375c6f078622af2770c8e1895fbcf433cae45c3e9c88ff098747fe97c1b313->leave($__internal_84375c6f078622af2770c8e1895fbcf433cae45c3e9c88ff098747fe97c1b313_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_fe89dc02ebea1fbe98a5d7318ab4826acd6247ada285de52bb1f242c44743be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe89dc02ebea1fbe98a5d7318ab4826acd6247ada285de52bb1f242c44743be5->enter($__internal_fe89dc02ebea1fbe98a5d7318ab4826acd6247ada285de52bb1f242c44743be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_36abbe2ff5bcd648f3f4415af4a64e476362e78c0f75bbdc9f603f2ee2b0369d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36abbe2ff5bcd648f3f4415af4a64e476362e78c0f75bbdc9f603f2ee2b0369d->enter($__internal_36abbe2ff5bcd648f3f4415af4a64e476362e78c0f75bbdc9f603f2ee2b0369d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_36abbe2ff5bcd648f3f4415af4a64e476362e78c0f75bbdc9f603f2ee2b0369d->leave($__internal_36abbe2ff5bcd648f3f4415af4a64e476362e78c0f75bbdc9f603f2ee2b0369d_prof);

        
        $__internal_fe89dc02ebea1fbe98a5d7318ab4826acd6247ada285de52bb1f242c44743be5->leave($__internal_fe89dc02ebea1fbe98a5d7318ab4826acd6247ada285de52bb1f242c44743be5_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_3d4a1dc2b271c7ec84b8567e06f82d8edb7290cc2e12106003fbc7557be6c787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4a1dc2b271c7ec84b8567e06f82d8edb7290cc2e12106003fbc7557be6c787->enter($__internal_3d4a1dc2b271c7ec84b8567e06f82d8edb7290cc2e12106003fbc7557be6c787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_90316db6bde20d787cd7d927001db5ccfb9250431c113bc69e62a0911cc45cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90316db6bde20d787cd7d927001db5ccfb9250431c113bc69e62a0911cc45cf8->enter($__internal_90316db6bde20d787cd7d927001db5ccfb9250431c113bc69e62a0911cc45cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_90316db6bde20d787cd7d927001db5ccfb9250431c113bc69e62a0911cc45cf8->leave($__internal_90316db6bde20d787cd7d927001db5ccfb9250431c113bc69e62a0911cc45cf8_prof);

        
        $__internal_3d4a1dc2b271c7ec84b8567e06f82d8edb7290cc2e12106003fbc7557be6c787->leave($__internal_3d4a1dc2b271c7ec84b8567e06f82d8edb7290cc2e12106003fbc7557be6c787_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_758d736aa8ea757bb4760f10de8a6b78bc4bc2e10cb994baed6a5db5900ba58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758d736aa8ea757bb4760f10de8a6b78bc4bc2e10cb994baed6a5db5900ba58b->enter($__internal_758d736aa8ea757bb4760f10de8a6b78bc4bc2e10cb994baed6a5db5900ba58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_db6b7dda70034ba93749a4f48ea34be2165d3f10fba47cfdab1d62bbad08f9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6b7dda70034ba93749a4f48ea34be2165d3f10fba47cfdab1d62bbad08f9f1->enter($__internal_db6b7dda70034ba93749a4f48ea34be2165d3f10fba47cfdab1d62bbad08f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_db6b7dda70034ba93749a4f48ea34be2165d3f10fba47cfdab1d62bbad08f9f1->leave($__internal_db6b7dda70034ba93749a4f48ea34be2165d3f10fba47cfdab1d62bbad08f9f1_prof);

        
        $__internal_758d736aa8ea757bb4760f10de8a6b78bc4bc2e10cb994baed6a5db5900ba58b->leave($__internal_758d736aa8ea757bb4760f10de8a6b78bc4bc2e10cb994baed6a5db5900ba58b_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_454c7c4e7416a14428cee3a307306fc41075f403682ff390bf275f4b5ebe2418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454c7c4e7416a14428cee3a307306fc41075f403682ff390bf275f4b5ebe2418->enter($__internal_454c7c4e7416a14428cee3a307306fc41075f403682ff390bf275f4b5ebe2418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_72f160242294e7f4cfaf7183e33c146a73a2576be676fc461aa1ae985c34dfdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f160242294e7f4cfaf7183e33c146a73a2576be676fc461aa1ae985c34dfdd->enter($__internal_72f160242294e7f4cfaf7183e33c146a73a2576be676fc461aa1ae985c34dfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_72f160242294e7f4cfaf7183e33c146a73a2576be676fc461aa1ae985c34dfdd->leave($__internal_72f160242294e7f4cfaf7183e33c146a73a2576be676fc461aa1ae985c34dfdd_prof);

        
        $__internal_454c7c4e7416a14428cee3a307306fc41075f403682ff390bf275f4b5ebe2418->leave($__internal_454c7c4e7416a14428cee3a307306fc41075f403682ff390bf275f4b5ebe2418_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_c1ba023f560b27d0114d21eec084a5ff48924d2b8bc4b680b3766e0f2714204f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ba023f560b27d0114d21eec084a5ff48924d2b8bc4b680b3766e0f2714204f->enter($__internal_c1ba023f560b27d0114d21eec084a5ff48924d2b8bc4b680b3766e0f2714204f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_41f5fb9a1cd1af0304ed4975d2cae0aad24d132d8d6b16818a9c95de297b6646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f5fb9a1cd1af0304ed4975d2cae0aad24d132d8d6b16818a9c95de297b6646->enter($__internal_41f5fb9a1cd1af0304ed4975d2cae0aad24d132d8d6b16818a9c95de297b6646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_41f5fb9a1cd1af0304ed4975d2cae0aad24d132d8d6b16818a9c95de297b6646->leave($__internal_41f5fb9a1cd1af0304ed4975d2cae0aad24d132d8d6b16818a9c95de297b6646_prof);

        
        $__internal_c1ba023f560b27d0114d21eec084a5ff48924d2b8bc4b680b3766e0f2714204f->leave($__internal_c1ba023f560b27d0114d21eec084a5ff48924d2b8bc4b680b3766e0f2714204f_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_1430478e2f33d982bb6f472f8e193a1f00a9324616dc7bdb49cd5c530dcd6b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1430478e2f33d982bb6f472f8e193a1f00a9324616dc7bdb49cd5c530dcd6b14->enter($__internal_1430478e2f33d982bb6f472f8e193a1f00a9324616dc7bdb49cd5c530dcd6b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_8de052c3a9068da55220af9026c1c71996aa8acb844713066693f12ad26bb66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de052c3a9068da55220af9026c1c71996aa8acb844713066693f12ad26bb66f->enter($__internal_8de052c3a9068da55220af9026c1c71996aa8acb844713066693f12ad26bb66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_8de052c3a9068da55220af9026c1c71996aa8acb844713066693f12ad26bb66f->leave($__internal_8de052c3a9068da55220af9026c1c71996aa8acb844713066693f12ad26bb66f_prof);

        
        $__internal_1430478e2f33d982bb6f472f8e193a1f00a9324616dc7bdb49cd5c530dcd6b14->leave($__internal_1430478e2f33d982bb6f472f8e193a1f00a9324616dc7bdb49cd5c530dcd6b14_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_f114eb6a4efb0ccba659b5899e39af214a850477786faa0033b8e78df677b6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f114eb6a4efb0ccba659b5899e39af214a850477786faa0033b8e78df677b6c0->enter($__internal_f114eb6a4efb0ccba659b5899e39af214a850477786faa0033b8e78df677b6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_4a88fb6a535978a7c393b27c8307cd2ded5d1524c59c7c034a9a2e15d262eedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a88fb6a535978a7c393b27c8307cd2ded5d1524c59c7c034a9a2e15d262eedb->enter($__internal_4a88fb6a535978a7c393b27c8307cd2ded5d1524c59c7c034a9a2e15d262eedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_4a88fb6a535978a7c393b27c8307cd2ded5d1524c59c7c034a9a2e15d262eedb->leave($__internal_4a88fb6a535978a7c393b27c8307cd2ded5d1524c59c7c034a9a2e15d262eedb_prof);

        
        $__internal_f114eb6a4efb0ccba659b5899e39af214a850477786faa0033b8e78df677b6c0->leave($__internal_f114eb6a4efb0ccba659b5899e39af214a850477786faa0033b8e78df677b6c0_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_9c626c93086f43634ecf81895efc57487c4c7aa836090b0f1f1950b5156f8d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c626c93086f43634ecf81895efc57487c4c7aa836090b0f1f1950b5156f8d63->enter($__internal_9c626c93086f43634ecf81895efc57487c4c7aa836090b0f1f1950b5156f8d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_92d1311a1725b03cf7a71f32cf29061ca5407529db93dbd2b19773426b17ddde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d1311a1725b03cf7a71f32cf29061ca5407529db93dbd2b19773426b17ddde->enter($__internal_92d1311a1725b03cf7a71f32cf29061ca5407529db93dbd2b19773426b17ddde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_92d1311a1725b03cf7a71f32cf29061ca5407529db93dbd2b19773426b17ddde->leave($__internal_92d1311a1725b03cf7a71f32cf29061ca5407529db93dbd2b19773426b17ddde_prof);

        
        $__internal_9c626c93086f43634ecf81895efc57487c4c7aa836090b0f1f1950b5156f8d63->leave($__internal_9c626c93086f43634ecf81895efc57487c4c7aa836090b0f1f1950b5156f8d63_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_57563e73c51bd0dc9c90b820c118876ae72239317d7cbbc07178008338618d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57563e73c51bd0dc9c90b820c118876ae72239317d7cbbc07178008338618d81->enter($__internal_57563e73c51bd0dc9c90b820c118876ae72239317d7cbbc07178008338618d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_be8e0c567b128944cdde0ebf0af3751253b29c5939f8b7d79396782f55c3fe51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8e0c567b128944cdde0ebf0af3751253b29c5939f8b7d79396782f55c3fe51->enter($__internal_be8e0c567b128944cdde0ebf0af3751253b29c5939f8b7d79396782f55c3fe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_be8e0c567b128944cdde0ebf0af3751253b29c5939f8b7d79396782f55c3fe51->leave($__internal_be8e0c567b128944cdde0ebf0af3751253b29c5939f8b7d79396782f55c3fe51_prof);

        
        $__internal_57563e73c51bd0dc9c90b820c118876ae72239317d7cbbc07178008338618d81->leave($__internal_57563e73c51bd0dc9c90b820c118876ae72239317d7cbbc07178008338618d81_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_f61e47228d4208f6b78ad82aee88340443ec9fcf5fca6a3af9994429c6376757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61e47228d4208f6b78ad82aee88340443ec9fcf5fca6a3af9994429c6376757->enter($__internal_f61e47228d4208f6b78ad82aee88340443ec9fcf5fca6a3af9994429c6376757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_ee944e63ccb88111b8ba322d2c70f51e0c1846f0e74e78a40983b8ce1137fb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee944e63ccb88111b8ba322d2c70f51e0c1846f0e74e78a40983b8ce1137fb9e->enter($__internal_ee944e63ccb88111b8ba322d2c70f51e0c1846f0e74e78a40983b8ce1137fb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_ee944e63ccb88111b8ba322d2c70f51e0c1846f0e74e78a40983b8ce1137fb9e->leave($__internal_ee944e63ccb88111b8ba322d2c70f51e0c1846f0e74e78a40983b8ce1137fb9e_prof);

        
        $__internal_f61e47228d4208f6b78ad82aee88340443ec9fcf5fca6a3af9994429c6376757->leave($__internal_f61e47228d4208f6b78ad82aee88340443ec9fcf5fca6a3af9994429c6376757_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_219ca60247ce8c1899c0f6a0b363b5aef9e1628b60abeb73fd39b516e0922732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219ca60247ce8c1899c0f6a0b363b5aef9e1628b60abeb73fd39b516e0922732->enter($__internal_219ca60247ce8c1899c0f6a0b363b5aef9e1628b60abeb73fd39b516e0922732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_af0c862a4a7896e7c80b129e52ea3fb90fa77f7b55c7df3ef93816b294ea59b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0c862a4a7896e7c80b129e52ea3fb90fa77f7b55c7df3ef93816b294ea59b0->enter($__internal_af0c862a4a7896e7c80b129e52ea3fb90fa77f7b55c7df3ef93816b294ea59b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_af0c862a4a7896e7c80b129e52ea3fb90fa77f7b55c7df3ef93816b294ea59b0->leave($__internal_af0c862a4a7896e7c80b129e52ea3fb90fa77f7b55c7df3ef93816b294ea59b0_prof);

        
        $__internal_219ca60247ce8c1899c0f6a0b363b5aef9e1628b60abeb73fd39b516e0922732->leave($__internal_219ca60247ce8c1899c0f6a0b363b5aef9e1628b60abeb73fd39b516e0922732_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
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

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
