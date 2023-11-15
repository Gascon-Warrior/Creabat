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

/* @Dashboard/_header.twig */
class __TwigTemplate_0026e2ecab65401f657ea54dc1b5d302 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"google\" content=\"notranslate\">
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=EDGE,chrome=1\" >
    <title>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_Dashboard"), "html", null, true);
        echo " - ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_WebAnalyticsReports"), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Dashboard/stylesheets/standalone.css\" />
";
        // line 11
        $this->loadTemplate("_jsGlobalVariables.twig", "@Dashboard/_header.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("_jsCssIncludes.twig", "@Dashboard/_header.twig", 12)->display($context);
        // line 13
        echo "</head>
<body id=\"standalone\" ng-app=\"app\">
<div piwik-popover-handler></div>
";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  55 => 12,  53 => 11,  46 => 9,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# This header is for loading the dashboard in stand alone mode #}
<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"google\" content=\"notranslate\">
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=EDGE,chrome=1\" >
    <title>{{ 'Dashboard_Dashboard'|translate }} - {{ 'CoreHome_WebAnalyticsReports'|translate }}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Dashboard/stylesheets/standalone.css\" />
{% include \"_jsGlobalVariables.twig\" %}
{% include \"_jsCssIncludes.twig\" %}
</head>
<body id=\"standalone\" ng-app=\"app\">
<div piwik-popover-handler></div>
", "@Dashboard/_header.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/Dashboard/templates/_header.twig");
    }
}
