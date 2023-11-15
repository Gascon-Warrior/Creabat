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

/* @SitesManager/_siteWithoutDataTabs.twig */
class __TwigTemplate_7e1c4534f75d5149cf84063d8c42b572 extends Template
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
        echo "<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.tabs').tabs({
            'onShow': function (element) {
                var id = element.getAttribute('id');
                if (!id) {
                    return;
                }
                window.CoreHome.MatomoUrl.updateHash({...window.CoreHome.MatomoUrl.hashParsed.value, activeTab: id})
            }
        });
        var selectedTab = window.CoreHome.MatomoUrl.hashParsed.value.activeTab;
        if (selectedTab) {
            M.Tabs.getInstance(\$('.tabs')).select(selectedTab);
        }
    });
</script>

";
        // line 19
        $context["columnClass"] = (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 19, $this->source); })())) ? ("s2") : ("s3"));
        // line 20
        echo "
<div class=\"row no-data-tabs-main-div\">
    <div class=\"col s12 tabs-row\">
        <ul class=\"tabs no-data-screen-ul-tabs\">
            <li class=\"tab col ";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\"><a ";
        if (((((isset($context["siteType"]) || array_key_exists("siteType", $context) ? $context["siteType"] : (function () { throw new RuntimeError('Variable "siteType" does not exist.', 24, $this->source); })()) != twig_constant("Piwik\\Plugins\\SitesManager\\SitesManager::SITE_TYPE_UNKNOWN")) && ((isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 24, $this->source); })()) == false)) && ((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 24, $this->source); })()) == ""))) {
            echo " class=\"active\" ";
        }
        echo " href=\"#integrations\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_Integrations"), "html", null, true);
        echo "</a></li>
            <li class=\"tab col ";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\"><a ";
        if (((((isset($context["siteType"]) || array_key_exists("siteType", $context) ? $context["siteType"] : (function () { throw new RuntimeError('Variable "siteType" does not exist.', 25, $this->source); })()) == twig_constant("Piwik\\Plugins\\SitesManager\\SitesManager::SITE_TYPE_UNKNOWN")) && ((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 25, $this->source); })()) == "")) || ((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 25, $this->source); })()) == "consentManager"))) {
            echo " class=\"active\" ";
        }
        echo " href=\"#tracking-code\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
        echo "</a></li>
            <li class=\"tab col ";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\"><a href=\"#mtm\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMatomoTagManager"), "html", null, true);
        echo "</a></li>
            ";
        // line 27
        if ((isset($context["gtmUsed"]) || array_key_exists("gtmUsed", $context) ? $context["gtmUsed"] : (function () { throw new RuntimeError('Variable "gtmUsed" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "                <li class=\"tab col s2\"><a ";
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 28, $this->source); })()) == "gtm")) {
                echo " class=\"active\" ";
            }
            echo " href=\"#google-tag-manager\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManager"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 30
        echo "            ";
        if (((isset($context["cms"]) || array_key_exists("cms", $context) ? $context["cms"] : (function () { throw new RuntimeError('Variable "cms" does not exist.', 30, $this->source); })()) == "wordpress")) {
            // line 31
            echo "                <li class=\"tab col s2\"><a ";
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 31, $this->source); })()) == "wordpress")) {
                echo " class=\"active\" ";
            }
            echo " href=\"#wordpress\">WordPress</a></li>
            ";
        }
        // line 33
        echo "            ";
        if ((isset($context["cloudflare"]) || array_key_exists("cloudflare", $context) ? $context["cloudflare"] : (function () { throw new RuntimeError('Variable "cloudflare" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "                <li class=\"tab col s2\"><a ";
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 34, $this->source); })()) == "cloudflare")) {
                echo " class=\"active\" ";
            }
            echo " href=\"#cloudflare\">Cloudflare</a></li>
            ";
        }
        // line 36
        echo "            ";
        if (((isset($context["jsFramework"]) || array_key_exists("jsFramework", $context) ? $context["jsFramework"] : (function () { throw new RuntimeError('Variable "jsFramework" does not exist.', 36, $this->source); })()) == "vue")) {
            // line 37
            echo "                <li class=\"tab col s2\"><a ";
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 37, $this->source); })()) == "vue")) {
                echo " class=\"active\" ";
            }
            echo " href=\"#vue\">Vue.js</a></li>
            ";
        }
        // line 39
        echo "            ";
        if (((isset($context["jsFramework"]) || array_key_exists("jsFramework", $context) ? $context["jsFramework"] : (function () { throw new RuntimeError('Variable "jsFramework" does not exist.', 39, $this->source); })()) == "react")) {
            // line 40
            echo "                <li class=\"tab col s2\"><a ";
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 40, $this->source); })()) == "react")) {
                echo " class=\"active\" ";
            }
            echo " href=\"#react\">React.js</a></li>
            ";
        }
        // line 42
        echo "            ";
        if ((isset($context["tagManagerActive"]) || array_key_exists("tagManagerActive", $context) ? $context["tagManagerActive"] : (function () { throw new RuntimeError('Variable "tagManagerActive" does not exist.', 42, $this->source); })())) {
            // line 43
            echo "                <li class=\"tab col ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\"><a href=\"#spa\">SPA / PWA</a></li>
            ";
        }
        // line 45
        echo "            ";
        if ((isset($context["showGAImportTab"]) || array_key_exists("showGAImportTab", $context) ? $context["showGAImportTab"] : (function () { throw new RuntimeError('Variable "showGAImportTab" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                <li class=\"tab col ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\"><a ";
            if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 46, $this->source); })()) == "ga-import")) {
                echo " class=\"active\" ";
            }
            echo " href=\"#ga-import\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleAnalyticsImport"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 48
        echo "            <li class=\"tab col ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\"><a href=\"#other\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataOtherWays"), "html", null, true);
        echo "</a></li>
        </ul>
    </div>

    <div id=\"integrations\" class=\"col s12\">
        ";
        // line 53
        if ((isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "            <p>";
            echo (isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 54, $this->source); })());
            echo "</p>

            ";
            // line 56
            if ((isset($context["gtmUsed"]) || array_key_exists("gtmUsed", $context) ? $context["gtmUsed"] : (function () { throw new RuntimeError('Variable "gtmUsed" does not exist.', 56, $this->source); })())) {
                // line 57
                echo "                <p>";
                echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataDetectedGtm", twig_capitalize_string_filter($this->env, (isset($context["siteType"]) || array_key_exists("siteType", $context) ? $context["siteType"] : (function () { throw new RuntimeError('Variable "siteType" does not exist.', 57, $this->source); })())), "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">", "</a>");
                echo "</p>
            ";
            }
            // line 59
            echo "
            <p>";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataOtherIntegrations"), "html", null, true);
            echo ": ";
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
            echo "</p>
        ";
        } else {
            // line 62
            echo "            <p>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_InstallationGuidesIntro"), "html", null, true);
            echo "

            <p>
                <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'>WordPress</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/'>Squarespace</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/'>Wix</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/how-to-install/faq_19424/'>SharePoint</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/'>Joomla</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/'>Shopify</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/'>Google Tag Manager</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/'>Cloudflare</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/'>Vue</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/'>React</a>
            </p>

            <p>";
            // line 77
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
            echo "</p>
            <p>";
            // line 78
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3b");
            echo "</p>
            <br>
            <p>";
            // line 80
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_ExtraInformationNeeded"), "html", null, true);
            echo "</p>
            <p>Matomo URL: <code piwik-select-on-focus>";
            // line 81
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 81, $this->source); })()), "html", null, true);
            echo "</code></p>
            <p>";
            // line 82
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code piwik-select-on-focus>" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 82, $this->source); })())) . "</code>"));
            echo "</p>
        ";
        }
        // line 84
        echo "    </div>

    <div id=\"tracking-code\" class=\"col s12\">
        ";
        // line 87
        if ((isset($context["notificationMessage"]) || array_key_exists("notificationMessage", $context) ? $context["notificationMessage"] : (function () { throw new RuntimeError('Variable "notificationMessage" does not exist.', 87, $this->source); })())) {
            // line 88
            echo "            <p></p><p></p>
            <div class=\"system notification notification-info ";
            // line 89
            echo (((isset($context["isNotificationsMerged"]) || array_key_exists("isNotificationsMerged", $context) ? $context["isNotificationsMerged"] : (function () { throw new RuntimeError('Variable "isNotificationsMerged" does not exist.', 89, $this->source); })())) ? (" merged-notification") : (""));
            echo "\">
                ";
            // line 90
            echo (isset($context["notificationMessage"]) || array_key_exists("notificationMessage", $context) ? $context["notificationMessage"] : (function () { throw new RuntimeError('Variable "notificationMessage" does not exist.', 90, $this->source); })());
            echo "
            </div>
        ";
        }
        // line 93
        echo "
        <p>";
        // line 94
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead", "&lt;/head&gt;");
        echo "</p>

        <div
                vue-entry=\"CoreAdminHome.JsTrackingCodeGeneratorSitesWithoutData\"
                default-site=\"";
        // line 98
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultSiteDecoded"]) || array_key_exists("defaultSiteDecoded", $context) ? $context["defaultSiteDecoded"] : (function () { throw new RuntimeError('Variable "defaultSiteDecoded" does not exist.', 98, $this->source); })())), "html", null, true);
        echo "\"
                max-custom-variables=\"";
        // line 99
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["maxCustomVariables"]) || array_key_exists("maxCustomVariables", $context) ? $context["maxCustomVariables"] : (function () { throw new RuntimeError('Variable "maxCustomVariables" does not exist.', 99, $this->source); })())), "html", null, true);
        echo "\"
                server-side-do-not-track-enabled=\"";
        // line 100
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["serverSideDoNotTrackEnabled"]) || array_key_exists("serverSideDoNotTrackEnabled", $context) ? $context["serverSideDoNotTrackEnabled"] : (function () { throw new RuntimeError('Variable "serverSideDoNotTrackEnabled" does not exist.', 100, $this->source); })())), "html", null, true);
        echo "\"
                js-tag=\"";
        // line 101
        echo (isset($context["jsTag"]) || array_key_exists("jsTag", $context) ? $context["jsTag"] : (function () { throw new RuntimeError('Variable "jsTag" does not exist.', 101, $this->source); })());
        echo "\"
        ></div>
    </div>

    <div id=\"mtm\" class=\"col s12\">
        ";
        // line 106
        if ((isset($context["tagManagerActive"]) || array_key_exists("tagManagerActive", $context) ? $context["tagManagerActive"] : (function () { throw new RuntimeError('Variable "tagManagerActive" does not exist.', 106, $this->source); })())) {
            // line 107
            echo "            ";
            echo $this->env->getFunction('postEvent')->getCallable()("Template.endTrackingCodePage");
            echo "
        ";
        } else {
            // line 109
            echo "                <h3>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMatomoTagManager"), "html", null, true);
            echo "</h3>
                <p>";
            // line 110
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMatomoTagManagerNotActive", "<a href=\"https://matomo.org/docs/tag-manager/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
            echo "</p>
        ";
        }
        // line 112
        echo "    </div>

    ";
        // line 114
        if ((isset($context["gtmUsed"]) || array_key_exists("gtmUsed", $context) ? $context["gtmUsed"] : (function () { throw new RuntimeError('Variable "gtmUsed" does not exist.', 114, $this->source); })())) {
            // line 115
            echo "        <div id=\"google-tag-manager\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                ";
            // line 119
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GTMDetected", "<a href=\"https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>");
            echo "
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/google-tag-manager-icon.png\" style=\"margin-top: -3rem;\">
            </div>
            ";
            // line 125
            echo $this->env->getFunction('postEvent')->getCallable()("Template.noDataPageGTMTabInstructions");
            echo "

        </div>
    ";
        }
        // line 129
        echo "
    ";
        // line 130
        if (((isset($context["cms"]) || array_key_exists("cms", $context) ? $context["cms"] : (function () { throw new RuntimeError('Variable "cms" does not exist.', 130, $this->source); })()) == "wordpress")) {
            // line 131
            echo "        <div id=\"wordpress\" class=\"col s12\">

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/wordpress-icon.png\" style=\"margin-top: -3rem;\">
            </div>
            ";
            // line 136
            echo $this->env->getFunction('postEvent')->getCallable()("Template.noDataPageWordpressTabInstructions");
            echo "

        </div>
    ";
        }
        // line 140
        echo "
    ";
        // line 141
        if ((isset($context["cloudflare"]) || array_key_exists("cloudflare", $context) ? $context["cloudflare"] : (function () { throw new RuntimeError('Variable "cloudflare" does not exist.', 141, $this->source); })())) {
            // line 142
            echo "        <div id=\"cloudflare\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                ";
            // line 146
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_CloudflareDetected", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">", "</a>");
            echo "
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/cloudflare-icon.png\" style=\"height: 12rem;width: 12rem;margin-top: -4rem;\">
            </div>
            <p>";
            // line 152
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareIntro"), "html", null, true);
            echo "</p>
            <br>
            <p>";
            // line 154
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStepsIntro"), "html", null, true);
            echo "</p>
            <ol style=\"list-style: decimal;list-style-position: inside;\">
                <li>";
            // line 156
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep01", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://dash.cloudflare.com/\">", "</a>");
            echo "</li>
                <li>";
            // line 157
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep02"), "html", null, true);
            echo "</li>
                <li>";
            // line 158
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep03"), "html", null, true);
            echo "</li>
                <li>";
            // line 159
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep04"), "html", null, true);
            echo "</li>
                <li>";
            // line 160
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep05"), "html", null, true);
            echo "</li>
                <li>";
            // line 161
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep06"), "html", null, true);
            echo "</li>
                <li>";
            // line 162
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep07"), "html", null, true);
            echo "<div style=\"text-indent: 1.2rem;\">Matomo URL: <code vue-directive=\"CoreHome.SelectOnFocus\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 162, $this->source); })()), "html", null, true);
            echo "</code></div><div style=\"text-indent: 1.2rem;\">";
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code vue-directive=\"CoreHome.CopyToClipboard\">" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 162, $this->source); })())) . "</code>"));
            echo "</div></li>
                <li>";
            // line 163
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep08"), "html", null, true);
            echo "</li>
                <li>";
            // line 164
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep09"), "html", null, true);
            echo "</li>
                <li>";
            // line 165
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep10"), "html", null, true);
            echo "</li>
            </ol>
            <br>
            <p>";
            // line 168
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStepCompleted", "<strong>", "</strong>");
            echo "</p>
        </div>
    ";
        }
        // line 171
        echo "
    ";
        // line 172
        if (((isset($context["jsFramework"]) || array_key_exists("jsFramework", $context) ? $context["jsFramework"] : (function () { throw new RuntimeError('Variable "jsFramework" does not exist.', 172, $this->source); })()) == "vue")) {
            // line 173
            echo "        <div id=\"vue\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                ";
            // line 177
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_VueDetected", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/\">", "</a>");
            echo "
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/vue-icon.png\" style=\"height: 5rem;\">
            </div>
            ";
            // line 183
            $this->loadTemplate("@SitesManager/_vueTabInstructions.twig", "@SitesManager/_siteWithoutDataTabs.twig", 183)->display($context);
            // line 184
            echo "
        </div>
    ";
        }
        // line 187
        echo "
    ";
        // line 188
        if (((isset($context["jsFramework"]) || array_key_exists("jsFramework", $context) ? $context["jsFramework"] : (function () { throw new RuntimeError('Variable "jsFramework" does not exist.', 188, $this->source); })()) == "react")) {
            // line 189
            echo "        <div id=\"react\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                ";
            // line 193
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_ReactDetected", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guide/tag-manager/\">", "</a>", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/\">", "</a>");
            echo "
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/react-icon.png\" style=\"height: 5rem;\">
            </div>
            ";
            // line 199
            echo $this->env->getFunction('postEvent')->getCallable()("Template.embedReactTagManagerTrackingCode");
            echo "

        </div>
    ";
        }
        // line 203
        echo "
    ";
        // line 204
        if ((isset($context["tagManagerActive"]) || array_key_exists("tagManagerActive", $context) ? $context["tagManagerActive"] : (function () { throw new RuntimeError('Variable "tagManagerActive" does not exist.', 204, $this->source); })())) {
            // line 205
            echo "        <div id=\"spa\" class=\"col s12\">
            ";
            // line 206
            $this->loadTemplate("@SitesManager/_spa.twig", "@SitesManager/_siteWithoutDataTabs.twig", 206)->display($context);
            // line 207
            echo "        </div>
    ";
        }
        // line 209
        echo "
    ";
        // line 210
        if ((isset($context["showGAImportTab"]) || array_key_exists("showGAImportTab", $context) ? $context["showGAImportTab"] : (function () { throw new RuntimeError('Variable "showGAImportTab" does not exist.', 210, $this->source); })())) {
            // line 211
            echo "        <div id=\"ga-import\" class=\"col s12\">
            ";
            // line 212
            echo $this->env->getFunction('postEvent')->getCallable()("Template.embedGAImportNoData", (isset($context["ga3Used"]) || array_key_exists("ga3Used", $context) ? $context["ga3Used"] : (function () { throw new RuntimeError('Variable "ga3Used" does not exist.', 212, $this->source); })()));
            echo "
        </div>
    ";
        }
        // line 215
        echo "
    <div id=\"other\" class=\"col s12\">
        <p>";
        // line 217
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_OtherWaysTabDescription"), "html", null, true);
        echo "</p>
        <p>Matomo URL: <code piwik-select-on-focus>";
        // line 218
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 218, $this->source); })()), "html", null, true);
        echo "</code></p>
        <p>";
        // line 219
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code vue-directive=\"CoreHome.CopyToClipboard\">" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 219, $this->source); })())) . "</code>"));
        echo "</p>

        <h3>";
        // line 221
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ImageTracking"), "html", null, true);
        echo "</h3>
        <p>";
        // line 222
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_ImageTrackingDescription", "<a href=\"https://matomo.org/docs/tracking-api/reference/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        <h3>";
        // line 224
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalytics"), "html", null, true);
        echo "</h3>
        <p>";
        // line 225
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalyticsDescription", "<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        <h3>";
        // line 227
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
        echo "</h3>
        <p>";
        // line 228
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKsDescription", "<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        <h3>";
        // line 230
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
        echo "</h3>
        <p>";
        // line 231
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApiDescription", "<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        ";
        // line 233
        if ( !(isset($context["gtmUsed"]) || array_key_exists("gtmUsed", $context) ? $context["gtmUsed"] : (function () { throw new RuntimeError('Variable "gtmUsed" does not exist.', 233, $this->source); })())) {
            // line 234
            echo "            <h3>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManager"), "html", null, true);
            echo "</h3>
            <p>";
            // line 235
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">", "</a>");
            echo "</p>
        ";
        }
        // line 237
        echo "
        ";
        // line 238
        if ( !((isset($context["cms"]) || array_key_exists("cms", $context) ? $context["cms"] : (function () { throw new RuntimeError('Variable "cms" does not exist.', 238, $this->source); })()) === "wordpress")) {
            // line 239
            echo "            <h3>WordPress</h3>
            <p>";
            // line 240
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/\">", "</a>");
            echo "</p>
        ";
        }
        // line 242
        echo "
        <h3>";
        // line 243
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
        echo "</h3>
        <p>";
        // line 244
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplicationDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">", "</a>");
        echo "</p>

        ";
        // line 246
        if ( !(isset($context["cloudflare"]) || array_key_exists("cloudflare", $context) ? $context["cloudflare"] : (function () { throw new RuntimeError('Variable "cloudflare" does not exist.', 246, $this->source); })())) {
            // line 247
            echo "            <h3>Cloudflare</h3>
            <p>";
            // line 248
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">", "</a>");
            echo "</p>
        ";
        }
        // line 250
        echo "
        ";
        // line 251
        if ( !((isset($context["jsFramework"]) || array_key_exists("jsFramework", $context) ? $context["jsFramework"] : (function () { throw new RuntimeError('Variable "jsFramework" does not exist.', 251, $this->source); })()) === "vue")) {
            // line 252
            echo "            <h3>Vue.js</h3>
            <p>";
            // line 253
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/\">", "</a>");
            echo "</p>
        ";
        }
        // line 255
        echo "
        ";
        // line 256
        if ( !((isset($context["jsFramework"]) || array_key_exists("jsFramework", $context) ? $context["jsFramework"] : (function () { throw new RuntimeError('Variable "jsFramework" does not exist.', 256, $this->source); })()) === "react")) {
            // line 257
            echo "            <h3>React.js</h3>
            <p>";
            // line 258
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataReactDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guide/tag-manager/\">", "</a>", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/\">", "</a>");
            echo "</p>
        ";
        }
        // line 260
        echo "
        ";
        // line 261
        if ((array_key_exists("googleAnalyticsImporterMessage", $context) &&  !twig_test_empty((isset($context["googleAnalyticsImporterMessage"]) || array_key_exists("googleAnalyticsImporterMessage", $context) ? $context["googleAnalyticsImporterMessage"] : (function () { throw new RuntimeError('Variable "googleAnalyticsImporterMessage" does not exist.', 261, $this->source); })())))) {
            // line 262
            echo "            ";
            echo (isset($context["googleAnalyticsImporterMessage"]) || array_key_exists("googleAnalyticsImporterMessage", $context) ? $context["googleAnalyticsImporterMessage"] : (function () { throw new RuntimeError('Variable "googleAnalyticsImporterMessage" does not exist.', 262, $this->source); })());
            echo "
        ";
        } elseif (( !        // line 263
(isset($context["ga3Used"]) || array_key_exists("ga3Used", $context) ? $context["ga3Used"] : (function () { throw new RuntimeError('Variable "ga3Used" does not exist.', 263, $this->source); })()) &&  !(isset($context["ga4Used"]) || array_key_exists("ga4Used", $context) ? $context["ga4Used"] : (function () { throw new RuntimeError('Variable "ga4Used" does not exist.', 263, $this->source); })()))) {
            // line 264
            echo "            <h3>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_ImportDataFromGoogleAnalytics"), "html", null, true);
            echo "</h3>
            <p>";
            // line 265
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_ImportDataFromGoogleAnalyticsDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guide/installation-maintenance/import-google-analytics/\">", "</a>");
            echo "</p>
        ";
        }
        // line 267
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SitesManager/_siteWithoutDataTabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 267,  671 => 265,  666 => 264,  664 => 263,  659 => 262,  657 => 261,  654 => 260,  649 => 258,  646 => 257,  644 => 256,  641 => 255,  636 => 253,  633 => 252,  631 => 251,  628 => 250,  623 => 248,  620 => 247,  618 => 246,  613 => 244,  609 => 243,  606 => 242,  601 => 240,  598 => 239,  596 => 238,  593 => 237,  588 => 235,  583 => 234,  581 => 233,  576 => 231,  572 => 230,  567 => 228,  563 => 227,  558 => 225,  554 => 224,  549 => 222,  545 => 221,  540 => 219,  536 => 218,  532 => 217,  528 => 215,  522 => 212,  519 => 211,  517 => 210,  514 => 209,  510 => 207,  508 => 206,  505 => 205,  503 => 204,  500 => 203,  493 => 199,  484 => 193,  478 => 189,  476 => 188,  473 => 187,  468 => 184,  466 => 183,  457 => 177,  451 => 173,  449 => 172,  446 => 171,  440 => 168,  434 => 165,  430 => 164,  426 => 163,  418 => 162,  414 => 161,  410 => 160,  406 => 159,  402 => 158,  398 => 157,  394 => 156,  389 => 154,  384 => 152,  375 => 146,  369 => 142,  367 => 141,  364 => 140,  357 => 136,  350 => 131,  348 => 130,  345 => 129,  338 => 125,  329 => 119,  323 => 115,  321 => 114,  317 => 112,  312 => 110,  307 => 109,  301 => 107,  299 => 106,  291 => 101,  287 => 100,  283 => 99,  279 => 98,  272 => 94,  269 => 93,  263 => 90,  259 => 89,  256 => 88,  254 => 87,  249 => 84,  244 => 82,  240 => 81,  236 => 80,  231 => 78,  227 => 77,  208 => 62,  201 => 60,  198 => 59,  192 => 57,  190 => 56,  184 => 54,  182 => 53,  171 => 48,  159 => 46,  156 => 45,  150 => 43,  147 => 42,  139 => 40,  136 => 39,  128 => 37,  125 => 36,  117 => 34,  114 => 33,  106 => 31,  103 => 30,  93 => 28,  91 => 27,  85 => 26,  75 => 25,  65 => 24,  59 => 20,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.tabs').tabs({
            'onShow': function (element) {
                var id = element.getAttribute('id');
                if (!id) {
                    return;
                }
                window.CoreHome.MatomoUrl.updateHash({...window.CoreHome.MatomoUrl.hashParsed.value, activeTab: id})
            }
        });
        var selectedTab = window.CoreHome.MatomoUrl.hashParsed.value.activeTab;
        if (selectedTab) {
            M.Tabs.getInstance(\$('.tabs')).select(selectedTab);
        }
    });
</script>

{% set columnClass = activeTab ? 's2' : 's3' %}

<div class=\"row no-data-tabs-main-div\">
    <div class=\"col s12 tabs-row\">
        <ul class=\"tabs no-data-screen-ul-tabs\">
            <li class=\"tab col {{ columnClass }}\"><a {% if siteType != constant('Piwik\\\\Plugins\\\\SitesManager\\\\SitesManager::SITE_TYPE_UNKNOWN') and (consentManagerName == false) and (activeTab == '') %} class=\"active\" {% endif %} href=\"#integrations\">{{ 'SitesManager_Integrations'|translate }}</a></li>
            <li class=\"tab col {{ columnClass }}\"><a {% if (siteType == constant('Piwik\\\\Plugins\\\\SitesManager\\\\SitesManager::SITE_TYPE_UNKNOWN') and (activeTab == '') or activeTab == 'consentManager') %} class=\"active\" {% endif %} href=\"#tracking-code\">{{ 'CoreAdminHome_TrackingCode'|translate }}</a></li>
            <li class=\"tab col {{ columnClass }}\"><a href=\"#mtm\">{{ 'SitesManager_SiteWithoutDataMatomoTagManager'|translate }}</a></li>
            {% if gtmUsed %}
                <li class=\"tab col s2\"><a {% if activeTab == 'gtm' %} class=\"active\" {% endif %} href=\"#google-tag-manager\">{{ 'SitesManager_SiteWithoutDataGoogleTagManager'|translate }}</a></li>
            {% endif %}
            {% if cms == 'wordpress' %}
                <li class=\"tab col s2\"><a {% if activeTab == 'wordpress' %} class=\"active\" {% endif %} href=\"#wordpress\">WordPress</a></li>
            {% endif %}
            {% if cloudflare %}
                <li class=\"tab col s2\"><a {% if activeTab == 'cloudflare' %} class=\"active\" {% endif %} href=\"#cloudflare\">Cloudflare</a></li>
            {% endif %}
            {% if jsFramework == 'vue' %}
                <li class=\"tab col s2\"><a {% if activeTab == 'vue' %} class=\"active\" {% endif %} href=\"#vue\">Vue.js</a></li>
            {% endif %}
            {% if jsFramework == 'react' %}
                <li class=\"tab col s2\"><a {% if activeTab == 'react' %} class=\"active\" {% endif %} href=\"#react\">React.js</a></li>
            {% endif %}
            {%  if tagManagerActive %}
                <li class=\"tab col {{ columnClass }}\"><a href=\"#spa\">SPA / PWA</a></li>
            {% endif %}
            {% if showGAImportTab %}
                <li class=\"tab col {{ columnClass }}\"><a {% if activeTab == 'ga-import' %} class=\"active\" {% endif %} href=\"#ga-import\">{{ 'SitesManager_SiteWithoutDataGoogleAnalyticsImport'|translate }}</a></li>
            {% endif %}
            <li class=\"tab col {{ columnClass }}\"><a href=\"#other\">{{ 'SitesManager_SiteWithoutDataOtherWays'|translate }}</a></li>
        </ul>
    </div>

    <div id=\"integrations\" class=\"col s12\">
        {% if instruction %}
            <p>{{ instruction|raw }}</p>

            {% if gtmUsed %}
                <p>{{ 'SitesManager_SiteWithoutDataDetectedGtm'|translate(siteType|capitalize, '<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">','</a>')|raw }}</p>
            {% endif %}

            <p>{{ 'SitesManager_SiteWithoutDataOtherIntegrations'|translate }}: {{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
        {% else %}
            <p>{{ 'SitesManager_InstallationGuidesIntro'|translate }}

            <p>
                <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'>WordPress</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/'>Squarespace</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/'>Wix</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/how-to-install/faq_19424/'>SharePoint</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/'>Joomla</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/'>Shopify</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/'>Google Tag Manager</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/'>Cloudflare</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/'>Vue</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/'>React</a>
            </p>

            <p>{{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
            <p>{{ 'CoreAdminHome_JSTrackingIntro3b'|translate|raw }}</p>
            <br>
            <p>{{ 'SitesManager_ExtraInformationNeeded'|translate }}</p>
            <p>Matomo URL: <code piwik-select-on-focus>{{ piwikUrl }}</code></p>
            <p>{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code piwik-select-on-focus>' ~ idSite ~ '</code>')|raw }}</p>
        {% endif %}
    </div>

    <div id=\"tracking-code\" class=\"col s12\">
        {% if notificationMessage %}
            <p></p><p></p>
            <div class=\"system notification notification-info {{ isNotificationsMerged ? ' merged-notification' : ''}}\">
                {{ notificationMessage|raw }}
            </div>
        {% endif %}

        <p>{{ 'CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead'|translate(\"&lt;/head&gt;\")|raw }}</p>

        <div
                vue-entry=\"CoreAdminHome.JsTrackingCodeGeneratorSitesWithoutData\"
                default-site=\"{{ defaultSiteDecoded|json_encode }}\"
                max-custom-variables=\"{{ maxCustomVariables|json_encode }}\"
                server-side-do-not-track-enabled=\"{{ serverSideDoNotTrackEnabled|json_encode }}\"
                js-tag=\"{{ jsTag|raw }}\"
        ></div>
    </div>

    <div id=\"mtm\" class=\"col s12\">
        {% if tagManagerActive %}
            {{ postEvent('Template.endTrackingCodePage') }}
        {% else %}
                <h3>{{ 'SitesManager_SiteWithoutDataMatomoTagManager'|translate }}</h3>
                <p>{{ 'SitesManager_SiteWithoutDataMatomoTagManagerNotActive'|translate('<a href=\"https://matomo.org/docs/tag-manager/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>
        {% endif %}
    </div>

    {% if gtmUsed %}
        <div id=\"google-tag-manager\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                {{ 'SitesManager_GTMDetected'|translate('<a href=\"https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/google-tag-manager-icon.png\" style=\"margin-top: -3rem;\">
            </div>
            {{ postEvent('Template.noDataPageGTMTabInstructions') }}

        </div>
    {% endif %}

    {% if cms == 'wordpress' %}
        <div id=\"wordpress\" class=\"col s12\">

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/wordpress-icon.png\" style=\"margin-top: -3rem;\">
            </div>
            {{ postEvent('Template.noDataPageWordpressTabInstructions') }}

        </div>
    {% endif %}

    {% if cloudflare %}
        <div id=\"cloudflare\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                {{ 'SitesManager_CloudflareDetected'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">','</a>')|raw }}
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/cloudflare-icon.png\" style=\"height: 12rem;width: 12rem;margin-top: -4rem;\">
            </div>
            <p>{{ 'SitesManager_SiteWithoutDataCloudflareIntro'|translate }}</p>
            <br>
            <p>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStepsIntro'|translate }}</p>
            <ol style=\"list-style: decimal;list-style-position: inside;\">
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep01'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://dash.cloudflare.com/\">','</a>')|raw }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep02'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep03'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep04'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep05'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep06'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep07'|translate }}<div style=\"text-indent: 1.2rem;\">Matomo URL: <code vue-directive=\"CoreHome.SelectOnFocus\">{{ piwikUrl }}</code></div><div style=\"text-indent: 1.2rem;\">{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code vue-directive=\"CoreHome.CopyToClipboard\">' ~ idSite ~ '</code>')|raw }}</div></li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep08'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep09'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep10'|translate }}</li>
            </ol>
            <br>
            <p>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStepCompleted'|translate('<strong>','</strong>')|raw }}</p>
        </div>
    {% endif %}

    {% if jsFramework == 'vue' %}
        <div id=\"vue\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                {{ 'SitesManager_VueDetected'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>','<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/\">','</a>')|raw }}
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/vue-icon.png\" style=\"height: 5rem;\">
            </div>
            {% include '@SitesManager/_vueTabInstructions.twig' %}

        </div>
    {% endif %}

    {% if jsFramework == 'react' %}
        <div id=\"react\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                {{ 'SitesManager_ReactDetected'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guide/tag-manager/\">','</a>','<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/\">','</a>')|raw }}
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/react-icon.png\" style=\"height: 5rem;\">
            </div>
            {{ postEvent('Template.embedReactTagManagerTrackingCode') }}

        </div>
    {% endif %}

    {%  if tagManagerActive %}
        <div id=\"spa\" class=\"col s12\">
            {% include '@SitesManager/_spa.twig' %}
        </div>
    {% endif %}

    {% if showGAImportTab %}
        <div id=\"ga-import\" class=\"col s12\">
            {{ postEvent('Template.embedGAImportNoData', ga3Used) }}
        </div>
    {% endif %}

    <div id=\"other\" class=\"col s12\">
        <p>{{ 'SitesManager_OtherWaysTabDescription'|translate }}</p>
        <p>Matomo URL: <code piwik-select-on-focus>{{ piwikUrl }}</code></p>
        <p>{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code vue-directive=\"CoreHome.CopyToClipboard\">' ~ idSite ~ '</code>')|raw }}</p>

        <h3>{{ 'CoreAdminHome_ImageTracking'|translate }}</h3>
        <p>{{ 'SitesManager_ImageTrackingDescription'|translate('<a href=\"https://matomo.org/docs/tracking-api/reference/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>

        <h3>{{ 'SitesManager_LogAnalytics'|translate }}</h3>
        <p>{{ 'SitesManager_LogAnalyticsDescription'|translate('<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>

        <h3>{{ 'SitesManager_MobileAppsAndSDKs'|translate }}</h3>
        <p>{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

        <h3>{{ 'CoreAdminHome_HttpTrackingApi'|translate }}</h3>
        <p>{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

        {% if not gtmUsed %}
            <h3>{{ 'SitesManager_SiteWithoutDataGoogleTagManager'|translate }}</h3>
            <p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">','</a>')|raw }}</p>
        {% endif %}

        {% if cms is not same as('wordpress') %}
            <h3>WordPress</h3>
            <p>{{ 'SitesManager_SiteWithoutDataWordpressDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/\">','</a>')|raw }}</p>
        {% endif %}

        <h3>{{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}</h3>
        <p>{{ 'SitesManager_SiteWithoutDataSinglePageApplicationDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">','</a>')|raw }}</p>

        {% if not cloudflare %}
            <h3>Cloudflare</h3>
            <p>{{ 'SitesManager_SiteWithoutDataCloudflareDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">','</a>')|raw }}</p>
        {% endif %}

        {% if jsFramework is not same as('vue')  %}
            <h3>Vue.js</h3>
            <p>{{ 'SitesManager_SiteWithoutDataVueDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>', '<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/\">','</a>')|raw }}</p>
        {% endif %}

        {% if jsFramework is not same as('react') %}
            <h3>React.js</h3>
            <p>{{ 'SitesManager_SiteWithoutDataReactDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guide/tag-manager/\">', '</a>', '<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/\">','</a>')|raw }}</p>
        {% endif %}

        {% if googleAnalyticsImporterMessage is defined and googleAnalyticsImporterMessage is not empty  %}
            {{ googleAnalyticsImporterMessage|raw }}
        {% elseif not ga3Used and not ga4Used %}
            <h3>{{ 'SitesManager_ImportDataFromGoogleAnalytics'|translate }}</h3>
            <p>{{ 'SitesManager_ImportDataFromGoogleAnalyticsDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guide/installation-maintenance/import-google-analytics/\">', '</a>')|raw }}</p>
        {% endif %}
    </div>
</div>
", "@SitesManager/_siteWithoutDataTabs.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/SitesManager/templates/_siteWithoutDataTabs.twig");
    }
}
