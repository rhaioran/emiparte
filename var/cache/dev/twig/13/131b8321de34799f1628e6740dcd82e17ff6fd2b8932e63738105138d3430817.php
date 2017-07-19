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
        $__internal_4a15f6a18fad55b29fd5947d7748f8f69ff3a7a876fef7c6edaace053c870015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a15f6a18fad55b29fd5947d7748f8f69ff3a7a876fef7c6edaace053c870015->enter($__internal_4a15f6a18fad55b29fd5947d7748f8f69ff3a7a876fef7c6edaace053c870015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_5125d943ff0c9a21e72a7a8d33b4389ca62fb740a3ce300f3cc269766ba15d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5125d943ff0c9a21e72a7a8d33b4389ca62fb740a3ce300f3cc269766ba15d99->enter($__internal_5125d943ff0c9a21e72a7a8d33b4389ca62fb740a3ce300f3cc269766ba15d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

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
        
        $__internal_4a15f6a18fad55b29fd5947d7748f8f69ff3a7a876fef7c6edaace053c870015->leave($__internal_4a15f6a18fad55b29fd5947d7748f8f69ff3a7a876fef7c6edaace053c870015_prof);

        
        $__internal_5125d943ff0c9a21e72a7a8d33b4389ca62fb740a3ce300f3cc269766ba15d99->leave($__internal_5125d943ff0c9a21e72a7a8d33b4389ca62fb740a3ce300f3cc269766ba15d99_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_9a469726d9534cb54de61f1b9ac7074638b2c8c90915f2746fa0dbec3011987b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a469726d9534cb54de61f1b9ac7074638b2c8c90915f2746fa0dbec3011987b->enter($__internal_9a469726d9534cb54de61f1b9ac7074638b2c8c90915f2746fa0dbec3011987b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_6d167ced4aa54fac62088dcc6c71b614d7dde0282e0d3403bdc8256821cabe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d167ced4aa54fac62088dcc6c71b614d7dde0282e0d3403bdc8256821cabe76->enter($__internal_6d167ced4aa54fac62088dcc6c71b614d7dde0282e0d3403bdc8256821cabe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_6d167ced4aa54fac62088dcc6c71b614d7dde0282e0d3403bdc8256821cabe76->leave($__internal_6d167ced4aa54fac62088dcc6c71b614d7dde0282e0d3403bdc8256821cabe76_prof);

        
        $__internal_9a469726d9534cb54de61f1b9ac7074638b2c8c90915f2746fa0dbec3011987b->leave($__internal_9a469726d9534cb54de61f1b9ac7074638b2c8c90915f2746fa0dbec3011987b_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_185ffecff80e12563520ed4f0edb7d837753a8687da447afac0aea7471739bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185ffecff80e12563520ed4f0edb7d837753a8687da447afac0aea7471739bc2->enter($__internal_185ffecff80e12563520ed4f0edb7d837753a8687da447afac0aea7471739bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_3ff75a2e9ae7a8d0a4a7dbd82883800031ddb54dcf6f80a902f1f46fada43cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff75a2e9ae7a8d0a4a7dbd82883800031ddb54dcf6f80a902f1f46fada43cd3->enter($__internal_3ff75a2e9ae7a8d0a4a7dbd82883800031ddb54dcf6f80a902f1f46fada43cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_3ff75a2e9ae7a8d0a4a7dbd82883800031ddb54dcf6f80a902f1f46fada43cd3->leave($__internal_3ff75a2e9ae7a8d0a4a7dbd82883800031ddb54dcf6f80a902f1f46fada43cd3_prof);

        
        $__internal_185ffecff80e12563520ed4f0edb7d837753a8687da447afac0aea7471739bc2->leave($__internal_185ffecff80e12563520ed4f0edb7d837753a8687da447afac0aea7471739bc2_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fc1e6784413899a89524ec5b3907535bf2b87d9c349056ce3553157d38dcc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc1e6784413899a89524ec5b3907535bf2b87d9c349056ce3553157d38dcc7d->enter($__internal_5fc1e6784413899a89524ec5b3907535bf2b87d9c349056ce3553157d38dcc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_782fefb62f620a287bd4ed13a33017dc100acbbb2435841f3617f11fc0f85c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782fefb62f620a287bd4ed13a33017dc100acbbb2435841f3617f11fc0f85c4a->enter($__internal_782fefb62f620a287bd4ed13a33017dc100acbbb2435841f3617f11fc0f85c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_782fefb62f620a287bd4ed13a33017dc100acbbb2435841f3617f11fc0f85c4a->leave($__internal_782fefb62f620a287bd4ed13a33017dc100acbbb2435841f3617f11fc0f85c4a_prof);

        
        $__internal_5fc1e6784413899a89524ec5b3907535bf2b87d9c349056ce3553157d38dcc7d->leave($__internal_5fc1e6784413899a89524ec5b3907535bf2b87d9c349056ce3553157d38dcc7d_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df4ede8e7a1569a4f59078a630b48ae320a5821cd24fd61c8c33ec1312cefe25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4ede8e7a1569a4f59078a630b48ae320a5821cd24fd61c8c33ec1312cefe25->enter($__internal_df4ede8e7a1569a4f59078a630b48ae320a5821cd24fd61c8c33ec1312cefe25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_053bf07b0891855ded88e695b933320b42b2b87c89cbbc7707d00a8619ac1398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053bf07b0891855ded88e695b933320b42b2b87c89cbbc7707d00a8619ac1398->enter($__internal_053bf07b0891855ded88e695b933320b42b2b87c89cbbc7707d00a8619ac1398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_053bf07b0891855ded88e695b933320b42b2b87c89cbbc7707d00a8619ac1398->leave($__internal_053bf07b0891855ded88e695b933320b42b2b87c89cbbc7707d00a8619ac1398_prof);

        
        $__internal_df4ede8e7a1569a4f59078a630b48ae320a5821cd24fd61c8c33ec1312cefe25->leave($__internal_df4ede8e7a1569a4f59078a630b48ae320a5821cd24fd61c8c33ec1312cefe25_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_66bf59fc9b0b2d5ccb61b0bd445e2a9b9754bec9cf571aea3315ee7703649493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66bf59fc9b0b2d5ccb61b0bd445e2a9b9754bec9cf571aea3315ee7703649493->enter($__internal_66bf59fc9b0b2d5ccb61b0bd445e2a9b9754bec9cf571aea3315ee7703649493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_5e5823a4ea4b99daa83b834f2466b87560319e9bca4dd60bfb92c5a78a09ec18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5823a4ea4b99daa83b834f2466b87560319e9bca4dd60bfb92c5a78a09ec18->enter($__internal_5e5823a4ea4b99daa83b834f2466b87560319e9bca4dd60bfb92c5a78a09ec18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

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
        
        $__internal_5e5823a4ea4b99daa83b834f2466b87560319e9bca4dd60bfb92c5a78a09ec18->leave($__internal_5e5823a4ea4b99daa83b834f2466b87560319e9bca4dd60bfb92c5a78a09ec18_prof);

        
        $__internal_66bf59fc9b0b2d5ccb61b0bd445e2a9b9754bec9cf571aea3315ee7703649493->leave($__internal_66bf59fc9b0b2d5ccb61b0bd445e2a9b9754bec9cf571aea3315ee7703649493_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_9ad30e608020f9e39e3d1c1a623c35e31ae0c3ff7091422ba73b7d1cbcfb670c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad30e608020f9e39e3d1c1a623c35e31ae0c3ff7091422ba73b7d1cbcfb670c->enter($__internal_9ad30e608020f9e39e3d1c1a623c35e31ae0c3ff7091422ba73b7d1cbcfb670c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_d5407fe9af65b9c34b662eb401328085b3f7c5c6ae3f7b49400c8098c755d999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5407fe9af65b9c34b662eb401328085b3f7c5c6ae3f7b49400c8098c755d999->enter($__internal_d5407fe9af65b9c34b662eb401328085b3f7c5c6ae3f7b49400c8098c755d999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

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
        
        $__internal_d5407fe9af65b9c34b662eb401328085b3f7c5c6ae3f7b49400c8098c755d999->leave($__internal_d5407fe9af65b9c34b662eb401328085b3f7c5c6ae3f7b49400c8098c755d999_prof);

        
        $__internal_9ad30e608020f9e39e3d1c1a623c35e31ae0c3ff7091422ba73b7d1cbcfb670c->leave($__internal_9ad30e608020f9e39e3d1c1a623c35e31ae0c3ff7091422ba73b7d1cbcfb670c_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_20808305f9be8f8a8bcdcd9246c59c2599da14ac746d677f34c609fc0c3a33bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20808305f9be8f8a8bcdcd9246c59c2599da14ac746d677f34c609fc0c3a33bf->enter($__internal_20808305f9be8f8a8bcdcd9246c59c2599da14ac746d677f34c609fc0c3a33bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_1a31e8fbc0224d6825fb0bc5114ea54eef705ea8d8642b94a092a13d50395b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a31e8fbc0224d6825fb0bc5114ea54eef705ea8d8642b94a092a13d50395b65->enter($__internal_1a31e8fbc0224d6825fb0bc5114ea54eef705ea8d8642b94a092a13d50395b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

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
        
        $__internal_1a31e8fbc0224d6825fb0bc5114ea54eef705ea8d8642b94a092a13d50395b65->leave($__internal_1a31e8fbc0224d6825fb0bc5114ea54eef705ea8d8642b94a092a13d50395b65_prof);

        
        $__internal_20808305f9be8f8a8bcdcd9246c59c2599da14ac746d677f34c609fc0c3a33bf->leave($__internal_20808305f9be8f8a8bcdcd9246c59c2599da14ac746d677f34c609fc0c3a33bf_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_96f6c24f942b04193114848f7cf8dd3409c887e045d4b4e992dbb2a4ecf36715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f6c24f942b04193114848f7cf8dd3409c887e045d4b4e992dbb2a4ecf36715->enter($__internal_96f6c24f942b04193114848f7cf8dd3409c887e045d4b4e992dbb2a4ecf36715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_d5fc415b12d2c50fb560585491dffc8de663484e60c3a25865a115f91a16aaf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5fc415b12d2c50fb560585491dffc8de663484e60c3a25865a115f91a16aaf8->enter($__internal_d5fc415b12d2c50fb560585491dffc8de663484e60c3a25865a115f91a16aaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_d5fc415b12d2c50fb560585491dffc8de663484e60c3a25865a115f91a16aaf8->leave($__internal_d5fc415b12d2c50fb560585491dffc8de663484e60c3a25865a115f91a16aaf8_prof);

        
        $__internal_96f6c24f942b04193114848f7cf8dd3409c887e045d4b4e992dbb2a4ecf36715->leave($__internal_96f6c24f942b04193114848f7cf8dd3409c887e045d4b4e992dbb2a4ecf36715_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_643b7eb62e5b5b0355aca8816aa84a47a63e18cef5b4fd13ccab639f54d892f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643b7eb62e5b5b0355aca8816aa84a47a63e18cef5b4fd13ccab639f54d892f4->enter($__internal_643b7eb62e5b5b0355aca8816aa84a47a63e18cef5b4fd13ccab639f54d892f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_634d7c4cda690a5db60dcf4bdf6defa11a9923640ab493b4f70952535323bbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634d7c4cda690a5db60dcf4bdf6defa11a9923640ab493b4f70952535323bbda->enter($__internal_634d7c4cda690a5db60dcf4bdf6defa11a9923640ab493b4f70952535323bbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_634d7c4cda690a5db60dcf4bdf6defa11a9923640ab493b4f70952535323bbda->leave($__internal_634d7c4cda690a5db60dcf4bdf6defa11a9923640ab493b4f70952535323bbda_prof);

        
        $__internal_643b7eb62e5b5b0355aca8816aa84a47a63e18cef5b4fd13ccab639f54d892f4->leave($__internal_643b7eb62e5b5b0355aca8816aa84a47a63e18cef5b4fd13ccab639f54d892f4_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_6f0c8a062cd7930a679e24ef92e13f8595376b811421c3f4e2707bd03426af36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0c8a062cd7930a679e24ef92e13f8595376b811421c3f4e2707bd03426af36->enter($__internal_6f0c8a062cd7930a679e24ef92e13f8595376b811421c3f4e2707bd03426af36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_996f312e2e976bf1588b358dcf1e30c109147d024f9ae7ffbfa2d838a5f7a373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996f312e2e976bf1588b358dcf1e30c109147d024f9ae7ffbfa2d838a5f7a373->enter($__internal_996f312e2e976bf1588b358dcf1e30c109147d024f9ae7ffbfa2d838a5f7a373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_996f312e2e976bf1588b358dcf1e30c109147d024f9ae7ffbfa2d838a5f7a373->leave($__internal_996f312e2e976bf1588b358dcf1e30c109147d024f9ae7ffbfa2d838a5f7a373_prof);

        
        $__internal_6f0c8a062cd7930a679e24ef92e13f8595376b811421c3f4e2707bd03426af36->leave($__internal_6f0c8a062cd7930a679e24ef92e13f8595376b811421c3f4e2707bd03426af36_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_ded7c01e9f21ffe6002e1a01120b80ebe6b312ea332f698b0abf901e987b7e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded7c01e9f21ffe6002e1a01120b80ebe6b312ea332f698b0abf901e987b7e9a->enter($__internal_ded7c01e9f21ffe6002e1a01120b80ebe6b312ea332f698b0abf901e987b7e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_f2379af040def905c611e2a5b138517f5ca6c36a7129b782e2c125f18305b354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2379af040def905c611e2a5b138517f5ca6c36a7129b782e2c125f18305b354->enter($__internal_f2379af040def905c611e2a5b138517f5ca6c36a7129b782e2c125f18305b354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

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
        
        $__internal_f2379af040def905c611e2a5b138517f5ca6c36a7129b782e2c125f18305b354->leave($__internal_f2379af040def905c611e2a5b138517f5ca6c36a7129b782e2c125f18305b354_prof);

        
        $__internal_ded7c01e9f21ffe6002e1a01120b80ebe6b312ea332f698b0abf901e987b7e9a->leave($__internal_ded7c01e9f21ffe6002e1a01120b80ebe6b312ea332f698b0abf901e987b7e9a_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_fb99cee3e525077b40607814758502a8bb2212e979845dea993dac7868394488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb99cee3e525077b40607814758502a8bb2212e979845dea993dac7868394488->enter($__internal_fb99cee3e525077b40607814758502a8bb2212e979845dea993dac7868394488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_e919d97358a4f282ce1c406173297da01b4fe4afedaf05159f0dd0263996aa8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e919d97358a4f282ce1c406173297da01b4fe4afedaf05159f0dd0263996aa8d->enter($__internal_e919d97358a4f282ce1c406173297da01b4fe4afedaf05159f0dd0263996aa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_e919d97358a4f282ce1c406173297da01b4fe4afedaf05159f0dd0263996aa8d->leave($__internal_e919d97358a4f282ce1c406173297da01b4fe4afedaf05159f0dd0263996aa8d_prof);

        
        $__internal_fb99cee3e525077b40607814758502a8bb2212e979845dea993dac7868394488->leave($__internal_fb99cee3e525077b40607814758502a8bb2212e979845dea993dac7868394488_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_d54e26d82dfa5922930ce34f4d7a2bf10cdfc1ced254f8e4bed369860fe366f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54e26d82dfa5922930ce34f4d7a2bf10cdfc1ced254f8e4bed369860fe366f9->enter($__internal_d54e26d82dfa5922930ce34f4d7a2bf10cdfc1ced254f8e4bed369860fe366f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_65e97079e99bcccb806104d59db12ac6a4db70504dee7bee374bac1ac2351559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e97079e99bcccb806104d59db12ac6a4db70504dee7bee374bac1ac2351559->enter($__internal_65e97079e99bcccb806104d59db12ac6a4db70504dee7bee374bac1ac2351559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

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
        
        $__internal_65e97079e99bcccb806104d59db12ac6a4db70504dee7bee374bac1ac2351559->leave($__internal_65e97079e99bcccb806104d59db12ac6a4db70504dee7bee374bac1ac2351559_prof);

        
        $__internal_d54e26d82dfa5922930ce34f4d7a2bf10cdfc1ced254f8e4bed369860fe366f9->leave($__internal_d54e26d82dfa5922930ce34f4d7a2bf10cdfc1ced254f8e4bed369860fe366f9_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_8124bbb9ad236cc240d9306d190f28254a7386cc9af32915d7c0cca321dd9a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8124bbb9ad236cc240d9306d190f28254a7386cc9af32915d7c0cca321dd9a90->enter($__internal_8124bbb9ad236cc240d9306d190f28254a7386cc9af32915d7c0cca321dd9a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_9d2e9319696bbef597df0a074145eddfa24ba02d96084da5c048b3baec7b85d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2e9319696bbef597df0a074145eddfa24ba02d96084da5c048b3baec7b85d2->enter($__internal_9d2e9319696bbef597df0a074145eddfa24ba02d96084da5c048b3baec7b85d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_9d2e9319696bbef597df0a074145eddfa24ba02d96084da5c048b3baec7b85d2->leave($__internal_9d2e9319696bbef597df0a074145eddfa24ba02d96084da5c048b3baec7b85d2_prof);

        
        $__internal_8124bbb9ad236cc240d9306d190f28254a7386cc9af32915d7c0cca321dd9a90->leave($__internal_8124bbb9ad236cc240d9306d190f28254a7386cc9af32915d7c0cca321dd9a90_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_991afb9bc3b704eb0b8cb0adaee7ab5fcb1e292916acf39dae6564676ee8cc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991afb9bc3b704eb0b8cb0adaee7ab5fcb1e292916acf39dae6564676ee8cc72->enter($__internal_991afb9bc3b704eb0b8cb0adaee7ab5fcb1e292916acf39dae6564676ee8cc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_5664ea34b50d6c66f3f630dacac4b7a973fe2ce1513990f6d6be423b603a172d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5664ea34b50d6c66f3f630dacac4b7a973fe2ce1513990f6d6be423b603a172d->enter($__internal_5664ea34b50d6c66f3f630dacac4b7a973fe2ce1513990f6d6be423b603a172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

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
        
        $__internal_5664ea34b50d6c66f3f630dacac4b7a973fe2ce1513990f6d6be423b603a172d->leave($__internal_5664ea34b50d6c66f3f630dacac4b7a973fe2ce1513990f6d6be423b603a172d_prof);

        
        $__internal_991afb9bc3b704eb0b8cb0adaee7ab5fcb1e292916acf39dae6564676ee8cc72->leave($__internal_991afb9bc3b704eb0b8cb0adaee7ab5fcb1e292916acf39dae6564676ee8cc72_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_40b31d728acf905d940d487237f1c0e0b189906384c09a04c8c20fdd37e32b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b31d728acf905d940d487237f1c0e0b189906384c09a04c8c20fdd37e32b58->enter($__internal_40b31d728acf905d940d487237f1c0e0b189906384c09a04c8c20fdd37e32b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_dc69b1137b37542ee85c3a1aadfecf8c4296f247d3d321e24497b02d0c4faac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc69b1137b37542ee85c3a1aadfecf8c4296f247d3d321e24497b02d0c4faac5->enter($__internal_dc69b1137b37542ee85c3a1aadfecf8c4296f247d3d321e24497b02d0c4faac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

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
        
        $__internal_dc69b1137b37542ee85c3a1aadfecf8c4296f247d3d321e24497b02d0c4faac5->leave($__internal_dc69b1137b37542ee85c3a1aadfecf8c4296f247d3d321e24497b02d0c4faac5_prof);

        
        $__internal_40b31d728acf905d940d487237f1c0e0b189906384c09a04c8c20fdd37e32b58->leave($__internal_40b31d728acf905d940d487237f1c0e0b189906384c09a04c8c20fdd37e32b58_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f17dd2deda644c4973d35a42088ed6ef4904c6995c9c6875754efd1a9c225764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17dd2deda644c4973d35a42088ed6ef4904c6995c9c6875754efd1a9c225764->enter($__internal_f17dd2deda644c4973d35a42088ed6ef4904c6995c9c6875754efd1a9c225764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_2e6d4c495e571a3136170f2b427d0b70b76cc6875b1fbb21db2e7745418b67e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6d4c495e571a3136170f2b427d0b70b76cc6875b1fbb21db2e7745418b67e8->enter($__internal_2e6d4c495e571a3136170f2b427d0b70b76cc6875b1fbb21db2e7745418b67e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_2e6d4c495e571a3136170f2b427d0b70b76cc6875b1fbb21db2e7745418b67e8->leave($__internal_2e6d4c495e571a3136170f2b427d0b70b76cc6875b1fbb21db2e7745418b67e8_prof);

        
        $__internal_f17dd2deda644c4973d35a42088ed6ef4904c6995c9c6875754efd1a9c225764->leave($__internal_f17dd2deda644c4973d35a42088ed6ef4904c6995c9c6875754efd1a9c225764_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_53c0394ab399f2a628b7105bbfac5dd12d9e6247b7a0e9447a5858928013a699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c0394ab399f2a628b7105bbfac5dd12d9e6247b7a0e9447a5858928013a699->enter($__internal_53c0394ab399f2a628b7105bbfac5dd12d9e6247b7a0e9447a5858928013a699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_9faeaf6c85ce140cd858a80a091d2e1ec866355870aeb6e8370ea7ae07d387b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9faeaf6c85ce140cd858a80a091d2e1ec866355870aeb6e8370ea7ae07d387b3->enter($__internal_9faeaf6c85ce140cd858a80a091d2e1ec866355870aeb6e8370ea7ae07d387b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_9faeaf6c85ce140cd858a80a091d2e1ec866355870aeb6e8370ea7ae07d387b3->leave($__internal_9faeaf6c85ce140cd858a80a091d2e1ec866355870aeb6e8370ea7ae07d387b3_prof);

        
        $__internal_53c0394ab399f2a628b7105bbfac5dd12d9e6247b7a0e9447a5858928013a699->leave($__internal_53c0394ab399f2a628b7105bbfac5dd12d9e6247b7a0e9447a5858928013a699_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_477104fb94e027b5456dd176af6b9760b540cb7c94f0323702f2aed4d6a11a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477104fb94e027b5456dd176af6b9760b540cb7c94f0323702f2aed4d6a11a2b->enter($__internal_477104fb94e027b5456dd176af6b9760b540cb7c94f0323702f2aed4d6a11a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_66f706d2538b07d16ea1858ff002c37a661aea8ba669a9ec6575a37a808cc2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f706d2538b07d16ea1858ff002c37a661aea8ba669a9ec6575a37a808cc2b3->enter($__internal_66f706d2538b07d16ea1858ff002c37a661aea8ba669a9ec6575a37a808cc2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_66f706d2538b07d16ea1858ff002c37a661aea8ba669a9ec6575a37a808cc2b3->leave($__internal_66f706d2538b07d16ea1858ff002c37a661aea8ba669a9ec6575a37a808cc2b3_prof);

        
        $__internal_477104fb94e027b5456dd176af6b9760b540cb7c94f0323702f2aed4d6a11a2b->leave($__internal_477104fb94e027b5456dd176af6b9760b540cb7c94f0323702f2aed4d6a11a2b_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_e393fd0b96809d0a974ad822e35fab228db82db9659db62096dcd915b24a5f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e393fd0b96809d0a974ad822e35fab228db82db9659db62096dcd915b24a5f2a->enter($__internal_e393fd0b96809d0a974ad822e35fab228db82db9659db62096dcd915b24a5f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_870afdb79f899f58d31e0e7f4b53b099c3be6ca9cb3cd8e04d852dae7f38257b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870afdb79f899f58d31e0e7f4b53b099c3be6ca9cb3cd8e04d852dae7f38257b->enter($__internal_870afdb79f899f58d31e0e7f4b53b099c3be6ca9cb3cd8e04d852dae7f38257b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

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
        
        $__internal_870afdb79f899f58d31e0e7f4b53b099c3be6ca9cb3cd8e04d852dae7f38257b->leave($__internal_870afdb79f899f58d31e0e7f4b53b099c3be6ca9cb3cd8e04d852dae7f38257b_prof);

        
        $__internal_e393fd0b96809d0a974ad822e35fab228db82db9659db62096dcd915b24a5f2a->leave($__internal_e393fd0b96809d0a974ad822e35fab228db82db9659db62096dcd915b24a5f2a_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_6bf229a1947d7036f166313164044a675d25bf497dafc8a59f195a4c47814814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf229a1947d7036f166313164044a675d25bf497dafc8a59f195a4c47814814->enter($__internal_6bf229a1947d7036f166313164044a675d25bf497dafc8a59f195a4c47814814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_e94cf791416798f251acf91d0051ad34a4efe5dbf5da11c2c23be85c7d74156a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94cf791416798f251acf91d0051ad34a4efe5dbf5da11c2c23be85c7d74156a->enter($__internal_e94cf791416798f251acf91d0051ad34a4efe5dbf5da11c2c23be85c7d74156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_e94cf791416798f251acf91d0051ad34a4efe5dbf5da11c2c23be85c7d74156a->leave($__internal_e94cf791416798f251acf91d0051ad34a4efe5dbf5da11c2c23be85c7d74156a_prof);

        
        $__internal_6bf229a1947d7036f166313164044a675d25bf497dafc8a59f195a4c47814814->leave($__internal_6bf229a1947d7036f166313164044a675d25bf497dafc8a59f195a4c47814814_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_df870cebd7f8f3b846b2ceafd041fb570a8901f1f34bc6953f08fad3985fcfc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df870cebd7f8f3b846b2ceafd041fb570a8901f1f34bc6953f08fad3985fcfc8->enter($__internal_df870cebd7f8f3b846b2ceafd041fb570a8901f1f34bc6953f08fad3985fcfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_73effdb18085d35ad23d8a6f2286996705e9ed27c7ac8b7495b1bb1f002402bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73effdb18085d35ad23d8a6f2286996705e9ed27c7ac8b7495b1bb1f002402bc->enter($__internal_73effdb18085d35ad23d8a6f2286996705e9ed27c7ac8b7495b1bb1f002402bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_73effdb18085d35ad23d8a6f2286996705e9ed27c7ac8b7495b1bb1f002402bc->leave($__internal_73effdb18085d35ad23d8a6f2286996705e9ed27c7ac8b7495b1bb1f002402bc_prof);

        
        $__internal_df870cebd7f8f3b846b2ceafd041fb570a8901f1f34bc6953f08fad3985fcfc8->leave($__internal_df870cebd7f8f3b846b2ceafd041fb570a8901f1f34bc6953f08fad3985fcfc8_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_c19b15430bb51d5e892df23d81f2205284498686332e3c3ce85abc41f5bbafc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19b15430bb51d5e892df23d81f2205284498686332e3c3ce85abc41f5bbafc4->enter($__internal_c19b15430bb51d5e892df23d81f2205284498686332e3c3ce85abc41f5bbafc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_f8573d399d8e30887b542e72011c637682e34476a09141368abf027276ce47dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8573d399d8e30887b542e72011c637682e34476a09141368abf027276ce47dc->enter($__internal_f8573d399d8e30887b542e72011c637682e34476a09141368abf027276ce47dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_f8573d399d8e30887b542e72011c637682e34476a09141368abf027276ce47dc->leave($__internal_f8573d399d8e30887b542e72011c637682e34476a09141368abf027276ce47dc_prof);

        
        $__internal_c19b15430bb51d5e892df23d81f2205284498686332e3c3ce85abc41f5bbafc4->leave($__internal_c19b15430bb51d5e892df23d81f2205284498686332e3c3ce85abc41f5bbafc4_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_cd574aabd291287fc79c0d7029952fd6f717ad4a51db01fe1d406da8dbfec217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd574aabd291287fc79c0d7029952fd6f717ad4a51db01fe1d406da8dbfec217->enter($__internal_cd574aabd291287fc79c0d7029952fd6f717ad4a51db01fe1d406da8dbfec217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_f30e7d0b0b21249a96d8d0b2959a5167aab8d2420df64777ed58e1a1d021e55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30e7d0b0b21249a96d8d0b2959a5167aab8d2420df64777ed58e1a1d021e55e->enter($__internal_f30e7d0b0b21249a96d8d0b2959a5167aab8d2420df64777ed58e1a1d021e55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_f30e7d0b0b21249a96d8d0b2959a5167aab8d2420df64777ed58e1a1d021e55e->leave($__internal_f30e7d0b0b21249a96d8d0b2959a5167aab8d2420df64777ed58e1a1d021e55e_prof);

        
        $__internal_cd574aabd291287fc79c0d7029952fd6f717ad4a51db01fe1d406da8dbfec217->leave($__internal_cd574aabd291287fc79c0d7029952fd6f717ad4a51db01fe1d406da8dbfec217_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_075877fbc79e2f54358820ff34d2e5b582ee6492feb0b220147d296398efef91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075877fbc79e2f54358820ff34d2e5b582ee6492feb0b220147d296398efef91->enter($__internal_075877fbc79e2f54358820ff34d2e5b582ee6492feb0b220147d296398efef91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_3a74b571790dc8f8af7e21b973480d2315237b9186444bdc5f2151bb454ddab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a74b571790dc8f8af7e21b973480d2315237b9186444bdc5f2151bb454ddab3->enter($__internal_3a74b571790dc8f8af7e21b973480d2315237b9186444bdc5f2151bb454ddab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_3a74b571790dc8f8af7e21b973480d2315237b9186444bdc5f2151bb454ddab3->leave($__internal_3a74b571790dc8f8af7e21b973480d2315237b9186444bdc5f2151bb454ddab3_prof);

        
        $__internal_075877fbc79e2f54358820ff34d2e5b582ee6492feb0b220147d296398efef91->leave($__internal_075877fbc79e2f54358820ff34d2e5b582ee6492feb0b220147d296398efef91_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_d346403e215fff27f6015176c821f269598a2afe6c81a59494b59d52cdaccb11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d346403e215fff27f6015176c821f269598a2afe6c81a59494b59d52cdaccb11->enter($__internal_d346403e215fff27f6015176c821f269598a2afe6c81a59494b59d52cdaccb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_ac5abb3490646053ff91ca1d8218efbbf71a4574fb6706448e61512bf5e38aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5abb3490646053ff91ca1d8218efbbf71a4574fb6706448e61512bf5e38aa4->enter($__internal_ac5abb3490646053ff91ca1d8218efbbf71a4574fb6706448e61512bf5e38aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_ac5abb3490646053ff91ca1d8218efbbf71a4574fb6706448e61512bf5e38aa4->leave($__internal_ac5abb3490646053ff91ca1d8218efbbf71a4574fb6706448e61512bf5e38aa4_prof);

        
        $__internal_d346403e215fff27f6015176c821f269598a2afe6c81a59494b59d52cdaccb11->leave($__internal_d346403e215fff27f6015176c821f269598a2afe6c81a59494b59d52cdaccb11_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_f55b9d232d87cda2d5628c4f15f4c16355000783248915d123c1e54df10ccf06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f55b9d232d87cda2d5628c4f15f4c16355000783248915d123c1e54df10ccf06->enter($__internal_f55b9d232d87cda2d5628c4f15f4c16355000783248915d123c1e54df10ccf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_608681ad97ba38f18d795d93103526cd88f04fae11c1afa3d8ce0962883e08e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608681ad97ba38f18d795d93103526cd88f04fae11c1afa3d8ce0962883e08e3->enter($__internal_608681ad97ba38f18d795d93103526cd88f04fae11c1afa3d8ce0962883e08e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

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
        
        $__internal_608681ad97ba38f18d795d93103526cd88f04fae11c1afa3d8ce0962883e08e3->leave($__internal_608681ad97ba38f18d795d93103526cd88f04fae11c1afa3d8ce0962883e08e3_prof);

        
        $__internal_f55b9d232d87cda2d5628c4f15f4c16355000783248915d123c1e54df10ccf06->leave($__internal_f55b9d232d87cda2d5628c4f15f4c16355000783248915d123c1e54df10ccf06_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_d3af751f9f4a32a06d9afbb6667d88c6473cbf3d4b0ce15367cd2c087ff0325e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3af751f9f4a32a06d9afbb6667d88c6473cbf3d4b0ce15367cd2c087ff0325e->enter($__internal_d3af751f9f4a32a06d9afbb6667d88c6473cbf3d4b0ce15367cd2c087ff0325e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_ccc0e1baa19ecb90fb589a0e14a55c2cf8e18352298ba342bd72a3d76fc21b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc0e1baa19ecb90fb589a0e14a55c2cf8e18352298ba342bd72a3d76fc21b83->enter($__internal_ccc0e1baa19ecb90fb589a0e14a55c2cf8e18352298ba342bd72a3d76fc21b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

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
        
        $__internal_ccc0e1baa19ecb90fb589a0e14a55c2cf8e18352298ba342bd72a3d76fc21b83->leave($__internal_ccc0e1baa19ecb90fb589a0e14a55c2cf8e18352298ba342bd72a3d76fc21b83_prof);

        
        $__internal_d3af751f9f4a32a06d9afbb6667d88c6473cbf3d4b0ce15367cd2c087ff0325e->leave($__internal_d3af751f9f4a32a06d9afbb6667d88c6473cbf3d4b0ce15367cd2c087ff0325e_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_057ae929618397d109a9c25bc59f26c5e6e95de833766cc434882c894d7b09bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057ae929618397d109a9c25bc59f26c5e6e95de833766cc434882c894d7b09bf->enter($__internal_057ae929618397d109a9c25bc59f26c5e6e95de833766cc434882c894d7b09bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_9d0c983b6c170e63ceb96a2eadbbe0a6581ed4a595459bc18abea08e442f3880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0c983b6c170e63ceb96a2eadbbe0a6581ed4a595459bc18abea08e442f3880->enter($__internal_9d0c983b6c170e63ceb96a2eadbbe0a6581ed4a595459bc18abea08e442f3880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

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
        
        $__internal_9d0c983b6c170e63ceb96a2eadbbe0a6581ed4a595459bc18abea08e442f3880->leave($__internal_9d0c983b6c170e63ceb96a2eadbbe0a6581ed4a595459bc18abea08e442f3880_prof);

        
        $__internal_057ae929618397d109a9c25bc59f26c5e6e95de833766cc434882c894d7b09bf->leave($__internal_057ae929618397d109a9c25bc59f26c5e6e95de833766cc434882c894d7b09bf_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_c3cf2ff2491557f98027c419d62dcc2f2efa14d8e41e1cf92818c74b253fc252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3cf2ff2491557f98027c419d62dcc2f2efa14d8e41e1cf92818c74b253fc252->enter($__internal_c3cf2ff2491557f98027c419d62dcc2f2efa14d8e41e1cf92818c74b253fc252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_1c8f8b5afa8421b7d3267980c8ecfca4105594a131a4c51e2597e8a18ba3a7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8f8b5afa8421b7d3267980c8ecfca4105594a131a4c51e2597e8a18ba3a7e5->enter($__internal_1c8f8b5afa8421b7d3267980c8ecfca4105594a131a4c51e2597e8a18ba3a7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

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
        
        $__internal_1c8f8b5afa8421b7d3267980c8ecfca4105594a131a4c51e2597e8a18ba3a7e5->leave($__internal_1c8f8b5afa8421b7d3267980c8ecfca4105594a131a4c51e2597e8a18ba3a7e5_prof);

        
        $__internal_c3cf2ff2491557f98027c419d62dcc2f2efa14d8e41e1cf92818c74b253fc252->leave($__internal_c3cf2ff2491557f98027c419d62dcc2f2efa14d8e41e1cf92818c74b253fc252_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_3d4cf8db8c10b84eaf199ca97e86b939744b47079e1394b33cda6c95f4789a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4cf8db8c10b84eaf199ca97e86b939744b47079e1394b33cda6c95f4789a55->enter($__internal_3d4cf8db8c10b84eaf199ca97e86b939744b47079e1394b33cda6c95f4789a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_50fa7e9b9c6efc2f3eb337c1e8081c261098269bc6668fb6433a5b1296eb75ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fa7e9b9c6efc2f3eb337c1e8081c261098269bc6668fb6433a5b1296eb75ef->enter($__internal_50fa7e9b9c6efc2f3eb337c1e8081c261098269bc6668fb6433a5b1296eb75ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_50fa7e9b9c6efc2f3eb337c1e8081c261098269bc6668fb6433a5b1296eb75ef->leave($__internal_50fa7e9b9c6efc2f3eb337c1e8081c261098269bc6668fb6433a5b1296eb75ef_prof);

        
        $__internal_3d4cf8db8c10b84eaf199ca97e86b939744b47079e1394b33cda6c95f4789a55->leave($__internal_3d4cf8db8c10b84eaf199ca97e86b939744b47079e1394b33cda6c95f4789a55_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_6aac1d075ea720c7bddc4a8f977c469cd6f5c05470a9b9909b0d35255f581123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aac1d075ea720c7bddc4a8f977c469cd6f5c05470a9b9909b0d35255f581123->enter($__internal_6aac1d075ea720c7bddc4a8f977c469cd6f5c05470a9b9909b0d35255f581123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_2770bb0ed522d828b0aff8723002a7ebf2f9e70a8ec852852ededdd0ed3e924c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2770bb0ed522d828b0aff8723002a7ebf2f9e70a8ec852852ededdd0ed3e924c->enter($__internal_2770bb0ed522d828b0aff8723002a7ebf2f9e70a8ec852852ededdd0ed3e924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_2770bb0ed522d828b0aff8723002a7ebf2f9e70a8ec852852ededdd0ed3e924c->leave($__internal_2770bb0ed522d828b0aff8723002a7ebf2f9e70a8ec852852ededdd0ed3e924c_prof);

        
        $__internal_6aac1d075ea720c7bddc4a8f977c469cd6f5c05470a9b9909b0d35255f581123->leave($__internal_6aac1d075ea720c7bddc4a8f977c469cd6f5c05470a9b9909b0d35255f581123_prof);

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
