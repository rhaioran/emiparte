<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_e113414aba43cfc28d0ca2f7e6ca0422bbc4d6a6df8ebae47af9884e911e48b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_065107452232b3dc26edf659ec3abf950360599dc01e56a79222498afd802b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065107452232b3dc26edf659ec3abf950360599dc01e56a79222498afd802b01->enter($__internal_065107452232b3dc26edf659ec3abf950360599dc01e56a79222498afd802b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $__internal_e2185b18ff1943646b305f73f91341be7f6134fffc1f35ee2848458531f6519c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2185b18ff1943646b305f73f91341be7f6134fffc1f35ee2848458531f6519c->enter($__internal_e2185b18ff1943646b305f73f91341be7f6134fffc1f35ee2848458531f6519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_065107452232b3dc26edf659ec3abf950360599dc01e56a79222498afd802b01->leave($__internal_065107452232b3dc26edf659ec3abf950360599dc01e56a79222498afd802b01_prof);

        
        $__internal_e2185b18ff1943646b305f73f91341be7f6134fffc1f35ee2848458531f6519c->leave($__internal_e2185b18ff1943646b305f73f91341be7f6134fffc1f35ee2848458531f6519c_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_03f8399f52422b6a2d72cbfa634e09654552d3385e3524bc68d9c9ca54fa0a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f8399f52422b6a2d72cbfa634e09654552d3385e3524bc68d9c9ca54fa0a64->enter($__internal_03f8399f52422b6a2d72cbfa634e09654552d3385e3524bc68d9c9ca54fa0a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_da9059d7db2564e1023635cf14306b74b5a12062d917b71a4a5cf3a23383893e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9059d7db2564e1023635cf14306b74b5a12062d917b71a4a5cf3a23383893e->enter($__internal_da9059d7db2564e1023635cf14306b74b5a12062d917b71a4a5cf3a23383893e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute(($context["attributes"] ?? null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if (($context["divider_prepend"] ?? $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
($context["item"] ?? $this->getContext($context, "item")), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 48
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 54
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 60
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array()) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if (($context["divider_append"] ?? $this->getContext($context, "divider_append"))) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_da9059d7db2564e1023635cf14306b74b5a12062d917b71a4a5cf3a23383893e->leave($__internal_da9059d7db2564e1023635cf14306b74b5a12062d917b71a4a5cf3a23383893e_prof);

        
        $__internal_03f8399f52422b6a2d72cbfa634e09654552d3385e3524bc68d9c9ca54fa0a64->leave($__internal_03f8399f52422b6a2d72cbfa634e09654552d3385e3524bc68d9c9ca54fa0a64_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_66250013a04b76afd188f4b412547ce319c125d6f3c8d45022c3d8d4547ef7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66250013a04b76afd188f4b412547ce319c125d6f3c8d45022c3d8d4547ef7bf->enter($__internal_66250013a04b76afd188f4b412547ce319c125d6f3c8d45022c3d8d4547ef7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_484134ebf08cb922334a2fc245ea438419ee64aa1d72f4e30d71831699b5da91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484134ebf08cb922334a2fc245ea438419ee64aa1d72f4e30d71831699b5da91->enter($__internal_484134ebf08cb922334a2fc245ea438419ee64aa1d72f4e30d71831699b5da91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_484134ebf08cb922334a2fc245ea438419ee64aa1d72f4e30d71831699b5da91->leave($__internal_484134ebf08cb922334a2fc245ea438419ee64aa1d72f4e30d71831699b5da91_prof);

        
        $__internal_66250013a04b76afd188f4b412547ce319c125d6f3c8d45022c3d8d4547ef7bf->leave($__internal_66250013a04b76afd188f4b412547ce319c125d6f3c8d45022c3d8d4547ef7bf_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_e6878ddc224b79cccf03b11a19191e8abe1f439e11cdbe77f78affae6ccd8c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6878ddc224b79cccf03b11a19191e8abe1f439e11cdbe77f78affae6ccd8c69->enter($__internal_e6878ddc224b79cccf03b11a19191e8abe1f439e11cdbe77f78affae6ccd8c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_0117eef438f27e6fe5501571a9516219dc7fe2bc235f3d1db9fc790ea6f34b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0117eef438f27e6fe5501571a9516219dc7fe2bc235f3d1db9fc790ea6f34b5c->enter($__internal_0117eef438f27e6fe5501571a9516219dc7fe2bc235f3d1db9fc790ea6f34b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 86);
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["macros"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">
        ";
        // line 88
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_0117eef438f27e6fe5501571a9516219dc7fe2bc235f3d1db9fc790ea6f34b5c->leave($__internal_0117eef438f27e6fe5501571a9516219dc7fe2bc235f3d1db9fc790ea6f34b5c_prof);

        
        $__internal_e6878ddc224b79cccf03b11a19191e8abe1f439e11cdbe77f78affae6ccd8c69->leave($__internal_e6878ddc224b79cccf03b11a19191e8abe1f439e11cdbe77f78affae6ccd8c69_prof);

    }

    // line 95
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_c00c789a4df2ae8d3ba6bb3b07efc360462187f4499adaa2e71fbc9f19f583a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00c789a4df2ae8d3ba6bb3b07efc360462187f4499adaa2e71fbc9f19f583a0->enter($__internal_c00c789a4df2ae8d3ba6bb3b07efc360462187f4499adaa2e71fbc9f19f583a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_73eb50ce14095bd4a13100ed16dc6842de39ec6469971d9cc74b2efe6d5384b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73eb50ce14095bd4a13100ed16dc6842de39ec6469971d9cc74b2efe6d5384b3->enter($__internal_73eb50ce14095bd4a13100ed16dc6842de39ec6469971d9cc74b2efe6d5384b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 96
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 96);
        // line 97
        echo "    <span ";
        echo $context["macros"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">
        ";
        // line 98
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_73eb50ce14095bd4a13100ed16dc6842de39ec6469971d9cc74b2efe6d5384b3->leave($__internal_73eb50ce14095bd4a13100ed16dc6842de39ec6469971d9cc74b2efe6d5384b3_prof);

        
        $__internal_c00c789a4df2ae8d3ba6bb3b07efc360462187f4499adaa2e71fbc9f19f583a0->leave($__internal_c00c789a4df2ae8d3ba6bb3b07efc360462187f4499adaa2e71fbc9f19f583a0_prof);

    }

    // line 105
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_9487da15fed9230f604c8444e3af058df124fdc2de996a59b828652398d6ae7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9487da15fed9230f604c8444e3af058df124fdc2de996a59b828652398d6ae7c->enter($__internal_9487da15fed9230f604c8444e3af058df124fdc2de996a59b828652398d6ae7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_1b1dcc7d2708c68e2d9e8c099f3de009b57c2bf32aac99415dbdeff5f17ace23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1dcc7d2708c68e2d9e8c099f3de009b57c2bf32aac99415dbdeff5f17ace23->enter($__internal_1b1dcc7d2708c68e2d9e8c099f3de009b57c2bf32aac99415dbdeff5f17ace23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 106
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 106);
        // line 107
        $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 108
        $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 109
        $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array());
        // line 110
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
        // line 111
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 112
        echo "    <a href=\"#\"";
        echo $context["macros"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
        echo ">
        ";
        // line 113
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_1b1dcc7d2708c68e2d9e8c099f3de009b57c2bf32aac99415dbdeff5f17ace23->leave($__internal_1b1dcc7d2708c68e2d9e8c099f3de009b57c2bf32aac99415dbdeff5f17ace23_prof);

        
        $__internal_9487da15fed9230f604c8444e3af058df124fdc2de996a59b828652398d6ae7c->leave($__internal_9487da15fed9230f604c8444e3af058df124fdc2de996a59b828652398d6ae7c_prof);

    }

    // line 121
    public function block_label($context, array $blocks = array())
    {
        $__internal_f22124ef0b8c704f086ac4756e51404250c103327e11b8f44adeabaac7aa6363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22124ef0b8c704f086ac4756e51404250c103327e11b8f44adeabaac7aa6363->enter($__internal_f22124ef0b8c704f086ac4756e51404250c103327e11b8f44adeabaac7aa6363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_95f41a110b7aaeaa0cef8539eb8c181dae12020b7f40fc56b1e9e0c6a107d62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f41a110b7aaeaa0cef8539eb8c181dae12020b7f40fc56b1e9e0c6a107d62d->enter($__internal_95f41a110b7aaeaa0cef8539eb8c181dae12020b7f40fc56b1e9e0c6a107d62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 123
($context["item"] ?? $this->getContext($context, "item")), "label", array()), $this->getAttribute(        // line 124
($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute(        // line 125
($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => (($this->getAttribute(        // line 127
($context["item"] ?? $this->getContext($context, "item")), "getParent", array(), "method")) ? ($this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
        
        $__internal_95f41a110b7aaeaa0cef8539eb8c181dae12020b7f40fc56b1e9e0c6a107d62d->leave($__internal_95f41a110b7aaeaa0cef8539eb8c181dae12020b7f40fc56b1e9e0c6a107d62d_prof);

        
        $__internal_f22124ef0b8c704f086ac4756e51404250c103327e11b8f44adeabaac7aa6363->leave($__internal_f22124ef0b8c704f086ac4756e51404250c103327e11b8f44adeabaac7aa6363_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 127,  355 => 125,  354 => 124,  353 => 123,  352 => 122,  343 => 121,  328 => 116,  322 => 114,  320 => 113,  315 => 112,  313 => 111,  311 => 110,  309 => 109,  307 => 108,  305 => 107,  302 => 106,  293 => 105,  279 => 101,  273 => 99,  271 => 98,  266 => 97,  263 => 96,  254 => 95,  240 => 91,  234 => 89,  232 => 88,  225 => 87,  222 => 86,  213 => 85,  201 => 81,  197 => 79,  195 => 78,  186 => 77,  173 => 72,  171 => 71,  166 => 68,  162 => 65,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  147 => 59,  144 => 57,  142 => 56,  139 => 54,  137 => 53,  134 => 51,  131 => 49,  129 => 48,  127 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  114 => 39,  112 => 38,  109 => 36,  107 => 35,  103 => 31,  101 => 30,  99 => 29,  97 => 28,  95 => 27,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 19,  77 => 17,  73 => 15,  71 => 14,  69 => 12,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block item %}
{% import \"knp_menu.html.twig\" as macros %}
{% if item.displayed %}
    {%- set attributes = item.attributes %}
    {%- set is_dropdown = attributes.dropdown|default(false) %}
    {%- set divider_prepend = attributes.divider_prepend|default(false) %}
    {%- set divider_append = attributes.divider_append|default(false) %}

{# unset bootstrap specific attributes #}
    {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

    {%- if divider_prepend %}
        {{ block('dividerElement') }}
    {%- endif %}

{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}

    {%- if matcher is defined %} {# KnpMenu 2.0#}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- else %} {# KnpMenu 1.X #}
        {%- if item.current %}
        {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif item.currentAncestor %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- endif %}

    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

{# building the class of the children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

{# adding classes for dropdown #}
    {%- if is_dropdown %}
        {%- set classes = classes|merge(['dropdown']) %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
    {%- endif %}

{# putting classes together #}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

{# displaying the item #}
    <li{{ macros.attributes(attributes) }}>
        {%- if is_dropdown %}
            {{ block('dropdownElement') }}
        {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {{ block('list') }}
    </li>

    {%- if divider_append %}
        {{ block('dividerElement') }}
    {%- endif %}
{% endif %}
{% endblock %}

{% block dividerElement %}
{% if item.level == 1 %}
    <li class=\"divider-vertical\"></li>
{% else %}
    <li class=\"divider\"></li>
{% endif %}
{% endblock %}

{% block linkElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <span {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </span>
{% endblock %}

{% block dropdownElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
    {%- set classes = classes|merge(['dropdown-toggle']) %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}
    <a href=\"#\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
        <b class=\"caret\"></b>
    </a>
{% endblock %}

{% block label %}
{{-
    item.label|trans(
        item.getExtra('translation_params', {}),
        item.getExtra(
            'translation_domain',
            item.getParent() ? item.getParent().getExtra('translation_domain') : null
        )
    )
-}}
{% endblock %}
", "SonataAdminBundle:Core:tab_menu_template.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/tab_menu_template.html.twig");
    }
}
