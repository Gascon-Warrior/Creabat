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

/* @PrivacyManager/privacySettings.twig */
class __TwigTemplate_d3f733ec633e3dda92e096153c83917d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_AnonymizeData"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@PrivacyManager/privacySettings.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $macros["piwik"] = $this->loadTemplate("macros.twig", "@PrivacyManager/privacySettings.twig", 6)->unwrap();
        // line 7
        echo "
<div piwik-content-intro>
    <h2 piwik-enriched-headline help-url=\"https://matomo.org/docs/privacy/\">";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h2>

    <p>";
        // line 11
        echo $this->env->getFilter('translate')->getCallable()("PrivacyManager_TeaserHeader", "<a href=\"#anonymizeIPAnchor\">", "</a>", "<a href=\"#deleteLogsAnchor\">", "</a>", "<a href=\"#anonymizeHistoricalData\">", "</a>");
        echo "
        ";
        // line 12
        echo $this->env->getFilter('translate')->getCallable()("PrivacyManager_SeeAlsoOurOfficialGuidePrivacy", "<a href=\"https://matomo.org/docs/privacy/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>
</div>

<div piwik-content-block
     id=\"anonymizeIPAnchor\"
     content-title=\"";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_UseAnonymizeTrackingData"), "html_attr");
        echo "\">
  <div
    vue-entry=\"PrivacyManager.AnonymizeIp\"
    anonymize-ip-enabled=\"";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "enabled", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "enabled", [], "any", false, false, false, 20), null)) : (null))), "html_attr");
        echo "\"
    anonymize-user-id=\"";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "anonymizeUserId", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "anonymizeUserId", [], "any", false, false, false, 21), null)) : (null))), "html_attr");
        echo "\"
    mask-length=\"";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "maskLength", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "maskLength", [], "any", false, false, false, 22), null)) : (null))), "html_attr");
        echo "\"
    use-anonymized-ip-for-visit-enrichment=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "useAnonymizedIpForVisitEnrichment", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "useAnonymizedIpForVisitEnrichment", [], "any", false, false, false, 23), null)) : (null))), "html_attr");
        echo "\"
    anonymize-order-id=\"";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "anonymizeOrderId", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "anonymizeOrderId", [], "any", false, false, false, 24), null)) : (null))), "html_attr");
        echo "\"
    force-cookieless-tracking=\"";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "forceCookielessTracking", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "forceCookielessTracking", [], "any", false, false, false, 25), null)) : (null))), "html_attr");
        echo "\"
    anonymize-referrer=\"";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "anonymizeReferrer", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["anonymizeIP"] ?? null), "anonymizeReferrer", [], "any", false, false, false, 26), null)) : (null))), "html_attr");
        echo "\"
    mask-length-options=\"";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("maskLengthOptions", $context)) ? (_twig_default_filter((isset($context["maskLengthOptions"]) || array_key_exists("maskLengthOptions", $context) ? $context["maskLengthOptions"] : (function () { throw new RuntimeError('Variable "maskLengthOptions" does not exist.', 27, $this->source); })()), null)) : (null))), "html_attr");
        echo "\"
    use-anonymized-ip-for-visit-enrichment-options=\"";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("useAnonymizedIpForVisitEnrichmentOptions", $context)) ? (_twig_default_filter((isset($context["useAnonymizedIpForVisitEnrichmentOptions"]) || array_key_exists("useAnonymizedIpForVisitEnrichmentOptions", $context) ? $context["useAnonymizedIpForVisitEnrichmentOptions"] : (function () { throw new RuntimeError('Variable "useAnonymizedIpForVisitEnrichmentOptions" does not exist.', 28, $this->source); })()), null)) : (null))), "html_attr");
        echo "\"
    tracker-file-name=\"";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("trackerFileName", $context)) ? (_twig_default_filter((isset($context["trackerFileName"]) || array_key_exists("trackerFileName", $context) ? $context["trackerFileName"] : (function () { throw new RuntimeError('Variable "trackerFileName" does not exist.', 29, $this->source); })()), null)) : (null))), "html_attr");
        echo "\"
    tracker-writable=\"";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("trackerWritable", $context)) ? (_twig_default_filter((isset($context["trackerWritable"]) || array_key_exists("trackerWritable", $context) ? $context["trackerWritable"] : (function () { throw new RuntimeError('Variable "trackerWritable" does not exist.', 30, $this->source); })()), null)) : (null))), "html_attr");
        echo "\"
    referrer-anonymization-options=\"";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("referrerAnonymizationOptions", $context)) ? (_twig_default_filter((isset($context["referrerAnonymizationOptions"]) || array_key_exists("referrerAnonymizationOptions", $context) ? $context["referrerAnonymizationOptions"] : (function () { throw new RuntimeError('Variable "referrerAnonymizationOptions" does not exist.', 31, $this->source); })()), null)) : (null))), "html_attr");
        echo "\"
  ></div>
</div>

";
        // line 35
        if ((isset($context["isDataPurgeSettingsEnabled"]) || array_key_exists("isDataPurgeSettingsEnabled", $context) ? $context["isDataPurgeSettingsEnabled"] : (function () { throw new RuntimeError('Variable "isDataPurgeSettingsEnabled" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "    <div piwik-content-block id=\"deleteLogsAnchor\"
         content-title=\"";
            // line 37
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteOldRawData"), "html_attr");
            echo "\">
        <p>";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteDataDescription"), "html", null, true);
            echo "</p>

        <div
          vue-entry=\"PrivacyManager.DeleteOldLogs\"
          is-data-purge-settings-enabled=\"";
            // line 42
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isDataPurgeSettingsEnabled", $context)) ? (_twig_default_filter((isset($context["isDataPurgeSettingsEnabled"]) || array_key_exists("isDataPurgeSettingsEnabled", $context) ? $context["isDataPurgeSettingsEnabled"] : (function () { throw new RuntimeError('Variable "isDataPurgeSettingsEnabled" does not exist.', 42, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
          delete-data=\"";
            // line 43
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("deleteData", $context)) ? (_twig_default_filter((isset($context["deleteData"]) || array_key_exists("deleteData", $context) ? $context["deleteData"] : (function () { throw new RuntimeError('Variable "deleteData" does not exist.', 43, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
          schedule-deletion-options=\"";
            // line 44
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("scheduleDeletionOptions", $context)) ? (_twig_default_filter((isset($context["scheduleDeletionOptions"]) || array_key_exists("scheduleDeletionOptions", $context) ? $context["scheduleDeletionOptions"] : (function () { throw new RuntimeError('Variable "scheduleDeletionOptions" does not exist.', 44, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
        ></div>
    </div>

    <div piwik-content-block id=\"deleteReportsAnchor\"
            content-title=\"";
            // line 49
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteOldAggregatedReports"), "html_attr");
            echo "\">

        <div
          vue-entry=\"PrivacyManager.DeleteOldReports\"
          is-data-purge-settings-enabled=\"";
            // line 53
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isDataPurgeSettingsEnabled", $context)) ? (_twig_default_filter((isset($context["isDataPurgeSettingsEnabled"]) || array_key_exists("isDataPurgeSettingsEnabled", $context) ? $context["isDataPurgeSettingsEnabled"] : (function () { throw new RuntimeError('Variable "isDataPurgeSettingsEnabled" does not exist.', 53, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
          delete-data=\"";
            // line 54
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("deleteData", $context)) ? (_twig_default_filter((isset($context["deleteData"]) || array_key_exists("deleteData", $context) ? $context["deleteData"] : (function () { throw new RuntimeError('Variable "deleteData" does not exist.', 54, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
          delete-old-logs=\"";
            // line 55
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("deleteOldLogs", $context)) ? (_twig_default_filter((isset($context["deleteOldLogs"]) || array_key_exists("deleteOldLogs", $context) ? $context["deleteOldLogs"] : (function () { throw new RuntimeError('Variable "deleteOldLogs" does not exist.', 55, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
          schedule-deletion-options=\"";
            // line 56
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("scheduleDeletionOptions", $context)) ? (_twig_default_filter((isset($context["scheduleDeletionOptions"]) || array_key_exists("scheduleDeletionOptions", $context) ? $context["scheduleDeletionOptions"] : (function () { throw new RuntimeError('Variable "scheduleDeletionOptions" does not exist.', 56, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
        ></div>

    </div>

  <div
    vue-entry=\"PrivacyManager.ScheduleReportDeletion\"
    is-data-purge-settings-enabled=\"";
            // line 63
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isDataPurgeSettingsEnabled", $context)) ? (_twig_default_filter((isset($context["isDataPurgeSettingsEnabled"]) || array_key_exists("isDataPurgeSettingsEnabled", $context) ? $context["isDataPurgeSettingsEnabled"] : (function () { throw new RuntimeError('Variable "isDataPurgeSettingsEnabled" does not exist.', 63, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
    delete-data=\"";
            // line 64
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("deleteData", $context)) ? (_twig_default_filter((isset($context["deleteData"]) || array_key_exists("deleteData", $context) ? $context["deleteData"] : (function () { throw new RuntimeError('Variable "deleteData" does not exist.', 64, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
    delete-old-logs=\"";
            // line 65
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("deleteOldLogs", $context)) ? (_twig_default_filter((isset($context["deleteOldLogs"]) || array_key_exists("deleteOldLogs", $context) ? $context["deleteOldLogs"] : (function () { throw new RuntimeError('Variable "deleteOldLogs" does not exist.', 65, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
    schedule-deletion-options=\"";
            // line 66
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("scheduleDeletionOptions", $context)) ? (_twig_default_filter((isset($context["scheduleDeletionOptions"]) || array_key_exists("scheduleDeletionOptions", $context) ? $context["scheduleDeletionOptions"] : (function () { throw new RuntimeError('Variable "scheduleDeletionOptions" does not exist.', 66, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
  ></div>
";
        }
        // line 69
        echo "
    <a name=\"anonymizeHistoricalData\" id=\"anonymizeHistoricalData\"></a>

    <div piwik-content-block content-title=\"Anonymize previously tracked raw data\" class=\"logDataAnonymizer\">
        <p>If you have tracked personal data such as the full visitor IP, you may
            want to anonymize this data now in case you do not have consent for this data or no longer a legitimate
            interest.
        </p>

        ";
        // line 78
        if ((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 78, $this->source); })())) {
            // line 79
            echo "            <div vue-entry=\"PrivacyManager.AnonymizeLogData\"></div>
        ";
        } else {
            // line 81
            echo "            <p>Only a user with Super User access can anonymize previously tracked raw data.</p>
        ";
        }
        // line 83
        echo "
        <br />
        <h3>Previous raw data anonymizations</h3>
        <table piwik-content-table>
            <thead>
            <tr>
                <th>Requester</th>
                <th>Affected ID Sites</th>
                <th>Affected date</th>
                <th>Anonymize</th>
                <th>Visit Columns</th>
                <th>Link Visit Action Columns</th>
                <th>Status</th>
            </tr></thead>
            <tbody>
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anonymizations"]) || array_key_exists("anonymizations", $context) ? $context["anonymizations"] : (function () { throw new RuntimeError('Variable "anonymizations" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 99
            echo "                ";
            $context["isStarted"] = (twig_get_attribute($this->env, $this->source, $context["entry"], "job_start_date", [], "any", false, false, false, 99) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "job_start_date", [], "any", false, false, false, 99)));
            // line 100
            echo "                ";
            $context["isFinished"] = (twig_get_attribute($this->env, $this->source, $context["entry"], "job_finish_date", [], "any", false, false, false, 100) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["entry"], "job_finish_date", [], "any", false, false, false, 100)));
            // line 101
            echo "                <tr>
                    <td>";
            // line 102
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "requester", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                    <td>";
            // line 103
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "sites", [], "any", false, false, false, 103), ", "), "html", null, true);
            echo "</td>
                    <td>";
            // line 104
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "date_start", [], "any", false, false, false, 104), "html", null, true);
            echo " - ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "date_end", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                    <td>";
            // line 105
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "anonymize_ip", [], "any", false, false, false, 105)) {
                echo "<span>IP address<br /></span>";
            }
            // line 106
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "anonymize_location", [], "any", false, false, false, 106)) {
                echo "<span>Location<br /></span>";
            }
            // line 107
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "anonymize_userid", [], "any", false, false, false, 107)) {
                echo "<span>User ID</span>";
            }
            // line 108
            echo "                        ";
            if ((( !twig_get_attribute($this->env, $this->source, $context["entry"], "anonymize_ip", [], "any", false, false, false, 108) &&  !twig_get_attribute($this->env, $this->source, $context["entry"], "anonymize_location", [], "any", false, false, false, 108)) &&  !twig_get_attribute($this->env, $this->source, $context["entry"], "anonymize_userid", [], "any", false, false, false, 108))) {
                echo "-";
            }
            // line 109
            echo "                    </td>
                    <td>";
            // line 110
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "unset_visit_columns", [], "any", false, false, false, 110), ", "), "html", null, true);
            echo "</td>
                    <td>";
            // line 111
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "unset_link_visit_action_columns", [], "any", false, false, false, 111), ", "), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 113
            if ( !(isset($context["isStarted"]) || array_key_exists("isStarted", $context) ? $context["isStarted"] : (function () { throw new RuntimeError('Variable "isStarted" does not exist.', 113, $this->source); })())) {
                // line 114
                echo "                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: ";
                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["entry"], "scheduled_date", [], "any", true, true, false, 114)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "scheduled_date", [], "any", false, false, false, 114), "")) : ("")), "html", null, true);
                echo ".\"></span> Scheduled
                        ";
            } elseif ((            // line 115
(isset($context["isStarted"]) || array_key_exists("isStarted", $context) ? $context["isStarted"] : (function () { throw new RuntimeError('Variable "isStarted" does not exist.', 115, $this->source); })()) &&  !(isset($context["isFinished"]) || array_key_exists("isFinished", $context) ? $context["isFinished"] : (function () { throw new RuntimeError('Variable "isFinished" does not exist.', 115, $this->source); })()))) {
                // line 116
                echo "                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: ";
                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["entry"], "scheduled_date", [], "any", true, true, false, 116)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "scheduled_date", [], "any", false, false, false, 116), "")) : ("")), "html", null, true);
                echo ". Job Start Date: ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "job_start_date", [], "any", false, false, false, 116), "html", null, true);
                echo ". Current Output: ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "output", [], "any", false, false, false, 116), "html", null, true);
                echo "\"></span> In progress
                        ";
            } else {
                // line 118
                echo "                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: ";
                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["entry"], "scheduled_date", [], "any", true, true, false, 118)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "scheduled_date", [], "any", false, false, false, 118), "")) : ("")), "html", null, true);
                echo ". Job Start Date: ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "job_start_date", [], "any", false, false, false, 118), "html", null, true);
                echo ". Job Finish Date: ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "job_finish_date", [], "any", false, false, false, 118), "html", null, true);
                echo ". Output: ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "output", [], "any", false, false, false, 118), "html", null, true);
                echo "\"></span> Done
                        ";
            }
            // line 120
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@PrivacyManager/privacySettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 123,  341 => 120,  329 => 118,  319 => 116,  317 => 115,  312 => 114,  310 => 113,  305 => 111,  301 => 110,  298 => 109,  293 => 108,  288 => 107,  283 => 106,  279 => 105,  273 => 104,  269 => 103,  265 => 102,  262 => 101,  259 => 100,  256 => 99,  252 => 98,  235 => 83,  231 => 81,  227 => 79,  225 => 78,  214 => 69,  208 => 66,  204 => 65,  200 => 64,  196 => 63,  186 => 56,  182 => 55,  178 => 54,  174 => 53,  167 => 49,  159 => 44,  155 => 43,  151 => 42,  144 => 38,  140 => 37,  137 => 36,  135 => 35,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  78 => 17,  70 => 12,  66 => 11,  61 => 9,  57 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'PrivacyManager_AnonymizeData'|translate }}{% endset %}

{% block content %}
{% import 'macros.twig' as piwik %}

<div piwik-content-intro>
    <h2 piwik-enriched-headline help-url=\"https://matomo.org/docs/privacy/\">{{ title }}</h2>

    <p>{{ 'PrivacyManager_TeaserHeader'|translate('<a href=\"#anonymizeIPAnchor\">',\"</a>\",'<a href=\"#deleteLogsAnchor\">',\"</a>\",'<a href=\"#anonymizeHistoricalData\">',\"</a>\")|raw }}
        {{'PrivacyManager_SeeAlsoOurOfficialGuidePrivacy'|translate('<a href=\"https://matomo.org/docs/privacy/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
</div>

<div piwik-content-block
     id=\"anonymizeIPAnchor\"
     content-title=\"{{ 'PrivacyManager_UseAnonymizeTrackingData'|translate|e('html_attr') }}\">
  <div
    vue-entry=\"PrivacyManager.AnonymizeIp\"
    anonymize-ip-enabled=\"{{ anonymizeIP.enabled|default(null)|json_encode|e('html_attr') }}\"
    anonymize-user-id=\"{{ anonymizeIP.anonymizeUserId|default(null)|json_encode|e('html_attr') }}\"
    mask-length=\"{{ anonymizeIP.maskLength|default(null)|json_encode|e('html_attr') }}\"
    use-anonymized-ip-for-visit-enrichment=\"{{ anonymizeIP.useAnonymizedIpForVisitEnrichment|default(null)|json_encode|e('html_attr') }}\"
    anonymize-order-id=\"{{ anonymizeIP.anonymizeOrderId|default(null)|json_encode|e('html_attr') }}\"
    force-cookieless-tracking=\"{{ anonymizeIP.forceCookielessTracking|default(null)|json_encode|e('html_attr') }}\"
    anonymize-referrer=\"{{ anonymizeIP.anonymizeReferrer|default(null)|json_encode|e('html_attr') }}\"
    mask-length-options=\"{{ maskLengthOptions|default(null)|json_encode|e('html_attr') }}\"
    use-anonymized-ip-for-visit-enrichment-options=\"{{ useAnonymizedIpForVisitEnrichmentOptions|default(null)|json_encode|e('html_attr') }}\"
    tracker-file-name=\"{{ trackerFileName|default(null)|json_encode|e('html_attr') }}\"
    tracker-writable=\"{{ trackerWritable|default(null)|json_encode|e('html_attr') }}\"
    referrer-anonymization-options=\"{{ referrerAnonymizationOptions|default(null)|json_encode|e('html_attr') }}\"
  ></div>
</div>

{% if isDataPurgeSettingsEnabled %}
    <div piwik-content-block id=\"deleteLogsAnchor\"
         content-title=\"{{ 'PrivacyManager_DeleteOldRawData'|translate|e('html_attr') }}\">
        <p>{{ 'PrivacyManager_DeleteDataDescription'|translate }}</p>

        <div
          vue-entry=\"PrivacyManager.DeleteOldLogs\"
          is-data-purge-settings-enabled=\"{{ isDataPurgeSettingsEnabled|default(null)|json_encode|e('html_attr') }}\"
          delete-data=\"{{ deleteData|default(null)|json_encode|e('html_attr') }}\"
          schedule-deletion-options=\"{{ scheduleDeletionOptions|default(null)|json_encode|e('html_attr') }}\"
        ></div>
    </div>

    <div piwik-content-block id=\"deleteReportsAnchor\"
            content-title=\"{{ 'PrivacyManager_DeleteOldAggregatedReports'|translate|e('html_attr') }}\">

        <div
          vue-entry=\"PrivacyManager.DeleteOldReports\"
          is-data-purge-settings-enabled=\"{{ isDataPurgeSettingsEnabled|default(null)|json_encode|e('html_attr') }}\"
          delete-data=\"{{ deleteData|default(null)|json_encode|e('html_attr') }}\"
          delete-old-logs=\"{{ deleteOldLogs|default(null)|json_encode|e('html_attr') }}\"
          schedule-deletion-options=\"{{ scheduleDeletionOptions|default(null)|json_encode|e('html_attr') }}\"
        ></div>

    </div>

  <div
    vue-entry=\"PrivacyManager.ScheduleReportDeletion\"
    is-data-purge-settings-enabled=\"{{ isDataPurgeSettingsEnabled|default(null)|json_encode|e('html_attr') }}\"
    delete-data=\"{{ deleteData|default(null)|json_encode|e('html_attr') }}\"
    delete-old-logs=\"{{ deleteOldLogs|default(null)|json_encode|e('html_attr') }}\"
    schedule-deletion-options=\"{{ scheduleDeletionOptions|default(null)|json_encode|e('html_attr') }}\"
  ></div>
{% endif %}

    <a name=\"anonymizeHistoricalData\" id=\"anonymizeHistoricalData\"></a>

    <div piwik-content-block content-title=\"Anonymize previously tracked raw data\" class=\"logDataAnonymizer\">
        <p>If you have tracked personal data such as the full visitor IP, you may
            want to anonymize this data now in case you do not have consent for this data or no longer a legitimate
            interest.
        </p>

        {% if isSuperUser %}
            <div vue-entry=\"PrivacyManager.AnonymizeLogData\"></div>
        {% else %}
            <p>Only a user with Super User access can anonymize previously tracked raw data.</p>
        {% endif %}

        <br />
        <h3>Previous raw data anonymizations</h3>
        <table piwik-content-table>
            <thead>
            <tr>
                <th>Requester</th>
                <th>Affected ID Sites</th>
                <th>Affected date</th>
                <th>Anonymize</th>
                <th>Visit Columns</th>
                <th>Link Visit Action Columns</th>
                <th>Status</th>
            </tr></thead>
            <tbody>
            {% for entry in anonymizations %}
                {% set isStarted = entry.job_start_date or not entry.job_start_date is empty %}
                {% set isFinished = entry.job_finish_date or not entry.job_finish_date is empty %}
                <tr>
                    <td>{{ entry.requester }}</td>
                    <td>{{ entry.sites|join(', ') }}</td>
                    <td>{{ entry.date_start }} - {{ entry.date_end }}</td>
                    <td>{% if entry.anonymize_ip %}<span>IP address<br /></span>{% endif %}
                        {% if entry.anonymize_location %}<span>Location<br /></span>{% endif %}
                        {% if entry.anonymize_userid %}<span>User ID</span>{% endif %}
                        {% if not entry.anonymize_ip and not entry.anonymize_location and not entry.anonymize_userid %}-{% endif %}
                    </td>
                    <td>{{ entry.unset_visit_columns|join(', ') }}</td>
                    <td>{{ entry.unset_link_visit_action_columns|join(', ') }}</td>
                    <td>
                        {% if not isStarted %}
                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: {{ entry.scheduled_date|default('') }}.\"></span> Scheduled
                        {% elseif isStarted and not isFinished %}
                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: {{ entry.scheduled_date|default('') }}. Job Start Date: {{ entry.job_start_date }}. Current Output: {{ entry.output }}\"></span> In progress
                        {% else %}
                            <span class=\"icon-info\" style=\"cursor: help;\" title=\"Scheduled date: {{ entry.scheduled_date|default('') }}. Job Start Date: {{ entry.job_start_date }}. Job Finish Date: {{ entry.job_finish_date }}. Output: {{ entry.output }}\"></span> Done
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
", "@PrivacyManager/privacySettings.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/PrivacyManager/templates/privacySettings.twig");
    }
}
