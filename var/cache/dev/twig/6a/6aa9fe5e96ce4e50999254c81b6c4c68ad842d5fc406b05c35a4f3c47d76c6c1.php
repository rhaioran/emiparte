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
        $__internal_d193e9d25c03b1c2a8740e173c6793f2d402f779dfea1dd19b82bf3e62f5eb48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d193e9d25c03b1c2a8740e173c6793f2d402f779dfea1dd19b82bf3e62f5eb48->enter($__internal_d193e9d25c03b1c2a8740e173c6793f2d402f779dfea1dd19b82bf3e62f5eb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_cd38eb72f7273577f92e5a2a76187a620e3a26f0a3e8f60157c5629f7efb8443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd38eb72f7273577f92e5a2a76187a620e3a26f0a3e8f60157c5629f7efb8443->enter($__internal_cd38eb72f7273577f92e5a2a76187a620e3a26f0a3e8f60157c5629f7efb8443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d193e9d25c03b1c2a8740e173c6793f2d402f779dfea1dd19b82bf3e62f5eb48->leave($__internal_d193e9d25c03b1c2a8740e173c6793f2d402f779dfea1dd19b82bf3e62f5eb48_prof);

        
        $__internal_cd38eb72f7273577f92e5a2a76187a620e3a26f0a3e8f60157c5629f7efb8443->leave($__internal_cd38eb72f7273577f92e5a2a76187a620e3a26f0a3e8f60157c5629f7efb8443_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_b65aa35a7659502313b03c163d0431330ca91e11baeb8c788e533ac6a84879b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65aa35a7659502313b03c163d0431330ca91e11baeb8c788e533ac6a84879b3->enter($__internal_b65aa35a7659502313b03c163d0431330ca91e11baeb8c788e533ac6a84879b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_490a9b8fae41b7b1325e68871ba84de22282349a10651d7f73d226bc9787b2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490a9b8fae41b7b1325e68871ba84de22282349a10651d7f73d226bc9787b2cc->enter($__internal_490a9b8fae41b7b1325e68871ba84de22282349a10651d7f73d226bc9787b2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_490a9b8fae41b7b1325e68871ba84de22282349a10651d7f73d226bc9787b2cc->leave($__internal_490a9b8fae41b7b1325e68871ba84de22282349a10651d7f73d226bc9787b2cc_prof);

        
        $__internal_b65aa35a7659502313b03c163d0431330ca91e11baeb8c788e533ac6a84879b3->leave($__internal_b65aa35a7659502313b03c163d0431330ca91e11baeb8c788e533ac6a84879b3_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_a5dc576a0781b5f5826dcb24d80e9c2206e34523db8f0e4ebe55fec48e99ed30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5dc576a0781b5f5826dcb24d80e9c2206e34523db8f0e4ebe55fec48e99ed30->enter($__internal_a5dc576a0781b5f5826dcb24d80e9c2206e34523db8f0e4ebe55fec48e99ed30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_dc39b1d763c75798b268c0b429df2b429eb3b530ad04278c8e99166d5fc9bc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc39b1d763c75798b268c0b429df2b429eb3b530ad04278c8e99166d5fc9bc4f->enter($__internal_dc39b1d763c75798b268c0b429df2b429eb3b530ad04278c8e99166d5fc9bc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_dc39b1d763c75798b268c0b429df2b429eb3b530ad04278c8e99166d5fc9bc4f->leave($__internal_dc39b1d763c75798b268c0b429df2b429eb3b530ad04278c8e99166d5fc9bc4f_prof);

        
        $__internal_a5dc576a0781b5f5826dcb24d80e9c2206e34523db8f0e4ebe55fec48e99ed30->leave($__internal_a5dc576a0781b5f5826dcb24d80e9c2206e34523db8f0e4ebe55fec48e99ed30_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_9f858143ff0a4afce3438a9a658660c137b792bbfb8dd4a1044908cdd6a407cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f858143ff0a4afce3438a9a658660c137b792bbfb8dd4a1044908cdd6a407cf->enter($__internal_9f858143ff0a4afce3438a9a658660c137b792bbfb8dd4a1044908cdd6a407cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_78836bc4a2c737005d30218836474946edb70e1f1d1eedbb086a7cd15c1eaf4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78836bc4a2c737005d30218836474946edb70e1f1d1eedbb086a7cd15c1eaf4a->enter($__internal_78836bc4a2c737005d30218836474946edb70e1f1d1eedbb086a7cd15c1eaf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_78836bc4a2c737005d30218836474946edb70e1f1d1eedbb086a7cd15c1eaf4a->leave($__internal_78836bc4a2c737005d30218836474946edb70e1f1d1eedbb086a7cd15c1eaf4a_prof);

        
        $__internal_9f858143ff0a4afce3438a9a658660c137b792bbfb8dd4a1044908cdd6a407cf->leave($__internal_9f858143ff0a4afce3438a9a658660c137b792bbfb8dd4a1044908cdd6a407cf_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_9c9e098165e267c542768922135f761fbf104f0bba366b4f9a55e0537162a9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9e098165e267c542768922135f761fbf104f0bba366b4f9a55e0537162a9c6->enter($__internal_9c9e098165e267c542768922135f761fbf104f0bba366b4f9a55e0537162a9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_de3712c1304b2c1900c2746a321825952664dda7a10cc42c4bc9827bd08791d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3712c1304b2c1900c2746a321825952664dda7a10cc42c4bc9827bd08791d6->enter($__internal_de3712c1304b2c1900c2746a321825952664dda7a10cc42c4bc9827bd08791d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

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
        
        $__internal_de3712c1304b2c1900c2746a321825952664dda7a10cc42c4bc9827bd08791d6->leave($__internal_de3712c1304b2c1900c2746a321825952664dda7a10cc42c4bc9827bd08791d6_prof);

        
        $__internal_9c9e098165e267c542768922135f761fbf104f0bba366b4f9a55e0537162a9c6->leave($__internal_9c9e098165e267c542768922135f761fbf104f0bba366b4f9a55e0537162a9c6_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_829a508d0d2e619bae0f5d7433fb995b37ba39db4b6c28d9c64aa275afe481ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829a508d0d2e619bae0f5d7433fb995b37ba39db4b6c28d9c64aa275afe481ad->enter($__internal_829a508d0d2e619bae0f5d7433fb995b37ba39db4b6c28d9c64aa275afe481ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_acb836d311e0e1fb46083bc9fb270a63c781118b30a8d01225aa26412892bccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb836d311e0e1fb46083bc9fb270a63c781118b30a8d01225aa26412892bccb->enter($__internal_acb836d311e0e1fb46083bc9fb270a63c781118b30a8d01225aa26412892bccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_acb836d311e0e1fb46083bc9fb270a63c781118b30a8d01225aa26412892bccb->leave($__internal_acb836d311e0e1fb46083bc9fb270a63c781118b30a8d01225aa26412892bccb_prof);

        
        $__internal_829a508d0d2e619bae0f5d7433fb995b37ba39db4b6c28d9c64aa275afe481ad->leave($__internal_829a508d0d2e619bae0f5d7433fb995b37ba39db4b6c28d9c64aa275afe481ad_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_082a9c78696c7f4a72bc5c334b1845799f648ee69521c8d25635a7bd5d9486e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082a9c78696c7f4a72bc5c334b1845799f648ee69521c8d25635a7bd5d9486e2->enter($__internal_082a9c78696c7f4a72bc5c334b1845799f648ee69521c8d25635a7bd5d9486e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_145c966b38fbe0f277bf633eb530c2f727545ebdcf45b566a89acf3d831fc5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145c966b38fbe0f277bf633eb530c2f727545ebdcf45b566a89acf3d831fc5cc->enter($__internal_145c966b38fbe0f277bf633eb530c2f727545ebdcf45b566a89acf3d831fc5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_145c966b38fbe0f277bf633eb530c2f727545ebdcf45b566a89acf3d831fc5cc->leave($__internal_145c966b38fbe0f277bf633eb530c2f727545ebdcf45b566a89acf3d831fc5cc_prof);

        
        $__internal_082a9c78696c7f4a72bc5c334b1845799f648ee69521c8d25635a7bd5d9486e2->leave($__internal_082a9c78696c7f4a72bc5c334b1845799f648ee69521c8d25635a7bd5d9486e2_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_c6d3ed4c320022f8a9663794fdca21d4b5aa633f8a7f1b9dd850246971180dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d3ed4c320022f8a9663794fdca21d4b5aa633f8a7f1b9dd850246971180dbe->enter($__internal_c6d3ed4c320022f8a9663794fdca21d4b5aa633f8a7f1b9dd850246971180dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_dcd652feaccd309b2c2d6505f70e910ec54cfc968a41239dbdfa656f9c1fdf74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd652feaccd309b2c2d6505f70e910ec54cfc968a41239dbdfa656f9c1fdf74->enter($__internal_dcd652feaccd309b2c2d6505f70e910ec54cfc968a41239dbdfa656f9c1fdf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_dcd652feaccd309b2c2d6505f70e910ec54cfc968a41239dbdfa656f9c1fdf74->leave($__internal_dcd652feaccd309b2c2d6505f70e910ec54cfc968a41239dbdfa656f9c1fdf74_prof);

        
        $__internal_c6d3ed4c320022f8a9663794fdca21d4b5aa633f8a7f1b9dd850246971180dbe->leave($__internal_c6d3ed4c320022f8a9663794fdca21d4b5aa633f8a7f1b9dd850246971180dbe_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_89fc125cff0fdd67e9e3c62864ac1cac2780384f828ce2993261b8cd4bd2fa90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fc125cff0fdd67e9e3c62864ac1cac2780384f828ce2993261b8cd4bd2fa90->enter($__internal_89fc125cff0fdd67e9e3c62864ac1cac2780384f828ce2993261b8cd4bd2fa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_01c00c9358fd0f6be0d37a055476167b42412198e0a113f93dd444caad351073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c00c9358fd0f6be0d37a055476167b42412198e0a113f93dd444caad351073->enter($__internal_01c00c9358fd0f6be0d37a055476167b42412198e0a113f93dd444caad351073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_01c00c9358fd0f6be0d37a055476167b42412198e0a113f93dd444caad351073->leave($__internal_01c00c9358fd0f6be0d37a055476167b42412198e0a113f93dd444caad351073_prof);

        
        $__internal_89fc125cff0fdd67e9e3c62864ac1cac2780384f828ce2993261b8cd4bd2fa90->leave($__internal_89fc125cff0fdd67e9e3c62864ac1cac2780384f828ce2993261b8cd4bd2fa90_prof);

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
            $__internal_a53921a9fd3c1479b9975a43db4543f287a1f88369444b4eead5e75daca8f197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a53921a9fd3c1479b9975a43db4543f287a1f88369444b4eead5e75daca8f197->enter($__internal_a53921a9fd3c1479b9975a43db4543f287a1f88369444b4eead5e75daca8f197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_ad284ccea0a95424023d3d6db10b845ebdd3333d580489e125f6e0a4a1c5356c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ad284ccea0a95424023d3d6db10b845ebdd3333d580489e125f6e0a4a1c5356c->enter($__internal_ad284ccea0a95424023d3d6db10b845ebdd3333d580489e125f6e0a4a1c5356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

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
            
            $__internal_ad284ccea0a95424023d3d6db10b845ebdd3333d580489e125f6e0a4a1c5356c->leave($__internal_ad284ccea0a95424023d3d6db10b845ebdd3333d580489e125f6e0a4a1c5356c_prof);

            
            $__internal_a53921a9fd3c1479b9975a43db4543f287a1f88369444b4eead5e75daca8f197->leave($__internal_a53921a9fd3c1479b9975a43db4543f287a1f88369444b4eead5e75daca8f197_prof);

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
