<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e493bbaac6d8ea9c0f2a6f8139b5a39530d9f6abf91fde078914d7f20339c813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7d5cda10d57b8adb523ddcd7b223ff21547443ee77f39a60ac5350817fb4c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d5cda10d57b8adb523ddcd7b223ff21547443ee77f39a60ac5350817fb4c06->enter($__internal_e7d5cda10d57b8adb523ddcd7b223ff21547443ee77f39a60ac5350817fb4c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dbe2159b1e98feeb62554c76b651a1ade3127010c0d9ca6d82553925c277c825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe2159b1e98feeb62554c76b651a1ade3127010c0d9ca6d82553925c277c825->enter($__internal_dbe2159b1e98feeb62554c76b651a1ade3127010c0d9ca6d82553925c277c825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d5cda10d57b8adb523ddcd7b223ff21547443ee77f39a60ac5350817fb4c06->leave($__internal_e7d5cda10d57b8adb523ddcd7b223ff21547443ee77f39a60ac5350817fb4c06_prof);

        
        $__internal_dbe2159b1e98feeb62554c76b651a1ade3127010c0d9ca6d82553925c277c825->leave($__internal_dbe2159b1e98feeb62554c76b651a1ade3127010c0d9ca6d82553925c277c825_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bf80806555ea7d60de331ba82090139ac15d2c0fb8b0425a5270fdc7907b205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf80806555ea7d60de331ba82090139ac15d2c0fb8b0425a5270fdc7907b205->enter($__internal_0bf80806555ea7d60de331ba82090139ac15d2c0fb8b0425a5270fdc7907b205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85adcc59bc73816979002778c4f9ca8953bcd8003af5528395cda6c5665b4d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85adcc59bc73816979002778c4f9ca8953bcd8003af5528395cda6c5665b4d5b->enter($__internal_85adcc59bc73816979002778c4f9ca8953bcd8003af5528395cda6c5665b4d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_85adcc59bc73816979002778c4f9ca8953bcd8003af5528395cda6c5665b4d5b->leave($__internal_85adcc59bc73816979002778c4f9ca8953bcd8003af5528395cda6c5665b4d5b_prof);

        
        $__internal_0bf80806555ea7d60de331ba82090139ac15d2c0fb8b0425a5270fdc7907b205->leave($__internal_0bf80806555ea7d60de331ba82090139ac15d2c0fb8b0425a5270fdc7907b205_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e15686eb0fa56408d80802669ee3304a064d2f87d68a2595f50e9ac7b4be489b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15686eb0fa56408d80802669ee3304a064d2f87d68a2595f50e9ac7b4be489b->enter($__internal_e15686eb0fa56408d80802669ee3304a064d2f87d68a2595f50e9ac7b4be489b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea5350894072658aafd36186c310ac138b4054dca0e4ef07ce14c57bef1414b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5350894072658aafd36186c310ac138b4054dca0e4ef07ce14c57bef1414b1->enter($__internal_ea5350894072658aafd36186c310ac138b4054dca0e4ef07ce14c57bef1414b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea5350894072658aafd36186c310ac138b4054dca0e4ef07ce14c57bef1414b1->leave($__internal_ea5350894072658aafd36186c310ac138b4054dca0e4ef07ce14c57bef1414b1_prof);

        
        $__internal_e15686eb0fa56408d80802669ee3304a064d2f87d68a2595f50e9ac7b4be489b->leave($__internal_e15686eb0fa56408d80802669ee3304a064d2f87d68a2595f50e9ac7b4be489b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_705d0209f3a64ea77ff0dc72d28f95aa3a42a5f06eb012ddd6cb0b1ee29e4524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705d0209f3a64ea77ff0dc72d28f95aa3a42a5f06eb012ddd6cb0b1ee29e4524->enter($__internal_705d0209f3a64ea77ff0dc72d28f95aa3a42a5f06eb012ddd6cb0b1ee29e4524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7218a7e36d992ed16d2dcff37f58711c740bcd5146f4843cd36d8228b7b5d1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7218a7e36d992ed16d2dcff37f58711c740bcd5146f4843cd36d8228b7b5d1ee->enter($__internal_7218a7e36d992ed16d2dcff37f58711c740bcd5146f4843cd36d8228b7b5d1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7218a7e36d992ed16d2dcff37f58711c740bcd5146f4843cd36d8228b7b5d1ee->leave($__internal_7218a7e36d992ed16d2dcff37f58711c740bcd5146f4843cd36d8228b7b5d1ee_prof);

        
        $__internal_705d0209f3a64ea77ff0dc72d28f95aa3a42a5f06eb012ddd6cb0b1ee29e4524->leave($__internal_705d0209f3a64ea77ff0dc72d28f95aa3a42a5f06eb012ddd6cb0b1ee29e4524_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\emiparte\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
