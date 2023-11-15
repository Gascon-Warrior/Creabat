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

/* @SitesManager/_displayJavascriptCode.twig */
class __TwigTemplate_fe965de8fd3f31b5a13637358ac5a89e extends Template
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
        echo "<div class=\"trackingHelpHeader\">
    <h2>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_TrackingTags", (isset($context["displaySiteName"]) || array_key_exists("displaySiteName", $context) ? $context["displaySiteName"] : (function () { throw new RuntimeError('Variable "displaySiteName" does not exist.', 2, $this->source); })())), "html", null, true);
        echo "</h2>
    <a class=\"btn\"
        href=\"mailto:?subject=";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter($this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsSubject")), "html_attr");
        echo "&body=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 4, $this->source); })())), "html_attr");
        echo "\">
        ";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsButton"), "html", null, true);
        echo "
    </a>
</div>

<div class='trackingHelp'>
    <p>";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_JSTracking_Intro"), "html", null, true);
        echo "</p>

    <p>";
        // line 12
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo " ";
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3b");
        echo "</p>

    <h3>";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_JsTrackingTag"), "html", null, true);
        echo "</h3>

    <p>";
        // line 16
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead", "&lt;/head&gt;");
        echo "</p>

    <div>
        <pre matomo-copy-to-clipboard>";
        // line 19
        echo (isset($context["jsTag"]) || array_key_exists("jsTag", $context) ? $context["jsTag"] : (function () { throw new RuntimeError('Variable "jsTag" does not exist.', 19, $this->source); })());
        echo "</pre>
    </div>

    <p>";
        // line 22
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro5", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">", "</a>");
        echo "</p>

    ";
        // line 24
        if (array_key_exists("isInstall", $context)) {
            // line 25
            echo "        <p>";
            echo $this->env->getFilter('translate')->getCallable()("Installation_JSTracking_EndNote", "", "");
            echo "</p>
    ";
        } else {
            // line 27
            echo "        <p>";
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_EndNote", (("<a href=\"" . $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"])) . "\">"), "</a>");
            echo "</p>
    ";
        }
        // line 29
        echo "
    <h3>";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalytics"), "html", null, true);
        echo "</h3>

    <p>";
        // line 32
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalyticsDescription", "<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

    <h3>";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
        echo "</h3>

    <p>";
        // line 36
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKsDescription", "<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

    <h3>";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
        echo "</h3>
    <p>";
        // line 39
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApiDescription", "<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

    <h3>";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
        echo "</h3>
    <p>";
        // line 42
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplicationDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">", "</a>");
        echo "</p>

    <h3>";
        // line 44
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManager"), "html", null, true);
        echo "</h3>
    <p>";
        // line 45
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/\">", "</a>");
        echo "</p>

    <h3>WordPress</h3>
    <p>";
        // line 48
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataWordpressDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/\">", "</a>");
        echo "</p>

    <h3>Cloudflare</h3>
    <p>";
        // line 51
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">", "</a>");
        echo "</p>

    <h3>Vue.js</h3>
    <p>";
        // line 54
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataVueDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/\">", "</a>");
        echo "</p>

    <h3>React.js</h3>
    <p>";
        // line 57
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataReactDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guide/tag-manager/\">", "</a>", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/\">", "</a>");
        echo "</p>

    <p></p>
    ";
        // line 60
        echo $this->env->getFunction('postEvent')->getCallable()("Template.endTrackingHelpPage");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SitesManager/_displayJavascriptCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 60,  176 => 57,  170 => 54,  164 => 51,  158 => 48,  152 => 45,  148 => 44,  143 => 42,  139 => 41,  134 => 39,  130 => 38,  125 => 36,  120 => 34,  115 => 32,  110 => 30,  107 => 29,  101 => 27,  95 => 25,  93 => 24,  88 => 22,  82 => 19,  76 => 16,  71 => 14,  64 => 12,  59 => 10,  51 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"trackingHelpHeader\">
    <h2>{{ 'SitesManager_TrackingTags'|translate(displaySiteName) }}</h2>
    <a class=\"btn\"
        href=\"mailto:?subject={{ 'SitesManager_EmailInstructionsSubject'|translate|url_encode|e('html_attr') }}&body={{ emailBody|url_encode|e('html_attr') }}\">
        {{ 'SitesManager_EmailInstructionsButton'|translate }}
    </a>
</div>

<div class='trackingHelp'>
    <p>{{ 'Installation_JSTracking_Intro'|translate }}</p>

    <p>{{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }} {{ 'CoreAdminHome_JSTrackingIntro3b'|translate|raw }}</p>

    <h3>{{ 'General_JsTrackingTag'|translate }}</h3>

    <p>{{ 'CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead'|translate(\"&lt;/head&gt;\")|raw }}</p>

    <div>
        <pre matomo-copy-to-clipboard>{{ jsTag|raw }}</pre>
    </div>

    <p>{{ 'CoreAdminHome_JSTrackingIntro5'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">','</a>')|raw }}</p>

    {% if isInstall is defined %}
        <p>{{ 'Installation_JSTracking_EndNote'|translate('', '')|raw }}</p>
    {% else %}
        <p>{{ 'CoreAdminHome_JSTracking_EndNote'|translate('<a href=\"' ~ linkTo({'module': 'CoreAdminHome', 'action': 'trackingCodeGenerator'}) ~'\">','</a>')|raw }}</p>
    {% endif %}

    <h3>{{ 'SitesManager_LogAnalytics'|translate }}</h3>

    <p>{{ 'SitesManager_LogAnalyticsDescription'|translate('<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>

    <h3>{{ 'SitesManager_MobileAppsAndSDKs'|translate }}</h3>

    <p>{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

    <h3>{{ 'CoreAdminHome_HttpTrackingApi'|translate }}</h3>
    <p>{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

    <h3>{{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}</h3>
    <p>{{ 'SitesManager_SiteWithoutDataSinglePageApplicationDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">','</a>')|raw }}</p>

    <h3>{{ 'SitesManager_SiteWithoutDataGoogleTagManager'|translate }}</h3>
    <p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/\">','</a>')|raw }}</p>

    <h3>WordPress</h3>
    <p>{{ 'SitesManager_SiteWithoutDataWordpressDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/\">','</a>')|raw }}</p>

    <h3>Cloudflare</h3>
    <p>{{ 'SitesManager_SiteWithoutDataCloudflareDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">','</a>')|raw }}</p>

    <h3>Vue.js</h3>
    <p>{{ 'SitesManager_SiteWithoutDataVueDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/AmazingDreams/vue-matomo\">vue-matomo</a>', '<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/\">','</a>')|raw }}</p>

    <h3>React.js</h3>
    <p>{{ 'SitesManager_SiteWithoutDataReactDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guide/tag-manager/\">', '</a>', '<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/\">','</a>')|raw }}</p>

    <p></p>
    {{ postEvent('Template.endTrackingHelpPage') }}
</div>
", "@SitesManager/_displayJavascriptCode.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/SitesManager/templates/_displayJavascriptCode.twig");
    }
}
