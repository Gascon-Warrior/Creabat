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

/* @PrivacyManager/usersOptOut.twig */
class __TwigTemplate_0d40aa87e959c81878ab1d76ded33f1d extends Template
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
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_GDPR"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@PrivacyManager/usersOptOut.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div piwik-content-block content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_TrackingOptOut"), "html_attr");
        echo "\">
        <div vue-entry=\"PrivacyManager.OptOutCustomizer\"
             matomo-url=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\"
             current-language-code=\"";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["currentLanguageCode"]) || array_key_exists("currentLanguageCode", $context) ? $context["currentLanguageCode"] : (function () { throw new RuntimeError('Variable "currentLanguageCode" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\"
             language-options=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["languageOptions"]) || array_key_exists("languageOptions", $context) ? $context["languageOptions"] : (function () { throw new RuntimeError('Variable "languageOptions" does not exist.', 10, $this->source); })())), "html_attr");
        echo "\"
        >
        </div>
    </div>

    ";
        // line 15
        if ((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        <div piwik-content-block
             id=\"DNT\"
             content-title=\"";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DoNotTrack_SupportDNTPreference"), "html_attr");
            echo "\">
            <p>
                ";
            // line 20
            if ((isset($context["dntSupport"]) || array_key_exists("dntSupport", $context) ? $context["dntSupport"] : (function () { throw new RuntimeError('Variable "dntSupport" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "                    <strong>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DoNotTrack_Enabled"), "html", null, true);
                echo "</strong>
                    <br/>
                    ";
                // line 23
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DoNotTrack_EnabledMoreInfo"), "html", null, true);
                echo "
                ";
            } else {
                // line 25
                echo "                    ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DoNotTrack_Disabled"), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DoNotTrack_DisabledMoreInfo"), "html", null, true);
                echo "
                ";
            }
            // line 27
            echo "            </p>

      <div
        vue-entry=\"PrivacyManager.DoNotTrackPreference\"
        dnt-support=\"";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("dntSupport", $context)) ? (_twig_default_filter((isset($context["dntSupport"]) || array_key_exists("dntSupport", $context) ? $context["dntSupport"] : (function () { throw new RuntimeError('Variable "dntSupport" does not exist.', 31, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
        do-not-track-options=\"";
            // line 32
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("doNotTrackOptions", $context)) ? (_twig_default_filter((isset($context["doNotTrackOptions"]) || array_key_exists("doNotTrackOptions", $context) ? $context["doNotTrackOptions"] : (function () { throw new RuntimeError('Variable "doNotTrackOptions" does not exist.', 32, $this->source); })()), null)) : (null))), "html_attr");
            echo "\"
      ></div>

        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@PrivacyManager/usersOptOut.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  115 => 31,  109 => 27,  101 => 25,  96 => 23,  90 => 21,  88 => 20,  83 => 18,  79 => 16,  77 => 15,  69 => 10,  65 => 9,  61 => 8,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'PrivacyManager_GDPR'|translate }}{% endset %}

{% block content %}
    <div piwik-content-block content-title=\"{{ 'PrivacyManager_TrackingOptOut'|translate|e('html_attr') }}\">
        <div vue-entry=\"PrivacyManager.OptOutCustomizer\"
             matomo-url=\"{{ piwikUrl }}\"
             current-language-code=\"{{ currentLanguageCode }}\"
             language-options=\"{{ languageOptions|json_encode|e('html_attr') }}\"
        >
        </div>
    </div>

    {% if isSuperUser %}
        <div piwik-content-block
             id=\"DNT\"
             content-title=\"{{ 'PrivacyManager_DoNotTrack_SupportDNTPreference'|translate|e('html_attr') }}\">
            <p>
                {% if dntSupport %}
                    <strong>{{ 'PrivacyManager_DoNotTrack_Enabled'|translate }}</strong>
                    <br/>
                    {{ 'PrivacyManager_DoNotTrack_EnabledMoreInfo'|translate }}
                {% else %}
                    {{ 'PrivacyManager_DoNotTrack_Disabled'|translate }} {{ 'PrivacyManager_DoNotTrack_DisabledMoreInfo'|translate }}
                {% endif %}
            </p>

      <div
        vue-entry=\"PrivacyManager.DoNotTrackPreference\"
        dnt-support=\"{{ dntSupport|default(null)|json_encode|e('html_attr') }}\"
        do-not-track-options=\"{{ doNotTrackOptions|default(null)|json_encode|e('html_attr') }}\"
      ></div>

        </div>
    {% endif %}
{% endblock %}
", "@PrivacyManager/usersOptOut.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/PrivacyManager/templates/usersOptOut.twig");
    }
}
