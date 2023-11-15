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

/* @Marketplace/plugin-details.twig */
class __TwigTemplate_402cb69814890642fd8d05588bdaaaa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["marketplaceMacro"] = $this->macros["marketplaceMacro"] = $this->loadTemplate("@Marketplace/macros.twig", "@Marketplace/plugin-details.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"pluginDetails\">
        ";
        // line 6
        if ((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "            ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "
        ";
        } elseif (        // line 8
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "
            ";
            // line 10
            $context["isBundle"] = (twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "isBundle", [], "any", true, true, false, 10) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 10, $this->source); })()), "isBundle", [], "any", false, false, false, 10));
            // line 11
            echo "
            ";
            // line 12
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 12, $this->source); })()), "versions", [], "any", false, false, false, 12)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 12, $this->source); })()), "versions", [], "any", false, false, false, 12), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 12, $this->source); })()), "versions", [], "any", false, false, false, 12)) - 1), [], "array", false, false, false, 12))) {
                // line 13
                echo "                ";
                $context["latestVersion"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 13, $this->source); })()), "versions", [], "any", false, false, false, 13), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 13, $this->source); })()), "versions", [], "any", false, false, false, 13)) - 1), [], "array", false, false, false, 13);
                // line 14
                echo "            ";
            } else {
                // line 15
                echo "                ";
                $context["latestVersion"] = "";
                // line 16
                echo "            ";
            }
            // line 17
            echo "
            <div class=\"row\">
                <div class=\"col s12 m9\">
                    <h2>";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 20, $this->source); })()), "displayName", [], "any", false, false, false, 20), "html", null, true);
            echo "</h2>
                    <p class=\"description\">
                        ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 22, $this->source); })()), "featured", [], "any", false, false, false, 22)) {
                // line 23
                echo "                            ";
                echo twig_call_macro($macros["marketplaceMacro"], "macro_featuredIcon", ["left"], 23, $context, $this->getSourceContext());
                echo "
                        ";
            }
            // line 25
            echo "                        ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
            echo "
                    </p>
                    <div class=\"contentDetails\">
                        <div id=\"pluginDetailsTabs\" class=\"row\">
                            <div class=\"col s12\">
                                <ul class=\"tabs\">
                                    <li class=\"tab col s3\"><a href=\"#tabs-description\">";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Description"), "html", null, true);
            echo "</a></li>

                                    ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 33, $this->source); })()), "readmeHtml", [], "any", false, false, false, 33), "faq", [], "any", false, false, false, 33)) {
                // line 34
                echo "                                        <li class=\"tab col s3\"><a href=\"#tabs-faq\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Faq"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 36
            echo "
                                    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 37, $this->source); })()), "readmeHtml", [], "any", false, false, false, 37), "documentation", [], "any", false, false, false, 37)) {
                // line 38
                echo "                                        <li class=\"tab col s3\"><a href=\"#tabs-documentation\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Documentation"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 40
            echo "
                                    ";
            // line 41
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 41, $this->source); })()), "screenshots", [], "any", false, false, false, 41))) {
                // line 42
                echo "                                        <li class=\"tab col s3\"><a href=\"#tabs-screenshots\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_Screenshots"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 44
            echo "
                                    ";
            // line 45
            if (((((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", true, true, false, 45) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 45, $this->source); })()), "shop", [], "any", false, false, false, 45)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 45, $this->source); })()), "shop", [], "any", false, false, false, 45), "reviews", [], "any", false, false, false, 45)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", false, true, false, 45), "reviews", [], "any", false, true, false, 45), "embedUrl", [], "any", true, true, false, 45)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 45, $this->source); })()), "shop", [], "any", false, false, false, 45), "reviews", [], "any", false, false, false, 45), "embedUrl", [], "any", false, false, false, 45))) {
                // line 46
                echo "                                        <li class=\"tab col s3\"><a href=\"#tabs-reviews\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_Reviews"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 48
            echo "                                </ul>
                            </div>

                            <div id=\"tabs-description\" class=\"tab-content col s12\">
                                ";
            // line 52
            if (((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 52, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 52, $this->source); })()), "isDownloadable", [], "any", false, false, false, 52) || twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 52, $this->source); })()), "isInstalled", [], "any", false, false, false, 52)))) {
                // line 53
                echo "                                    ";
                echo twig_call_macro($macros["marketplaceMacro"], "macro_missingRequirementsPleaseUpdateNotice", [(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 53, $this->source); })())], 53, $context, $this->getSourceContext());
                echo "

                                    ";
                // line 55
                if ((isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 55, $this->source); })())) {
                    // line 56
                    echo "                                        <div class=\"alert alert-warning\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_MultiServerEnvironmentWarning"), "html", null, true);
                    echo "</div>
                                    ";
                } elseif ( !                // line 57
(isset($context["isAutoUpdateEnabled"]) || array_key_exists("isAutoUpdateEnabled", $context) ? $context["isAutoUpdateEnabled"] : (function () { throw new RuntimeError('Variable "isAutoUpdateEnabled" does not exist.', 57, $this->source); })())) {
                    // line 58
                    echo "                                        <div class=\"alert alert-warning\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_AutoUpdateDisabledWarning", "'[General]enable_auto_update=1'", "'config/config.ini.php'"), "html", null, true);
                    echo "</div>
                                    ";
                }
                // line 60
                echo "                                ";
            }
            // line 61
            echo "
                                ";
            // line 62
            if ((((isset($context["hasSomeAdminAccess"]) || array_key_exists("hasSomeAdminAccess", $context) ? $context["hasSomeAdminAccess"] : (function () { throw new RuntimeError('Variable "hasSomeAdminAccess" does not exist.', 62, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "isMissingLicense", [], "any", true, true, false, 62)) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 62, $this->source); })()), "isMissingLicense", [], "any", false, false, false, 62))) {
                // line 63
                echo "                                    <div class=\"alert alert-danger\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_PluginLicenseMissingDescription"), "html", null, true);
                echo "</div>
                                ";
            } elseif (((            // line 64
(isset($context["hasSomeAdminAccess"]) || array_key_exists("hasSomeAdminAccess", $context) ? $context["hasSomeAdminAccess"] : (function () { throw new RuntimeError('Variable "hasSomeAdminAccess" does not exist.', 64, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "hasExceededLicense", [], "any", true, true, false, 64)) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 64, $this->source); })()), "hasExceededLicense", [], "any", false, false, false, 64))) {
                // line 65
                echo "                                    <div class=\"alert alert-warning\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_PluginLicenseExceededDescription"), "html", null, true);
                echo "</div>
                                ";
            }
            // line 67
            echo "
                                <div ng-non-bindable>";
            // line 68
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 68, $this->source); })()), "readmeHtml", [], "any", false, false, false, 68), "description", [], "any", false, false, false, 68);
            echo "</div>
                            </div>

                            ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 71, $this->source); })()), "readmeHtml", [], "any", false, false, false, 71), "faq", [], "any", false, false, false, 71)) {
                // line 72
                echo "                                <div id=\"tabs-faq\" class=\"tab-content col s12\" ng-non-bindable>
                                    ";
                // line 73
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 73, $this->source); })()), "readmeHtml", [], "any", false, false, false, 73), "faq", [], "any", false, false, false, 73);
                echo "
                                </div>
                            ";
            }
            // line 76
            echo "
                            ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 77, $this->source); })()), "readmeHtml", [], "any", false, false, false, 77), "documentation", [], "any", false, false, false, 77)) {
                // line 78
                echo "                                <div id=\"tabs-documentation\" class=\"tab-content col s12\" ng-non-bindable>
                                    ";
                // line 79
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 79, $this->source); })()), "readmeHtml", [], "any", false, false, false, 79), "documentation", [], "any", false, false, false, 79);
                echo "
                                </div>
                            ";
            }
            // line 82
            echo "
                            ";
            // line 83
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 83, $this->source); })()), "screenshots", [], "any", false, false, false, 83))) {
                // line 84
                echo "                                <div id=\"tabs-screenshots\" class=\"tab-content col s12\">
                                    <div class=\"thumbnails\">
                                        ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 86, $this->source); })()), "screenshots", [], "any", false, false, false, 86));
                foreach ($context['_seq'] as $context["_key"] => $context["screenshot"]) {
                    // line 87
                    echo "                                            <div class=\"thumbnail\">
                                                <a href=\"";
                    // line 88
                    echo \Piwik\piwik_escape_filter($this->env, $context["screenshot"], "html", null, true);
                    echo "\" target=\"_blank\"><img src=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $context["screenshot"], "html", null, true);
                    echo "?w=400\" width=\"400\" alt=\"\"></a>
                                                <p>
                                                    ";
                    // line 90
                    echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter(twig_last($this->env, twig_split_filter($this->env, $context["screenshot"], "/")), ["_" => " ", ".png" => "", ".jpg" => "", ".jpeg" => ""]), "html", null, true);
                    echo "
                                                </p>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['screenshot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 97
            echo "
                            ";
            // line 98
            if (((((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", true, true, false, 98) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 98, $this->source); })()), "shop", [], "any", false, false, false, 98)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 98, $this->source); })()), "shop", [], "any", false, false, false, 98), "reviews", [], "any", false, false, false, 98)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", false, true, false, 98), "reviews", [], "any", false, true, false, 98), "embedUrl", [], "any", true, true, false, 98)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 98, $this->source); })()), "shop", [], "any", false, false, false, 98), "reviews", [], "any", false, false, false, 98), "embedUrl", [], "any", false, false, false, 98))) {
                // line 99
                echo "                                <div id=\"tabs-reviews\" class=\"tab-content col s12\">
                                    <iframe class=\"reviewIframe\"
                                            style=\"";
                // line 101
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 101, $this->source); })()), "shop", [], "any", false, false, false, 101), "reviews", [], "any", false, false, false, 101), "height", [], "any", false, false, false, 101)) {
                    echo "height:";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 101, $this->source); })()), "shop", [], "any", false, false, false, 101), "reviews", [], "any", false, false, false, 101), "height", [], "any", false, false, false, 101), "html", null, true);
                    echo "px;";
                }
                echo "\"
                                            id=\"";
                // line 102
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('md5')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 102, $this->source); })()), "shop", [], "any", false, false, false, 102), "reviews", [], "any", false, false, false, 102), "embedUrl", [], "any", false, false, false, 102)), "html", null, true);
                echo "\"
                                            src=\"";
                // line 103
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 103, $this->source); })()), "shop", [], "any", false, false, false, 103), "reviews", [], "any", false, false, false, 103), "embedUrl", [], "any", false, false, false, 103);
                echo "\"></iframe>
                                </div>
                            ";
            }
            // line 106
            echo "                        </div>
                    </div>
                </div>
                <div class=\"col s12 m3\">
                    <div class=\"metadata\">
                        <div class=\"actionButton\">
                            ";
            // line 112
            if (( !twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 112, $this->source); })()), "isDownloadable", [], "any", false, false, false, 112) ||  !(isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 112, $this->source); })()))) {
                // line 113
                echo "                                ";
                if (((((isset($context["hasSomeAdminAccess"]) || array_key_exists("hasSomeAdminAccess", $context) ? $context["hasSomeAdminAccess"] : (function () { throw new RuntimeError('Variable "hasSomeAdminAccess" does not exist.', 113, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "hasExceededLicense", [], "any", true, true, false, 113)) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 113, $this->source); })()), "hasExceededLicense", [], "any", false, false, false, 113)) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 113, $this->source); })()), "consumer", [], "any", false, false, false, 113))) {
                    // line 114
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "consumer", [], "any", false, true, false, 114), "loginUrl", [], "any", true, true, false, 114) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 114, $this->source); })()), "consumer", [], "any", false, false, false, 114), "loginUrl", [], "any", false, false, false, 114))) {
                        // line 115
                        echo "                                        <a class=\"install update\"
                                           target=\"_blank\"
                                           rel=\"noreferrer noopener\"
                                           href=\"";
                        // line 118
                        echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "consumer", [], "any", false, true, false, 118), "loginUrl", [], "any", true, true, false, 118)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "consumer", [], "any", false, true, false, 118), "loginUrl", [], "any", false, false, false, 118), "")) : ("")), "html_attr");
                        echo "\"
                                        >";
                        // line 119
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_UpgradeSubscription"), "html", null, true);
                        echo "</a>
                                    ";
                    }
                    // line 121
                    echo "
                                ";
                } elseif (((( !twig_get_attribute($this->env, $this->source,                 // line 122
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 122, $this->source); })()), "isDownloadable", [], "any", false, false, false, 122) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 122, $this->source); })()), "isPaid", [], "any", false, false, false, 122)) && twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", true, true, false, 122)) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 122, $this->source); })()), "shop", [], "any", false, false, false, 122))) {
                    // line 123
                    echo "
                                    ";
                    // line 124
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 124, $this->source); })()), "shop", [], "any", false, false, false, 124), "variations", [], "any", false, false, false, 124))) {
                        // line 125
                        echo "
                                        <h4 style=\"color:#5bb75b;font-weight: bold;font-size: 1.2em;\">";
                        // line 126
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_TryFreeTrialTitle"), "html", null, true);
                        echo "</h4>
                                        <div class=\"input-field variationPicker\">
                                            <select title=\"";
                        // line 128
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_ShownPriceIsExclTax"), "html_attr");
                        echo " ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_CurrentNumPiwikUsers", (isset($context["numUsers"]) || array_key_exists("numUsers", $context) ? $context["numUsers"] : (function () { throw new RuntimeError('Variable "numUsers" does not exist.', 128, $this->source); })())), "html_attr");
                        echo "\">
                                                ";
                        // line 129
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 129, $this->source); })()), "shop", [], "any", false, false, false, 129), "variations", [], "any", false, false, false, 129));
                        foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                            // line 130
                            echo "                                                    <option value=\"";
                            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "addToCartUrl", [], "any", false, false, false, 130), "html", null, true);
                            echo "\"
                                                            title=\"";
                            // line 131
                            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_PriceExclTax", twig_get_attribute($this->env, $this->source, $context["variation"], "price", [], "any", false, false, false, 131), twig_get_attribute($this->env, $this->source, $context["variation"], "currency", [], "any", false, false, false, 131)), "html_attr");
                            echo " ";
                            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_CurrentNumPiwikUsers", (isset($context["numUsers"]) || array_key_exists("numUsers", $context) ? $context["numUsers"] : (function () { throw new RuntimeError('Variable "numUsers" does not exist.', 131, $this->source); })())), "html_attr");
                            echo "\"
                                                            ";
                            // line 132
                            if ((twig_get_attribute($this->env, $this->source, $context["variation"], "recommended", [], "any", true, true, false, 132) && twig_get_attribute($this->env, $this->source, $context["variation"], "recommended", [], "any", false, false, false, 132))) {
                                echo "selected";
                            }
                            // line 133
                            echo "                                                    >";
                            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "name", [], "any", false, false, false, 133), "html", null, true);
                            echo " - ";
                            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "prettyPrice", [], "any", false, false, false, 133), "html", null, true);
                            echo " / ";
                            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "period", [], "any", false, false, false, 133), "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 135
                        echo "                                            </select>
                                        </div>

                                        <a class=\"install update addToCartLink\" target=\"_blank\"
                                           title=\"";
                        // line 139
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_ClickToCompletePurchase"), "html_attr");
                        echo "\"
                                           rel=\"noreferrer noopener\"
                                           href=\"";
                        // line 141
                        echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", false, true, false, 141), "url", [], "any", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", false, true, false, 141), "url", [], "any", false, false, false, 141), "")) : ("")), "html_attr");
                        echo "\"
                                        >";
                        // line 142
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_AddToCart"), "html", null, true);
                        echo "</a>
                                    ";
                    } else {
                        // line 144
                        echo "                                        <a class=\"install update\" target=\"_blank\"
                                           rel=\"noreferrer noopener\"
                                           href=\"";
                        // line 146
                        if (((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", true, true, false, 146) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 146, $this->source); })()), "shop", [], "any", false, false, false, 146)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 146, $this->source); })()), "shop", [], "any", false, false, false, 146), "url", [], "any", false, false, false, 146))) {
                            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 146, $this->source); })()), "shop", [], "any", false, false, false, 146), "url", [], "any", false, false, false, 146), "html_attr");
                        } else {
                            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 146, $this->source); })()), "homepage", [], "any", false, false, false, 146), "html_attr");
                        }
                        echo "\"
                                        >";
                        // line 147
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
                        echo "</a>
                                    ";
                    }
                    // line 149
                    echo "                                ";
                }
                // line 150
                echo "                            ";
            } elseif ((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 150, $this->source); })())) {
                // line 151
                echo "                                ";
                if ( !(isset($context["isAutoUpdatePossible"]) || array_key_exists("isAutoUpdatePossible", $context) ? $context["isAutoUpdatePossible"] : (function () { throw new RuntimeError('Variable "isAutoUpdatePossible" does not exist.', 151, $this->source); })())) {
                    // line 152
                    echo "                                    <a onclick=\"\$(this).css('display', 'none')\" href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["action" => "download", "pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 152, $this->source); })()), "name", [], "any", false, false, false, 152), "nonce" => Piwik\Nonce::getNonce(twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 152, $this->source); })()), "name", [], "any", false, false, false, 152))]), "html", null, true);
                    echo "\"
                                       class=\"download\">";
                    // line 153
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Download"), "html", null, true);
                    echo "</a>
                                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 154
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 154, $this->source); })()), "canBeUpdated", [], "any", false, false, false, 154) && (0 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 154, $this->source); })()), "missingRequirements", [], "any", false, false, false, 154))))) {
                    // line 155
                    echo "                                    <a class=\"install update\"
                                       href=\"";
                    // line 156
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Marketplace", "action" => "updatePlugin", "pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 156, $this->source); })()), "name", [], "any", false, false, false, 156), "nonce" => (isset($context["updateNonce"]) || array_key_exists("updateNonce", $context) ? $context["updateNonce"] : (function () { throw new RuntimeError('Variable "updateNonce" does not exist.', 156, $this->source); })())]), "html", null, true);
                    echo "\"
                                    >";
                    // line 157
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreUpdater_UpdateTitle"), "html", null, true);
                    echo "</a>
                                ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 158
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 158, $this->source); })()), "isInstalled", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                ";
                } elseif ((0 < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 163
(isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 163, $this->source); })()), "missingRequirements", [], "any", false, false, false, 163)))) {
                    // line 164
                    echo "                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                ";
                } else {
                    // line 169
                    echo "                                    <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Marketplace", "action" => "installPlugin", "pluginName" => twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 169, $this->source); })()), "name", [], "any", false, false, false, 169), "nonce" => (isset($context["installNonce"]) || array_key_exists("installNonce", $context) ? $context["installNonce"] : (function () { throw new RuntimeError('Variable "installNonce" does not exist.', 169, $this->source); })())]), "html", null, true);
                    echo "\"
                                       class=\"install\">";
                    // line 170
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_ActionInstall"), "html", null, true);
                    echo "</a>
                                ";
                }
                // line 172
                echo "                            ";
            } else {
                // line 173
                echo "                                <br />
                                <br />
                                <br />
                                <br />
                            ";
            }
            // line 178
            echo "                        </div>

                        ";
            // line 180
            if ((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "specialOffer", [], "any", true, true, false, 180) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 180, $this->source); })()), "specialOffer", [], "any", false, false, false, 180))) {
                echo "<p style=\"color: green;\"><br />";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 180, $this->source); })()), "specialOffer", [], "any", false, false, false, 180), "html", null, true);
                echo "</p>";
            }
            // line 181
            echo "
                        <p><br /></p>
                        <dl>
                            ";
            // line 184
            if ( !(isset($context["isBundle"]) || array_key_exists("isBundle", $context) ? $context["isBundle"] : (function () { throw new RuntimeError('Variable "isBundle" does not exist.', 184, $this->source); })())) {
                // line 185
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_Version"), "html", null, true);
                echo "</dt>
                                <dd>";
                // line 186
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 186, $this->source); })()), "latestVersion", [], "any", false, false, false, 186), "html", null, true);
                echo "</dd>
                            ";
            }
            // line 188
            echo "
                            <dt>";
            // line 189
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_PluginKeywords"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 190
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 190, $this->source); })()), "keywords", [], "any", false, false, false, 190), ", "), "html", null, true);
            echo "</dd>

                            ";
            // line 192
            if ((twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 192, $this->source); })()), "lastUpdated", [], "any", false, false, false, 192) &&  !(isset($context["isBundle"]) || array_key_exists("isBundle", $context) ? $context["isBundle"] : (function () { throw new RuntimeError('Variable "isBundle" does not exist.', 192, $this->source); })()))) {
                // line 193
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_LastUpdated"), "html", null, true);
                echo "</dt>
                                <dd>";
                // line 194
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 194, $this->source); })()), "lastUpdated", [], "any", false, false, false, 194), "html", null, true);
                echo "</dd>
                            ";
            }
            // line 196
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 196, $this->source); })()), "numDownloads", [], "any", false, false, false, 196)) {
                // line 197
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Downloads"), "html", null, true);
                echo "</dt>
                                <dd title=\"";
                // line 198
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_NumDownloadsLatestVersion", twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 198, $this->source); })()), "numDownloads", [], "any", false, false, false, 198))), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 198, $this->source); })()), "numDownloads", [], "any", false, false, false, 198), "html", null, true);
                echo "</dd>
                            ";
            }
            // line 200
            echo "
                            ";
            // line 201
            if ( !(isset($context["isBundle"]) || array_key_exists("isBundle", $context) ? $context["isBundle"] : (function () { throw new RuntimeError('Variable "isBundle" does not exist.', 201, $this->source); })())) {
                // line 202
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_Developer"), "html", null, true);
                echo "</dt>
                                <dd>";
                // line 203
                echo twig_call_macro($macros["marketplaceMacro"], "macro_pluginDeveloper", [twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 203, $this->source); })()), "owner", [], "any", false, false, false, 203)], 203, $context, $this->getSourceContext());
                echo "</dd>
                                ";
                // line 204
                if ((((((isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 204, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["latestVersion"] ?? null), "license", [], "any", true, true, false, 204)) && twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 204, $this->source); })()), "license", [], "any", false, false, false, 204)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["latestVersion"] ?? null), "license", [], "any", false, true, false, 204), "name", [], "any", true, true, false, 204)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 204, $this->source); })()), "license", [], "any", false, false, false, 204), "name", [], "any", false, false, false, 204))) {
                    // line 205
                    echo "                                    <dt>";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_License"), "html", null, true);
                    echo "</dt>
                                    <dd>
                                        ";
                    // line 207
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["latestVersion"] ?? null), "license", [], "any", false, true, false, 207), "url", [], "any", true, true, false, 207) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 207, $this->source); })()), "license", [], "any", false, false, false, 207), "url", [], "any", false, false, false, 207))) {
                        // line 208
                        echo "                                            <a rel=\"noreferrer noopener\"
                                               href=\"";
                        // line 209
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 209, $this->source); })()), "license", [], "any", false, false, false, 209), "url", [], "any", false, false, false, 209), "html", null, true);
                        echo "\"
                                               target=\"_blank\">";
                        // line 210
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 210, $this->source); })()), "license", [], "any", false, false, false, 210), "name", [], "any", false, false, false, 210), "html", null, true);
                        echo "</a>
                                        ";
                    } else {
                        // line 212
                        echo "                                            ";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 212, $this->source); })()), "license", [], "any", false, false, false, 212), "name", [], "any", false, false, false, 212), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 214
                    echo "                                    </dd>
                                ";
                }
                // line 216
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_Authors"), "html", null, true);
                echo "</dt>
                                <dd>";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 217, $this->source); })()), "authors", [], "any", false, false, false, 217), function ($__author__) use ($context, $macros) { $context["author"] = $__author__; return twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 217); }));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                    // line 218
                    echo "                                        ";
                    ob_start();
                    // line 219
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["author"], "homepage", [], "any", false, false, false, 219)) {
                        // line 220
                        echo "                                                <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "homepage", [], "any", false, false, false, 220), "html", null, true);
                        echo "\">";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 220), "html", null, true);
                        echo "</a>
                                            ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 221
$context["author"], "email", [], "any", false, false, false, 221)) {
                        // line 222
                        echo "                                                <a href=\"mailto:";
                        echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "email", [], "any", false, false, false, 222), "url"), "html", null, true);
                        echo "\">";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 222), "html", null, true);
                        echo "</a>
                                            ";
                    } else {
                        // line 224
                        echo "                                                ";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 224), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 226
                    echo "
                                            ";
                    // line 227
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 227) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 227, $this->source); })()), "authors", [], "any", false, false, false, 227)))) {
                        // line 228
                        echo "                                                ,
                                            ";
                    }
                    // line 230
                    echo "                                        ";
                    $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 218
                    echo twig_spaceless($___internal_parse_0_);
                    // line 231
                    echo "                                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 232
                echo "                                </dd>
                            ";
            }
            // line 234
            echo "                            <dt>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_Websites"), "html", null, true);
            echo "</dt>
                            <dd>
                                ";
            // line 236
            if (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 236, $this->source); })()), "homepage", [], "any", false, false, false, 236)) {
                // line 237
                echo "                                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 237, $this->source); })()), "homepage", [], "any", false, false, false, 237), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_PluginWebsite"), "html", null, true);
                echo "</a>";
            }
            // line 240
            if ((((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "changelog", [], "any", true, true, false, 240) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 240, $this->source); })()), "changelog", [], "any", false, false, false, 240)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "changelog", [], "any", false, true, false, 240), "url", [], "any", true, true, false, 240)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 240, $this->source); })()), "changelog", [], "any", false, false, false, 240), "url", [], "any", false, false, false, 240))) {
                // line 241
                if (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 241, $this->source); })()), "homepage", [], "any", false, false, false, 241)) {
                    echo ", ";
                }
                // line 242
                echo "                                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 242, $this->source); })()), "changelog", [], "any", false, false, false, 242), "url", [], "any", false, false, false, 242), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_Changelog"), "html", null, true);
                echo "</a>";
            }
            // line 245
            if (twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 245, $this->source); })()), "repositoryUrl", [], "any", false, false, false, 245)) {
                echo ", <a target=\"_blank\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 245, $this->source); })()), "repositoryUrl", [], "any", false, false, false, 245), "html", null, true);
                echo "\">GitHub</a>";
            }
            // line 246
            echo "                            </dd>

                            ";
            // line 248
            if ((twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 248, $this->source); })()), "activity", [], "any", false, false, false, 248) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 248, $this->source); })()), "activity", [], "any", false, false, false, 248), "numCommits", [], "any", false, false, false, 248))) {
                // line 249
                echo "                                <dt>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_Activity"), "html", null, true);
                echo "</dt>
                                <dd>
                                    ";
                // line 251
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 251, $this->source); })()), "activity", [], "any", false, false, false, 251), "numCommits", [], "any", false, false, false, 251), "html", null, true);
                echo " commits

                                    ";
                // line 253
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 253, $this->source); })()), "activity", [], "any", false, false, false, 253), "numContributors", [], "any", false, false, false, 253) > 1)) {
                    // line 254
                    echo "                                        ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_ByXDevelopers", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 254, $this->source); })()), "activity", [], "any", false, false, false, 254), "numContributors", [], "any", false, false, false, 254)), "html", null, true);
                    echo "
                                    ";
                }
                // line 256
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 256, $this->source); })()), "activity", [], "any", false, false, false, 256), "lastCommitDate", [], "any", false, false, false, 256)) {
                    // line 257
                    echo "                                        ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_LastCommitTime", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 257, $this->source); })()), "activity", [], "any", false, false, false, 257), "lastCommitDate", [], "any", false, false, false, 257)), "html", null, true);
                    echo "
                                    ";
                }
                // line 258
                echo "</dd>
                            ";
            }
            // line 260
            echo "                        </dl>

                        ";
            // line 262
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 262, $this->source); })()), "support", [], "any", false, false, false, 262))) {
                // line 263
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 263, $this->source); })()), "support", [], "any", false, false, false, 263));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 264
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 264) && twig_get_attribute($this->env, $this->source, $context["entry"], "value", [], "any", false, false, false, 264))) {
                        // line 265
                        echo "                                    <dt>";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "name", [], "any", false, false, false, 265), "html", null, true);
                        echo "</dt>
                                    <dd>";
                        // line 266
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "value", [], "any", false, false, false, 266), "html", null, true);
                        echo "</dd>
                                ";
                    }
                    // line 268
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 269
                echo "                        ";
            }
            // line 270
            echo "
                        <br />
                    </div>
                </div>
            </div>

            <script type=\"text/javascript\">
                \$(function() {

                    var active = 0;
                    ";
            // line 280
            if ((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 280, $this->source); })())) {
                // line 281
                echo "                    var \$activeTab = \$('#tabs-";
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 281, $this->source); })()), "js"), "html", null, true);
                echo "');
                    if (\$activeTab) {
                        active = \$activeTab.index() - 1;
                    }
                    ";
            }
            // line 286
            echo "
                    \$('#pluginDetailsTabs select').material_select();

                    \$('#pluginDetailsTabs .tabs').tabs();
                    \$('#pluginDetailsTabs .tabs').tabs('select', '#tabs-' + (active >= 0 ? active : 0));

                    \$('.pluginDetails a').each(function (index, a) {
                        var link = \$(a).attr('href');

                        if (link && 0 === link.indexOf('http')) {
                            \$(a).attr('target', '_blank');
                        }
                    });
                });
            </script>

            ";
            // line 302
            if (((((twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", true, true, false, 302) && twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 302, $this->source); })()), "shop", [], "any", false, false, false, 302)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 302, $this->source); })()), "shop", [], "any", false, false, false, 302), "reviews", [], "any", false, false, false, 302)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["plugin"] ?? null), "shop", [], "any", false, true, false, 302), "reviews", [], "any", false, true, false, 302), "embedUrl", [], "any", true, true, false, 302)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 302, $this->source); })()), "shop", [], "any", false, false, false, 302), "reviews", [], "any", false, false, false, 302), "embedUrl", [], "any", false, false, false, 302))) {
                // line 303
                echo "                <script type=\"text/javascript\">
                    \$(function() {
                        var \$iFrames = \$('.pluginDetails iframe.reviewIframe');
                        for (var i = 0; i < \$iFrames.length; i++) {
                            iFrameResize({checkOrigin: ['";
                // line 307
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('domainOnly')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 307, $this->source); })()), "shop", [], "any", false, false, false, 307), "reviews", [], "any", false, false, false, 307), "embedUrl", [], "any", false, false, false, 307)), "html", null, true);
                echo "']}, \$iFrames[i]);
                        }
                    });
                </script>
            ";
            }
            // line 312
            echo "
            <script type=\"text/javascript\">
                \$(function() {
                    var \$variationPicker = \$('.pluginDetails .variationPicker select');
                    if (\$variationPicker.val()) {
                        \$('.addToCartLink').attr('href', \$variationPicker.val());
                    }
                    \$variationPicker.on('change', function () {
                        \$('.addToCartLink').attr('href', \$variationPicker.val())
                    });

                    if (\$variationPicker.length) {
                        \$variationPicker.material_select();
                    }
                });
            </script>
        ";
        }
        // line 329
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "@Marketplace/plugin-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  875 => 329,  856 => 312,  848 => 307,  842 => 303,  840 => 302,  822 => 286,  813 => 281,  811 => 280,  799 => 270,  796 => 269,  790 => 268,  785 => 266,  780 => 265,  777 => 264,  772 => 263,  770 => 262,  766 => 260,  762 => 258,  756 => 257,  753 => 256,  747 => 254,  745 => 253,  740 => 251,  734 => 249,  732 => 248,  728 => 246,  722 => 245,  715 => 242,  711 => 241,  709 => 240,  702 => 237,  700 => 236,  694 => 234,  690 => 232,  676 => 231,  674 => 218,  671 => 230,  667 => 228,  665 => 227,  662 => 226,  656 => 224,  648 => 222,  646 => 221,  639 => 220,  636 => 219,  633 => 218,  616 => 217,  611 => 216,  607 => 214,  601 => 212,  596 => 210,  592 => 209,  589 => 208,  587 => 207,  581 => 205,  579 => 204,  575 => 203,  570 => 202,  568 => 201,  565 => 200,  558 => 198,  553 => 197,  550 => 196,  545 => 194,  540 => 193,  538 => 192,  533 => 190,  529 => 189,  526 => 188,  521 => 186,  516 => 185,  514 => 184,  509 => 181,  503 => 180,  499 => 178,  492 => 173,  489 => 172,  484 => 170,  479 => 169,  472 => 164,  470 => 163,  464 => 159,  462 => 158,  458 => 157,  454 => 156,  451 => 155,  449 => 154,  445 => 153,  440 => 152,  437 => 151,  434 => 150,  431 => 149,  426 => 147,  418 => 146,  414 => 144,  409 => 142,  405 => 141,  400 => 139,  394 => 135,  381 => 133,  377 => 132,  371 => 131,  366 => 130,  362 => 129,  356 => 128,  351 => 126,  348 => 125,  346 => 124,  343 => 123,  341 => 122,  338 => 121,  333 => 119,  329 => 118,  324 => 115,  321 => 114,  318 => 113,  316 => 112,  308 => 106,  302 => 103,  298 => 102,  290 => 101,  286 => 99,  284 => 98,  281 => 97,  276 => 94,  266 => 90,  259 => 88,  256 => 87,  252 => 86,  248 => 84,  246 => 83,  243 => 82,  237 => 79,  234 => 78,  232 => 77,  229 => 76,  223 => 73,  220 => 72,  218 => 71,  212 => 68,  209 => 67,  203 => 65,  201 => 64,  196 => 63,  194 => 62,  191 => 61,  188 => 60,  182 => 58,  180 => 57,  175 => 56,  173 => 55,  167 => 53,  165 => 52,  159 => 48,  153 => 46,  151 => 45,  148 => 44,  142 => 42,  140 => 41,  137 => 40,  131 => 38,  129 => 37,  126 => 36,  120 => 34,  118 => 33,  113 => 31,  103 => 25,  97 => 23,  95 => 22,  90 => 20,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  71 => 12,  68 => 11,  66 => 10,  63 => 9,  61 => 8,  56 => 7,  54 => 6,  50 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@Marketplace/macros.twig' as marketplaceMacro %}

{% block content %}

    <div class=\"pluginDetails\">
        {% if errorMessage %}
            {{ errorMessage }}
        {% elseif plugin %}

            {% set isBundle = plugin.isBundle is defined and plugin.isBundle %}

            {% if plugin.versions is not empty and plugin.versions[plugin.versions|length - 1] %}
                {% set latestVersion = plugin.versions[plugin.versions|length - 1] %}
            {% else %}
                {% set latestVersion = '' %}
            {% endif %}

            <div class=\"row\">
                <div class=\"col s12 m9\">
                    <h2>{{ plugin.displayName }}</h2>
                    <p class=\"description\">
                        {% if plugin.featured %}
                            {{ marketplaceMacro.featuredIcon('left') }}
                        {% endif %}
                        {{ plugin.description }}
                    </p>
                    <div class=\"contentDetails\">
                        <div id=\"pluginDetailsTabs\" class=\"row\">
                            <div class=\"col s12\">
                                <ul class=\"tabs\">
                                    <li class=\"tab col s3\"><a href=\"#tabs-description\">{{ 'General_Description'|translate }}</a></li>

                                    {% if latestVersion.readmeHtml.faq %}
                                        <li class=\"tab col s3\"><a href=\"#tabs-faq\">{{ 'General_Faq'|translate }}</a></li>
                                    {% endif %}

                                    {% if latestVersion.readmeHtml.documentation %}
                                        <li class=\"tab col s3\"><a href=\"#tabs-documentation\">{{ 'General_Documentation'|translate }}</a></li>
                                    {% endif %}

                                    {% if plugin.screenshots|length %}
                                        <li class=\"tab col s3\"><a href=\"#tabs-screenshots\">{{ 'Marketplace_Screenshots'|translate }}</a></li>
                                    {% endif %}

                                    {% if plugin.shop is defined and plugin.shop and plugin.shop.reviews and plugin.shop.reviews.embedUrl is defined and plugin.shop.reviews.embedUrl %}
                                        <li class=\"tab col s3\"><a href=\"#tabs-reviews\">{{ 'Marketplace_Reviews'|translate }}</a></li>
                                    {% endif %}
                                </ul>
                            </div>

                            <div id=\"tabs-description\" class=\"tab-content col s12\">
                                {% if isSuperUser and (plugin.isDownloadable or plugin.isInstalled) %}
                                    {{ marketplaceMacro.missingRequirementsPleaseUpdateNotice(plugin) }}

                                    {% if isMultiServerEnvironment %}
                                        <div class=\"alert alert-warning\">{{ 'Marketplace_MultiServerEnvironmentWarning'|translate }}</div>
                                    {% elseif not isAutoUpdateEnabled %}
                                        <div class=\"alert alert-warning\">{{ 'Marketplace_AutoUpdateDisabledWarning'|translate(\"'[General]enable_auto_update=1'\", \"'config/config.ini.php'\") }}</div>
                                    {% endif %}
                                {% endif %}

                                {% if hasSomeAdminAccess and plugin.isMissingLicense is defined and plugin.isMissingLicense %}
                                    <div class=\"alert alert-danger\">{{ 'Marketplace_PluginLicenseMissingDescription'|translate }}</div>
                                {% elseif hasSomeAdminAccess and plugin.hasExceededLicense is defined and plugin.hasExceededLicense %}
                                    <div class=\"alert alert-warning\">{{ 'Marketplace_PluginLicenseExceededDescription'|translate }}</div>
                                {% endif %}

                                <div ng-non-bindable>{{ latestVersion.readmeHtml.description|raw }}</div>
                            </div>

                            {% if latestVersion.readmeHtml.faq %}
                                <div id=\"tabs-faq\" class=\"tab-content col s12\" ng-non-bindable>
                                    {{ latestVersion.readmeHtml.faq|raw }}
                                </div>
                            {% endif %}

                            {% if latestVersion.readmeHtml.documentation %}
                                <div id=\"tabs-documentation\" class=\"tab-content col s12\" ng-non-bindable>
                                    {{ latestVersion.readmeHtml.documentation|raw }}
                                </div>
                            {% endif %}

                            {% if plugin.screenshots|length %}
                                <div id=\"tabs-screenshots\" class=\"tab-content col s12\">
                                    <div class=\"thumbnails\">
                                        {% for screenshot in plugin.screenshots %}
                                            <div class=\"thumbnail\">
                                                <a href=\"{{ screenshot }}\" target=\"_blank\"><img src=\"{{ screenshot }}?w=400\" width=\"400\" alt=\"\"></a>
                                                <p>
                                                    {{ screenshot|split('/')|last|replace({'_': ' ', '.png': '', '.jpg': '', '.jpeg': ''}) }}
                                                </p>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            {% endif %}

                            {% if plugin.shop is defined and plugin.shop and plugin.shop.reviews and plugin.shop.reviews.embedUrl is defined and plugin.shop.reviews.embedUrl %}
                                <div id=\"tabs-reviews\" class=\"tab-content col s12\">
                                    <iframe class=\"reviewIframe\"
                                            style=\"{% if plugin.shop.reviews.height %}height:{{ plugin.shop.reviews.height }}px;{% endif %}\"
                                            id=\"{{ plugin.shop.reviews.embedUrl|md5 }}\"
                                            src=\"{{ plugin.shop.reviews.embedUrl|raw }}\"></iframe>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"col s12 m3\">
                    <div class=\"metadata\">
                        <div class=\"actionButton\">
                            {% if not plugin.isDownloadable or not isSuperUser %}
                                {% if hasSomeAdminAccess and plugin.hasExceededLicense is defined and plugin.hasExceededLicense and plugin.consumer %}
                                    {% if plugin.consumer.loginUrl is defined and plugin.consumer.loginUrl %}
                                        <a class=\"install update\"
                                           target=\"_blank\"
                                           rel=\"noreferrer noopener\"
                                           href=\"{{ plugin.consumer.loginUrl|default('')|e('html_attr') }}\"
                                        >{{ 'Marketplace_UpgradeSubscription'|translate }}</a>
                                    {% endif %}

                                {% elseif not plugin.isDownloadable and plugin.isPaid and plugin.shop is defined and plugin.shop %}

                                    {% if plugin.shop.variations|length %}

                                        <h4 style=\"color:#5bb75b;font-weight: bold;font-size: 1.2em;\">{{ 'Marketplace_TryFreeTrialTitle'|translate }}</h4>
                                        <div class=\"input-field variationPicker\">
                                            <select title=\"{{ 'Marketplace_ShownPriceIsExclTax'|translate|e('html_attr') }} {{ 'Marketplace_CurrentNumPiwikUsers'|translate(numUsers)|e('html_attr') }}\">
                                                {% for variation in plugin.shop.variations %}
                                                    <option value=\"{{ variation.addToCartUrl }}\"
                                                            title=\"{{ 'Marketplace_PriceExclTax'|translate(variation.price, variation.currency)|e('html_attr') }} {{ 'Marketplace_CurrentNumPiwikUsers'|translate(numUsers)|e('html_attr') }}\"
                                                            {% if variation.recommended is defined and variation.recommended %}selected{% endif %}
                                                    >{{ variation.name }} - {{ variation.prettyPrice }} / {{ variation.period }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>

                                        <a class=\"install update addToCartLink\" target=\"_blank\"
                                           title=\"{{ 'Marketplace_ClickToCompletePurchase'|translate|e('html_attr') }}\"
                                           rel=\"noreferrer noopener\"
                                           href=\"{{ plugin.shop.url|default('')|e('html_attr') }}\"
                                        >{{ 'Marketplace_AddToCart'|translate }}</a>
                                    {% else %}
                                        <a class=\"install update\" target=\"_blank\"
                                           rel=\"noreferrer noopener\"
                                           href=\"{% if plugin.shop is defined and plugin.shop and plugin.shop.url %}{{ plugin.shop.url|e('html_attr') }}{% else %}{{ plugin.homepage|e('html_attr') }}{% endif %}\"
                                        >{{ 'General_MoreDetails'|translate }}</a>
                                    {% endif %}
                                {% endif %}
                            {% elseif isSuperUser %}
                                {% if not isAutoUpdatePossible %}
                                    <a onclick=\"\$(this).css('display', 'none')\" href=\"{{ linkTo({'action': 'download', 'pluginName': plugin.name, 'nonce': (plugin.name|nonce)}) }}\"
                                       class=\"download\">{{ 'General_Download'|translate }}</a>
                                {% elseif plugin.canBeUpdated and 0 == plugin.missingRequirements|length %}
                                    <a class=\"install update\"
                                       href=\"{{ linkTo({'module': 'Marketplace', 'action':'updatePlugin', 'pluginName': plugin.name, 'nonce': updateNonce}) }}\"
                                    >{{ 'CoreUpdater_UpdateTitle'|translate }}</a>
                                {% elseif plugin.isInstalled %}
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                {% elseif 0 < plugin.missingRequirements|length %}
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                {% else %}
                                    <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'installPlugin', 'pluginName': plugin.name, 'nonce': installNonce}) }}\"
                                       class=\"install\">{{ 'Marketplace_ActionInstall'|translate }}</a>
                                {% endif %}
                            {% else %}
                                <br />
                                <br />
                                <br />
                                <br />
                            {% endif %}
                        </div>

                        {% if plugin.specialOffer is defined and plugin.specialOffer %}<p style=\"color: green;\"><br />{{ plugin.specialOffer }}</p>{% endif %}

                        <p><br /></p>
                        <dl>
                            {% if not isBundle %}
                                <dt>{{ 'CorePluginsAdmin_Version'|translate }}</dt>
                                <dd>{{ plugin.latestVersion }}</dd>
                            {% endif %}

                            <dt>{{ 'Marketplace_PluginKeywords'|translate }}</dt>
                            <dd>{{ plugin.keywords|join(', ') }}</dd>

                            {% if plugin.lastUpdated and not isBundle %}
                                <dt>{{ 'Marketplace_LastUpdated'|translate }}</dt>
                                <dd>{{ plugin.lastUpdated }}</dd>
                            {% endif %}
                            {% if plugin.numDownloads %}
                                <dt>{{ 'General_Downloads'|translate }}</dt>
                                <dd title=\"{{ 'Marketplace_NumDownloadsLatestVersion'|translate(latestVersion.numDownloads|number_format) }}\">{{ plugin.numDownloads }}</dd>
                            {% endif %}

                            {% if not isBundle %}
                                <dt>{{ 'Marketplace_Developer'|translate }}</dt>
                                <dd>{{ marketplaceMacro.pluginDeveloper(plugin.owner) }}</dd>
                                {% if latestVersion and latestVersion.license is defined and latestVersion.license and latestVersion.license.name is defined and latestVersion.license.name %}
                                    <dt>{{ 'Marketplace_License'|translate }}</dt>
                                    <dd>
                                        {% if latestVersion.license.url is defined and latestVersion.license.url %}
                                            <a rel=\"noreferrer noopener\"
                                               href=\"{{ latestVersion.license.url }}\"
                                               target=\"_blank\">{{ latestVersion.license.name }}</a>
                                        {% else %}
                                            {{ latestVersion.license.name }}
                                        {% endif %}
                                    </dd>
                                {% endif %}
                                <dt>{{ 'Marketplace_Authors'|translate }}</dt>
                                <dd>{% for author in plugin.authors|filter(author => author.name) %}
                                        {% apply spaceless %}
                                            {% if author.homepage %}
                                                <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ author.homepage }}\">{{ author.name }}</a>
                                            {% elseif author.email %}
                                                <a href=\"mailto:{{ author.email|escape('url') }}\">{{ author.name }}</a>
                                            {% else %}
                                                {{ author.name }}
                                            {% endif %}

                                            {% if loop.index < plugin.authors|length %}
                                                ,
                                            {% endif %}
                                        {% endapply %}
                                    {% endfor %}
                                </dd>
                            {% endif %}
                            <dt>{{ 'CorePluginsAdmin_Websites'|translate }}</dt>
                            <dd>
                                {% if plugin.homepage %}
                                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ plugin.homepage }}\">{{ 'Marketplace_PluginWebsite'|translate }}</a>
                                {%- endif -%}

                                {%- if plugin.changelog is defined and plugin.changelog and plugin.changelog.url is defined and plugin.changelog.url -%}
                                    {%- if plugin.homepage %}, {% endif %}
                                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ plugin.changelog.url }}\">{{ 'CorePluginsAdmin_Changelog'|translate }}</a>
                                {%- endif -%}

                                {%- if plugin.repositoryUrl %}, <a target=\"_blank\" href=\"{{ plugin.repositoryUrl }}\">GitHub</a>{% endif %}
                            </dd>

                            {% if plugin.activity and plugin.activity.numCommits %}
                                <dt>{{ 'CorePluginsAdmin_Activity'|translate }}</dt>
                                <dd>
                                    {{ plugin.activity.numCommits }} commits

                                    {% if plugin.activity.numContributors > 1 %}
                                        {{ 'Marketplace_ByXDevelopers'|translate(plugin.activity.numContributors) }}
                                    {% endif %}
                                    {% if plugin.activity.lastCommitDate %}
                                        {{ 'Marketplace_LastCommitTime'|translate(plugin.activity.lastCommitDate) }}
                                    {% endif %}</dd>
                            {% endif %}
                        </dl>

                        {% if plugin.support is not empty %}
                            {% for entry in plugin.support %}
                                {% if entry.name and entry.value %}
                                    <dt>{{ entry.name }}</dt>
                                    <dd>{{ entry.value }}</dd>
                                {% endif %}
                            {% endfor %}
                        {% endif %}

                        <br />
                    </div>
                </div>
            </div>

            <script type=\"text/javascript\">
                \$(function() {

                    var active = 0;
                    {% if activeTab %}
                    var \$activeTab = \$('#tabs-{{ activeTab|e('js') }}');
                    if (\$activeTab) {
                        active = \$activeTab.index() - 1;
                    }
                    {% endif %}

                    \$('#pluginDetailsTabs select').material_select();

                    \$('#pluginDetailsTabs .tabs').tabs();
                    \$('#pluginDetailsTabs .tabs').tabs('select', '#tabs-' + (active >= 0 ? active : 0));

                    \$('.pluginDetails a').each(function (index, a) {
                        var link = \$(a).attr('href');

                        if (link && 0 === link.indexOf('http')) {
                            \$(a).attr('target', '_blank');
                        }
                    });
                });
            </script>

            {% if plugin.shop is defined and plugin.shop and plugin.shop.reviews and plugin.shop.reviews.embedUrl is defined and plugin.shop.reviews.embedUrl %}
                <script type=\"text/javascript\">
                    \$(function() {
                        var \$iFrames = \$('.pluginDetails iframe.reviewIframe');
                        for (var i = 0; i < \$iFrames.length; i++) {
                            iFrameResize({checkOrigin: ['{{ plugin.shop.reviews.embedUrl|domainOnly }}']}, \$iFrames[i]);
                        }
                    });
                </script>
            {% endif %}

            <script type=\"text/javascript\">
                \$(function() {
                    var \$variationPicker = \$('.pluginDetails .variationPicker select');
                    if (\$variationPicker.val()) {
                        \$('.addToCartLink').attr('href', \$variationPicker.val());
                    }
                    \$variationPicker.on('change', function () {
                        \$('.addToCartLink').attr('href', \$variationPicker.val())
                    });

                    if (\$variationPicker.length) {
                        \$variationPicker.material_select();
                    }
                });
            </script>
        {% endif %}
    </div>


{% endblock %}
", "@Marketplace/plugin-details.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/Marketplace/templates/plugin-details.twig");
    }
}
