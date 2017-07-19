<?php

/* knp_menu.html.twig */
class __TwigTemplate_66a525182ae3b6f9b52678133813efa75616bdf6ef7ebe159ae54df5297ba2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_809f0cde8bccab7a8653bfa8a285c0a83cf69182effa2c83024647a528b23a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809f0cde8bccab7a8653bfa8a285c0a83cf69182effa2c83024647a528b23a2c->enter($__internal_809f0cde8bccab7a8653bfa8a285c0a83cf69182effa2c83024647a528b23a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_ac396a0aba3f480565def85ad590d47dd1ec9c28a6f15bb871e580a42f1f6905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac396a0aba3f480565def85ad590d47dd1ec9c28a6f15bb871e580a42f1f6905->enter($__internal_ac396a0aba3f480565def85ad590d47dd1ec9c28a6f15bb871e580a42f1f6905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_809f0cde8bccab7a8653bfa8a285c0a83cf69182effa2c83024647a528b23a2c->leave($__internal_809f0cde8bccab7a8653bfa8a285c0a83cf69182effa2c83024647a528b23a2c_prof);

        
        $__internal_ac396a0aba3f480565def85ad590d47dd1ec9c28a6f15bb871e580a42f1f6905->leave($__internal_ac396a0aba3f480565def85ad590d47dd1ec9c28a6f15bb871e580a42f1f6905_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_0673b22a9d3b9cadb4cc4a23dbcd5e2a6a320860eab780a734f70d396d33069a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0673b22a9d3b9cadb4cc4a23dbcd5e2a6a320860eab780a734f70d396d33069a->enter($__internal_0673b22a9d3b9cadb4cc4a23dbcd5e2a6a320860eab780a734f70d396d33069a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_cd09c1eee2b51cf68c37561331ea7398b308d436435117c3f130205b8f6afe79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd09c1eee2b51cf68c37561331ea7398b308d436435117c3f130205b8f6afe79->enter($__internal_cd09c1eee2b51cf68c37561331ea7398b308d436435117c3f130205b8f6afe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cd09c1eee2b51cf68c37561331ea7398b308d436435117c3f130205b8f6afe79->leave($__internal_cd09c1eee2b51cf68c37561331ea7398b308d436435117c3f130205b8f6afe79_prof);

        
        $__internal_0673b22a9d3b9cadb4cc4a23dbcd5e2a6a320860eab780a734f70d396d33069a->leave($__internal_0673b22a9d3b9cadb4cc4a23dbcd5e2a6a320860eab780a734f70d396d33069a_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_f18fb7e60ca94cceabe0fb7cbd0629ba91b2c94e4ff856b527bf2296b4401dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18fb7e60ca94cceabe0fb7cbd0629ba91b2c94e4ff856b527bf2296b4401dce->enter($__internal_f18fb7e60ca94cceabe0fb7cbd0629ba91b2c94e4ff856b527bf2296b4401dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_7368491c9b6c723e98009713725187c6da614f7d838624c7e93c0be3cdc90149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7368491c9b6c723e98009713725187c6da614f7d838624c7e93c0be3cdc90149->enter($__internal_7368491c9b6c723e98009713725187c6da614f7d838624c7e93c0be3cdc90149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_7368491c9b6c723e98009713725187c6da614f7d838624c7e93c0be3cdc90149->leave($__internal_7368491c9b6c723e98009713725187c6da614f7d838624c7e93c0be3cdc90149_prof);

        
        $__internal_f18fb7e60ca94cceabe0fb7cbd0629ba91b2c94e4ff856b527bf2296b4401dce->leave($__internal_f18fb7e60ca94cceabe0fb7cbd0629ba91b2c94e4ff856b527bf2296b4401dce_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_61ffb1af257fb7b4b4d6937910f6363444c770618c3bccc8feeaefaff1378025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ffb1af257fb7b4b4d6937910f6363444c770618c3bccc8feeaefaff1378025->enter($__internal_61ffb1af257fb7b4b4d6937910f6363444c770618c3bccc8feeaefaff1378025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_68a7c7e17561d8f3bf3dc6ef219c4894ec4ba91f30ddaef06fcc997a082bae6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a7c7e17561d8f3bf3dc6ef219c4894ec4ba91f30ddaef06fcc997a082bae6d->enter($__internal_68a7c7e17561d8f3bf3dc6ef219c4894ec4ba91f30ddaef06fcc997a082bae6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_68a7c7e17561d8f3bf3dc6ef219c4894ec4ba91f30ddaef06fcc997a082bae6d->leave($__internal_68a7c7e17561d8f3bf3dc6ef219c4894ec4ba91f30ddaef06fcc997a082bae6d_prof);

        
        $__internal_61ffb1af257fb7b4b4d6937910f6363444c770618c3bccc8feeaefaff1378025->leave($__internal_61ffb1af257fb7b4b4d6937910f6363444c770618c3bccc8feeaefaff1378025_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_d7a01b541c7463ffc43124ee6f30255439d23161a7b63348ebf562c53e3a6928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a01b541c7463ffc43124ee6f30255439d23161a7b63348ebf562c53e3a6928->enter($__internal_d7a01b541c7463ffc43124ee6f30255439d23161a7b63348ebf562c53e3a6928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_0a29da2556ff5089e181bf5215625273c6a4323b592fe45cea95c179906e659e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a29da2556ff5089e181bf5215625273c6a4323b592fe45cea95c179906e659e->enter($__internal_0a29da2556ff5089e181bf5215625273c6a4323b592fe45cea95c179906e659e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_0a29da2556ff5089e181bf5215625273c6a4323b592fe45cea95c179906e659e->leave($__internal_0a29da2556ff5089e181bf5215625273c6a4323b592fe45cea95c179906e659e_prof);

        
        $__internal_d7a01b541c7463ffc43124ee6f30255439d23161a7b63348ebf562c53e3a6928->leave($__internal_d7a01b541c7463ffc43124ee6f30255439d23161a7b63348ebf562c53e3a6928_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_c04ffd0bdee0a759abecd34ccb15ac3d05128048070551c98db054bdf55c5099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04ffd0bdee0a759abecd34ccb15ac3d05128048070551c98db054bdf55c5099->enter($__internal_c04ffd0bdee0a759abecd34ccb15ac3d05128048070551c98db054bdf55c5099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_a6c0536f34c87539938ba6778ca0e6f8f0079c4944eca3cf99447b6265b9da60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c0536f34c87539938ba6778ca0e6f8f0079c4944eca3cf99447b6265b9da60->enter($__internal_a6c0536f34c87539938ba6778ca0e6f8f0079c4944eca3cf99447b6265b9da60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_a6c0536f34c87539938ba6778ca0e6f8f0079c4944eca3cf99447b6265b9da60->leave($__internal_a6c0536f34c87539938ba6778ca0e6f8f0079c4944eca3cf99447b6265b9da60_prof);

        
        $__internal_c04ffd0bdee0a759abecd34ccb15ac3d05128048070551c98db054bdf55c5099->leave($__internal_c04ffd0bdee0a759abecd34ccb15ac3d05128048070551c98db054bdf55c5099_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_650db44ddb24c01185cb44c714de62fe1bdfcdff07b419d3e9d9e41d45a8ac6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650db44ddb24c01185cb44c714de62fe1bdfcdff07b419d3e9d9e41d45a8ac6e->enter($__internal_650db44ddb24c01185cb44c714de62fe1bdfcdff07b419d3e9d9e41d45a8ac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_fdcc1e234d0901bd1a32e467d34d84bdeb6802c1e444771fa9c25d3d1b387a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcc1e234d0901bd1a32e467d34d84bdeb6802c1e444771fa9c25d3d1b387a99->enter($__internal_fdcc1e234d0901bd1a32e467d34d84bdeb6802c1e444771fa9c25d3d1b387a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_fdcc1e234d0901bd1a32e467d34d84bdeb6802c1e444771fa9c25d3d1b387a99->leave($__internal_fdcc1e234d0901bd1a32e467d34d84bdeb6802c1e444771fa9c25d3d1b387a99_prof);

        
        $__internal_650db44ddb24c01185cb44c714de62fe1bdfcdff07b419d3e9d9e41d45a8ac6e->leave($__internal_650db44ddb24c01185cb44c714de62fe1bdfcdff07b419d3e9d9e41d45a8ac6e_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_36515d91d8c979069c4e9c93364a9811922d117608509060f2824b6b94c1ce51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36515d91d8c979069c4e9c93364a9811922d117608509060f2824b6b94c1ce51->enter($__internal_36515d91d8c979069c4e9c93364a9811922d117608509060f2824b6b94c1ce51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_b3c7e8fddfcf6b8fa2130dfcb72309c79c534fe53d01c11b5888b9b6eca7e820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c7e8fddfcf6b8fa2130dfcb72309c79c534fe53d01c11b5888b9b6eca7e820->enter($__internal_b3c7e8fddfcf6b8fa2130dfcb72309c79c534fe53d01c11b5888b9b6eca7e820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_b3c7e8fddfcf6b8fa2130dfcb72309c79c534fe53d01c11b5888b9b6eca7e820->leave($__internal_b3c7e8fddfcf6b8fa2130dfcb72309c79c534fe53d01c11b5888b9b6eca7e820_prof);

        
        $__internal_36515d91d8c979069c4e9c93364a9811922d117608509060f2824b6b94c1ce51->leave($__internal_36515d91d8c979069c4e9c93364a9811922d117608509060f2824b6b94c1ce51_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_4299fb490daf68e4499e7d8b78308e213d30fd6af8ac6e6436b418be08196bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4299fb490daf68e4499e7d8b78308e213d30fd6af8ac6e6436b418be08196bf0->enter($__internal_4299fb490daf68e4499e7d8b78308e213d30fd6af8ac6e6436b418be08196bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_2e70006693748100ead38253de9957c820583d4085827280f5eb211950182269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e70006693748100ead38253de9957c820583d4085827280f5eb211950182269->enter($__internal_2e70006693748100ead38253de9957c820583d4085827280f5eb211950182269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_2e70006693748100ead38253de9957c820583d4085827280f5eb211950182269->leave($__internal_2e70006693748100ead38253de9957c820583d4085827280f5eb211950182269_prof);

        
        $__internal_4299fb490daf68e4499e7d8b78308e213d30fd6af8ac6e6436b418be08196bf0->leave($__internal_4299fb490daf68e4499e7d8b78308e213d30fd6af8ac6e6436b418be08196bf0_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_47e3a447278893e63a5f926a1937c52b78ccd88bee421f749d37cc57d4873380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_47e3a447278893e63a5f926a1937c52b78ccd88bee421f749d37cc57d4873380->enter($__internal_47e3a447278893e63a5f926a1937c52b78ccd88bee421f749d37cc57d4873380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_812c6aeffd089d14d8d57dd7036a7baf0a9550efe45589335b1c804c2c99d3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_812c6aeffd089d14d8d57dd7036a7baf0a9550efe45589335b1c804c2c99d3e4->enter($__internal_812c6aeffd089d14d8d57dd7036a7baf0a9550efe45589335b1c804c2c99d3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_812c6aeffd089d14d8d57dd7036a7baf0a9550efe45589335b1c804c2c99d3e4->leave($__internal_812c6aeffd089d14d8d57dd7036a7baf0a9550efe45589335b1c804c2c99d3e4_prof);

            
            $__internal_47e3a447278893e63a5f926a1937c52b78ccd88bee421f749d37cc57d4873380->leave($__internal_47e3a447278893e63a5f926a1937c52b78ccd88bee421f749d37cc57d4873380_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
