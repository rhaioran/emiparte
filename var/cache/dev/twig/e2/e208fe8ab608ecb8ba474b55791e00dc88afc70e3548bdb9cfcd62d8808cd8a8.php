<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_189efaa7e9152b6022da19f5963dd1d1d126bbd6bc858fd2db8159d1419829f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cea992e0cd5727650d67e7ed7ef8abb560815b23eb0c06423ec3e7e1f5fd1eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea992e0cd5727650d67e7ed7ef8abb560815b23eb0c06423ec3e7e1f5fd1eb1->enter($__internal_cea992e0cd5727650d67e7ed7ef8abb560815b23eb0c06423ec3e7e1f5fd1eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_4f86652afe54cbac2878f46d2ff6d3ad3f63c517c18c3b913d99e5c2011daff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f86652afe54cbac2878f46d2ff6d3ad3f63c517c18c3b913d99e5c2011daff8->enter($__internal_4f86652afe54cbac2878f46d2ff6d3ad3f63c517c18c3b913d99e5c2011daff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cea992e0cd5727650d67e7ed7ef8abb560815b23eb0c06423ec3e7e1f5fd1eb1->leave($__internal_cea992e0cd5727650d67e7ed7ef8abb560815b23eb0c06423ec3e7e1f5fd1eb1_prof);

        
        $__internal_4f86652afe54cbac2878f46d2ff6d3ad3f63c517c18c3b913d99e5c2011daff8->leave($__internal_4f86652afe54cbac2878f46d2ff6d3ad3f63c517c18c3b913d99e5c2011daff8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7e74bb5d08ffae3c37efb062a50c38343aef64b1a87683184447a5224b43d228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e74bb5d08ffae3c37efb062a50c38343aef64b1a87683184447a5224b43d228->enter($__internal_7e74bb5d08ffae3c37efb062a50c38343aef64b1a87683184447a5224b43d228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_b87da7a86b51ac3a8b8031574169056fb1e7e8b57b62ab99453449b453a7a3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87da7a86b51ac3a8b8031574169056fb1e7e8b57b62ab99453449b453a7a3cd->enter($__internal_b87da7a86b51ac3a8b8031574169056fb1e7e8b57b62ab99453449b453a7a3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_b87da7a86b51ac3a8b8031574169056fb1e7e8b57b62ab99453449b453a7a3cd->leave($__internal_b87da7a86b51ac3a8b8031574169056fb1e7e8b57b62ab99453449b453a7a3cd_prof);

        
        $__internal_7e74bb5d08ffae3c37efb062a50c38343aef64b1a87683184447a5224b43d228->leave($__internal_7e74bb5d08ffae3c37efb062a50c38343aef64b1a87683184447a5224b43d228_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ad71be0ac185b1131e954e00b5005462ee6edfcaca44e29eda5fe69f192210ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad71be0ac185b1131e954e00b5005462ee6edfcaca44e29eda5fe69f192210ae->enter($__internal_ad71be0ac185b1131e954e00b5005462ee6edfcaca44e29eda5fe69f192210ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_062018f9f0ab06344c946b95323b442f2d6a8975c8f06f58bff3ff75067beb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062018f9f0ab06344c946b95323b442f2d6a8975c8f06f58bff3ff75067beb7a->enter($__internal_062018f9f0ab06344c946b95323b442f2d6a8975c8f06f58bff3ff75067beb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_062018f9f0ab06344c946b95323b442f2d6a8975c8f06f58bff3ff75067beb7a->leave($__internal_062018f9f0ab06344c946b95323b442f2d6a8975c8f06f58bff3ff75067beb7a_prof);

        
        $__internal_ad71be0ac185b1131e954e00b5005462ee6edfcaca44e29eda5fe69f192210ae->leave($__internal_ad71be0ac185b1131e954e00b5005462ee6edfcaca44e29eda5fe69f192210ae_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_6522d54948c77a0969d39f58578836b20f39c76490e4d48ff76f5cd627e26776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6522d54948c77a0969d39f58578836b20f39c76490e4d48ff76f5cd627e26776->enter($__internal_6522d54948c77a0969d39f58578836b20f39c76490e4d48ff76f5cd627e26776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3489e7d04b057fd5700adef16ea7750481e8ced101dfb1797fac0c5e3c395792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3489e7d04b057fd5700adef16ea7750481e8ced101dfb1797fac0c5e3c395792->enter($__internal_3489e7d04b057fd5700adef16ea7750481e8ced101dfb1797fac0c5e3c395792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "    ";
        // line 25
        echo "
    ";
        // line 26
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isChild", array()) && $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "parent", array()), "subject", array()))) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "parent", array()), "toString", array(0 => $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "parent", array()), "subject", array())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_3489e7d04b057fd5700adef16ea7750481e8ced101dfb1797fac0c5e3c395792->leave($__internal_3489e7d04b057fd5700adef16ea7750481e8ced101dfb1797fac0c5e3c395792_prof);

        
        $__internal_6522d54948c77a0969d39f58578836b20f39c76490e4d48ff76f5cd627e26776->leave($__internal_6522d54948c77a0969d39f58578836b20f39c76490e4d48ff76f5cd627e26776_prof);

    }

    // line 31
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_9615872c1ccba6b4a68868580f178109abf9afad17b513c7daaac250653fd70f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9615872c1ccba6b4a68868580f178109abf9afad17b513c7daaac250653fd70f->enter($__internal_9615872c1ccba6b4a68868580f178109abf9afad17b513c7daaac250653fd70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_c7cea4d6f4820868b1896cd7182d1fdb60bf5b118602acb795d3dd3336c06796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cea4d6f4820868b1896cd7182d1fdb60bf5b118602acb795d3dd3336c06796->enter($__internal_c7cea4d6f4820868b1896cd7182d1fdb60bf5b118602acb795d3dd3336c06796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 32
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c7cea4d6f4820868b1896cd7182d1fdb60bf5b118602acb795d3dd3336c06796->leave($__internal_c7cea4d6f4820868b1896cd7182d1fdb60bf5b118602acb795d3dd3336c06796_prof);

        
        $__internal_9615872c1ccba6b4a68868580f178109abf9afad17b513c7daaac250653fd70f->leave($__internal_9615872c1ccba6b4a68868580f178109abf9afad17b513c7daaac250653fd70f_prof);

    }

    // line 35
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_6da8c88b3739efbeb1d49cffa011daf270242bcd4b24d5d305cabec9e2b9dd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da8c88b3739efbeb1d49cffa011daf270242bcd4b24d5d305cabec9e2b9dd31->enter($__internal_6da8c88b3739efbeb1d49cffa011daf270242bcd4b24d5d305cabec9e2b9dd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_61853905e302a5b707172b4ed87e962859b947570c9f96dd63b10b646642ba4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61853905e302a5b707172b4ed87e962859b947570c9f96dd63b10b646642ba4e->enter($__internal_61853905e302a5b707172b4ed87e962859b947570c9f96dd63b10b646642ba4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 36
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 37
        $context["batchactions"] = $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "batchactions", array());
        // line 38
        echo "        ";
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 39
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 42
        echo "
        ";
        // line 44
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 46
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "

                ";
        // line 48
        $this->displayBlock('list_header', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 51
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 52
            $this->displayBlock('table_header', $context, $blocks);
            // line 88
            echo "
                        ";
            // line 89
            $this->displayBlock('table_body', $context, $blocks);
            // line 94
            echo "
                        ";
            // line 95
            $this->displayBlock('table_footer', $context, $blocks);
            // line 97
            echo "                    </table>
                ";
        } else {
            // line 99
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 117
            echo "                ";
        }
        // line 118
        echo "
                ";
        // line 119
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 121
        $this->displayBlock('list_footer', $context, $blocks);
        // line 221
        echo "        </div>
        ";
        // line 222
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 223
            echo "            </form>
        ";
        }
        // line 225
        echo "    </div>
";
        
        $__internal_61853905e302a5b707172b4ed87e962859b947570c9f96dd63b10b646642ba4e->leave($__internal_61853905e302a5b707172b4ed87e962859b947570c9f96dd63b10b646642ba4e_prof);

        
        $__internal_6da8c88b3739efbeb1d49cffa011daf270242bcd4b24d5d305cabec9e2b9dd31->leave($__internal_6da8c88b3739efbeb1d49cffa011daf270242bcd4b24d5d305cabec9e2b9dd31_prof);

    }

    // line 48
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_afb400431197894974c46f32b07e2168c236b956a31f948d1bc32ad8b6ea8cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb400431197894974c46f32b07e2168c236b956a31f948d1bc32ad8b6ea8cdd->enter($__internal_afb400431197894974c46f32b07e2168c236b956a31f948d1bc32ad8b6ea8cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_39215ebd13e057e1cb59d5abfaeba7cf1ccbb31cbf79f1ad352cb06780963fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39215ebd13e057e1cb59d5abfaeba7cf1ccbb31cbf79f1ad352cb06780963fe8->enter($__internal_39215ebd13e057e1cb59d5abfaeba7cf1ccbb31cbf79f1ad352cb06780963fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_39215ebd13e057e1cb59d5abfaeba7cf1ccbb31cbf79f1ad352cb06780963fe8->leave($__internal_39215ebd13e057e1cb59d5abfaeba7cf1ccbb31cbf79f1ad352cb06780963fe8_prof);

        
        $__internal_afb400431197894974c46f32b07e2168c236b956a31f948d1bc32ad8b6ea8cdd->leave($__internal_afb400431197894974c46f32b07e2168c236b956a31f948d1bc32ad8b6ea8cdd_prof);

    }

    // line 52
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_4bb7257e8b6d60fd946f222a9bee5e723fa2682572d75dfc1e42beb2b45fb2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb7257e8b6d60fd946f222a9bee5e723fa2682572d75dfc1e42beb2b45fb2ef->enter($__internal_4bb7257e8b6d60fd946f222a9bee5e723fa2682572d75dfc1e42beb2b45fb2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_ee7a8d11a8aa1bf1af2d3eff20aacf1e1ea38de09ccdb8305b7b90a56238bc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7a8d11a8aa1bf1af2d3eff20aacf1e1ea38de09ccdb8305b7b90a56238bc02->enter($__internal_ee7a8d11a8aa1bf1af2d3eff20aacf1e1ea38de09ccdb8305b7b90a56238bc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 53
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 56
            echo "                                        ";
            if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                // line 57
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 60
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 61
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 62
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 63
                echo "                                            ";
                // line 64
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 65
                echo "                                            ";
                // line 66
                echo "                                        ";
            } else {
                // line 67
                echo "                                            ";
                $context["sortable"] = false;
                // line 68
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 69
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 70
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 71
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute(($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 72
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 73
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 74
                    echo "                                            ";
                }
                // line 75
                echo "
                                            ";
                // line 76
                ob_start();
                // line 77
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 78
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => ($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 79
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field_description"], "label", array()), array(), $this->getAttribute($context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 80
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 81
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 83
                echo "                                        ";
            }
            // line 84
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_ee7a8d11a8aa1bf1af2d3eff20aacf1e1ea38de09ccdb8305b7b90a56238bc02->leave($__internal_ee7a8d11a8aa1bf1af2d3eff20aacf1e1ea38de09ccdb8305b7b90a56238bc02_prof);

        
        $__internal_4bb7257e8b6d60fd946f222a9bee5e723fa2682572d75dfc1e42beb2b45fb2ef->leave($__internal_4bb7257e8b6d60fd946f222a9bee5e723fa2682572d75dfc1e42beb2b45fb2ef_prof);

    }

    // line 89
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_6028900e747642c646d902c00f9514406a48948f402fef911fd2476178746bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6028900e747642c646d902c00f9514406a48948f402fef911fd2476178746bfd->enter($__internal_6028900e747642c646d902c00f9514406a48948f402fef911fd2476178746bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_78d7accbd60c1d5d7b2e9190ca0c89161c8ce3d1c1391f41e625bf94a3ab65db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d7accbd60c1d5d7b2e9190ca0c89161c8ce3d1c1391f41e625bf94a3ab65db->enter($__internal_78d7accbd60c1d5d7b2e9190ca0c89161c8ce3d1c1391f41e625bf94a3ab65db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 90
        echo "                            <tbody>
                                ";
        // line 91
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 91)->display($context);
        // line 92
        echo "                            </tbody>
                        ";
        
        $__internal_78d7accbd60c1d5d7b2e9190ca0c89161c8ce3d1c1391f41e625bf94a3ab65db->leave($__internal_78d7accbd60c1d5d7b2e9190ca0c89161c8ce3d1c1391f41e625bf94a3ab65db_prof);

        
        $__internal_6028900e747642c646d902c00f9514406a48948f402fef911fd2476178746bfd->leave($__internal_6028900e747642c646d902c00f9514406a48948f402fef911fd2476178746bfd_prof);

    }

    // line 95
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_27370f10a75db9948bc857447756d8a1cf8c8244623e37bd595d858873b43e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27370f10a75db9948bc857447756d8a1cf8c8244623e37bd595d858873b43e63->enter($__internal_27370f10a75db9948bc857447756d8a1cf8c8244623e37bd595d858873b43e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_933fcbc1de4828eba2594abacd6f31b4d8ffdb98de11f833de06621129f706e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933fcbc1de4828eba2594abacd6f31b4d8ffdb98de11f833de06621129f706e1->enter($__internal_933fcbc1de4828eba2594abacd6f31b4d8ffdb98de11f833de06621129f706e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 96
        echo "                        ";
        
        $__internal_933fcbc1de4828eba2594abacd6f31b4d8ffdb98de11f833de06621129f706e1->leave($__internal_933fcbc1de4828eba2594abacd6f31b4d8ffdb98de11f833de06621129f706e1_prof);

        
        $__internal_27370f10a75db9948bc857447756d8a1cf8c8244623e37bd595d858873b43e63->leave($__internal_27370f10a75db9948bc857447756d8a1cf8c8244623e37bd595d858873b43e63_prof);

    }

    // line 99
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_670f6c47d4288da80e9950d4b92049ce701ccac1ea0031b63c030f80273ac6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670f6c47d4288da80e9950d4b92049ce701ccac1ea0031b63c030f80273ac6ad->enter($__internal_670f6c47d4288da80e9950d4b92049ce701ccac1ea0031b63c030f80273ac6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_ce65b91160c40c6feae1df576281575bb35bf231af2f48d5fa66d3743aef53ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce65b91160c40c6feae1df576281575bb35bf231af2f48d5fa66d3743aef53ba->enter($__internal_ce65b91160c40c6feae1df576281575bb35bf231af2f48d5fa66d3743aef53ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 100
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 108
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
            // line 109
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 110
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 110)->display($context);
            // line 111
            echo "                                    </ul>
                                    ";
        }
        // line 113
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_ce65b91160c40c6feae1df576281575bb35bf231af2f48d5fa66d3743aef53ba->leave($__internal_ce65b91160c40c6feae1df576281575bb35bf231af2f48d5fa66d3743aef53ba_prof);

        
        $__internal_670f6c47d4288da80e9950d4b92049ce701ccac1ea0031b63c030f80273ac6ad->leave($__internal_670f6c47d4288da80e9950d4b92049ce701ccac1ea0031b63c030f80273ac6ad_prof);

    }

    // line 121
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_7cba36daeaf2e0304a25cf74fbfb97dfc00b5de7b1e3fe34d7a71f5cf562a27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cba36daeaf2e0304a25cf74fbfb97dfc00b5de7b1e3fe34d7a71f5cf562a27d->enter($__internal_7cba36daeaf2e0304a25cf74fbfb97dfc00b5de7b1e3fe34d7a71f5cf562a27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_f1266c80b2e19d6455f74abb2c2614bd647f17642deea7baabed4f4c9162ceb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1266c80b2e19d6455f74abb2c2614bd647f17642deea7baabed4f4c9162ceb9->enter($__internal_f1266c80b2e19d6455f74abb2c2614bd647f17642deea7baabed4f4c9162ceb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 122
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 123
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 125
            if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 126
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 127
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                    // line 128
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 175
                    echo "                                    ";
                }
                // line 176
                echo "                                </div>


                                ";
                // line 180
                echo "                                ";
                $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter(($context["export_formats"] ?? $this->getContext($context, "export_formats")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "exportFormats", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "exportFormats", array())));
                // line 181
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 183
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, ($context["export_formats"] ?? $this->getContext($context, "export_formats"))))) {
                    // line 184
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["export_formats"] ?? $this->getContext($context, "export_formats")));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 192
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 193
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 195
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 204
                echo "
                                    ";
                // line 205
                $this->displayBlock('pager_results', $context, $blocks);
                // line 208
                echo "                                </div>
                            ";
            }
            // line 210
            echo "                        </div>

                        ";
            // line 212
            $this->displayBlock('pager_links', $context, $blocks);
            // line 218
            echo "                    </div>
                ";
        }
        // line 220
        echo "            ";
        
        $__internal_f1266c80b2e19d6455f74abb2c2614bd647f17642deea7baabed4f4c9162ceb9->leave($__internal_f1266c80b2e19d6455f74abb2c2614bd647f17642deea7baabed4f4c9162ceb9_prof);

        
        $__internal_7cba36daeaf2e0304a25cf74fbfb97dfc00b5de7b1e3fe34d7a71f5cf562a27d->leave($__internal_7cba36daeaf2e0304a25cf74fbfb97dfc00b5de7b1e3fe34d7a71f5cf562a27d_prof);

    }

    // line 128
    public function block_batch($context, array $blocks = array())
    {
        $__internal_c94bf9c503d8240d373366a22d5a58fea2f497024391a80124809d19d35e3adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c94bf9c503d8240d373366a22d5a58fea2f497024391a80124809d19d35e3adf->enter($__internal_c94bf9c503d8240d373366a22d5a58fea2f497024391a80124809d19d35e3adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_bf441984577dcfaf059c9a51bb6a9fb0c61fa756a22c47400e859669cfa5fe6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf441984577dcfaf059c9a51bb6a9fb0c61fa756a22c47400e859669cfa5fe6b->enter($__internal_bf441984577dcfaf059c9a51bb6a9fb0c61fa756a22c47400e859669cfa5fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 129
        echo "                                            <script>
                                                ";
        // line 130
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 157
        echo "                                            </script>

                                        ";
        // line 159
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 172
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_bf441984577dcfaf059c9a51bb6a9fb0c61fa756a22c47400e859669cfa5fe6b->leave($__internal_bf441984577dcfaf059c9a51bb6a9fb0c61fa756a22c47400e859669cfa5fe6b_prof);

        
        $__internal_c94bf9c503d8240d373366a22d5a58fea2f497024391a80124809d19d35e3adf->leave($__internal_c94bf9c503d8240d373366a22d5a58fea2f497024391a80124809d19d35e3adf_prof);

    }

    // line 130
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_61a30a80706b4b5de7e6cba8473046d491c859c8b496920358494bf7a0fa38a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a30a80706b4b5de7e6cba8473046d491c859c8b496920358494bf7a0fa38a5->enter($__internal_61a30a80706b4b5de7e6cba8473046d491c859c8b496920358494bf7a0fa38a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_2d8843093b107f050c3c9f110e258083d7da45f6ea8e562a8edfaa2aac51d808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8843093b107f050c3c9f110e258083d7da45f6ea8e562a8edfaa2aac51d808->enter($__internal_2d8843093b107f050c3c9f110e258083d7da45f6ea8e562a8edfaa2aac51d808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 131
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_2d8843093b107f050c3c9f110e258083d7da45f6ea8e562a8edfaa2aac51d808->leave($__internal_2d8843093b107f050c3c9f110e258083d7da45f6ea8e562a8edfaa2aac51d808_prof);

        
        $__internal_61a30a80706b4b5de7e6cba8473046d491c859c8b496920358494bf7a0fa38a5->leave($__internal_61a30a80706b4b5de7e6cba8473046d491c859c8b496920358494bf7a0fa38a5_prof);

    }

    // line 159
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_4004af48a99e77f8675ed837bead7d970d90f8ea2f24277534023109da154974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4004af48a99e77f8675ed837bead7d970d90f8ea2f24277534023109da154974->enter($__internal_4004af48a99e77f8675ed837bead7d970d90f8ea2f24277534023109da154974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_dbd946888d64b437c9f323db609560c6db4063f4d94c7fffc5d23c0de183b2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd946888d64b437c9f323db609560c6db4063f4d94c7fffc5d23c0de183b2d1->enter($__internal_dbd946888d64b437c9f323db609560c6db4063f4d94c7fffc5d23c0de183b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 160
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchactions"] ?? $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 168
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                            </select>
                                        ";
        
        $__internal_dbd946888d64b437c9f323db609560c6db4063f4d94c7fffc5d23c0de183b2d1->leave($__internal_dbd946888d64b437c9f323db609560c6db4063f4d94c7fffc5d23c0de183b2d1_prof);

        
        $__internal_4004af48a99e77f8675ed837bead7d970d90f8ea2f24277534023109da154974->leave($__internal_4004af48a99e77f8675ed837bead7d970d90f8ea2f24277534023109da154974_prof);

    }

    // line 205
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_a2c6fe91f4d2b10d9b88e7f2cf72a92a6c3b9483db1cec607c4dc0930e5ed25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c6fe91f4d2b10d9b88e7f2cf72a92a6c3b9483db1cec607c4dc0930e5ed25f->enter($__internal_a2c6fe91f4d2b10d9b88e7f2cf72a92a6c3b9483db1cec607c4dc0930e5ed25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_4bea25b66f08fb4669c498797966550e83b59c2acdc027831d07ee868affa254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bea25b66f08fb4669c498797966550e83b59c2acdc027831d07ee868affa254->enter($__internal_4bea25b66f08fb4669c498797966550e83b59c2acdc027831d07ee868affa254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 206
        echo "                                        ";
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 206)->display($context);
        // line 207
        echo "                                    ";
        
        $__internal_4bea25b66f08fb4669c498797966550e83b59c2acdc027831d07ee868affa254->leave($__internal_4bea25b66f08fb4669c498797966550e83b59c2acdc027831d07ee868affa254_prof);

        
        $__internal_a2c6fe91f4d2b10d9b88e7f2cf72a92a6c3b9483db1cec607c4dc0930e5ed25f->leave($__internal_a2c6fe91f4d2b10d9b88e7f2cf72a92a6c3b9483db1cec607c4dc0930e5ed25f_prof);

    }

    // line 212
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_67474a3f929adb298343f98d16d3b492bcec5af02beb22d94e965f04615efa00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67474a3f929adb298343f98d16d3b492bcec5af02beb22d94e965f04615efa00->enter($__internal_67474a3f929adb298343f98d16d3b492bcec5af02beb22d94e965f04615efa00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_7548a3d5da9fbe1565a1ee94aaff429b79716945176c1c9ce1cf48e8cd8993a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7548a3d5da9fbe1565a1ee94aaff429b79716945176c1c9ce1cf48e8cd8993a1->enter($__internal_7548a3d5da9fbe1565a1ee94aaff429b79716945176c1c9ce1cf48e8cd8993a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 213
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 214
            echo "                                <hr/>
                                ";
            // line 215
            $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 215)->display($context);
            // line 216
            echo "                            ";
        }
        // line 217
        echo "                        ";
        
        $__internal_7548a3d5da9fbe1565a1ee94aaff429b79716945176c1c9ce1cf48e8cd8993a1->leave($__internal_7548a3d5da9fbe1565a1ee94aaff429b79716945176c1c9ce1cf48e8cd8993a1_prof);

        
        $__internal_67474a3f929adb298343f98d16d3b492bcec5af02beb22d94e965f04615efa00->leave($__internal_67474a3f929adb298343f98d16d3b492bcec5af02beb22d94e965f04615efa00_prof);

    }

    // line 228
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_95fa4b8de93c1d2388ff6f0f43bcf3cd53b3d3eca49246b82ccd3968550f929c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fa4b8de93c1d2388ff6f0f43bcf3cd53b3d3eca49246b82ccd3968550f929c->enter($__internal_95fa4b8de93c1d2388ff6f0f43bcf3cd53b3d3eca49246b82ccd3968550f929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_6b3635b001d9f2202559a7e5ee398daf3a44263fdb7bd0e1300f7cb275698611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3635b001d9f2202559a7e5ee398daf3a44263fdb7bd0e1300f7cb275698611->enter($__internal_6b3635b001d9f2202559a7e5ee398daf3a44263fdb7bd0e1300f7cb275698611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 229
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 230
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 240
                    echo "                        ";
                    $context["filterActive"] = (($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                    // line 241
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 242
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 243
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_6b3635b001d9f2202559a7e5ee398daf3a44263fdb7bd0e1300f7cb275698611->leave($__internal_6b3635b001d9f2202559a7e5ee398daf3a44263fdb7bd0e1300f7cb275698611_prof);

        
        $__internal_95fa4b8de93c1d2388ff6f0f43bcf3cd53b3d3eca49246b82ccd3968550f929c->leave($__internal_95fa4b8de93c1d2388ff6f0f43bcf3cd53b3d3eca49246b82ccd3968550f929c_prof);

    }

    // line 253
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_ff1b8984f0b85e6cc47a1f3c56bc28e9e7000963fc39869ae50e1eeaafeff975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1b8984f0b85e6cc47a1f3c56bc28e9e7000963fc39869ae50e1eeaafeff975->enter($__internal_ff1b8984f0b85e6cc47a1f3c56bc28e9e7000963fc39869ae50e1eeaafeff975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_4f0958949817e682f80c51a8686589791667dae9584e3d5408a94e2015fe769e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0958949817e682f80c51a8686589791667dae9584e3d5408a94e2015fe769e->enter($__internal_4f0958949817e682f80c51a8686589791667dae9584e3d5408a94e2015fe769e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 254
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 255
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 256
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 257
            echo (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 260
            echo ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 261
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 265
            $context["withAdvancedFilter"] = false;
            // line 266
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 267
                echo "                                    ";
                $context["filterActive"] = ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                // line 268
                echo "                                    ";
                $context["filterVisible"] = (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 269
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo ((($context["filterVisible"] ?? $this->getContext($context, "filterVisible"))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($context["filterActive"] ?? $this->getContext($context, "filterActive"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 270
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 271
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 273
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 274
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 276
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 280
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 292
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 293
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 294
                    echo "                                    ";
                }
                // line 295
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 300
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 301
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 313
            if (($context["withAdvancedFilter"] ?? $this->getContext($context, "withAdvancedFilter"))) {
                // line 314
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 317
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 321
            echo "                            </div>
                        </div>

                        ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 325
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_4f0958949817e682f80c51a8686589791667dae9584e3d5408a94e2015fe769e->leave($__internal_4f0958949817e682f80c51a8686589791667dae9584e3d5408a94e2015fe769e_prof);

        
        $__internal_ff1b8984f0b85e6cc47a1f3c56bc28e9e7000963fc39869ae50e1eeaafeff975->leave($__internal_ff1b8984f0b85e6cc47a1f3c56bc28e9e7000963fc39869ae50e1eeaafeff975_prof);

    }

    // line 269
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_4cb0c990a10c4d3f6e3ca38ad80e6a7d3903149424f2622bcd82294826579880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb0c990a10c4d3f6e3ca38ad80e6a7d3903149424f2622bcd82294826579880->enter($__internal_4cb0c990a10c4d3f6e3ca38ad80e6a7d3903149424f2622bcd82294826579880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_cd83d4d28742204f087a4d866de25e03e6da4b4f098ffdf57a03a5dc62f4e10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd83d4d28742204f087a4d866de25e03e6da4b4f098ffdf57a03a5dc62f4e10f->enter($__internal_cd83d4d28742204f087a4d866de25e03e6da4b4f098ffdf57a03a5dc62f4e10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_cd83d4d28742204f087a4d866de25e03e6da4b4f098ffdf57a03a5dc62f4e10f->leave($__internal_cd83d4d28742204f087a4d866de25e03e6da4b4f098ffdf57a03a5dc62f4e10f_prof);

        
        $__internal_4cb0c990a10c4d3f6e3ca38ad80e6a7d3903149424f2622bcd82294826579880->leave($__internal_4cb0c990a10c4d3f6e3ca38ad80e6a7d3903149424f2622bcd82294826579880_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1098 => 269,  1083 => 327,  1072 => 325,  1068 => 324,  1063 => 321,  1056 => 317,  1051 => 314,  1049 => 313,  1042 => 309,  1038 => 308,  1032 => 305,  1024 => 301,  1022 => 300,  1016 => 296,  1002 => 295,  999 => 294,  996 => 293,  994 => 292,  980 => 285,  972 => 280,  965 => 276,  961 => 274,  958 => 273,  950 => 271,  948 => 270,  931 => 269,  928 => 268,  925 => 267,  907 => 266,  905 => 265,  898 => 261,  892 => 260,  884 => 257,  881 => 256,  878 => 255,  875 => 254,  866 => 253,  852 => 247,  839 => 243,  831 => 242,  828 => 241,  825 => 240,  820 => 239,  813 => 235,  806 => 230,  804 => 229,  795 => 228,  785 => 217,  782 => 216,  780 => 215,  777 => 214,  774 => 213,  765 => 212,  755 => 207,  752 => 206,  743 => 205,  732 => 170,  721 => 168,  717 => 167,  710 => 163,  706 => 162,  702 => 161,  697 => 160,  688 => 159,  653 => 131,  644 => 130,  632 => 173,  629 => 172,  627 => 159,  623 => 157,  621 => 130,  618 => 129,  609 => 128,  599 => 220,  595 => 218,  593 => 212,  589 => 210,  585 => 208,  583 => 205,  580 => 204,  573 => 199,  563 => 195,  558 => 193,  555 => 192,  551 => 191,  544 => 187,  539 => 184,  537 => 183,  533 => 181,  530 => 180,  525 => 176,  522 => 175,  519 => 128,  517 => 127,  514 => 126,  512 => 125,  508 => 123,  505 => 122,  496 => 121,  483 => 113,  479 => 111,  477 => 110,  474 => 109,  472 => 108,  464 => 103,  459 => 100,  450 => 99,  440 => 96,  431 => 95,  420 => 92,  418 => 91,  415 => 90,  406 => 89,  394 => 85,  388 => 84,  385 => 83,  381 => 81,  377 => 80,  372 => 79,  366 => 78,  344 => 77,  342 => 76,  339 => 75,  336 => 74,  333 => 73,  330 => 72,  327 => 71,  324 => 70,  321 => 69,  318 => 68,  315 => 67,  312 => 66,  310 => 65,  307 => 64,  305 => 63,  303 => 62,  300 => 61,  298 => 60,  293 => 57,  290 => 56,  286 => 55,  282 => 53,  273 => 52,  256 => 48,  245 => 225,  241 => 223,  239 => 222,  236 => 221,  234 => 121,  229 => 119,  226 => 118,  223 => 117,  220 => 99,  216 => 97,  214 => 95,  211 => 94,  209 => 89,  206 => 88,  204 => 52,  201 => 51,  199 => 50,  196 => 49,  194 => 48,  189 => 46,  183 => 45,  176 => 44,  173 => 42,  168 => 40,  163 => 39,  160 => 38,  158 => 37,  155 => 36,  146 => 35,  133 => 32,  124 => 31,  110 => 27,  108 => 26,  105 => 25,  103 => 21,  94 => 20,  76 => 18,  66 => 15,  57 => 14,  36 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block title %}
    {#
        The list template can be used in nested mode,
        so we define the title corresponding to the parent's admin.
    #}

    {% if admin.isChild and admin.parent.subject %}
        {{ \"title_edit\"|trans({'%name%': admin.parent.toString(admin.parent.subject)|truncate(15) }, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\" {% if admin.datagrid.pager.lastPage == 1 %}style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if admin.datagrid.results|length > 0 %}
                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.elements %}
                                        {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.getOption('code') == '_select' %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.options.sortable is defined and field_description.options.sortable %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}
                                                {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}
                                            {% endif %}

                                            {% spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}\"{% if field_description.options.header_style is defined %} style=\"{{ field_description.options.header_style }}\"{% endif %}>
                                                    {% if sortable %}<a href=\"{{ admin.generateUrl('list', sort_parameters) }}\">{% endif %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endspaceless %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    {% if not app.request.xmlHttpRequest %}
                                    <ul class=\"list-unstyled\">
                                        {% include 'SonataAdminBundle:Button:create_button.html.twig' %}
                                    </ul>
                                    {% endif %}
                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if admin.datagrid.results|length > 0 %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0  %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.nbresults }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>


                                {# NEXT_MAJOR : remove this assignment #}
                                {% set export_formats = export_formats|default(admin.exportFormats) %}

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                <li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include admin.getTemplate('pager_results') %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include admin.getTemplate('pager_links') %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {%- if admin.datagrid.filters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}
                        {% set filterActive = ((filter.isActive() or filter.options['show_filter']) and not admin.isDefaultFilter(filter.formName)) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}\"></i>{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form admin.getTemplate('filter') %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\" action=\"{{ admin.generateUrl('list') }}\" method=\"GET\" role=\"form\">
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterActive = ((filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true))) and not admin.isDefaultFilter(filter.formName) %}
                                    {% set filterVisible = filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterVisible ? 'true' : 'false' }}\" style=\"display: {% if filterActive %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form.children[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}</label>
                                        {% endif %}
                                        {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form.children[filter.formName].children['value']) }}
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    {% if filter.options['advanced_filter'] %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form.children['_page'].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl('list', {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_list.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_list.html.twig");
    }
}
