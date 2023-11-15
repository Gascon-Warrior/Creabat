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

/* @Widgetize/iframe.twig */
class __TwigTemplate_bda969106daae23cc053919c6540c2b7 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <meta name=\"google\" content=\"notranslate\">
        ";
        // line 7
        $this->loadTemplate("_jsGlobalVariables.twig", "@Widgetize/iframe.twig", 7)->display($context);
        // line 8
        echo "        ";
        $this->loadTemplate("_jsCssIncludes.twig", "@Widgetize/iframe.twig", 8)->display($context);
        // line 9
        echo "    </head>
    <body ng-app=\"app\" class=\"widgetized\">
        <div piwik-popover-handler></div>
        <div class=\"widget\">
            ";
        // line 13
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 13, $this->source); })());
        echo "
        </div>
        <div id=\"pageFooter\">
            ";
        // line 16
        echo $this->env->getFunction('postEvent')->getCallable()("Template.pageFooter");
        echo "
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Widgetize/iframe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  56 => 13,  50 => 9,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <meta name=\"google\" content=\"notranslate\">
        {% include \"_jsGlobalVariables.twig\" %}
        {% include \"_jsCssIncludes.twig\" %}
    </head>
    <body ng-app=\"app\" class=\"widgetized\">
        <div piwik-popover-handler></div>
        <div class=\"widget\">
            {{ content|raw }}
        </div>
        <div id=\"pageFooter\">
            {{ postEvent('Template.pageFooter') }}
        </div>
    </body>
</html>
", "@Widgetize/iframe.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/Widgetize/templates/iframe.twig");
    }
}
