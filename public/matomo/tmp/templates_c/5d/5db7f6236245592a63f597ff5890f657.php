<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Widgetize/index.twig */
class __TwigTemplate_e01faf3e68261ececb7d4435835546c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Widgets"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Widgetize/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@Widgetize/index.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@Widgetize/index.twig", 7)->display($context);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
<div>

<div
  vue-entry=\"Widgetize.ExportWidget\"
  title=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 16, $this->source); })()), null)) : (null))), "html_attr");
        echo "\"
></div>
</div>

";
        // line 20
        $this->loadTemplate("@Dashboard/_widgetFactoryTemplate.twig", "@Widgetize/index.twig", 20)->display($context);
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Widgetize/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  82 => 20,  75 => 16,  68 => 11,  64 => 10,  59 => 7,  56 => 6,  52 => 5,  47 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'General_Widgets'|translate }}{% endset %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
{% endblock %}

{% block content %}

<div>

<div
  vue-entry=\"Widgetize.ExportWidget\"
  title=\"{{ title|default(null)|json_encode|e('html_attr') }}\"
></div>
</div>

{% include \"@Dashboard/_widgetFactoryTemplate.twig\" %}

{% endblock %}
", "@Widgetize/index.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/Widgetize/templates/index.twig");
    }
}
