<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_bfc591f9e481bbcdfe5329cd47ce34aa8513395933cb74c523d98d9dab0a9a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04b5bf6b23c069011a275c7cc0f3b490244bf468ad4427e4f3a8d25a6afb8b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b5bf6b23c069011a275c7cc0f3b490244bf468ad4427e4f3a8d25a6afb8b73->enter($__internal_04b5bf6b23c069011a275c7cc0f3b490244bf468ad4427e4f3a8d25a6afb8b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        $__internal_14370a6df54774469384db4154c0638341b9ac62cf2f19ff7975b4c72f9448a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14370a6df54774469384db4154c0638341b9ac62cf2f19ff7975b4c72f9448a4->enter($__internal_14370a6df54774469384db4154c0638341b9ac62cf2f19ff7975b4c72f9448a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_04b5bf6b23c069011a275c7cc0f3b490244bf468ad4427e4f3a8d25a6afb8b73->leave($__internal_04b5bf6b23c069011a275c7cc0f3b490244bf468ad4427e4f3a8d25a6afb8b73_prof);

        
        $__internal_14370a6df54774469384db4154c0638341b9ac62cf2f19ff7975b4c72f9448a4->leave($__internal_14370a6df54774469384db4154c0638341b9ac62cf2f19ff7975b4c72f9448a4_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_947ec406d8e60211ff77591c1f87899c0533eaae59cf75b9f2ad0cb622f3b2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_947ec406d8e60211ff77591c1f87899c0533eaae59cf75b9f2ad0cb622f3b2db->enter($__internal_947ec406d8e60211ff77591c1f87899c0533eaae59cf75b9f2ad0cb622f3b2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_b4b2d37b11bc9db888c3d984a26bf3f7a3751a146be57ea1d4ba488b9703965f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b2d37b11bc9db888c3d984a26bf3f7a3751a146be57ea1d4ba488b9703965f->enter($__internal_b4b2d37b11bc9db888c3d984a26bf3f7a3751a146be57ea1d4ba488b9703965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

    ";
        // line 5
        $context["url"] = (( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) ? ("edit") : ("create"));
        // line 6
        echo "
    ";
        // line 7
        if ( !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => ($context["url"] ?? $this->getContext($context, "url"))), "method")) {
            // line 8
            echo "        <div>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 12
            echo "        <form
              ";
            // line 13
            if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 14
            echo "              role=\"form\"
              action=\"";
            // line 15
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 16
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 17
            echo "              method=\"POST\"
              ";
            // line 18
            if ( !$this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 19
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 20
            echo "              >

            ";
            // line 22
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 24
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 27
            echo "
            ";
            // line 28
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 60
            echo "
            ";
            // line 61
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 64
            echo "
            ";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 67
            $this->displayBlock('formactions', $context, $blocks);
            // line 111
            echo "        </form>
    ";
        }
        // line 113
        echo "
    ";
        // line 114
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_b4b2d37b11bc9db888c3d984a26bf3f7a3751a146be57ea1d4ba488b9703965f->leave($__internal_b4b2d37b11bc9db888c3d984a26bf3f7a3751a146be57ea1d4ba488b9703965f_prof);

        
        $__internal_947ec406d8e60211ff77591c1f87899c0533eaae59cf75b9f2ad0cb622f3b2db->leave($__internal_947ec406d8e60211ff77591c1f87899c0533eaae59cf75b9f2ad0cb622f3b2db_prof);

    }

    // line 15
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_5881f2d174591527d4403f6c6c990ab4b293b969e271d02dd3b954c84a389a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5881f2d174591527d4403f6c6c990ab4b293b969e271d02dd3b954c84a389a5a->enter($__internal_5881f2d174591527d4403f6c6c990ab4b293b969e271d02dd3b954c84a389a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_e335bf725ceb66e1a7a8dfbcacea986082d166c9a932b0fd6e6e2da2a244e9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e335bf725ceb66e1a7a8dfbcacea986082d166c9a932b0fd6e6e2da2a244e9ae->enter($__internal_e335bf725ceb66e1a7a8dfbcacea986082d166c9a932b0fd6e6e2da2a244e9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => ($context["url"] ?? $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_e335bf725ceb66e1a7a8dfbcacea986082d166c9a932b0fd6e6e2da2a244e9ae->leave($__internal_e335bf725ceb66e1a7a8dfbcacea986082d166c9a932b0fd6e6e2da2a244e9ae_prof);

        
        $__internal_5881f2d174591527d4403f6c6c990ab4b293b969e271d02dd3b954c84a389a5a->leave($__internal_5881f2d174591527d4403f6c6c990ab4b293b969e271d02dd3b954c84a389a5a_prof);

    }

    // line 19
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_c70717d2bdfca0722587e16a6fee56f00b72dac09e08ec3a97ad21e4a4ea83fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70717d2bdfca0722587e16a6fee56f00b72dac09e08ec3a97ad21e4a4ea83fa->enter($__internal_c70717d2bdfca0722587e16a6fee56f00b72dac09e08ec3a97ad21e4a4ea83fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_36a819d76029c21a09c01a4d1c09e95ab0ca5c9b80ebcd4a8bf1a207a4c4cc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a819d76029c21a09c01a4d1c09e95ab0ca5c9b80ebcd4a8bf1a207a4c4cc6a->enter($__internal_36a819d76029c21a09c01a4d1c09e95ab0ca5c9b80ebcd4a8bf1a207a4c4cc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_36a819d76029c21a09c01a4d1c09e95ab0ca5c9b80ebcd4a8bf1a207a4c4cc6a->leave($__internal_36a819d76029c21a09c01a4d1c09e95ab0ca5c9b80ebcd4a8bf1a207a4c4cc6a_prof);

        
        $__internal_c70717d2bdfca0722587e16a6fee56f00b72dac09e08ec3a97ad21e4a4ea83fa->leave($__internal_c70717d2bdfca0722587e16a6fee56f00b72dac09e08ec3a97ad21e4a4ea83fa_prof);

    }

    // line 24
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_020216df2a56fd312d7ebff8a495ed77039e953225ab526da32ad3bcc2ca72f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020216df2a56fd312d7ebff8a495ed77039e953225ab526da32ad3bcc2ca72f2->enter($__internal_020216df2a56fd312d7ebff8a495ed77039e953225ab526da32ad3bcc2ca72f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_c6d54cd02b0ead793135563f8358007e8f605fa915f52794f0efcb9f1bb72c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d54cd02b0ead793135563f8358007e8f605fa915f52794f0efcb9f1bb72c49->enter($__internal_c6d54cd02b0ead793135563f8358007e8f605fa915f52794f0efcb9f1bb72c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 25
        echo "                <div class=\"row\">
            ";
        
        $__internal_c6d54cd02b0ead793135563f8358007e8f605fa915f52794f0efcb9f1bb72c49->leave($__internal_c6d54cd02b0ead793135563f8358007e8f605fa915f52794f0efcb9f1bb72c49_prof);

        
        $__internal_020216df2a56fd312d7ebff8a495ed77039e953225ab526da32ad3bcc2ca72f2->leave($__internal_020216df2a56fd312d7ebff8a495ed77039e953225ab526da32ad3bcc2ca72f2_prof);

    }

    // line 28
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_0db1b91495b31b8d9cccb7384d31a842c0d5d98ffe055dce34af69d2322edccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db1b91495b31b8d9cccb7384d31a842c0d5d98ffe055dce34af69d2322edccb->enter($__internal_0db1b91495b31b8d9cccb7384d31a842c0d5d98ffe055dce34af69d2322edccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_1efe666e508e287ac3e35496fc8f50b4447c232ab29f080a91fc8def72e87115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efe666e508e287ac3e35496fc8f50b4447c232ab29f080a91fc8def72e87115->enter($__internal_1efe666e508e287ac3e35496fc8f50b4447c232ab29f080a91fc8def72e87115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 29
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 30
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 32
        if (($context["has_tab"] ?? $this->getContext($context, "has_tab"))) {
            // line 33
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 36
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["form_tab"], "label", array()), array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "</a></li>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 41
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 44
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 45
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 47
                echo "
                                                ";
                // line 48
                echo $context["form_helper"]->getrender_groups(($context["admin"] ?? $this->getContext($context, "admin")), ($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($context["form_tab"], "groups", array(), "array"), ($context["has_tab"] ?? $this->getContext($context, "has_tab")));
                echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 56
            echo "                        ";
            echo $context["form_helper"]->getrender_groups(($context["admin"] ?? $this->getContext($context, "admin")), ($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), ($context["has_tab"] ?? $this->getContext($context, "has_tab")));
            echo "
                    ";
        }
        // line 58
        echo "                </div>
            ";
        
        $__internal_1efe666e508e287ac3e35496fc8f50b4447c232ab29f080a91fc8def72e87115->leave($__internal_1efe666e508e287ac3e35496fc8f50b4447c232ab29f080a91fc8def72e87115_prof);

        
        $__internal_0db1b91495b31b8d9cccb7384d31a842c0d5d98ffe055dce34af69d2322edccb->leave($__internal_0db1b91495b31b8d9cccb7384d31a842c0d5d98ffe055dce34af69d2322edccb_prof);

    }

    // line 61
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_cce4bef8d98ba0e63fc5884bee70de401c2bfe874a48f056f34922eeb5eb6b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce4bef8d98ba0e63fc5884bee70de401c2bfe874a48f056f34922eeb5eb6b9d->enter($__internal_cce4bef8d98ba0e63fc5884bee70de401c2bfe874a48f056f34922eeb5eb6b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_f2c4d5f74396ebc4d7dbcad1695b85fe4257b0dc373171afe7c0340b1a006dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c4d5f74396ebc4d7dbcad1695b85fe4257b0dc373171afe7c0340b1a006dca->enter($__internal_f2c4d5f74396ebc4d7dbcad1695b85fe4257b0dc373171afe7c0340b1a006dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 62
        echo "                </div>
            ";
        
        $__internal_f2c4d5f74396ebc4d7dbcad1695b85fe4257b0dc373171afe7c0340b1a006dca->leave($__internal_f2c4d5f74396ebc4d7dbcad1695b85fe4257b0dc373171afe7c0340b1a006dca_prof);

        
        $__internal_cce4bef8d98ba0e63fc5884bee70de401c2bfe874a48f056f34922eeb5eb6b9d->leave($__internal_cce4bef8d98ba0e63fc5884bee70de401c2bfe874a48f056f34922eeb5eb6b9d_prof);

    }

    // line 67
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_28be23958c8173307854235f368b40e3871fd4b3942e2acc639fd5be6cc9cd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28be23958c8173307854235f368b40e3871fd4b3942e2acc639fd5be6cc9cd2c->enter($__internal_28be23958c8173307854235f368b40e3871fd4b3942e2acc639fd5be6cc9cd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_52384937b0677696fa541a1955edbe61a8c8c3156d38112367a8b831d1af3d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52384937b0677696fa541a1955edbe61a8c8c3156d38112367a8b831d1af3d1a->enter($__internal_52384937b0677696fa541a1955edbe61a8c8c3156d38112367a8b831d1af3d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 68
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 69
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 109
        echo "                </div>
            ";
        
        $__internal_52384937b0677696fa541a1955edbe61a8c8c3156d38112367a8b831d1af3d1a->leave($__internal_52384937b0677696fa541a1955edbe61a8c8c3156d38112367a8b831d1af3d1a_prof);

        
        $__internal_28be23958c8173307854235f368b40e3871fd4b3942e2acc639fd5be6cc9cd2c->leave($__internal_28be23958c8173307854235f368b40e3871fd4b3942e2acc639fd5be6cc9cd2c_prof);

    }

    // line 69
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_4e7b02078142d0bf09d07022660fd3865a878c00c7ef940bf57df2d8599c6e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7b02078142d0bf09d07022660fd3865a878c00c7ef940bf57df2d8599c6e2b->enter($__internal_4e7b02078142d0bf09d07022660fd3865a878c00c7ef940bf57df2d8599c6e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_802658beb2a23836cbda18145426497020141f5c167c957817fd2a8cabba8adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802658beb2a23836cbda18145426497020141f5c167c957817fd2a8cabba8adf->enter($__internal_802658beb2a23836cbda18145426497020141f5c167c957817fd2a8cabba8adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 70
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 71
            echo "                        ";
            if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                // line 72
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 74
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 76
            echo "                    ";
        } else {
            // line 77
            echo "                        ";
            if ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 78
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 83
            echo "                        ";
            if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                // line 84
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 86
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 87
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 89
                echo "
                            ";
                // line 90
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 91
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 94
                echo "
                            ";
                // line 95
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 96
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 98
                echo "                        ";
            } else {
                // line 99
                echo "                            ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit"), "method"))) {
                    // line 100
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 102
                echo "                            ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 103
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 105
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 107
            echo "                    ";
        }
        // line 108
        echo "                ";
        
        $__internal_802658beb2a23836cbda18145426497020141f5c167c957817fd2a8cabba8adf->leave($__internal_802658beb2a23836cbda18145426497020141f5c167c957817fd2a8cabba8adf_prof);

        
        $__internal_4e7b02078142d0bf09d07022660fd3865a878c00c7ef940bf57df2d8599c6e2b->leave($__internal_4e7b02078142d0bf09d07022660fd3865a878c00c7ef940bf57df2d8599c6e2b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  525 => 108,  522 => 107,  516 => 105,  510 => 103,  507 => 102,  501 => 100,  498 => 99,  495 => 98,  487 => 96,  485 => 95,  482 => 94,  475 => 92,  470 => 91,  468 => 90,  465 => 89,  459 => 87,  457 => 86,  451 => 84,  448 => 83,  442 => 80,  438 => 78,  435 => 77,  432 => 76,  426 => 74,  420 => 72,  417 => 71,  414 => 70,  405 => 69,  394 => 109,  392 => 69,  389 => 68,  380 => 67,  369 => 62,  360 => 61,  349 => 58,  343 => 56,  338 => 53,  319 => 48,  316 => 47,  310 => 45,  308 => 44,  295 => 41,  278 => 40,  274 => 38,  249 => 36,  232 => 35,  228 => 33,  226 => 32,  222 => 30,  219 => 29,  210 => 28,  199 => 25,  190 => 24,  173 => 19,  155 => 15,  142 => 114,  139 => 113,  135 => 111,  133 => 67,  128 => 65,  125 => 64,  123 => 61,  120 => 60,  118 => 28,  115 => 27,  113 => 24,  108 => 22,  104 => 20,  101 => 19,  97 => 18,  94 => 17,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  76 => 12,  70 => 9,  67 => 8,  65 => 7,  62 => 6,  60 => 5,  54 => 3,  51 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {% set url = admin.id(object) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url)%}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in admin.formtabs %}
                                    <li{% if loop.index == 1 %} class=\"active\"{% endif %}><a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ form_tab.label|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}</a></li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in admin.formtabs %}
                                    <div class=\"tab-pane fade{% if loop.first %} in active{% endif %}\" id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>{{ form_tab.description|raw }}</p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% else %}
                        {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {% if admin.id(object) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.hasAccess('acl', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.hasAccess('edit') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif%}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
