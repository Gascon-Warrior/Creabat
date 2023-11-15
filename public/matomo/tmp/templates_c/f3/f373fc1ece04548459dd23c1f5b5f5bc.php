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

/* @CoreAdminHome/optOut.twig */
class __TwigTemplate_68469a67fb87a0ac32fd38714eeab835 extends Template
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
<html>
<head>
    <meta charset=\"utf-8\">
    ";
        // line 5
        if ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "        <title>";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "</title>
    ";
        }
        // line 8
        echo "    ";
        if ((isset($context["reloadUrl"]) || array_key_exists("reloadUrl", $context) ? $context["reloadUrl"] : (function () { throw new RuntimeError('Variable "reloadUrl" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        <meta http-equiv=\"refresh\" content=\"0; url=";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["reloadUrl"]) || array_key_exists("reloadUrl", $context) ? $context["reloadUrl"] : (function () { throw new RuntimeError('Variable "reloadUrl" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "    <meta name=\"robots\" content=\"noindex\" />

    ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stylesheets"]) || array_key_exists("stylesheets", $context) ? $context["stylesheets"] : (function () { throw new RuntimeError('Variable "stylesheets" does not exist.', 13, $this->source); })()), "external", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stylesheets"]) || array_key_exists("stylesheets", $context) ? $context["stylesheets"] : (function () { throw new RuntimeError('Variable "stylesheets" does not exist.', 14, $this->source); })()), "external", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 15
                echo "            <link href=\"";
                echo $context["style"];
                echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stylesheets"]) || array_key_exists("stylesheets", $context) ? $context["stylesheets"] : (function () { throw new RuntimeError('Variable "stylesheets" does not exist.', 18, $this->source); })()), "inline", [], "any", false, false, false, 18)) > 0)) {
            // line 19
            echo "        <style>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stylesheets"]) || array_key_exists("stylesheets", $context) ? $context["stylesheets"] : (function () { throw new RuntimeError('Variable "stylesheets" does not exist.', 20, $this->source); })()), "inline", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 21
                echo "            ";
                echo $context["style"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </style>
    ";
        }
        // line 25
        echo "</head>
<body>
";
        // line 27
        if ((isset($context["dntFound"]) || array_key_exists("dntFound", $context) ? $context["dntFound"] : (function () { throw new RuntimeError('Variable "dntFound" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "    ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_OptOutDntFound"), "html", null, true);
            echo "
";
        } elseif (        // line 29
(isset($context["reloadUrl"]) || array_key_exists("reloadUrl", $context) ? $context["reloadUrl"] : (function () { throw new RuntimeError('Variable "reloadUrl" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "    ";
        } else {
            // line 32
            echo "    ";
            // line 35
            echo "    ";
            if ((isset($context["showConfirmOnly"]) || array_key_exists("showConfirmOnly", $context) ? $context["showConfirmOnly"] : (function () { throw new RuntimeError('Variable "showConfirmOnly" does not exist.', 35, $this->source); })())) {
                // line 36
                echo "    <p>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_OptingYouOut"), "html", null, true);
                echo "</p>
    <script>
        ";
                // line 39
                echo "        try {
            window.opener.document.querySelector('[name=\"nonce\"]').value = '";
                // line 40
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) || array_key_exists("nonce", $context) ? $context["nonce"] : (function () { throw new RuntimeError('Variable "nonce" does not exist.', 40, $this->source); })()), "html", null, true);
                echo "';
            window.opener.document.querySelector('form').action = window.opener.document.querySelector('form').action.replace(/nonce=[0-9a-z]+/, 'nonce=";
                // line 41
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) || array_key_exists("nonce", $context) ? $context["nonce"] : (function () { throw new RuntimeError('Variable "nonce" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "');
        } catch (e) {}
        window.close();
    </script>
    <noscript>
    ";
            }
            // line 47
            echo "
        ";
            // line 48
            if ((isset($context["showIntro"]) || array_key_exists("showIntro", $context) ? $context["showIntro"] : (function () { throw new RuntimeError('Variable "showIntro" does not exist.', 48, $this->source); })())) {
                // line 49
                echo "        <p id=\"textOptIn\" ";
                if ((isset($context["trackVisits"]) || array_key_exists("trackVisits", $context) ? $context["trackVisits"] : (function () { throw new RuntimeError('Variable "trackVisits" does not exist.', 49, $this->source); })())) {
                    echo "style=\" display:none\"";
                }
                echo ">
        ";
                // line 50
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_OptOutComplete"), "html", null, true);
                echo "

        ";
                // line 52
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_OptOutCompleteBis"), "html", null, true);
                echo "
        </p>
        <p id=\"textOptOut\" ";
                // line 54
                if ( !(isset($context["trackVisits"]) || array_key_exists("trackVisits", $context) ? $context["trackVisits"] : (function () { throw new RuntimeError('Variable "trackVisits" does not exist.', 54, $this->source); })())) {
                    echo "style=\"display:none\"";
                }
                echo ">
            ";
                // line 55
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_YouMayOptOut2"), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_YouMayOptOut3"), "html", null, true);
                echo "
        </p>
        ";
            }
            // line 58
            echo "
        <p id=\"textError_cookies\" style=\"display:none; color: red; font-weight: bold;\">
            ";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_OptOutErrorNoCookies"), "html", null, true);
            echo "
        </p>
        <p id=\"textError_https\" style=\"display:none; color: red; font-weight: bold;\">
            ";
            // line 63
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_OptOutErrorNotHttps"), "html", null, true);
            echo "
        </p>
        <p id=\"textError_popupBlocker\" style=\"display:none; color: red; font-weight: bold;\">
            ";
            // line 66
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_OptOutErrorWindowOpen"), "html", null, true);
            echo "
        </p>

    ";
            // line 69
            if ((isset($context["showConfirmOnly"]) || array_key_exists("showConfirmOnly", $context) ? $context["showConfirmOnly"] : (function () { throw new RuntimeError('Variable "showConfirmOnly" does not exist.', 69, $this->source); })())) {
                echo "</noscript>";
            }
            // line 70
            echo "
    ";
            // line 71
            if ( !(isset($context["showConfirmOnly"]) || array_key_exists("showConfirmOnly", $context) ? $context["showConfirmOnly"] : (function () { throw new RuntimeError('Variable "showConfirmOnly" does not exist.', 71, $this->source); })())) {
                // line 72
                echo "    <form method=\"post\" action=\"?";
                echo twig_urlencode_filter((isset($context["queryParameters"]) || array_key_exists("queryParameters", $context) ? $context["queryParameters"] : (function () { throw new RuntimeError('Variable "queryParameters" does not exist.', 72, $this->source); })()));
                echo "\" target=\"_blank\">
        <input type=\"hidden\" name=\"nonce\" value=\"";
                // line 73
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) || array_key_exists("nonce", $context) ? $context["nonce"] : (function () { throw new RuntimeError('Variable "nonce" does not exist.', 73, $this->source); })()), "html", null, true);
                echo "\" />
        <input type=\"hidden\" name=\"fuzz\" value=\"";
                // line 74
                echo \Piwik\piwik_escape_filter($this->env, twig_date_format_filter($this->env, "now"), "html", null, true);
                echo "\" />
        <input onclick=\"submitForm(event, this.form);\" type=\"checkbox\" id=\"trackVisits\" name=\"trackVisits\" ";
                // line 75
                if ((isset($context["trackVisits"]) || array_key_exists("trackVisits", $context) ? $context["trackVisits"] : (function () { throw new RuntimeError('Variable "trackVisits" does not exist.', 75, $this->source); })())) {
                    echo "checked=\"checked\"";
                }
                echo " />
        <label for=\"trackVisits\"><strong>
                <span id=\"labelOptOut\" ";
                // line 77
                if ( !(isset($context["trackVisits"]) || array_key_exists("trackVisits", $context) ? $context["trackVisits"] : (function () { throw new RuntimeError('Variable "trackVisits" does not exist.', 77, $this->source); })())) {
                    echo " style=\"display:none;\"";
                }
                echo ">
                    ";
                // line 78
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_YouAreNotOptedOut"), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_UncheckToOptOut"), "html", null, true);
                echo "
                </span>

                <span id=\"labelOptIn\" ";
                // line 81
                if ((isset($context["trackVisits"]) || array_key_exists("trackVisits", $context) ? $context["trackVisits"] : (function () { throw new RuntimeError('Variable "trackVisits" does not exist.', 81, $this->source); })())) {
                    echo " style=\"display:none;\"";
                }
                echo ">
                    ";
                // line 82
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_YouAreOptedOut"), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_CheckToOptIn"), "html", null, true);
                echo "
                </span>
        </strong></label>
        <noscript>
            <button type=\"submit\">";
                // line 86
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Save"), "html", null, true);
                echo "</button>
        </noscript>
    </form>
    ";
            }
        }
        // line 91
        echo "
";
        // line 92
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["javascripts"]) || array_key_exists("javascripts", $context) ? $context["javascripts"] : (function () { throw new RuntimeError('Variable "javascripts" does not exist.', 92, $this->source); })()), "external", [], "any", false, false, false, 92)) > 0)) {
            // line 93
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["javascripts"]) || array_key_exists("javascripts", $context) ? $context["javascripts"] : (function () { throw new RuntimeError('Variable "javascripts" does not exist.', 93, $this->source); })()), "external", [], "any", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 94
                echo "        <script type=\"text/javascript\" src=\"";
                echo $context["script"];
                echo "\"></script>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 97
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["javascripts"]) || array_key_exists("javascripts", $context) ? $context["javascripts"] : (function () { throw new RuntimeError('Variable "javascripts" does not exist.', 97, $this->source); })()), "inline", [], "any", false, false, false, 97)) > 0)) {
            // line 98
            echo "    <script>
        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["javascripts"]) || array_key_exists("javascripts", $context) ? $context["javascripts"] : (function () { throw new RuntimeError('Variable "javascripts" does not exist.', 99, $this->source); })()), "inline", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 100
                echo "        ";
                echo $context["script"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "    </script>
";
        }
        // line 104
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/optOut.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 104,  311 => 102,  302 => 100,  298 => 99,  295 => 98,  293 => 97,  283 => 94,  278 => 93,  276 => 92,  273 => 91,  265 => 86,  256 => 82,  250 => 81,  242 => 78,  236 => 77,  229 => 75,  225 => 74,  221 => 73,  216 => 72,  214 => 71,  211 => 70,  207 => 69,  201 => 66,  195 => 63,  189 => 60,  185 => 58,  177 => 55,  171 => 54,  166 => 52,  161 => 50,  154 => 49,  152 => 48,  149 => 47,  140 => 41,  136 => 40,  133 => 39,  127 => 36,  124 => 35,  122 => 32,  119 => 30,  117 => 29,  112 => 28,  110 => 27,  106 => 25,  102 => 23,  93 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  71 => 15,  66 => 14,  64 => 13,  60 => 11,  54 => 9,  51 => 8,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    {% if title %}
        <title>{{ title }}</title>
    {% endif %}
    {% if reloadUrl %}
        <meta http-equiv=\"refresh\" content=\"0; url={{ reloadUrl }}\" />
    {% endif %}
    <meta name=\"robots\" content=\"noindex\" />

    {% if stylesheets.external|length > 0 %}
        {% for style in stylesheets.external %}
            <link href=\"{{ style|raw }}\" rel=\"stylesheet\" type=\"text/css\">
        {% endfor %}
    {% endif %}
    {% if stylesheets.inline|length > 0 %}
        <style>
            {% for style in stylesheets.inline %}
            {{ style|raw }}
            {% endfor %}
        </style>
    {% endif %}
</head>
<body>
{% if dntFound %}
    {{ 'CoreAdminHome_OptOutDntFound'|translate }}
{% elseif reloadUrl %}
    {# empty #}
{% else %}
    {# if only showing confirmation (because we're in a new window), we only display the success message if JS is disabled.
     # otherwise we try to close the window immediately.
     #}
    {% if showConfirmOnly %}
    <p>{{ 'CoreAdminHome_OptingYouOut'|translate }}</p>
    <script>
        {# try to update nonce in iframe, so sending it a second time works #}
        try {
            window.opener.document.querySelector('[name=\"nonce\"]').value = '{{ nonce }}';
            window.opener.document.querySelector('form').action = window.opener.document.querySelector('form').action.replace(/nonce=[0-9a-z]+/, 'nonce={{ nonce }}');
        } catch (e) {}
        window.close();
    </script>
    <noscript>
    {% endif %}

        {% if showIntro %}
        <p id=\"textOptIn\" {% if trackVisits %}style=\" display:none\"{% endif %}>
        {{ 'CoreAdminHome_OptOutComplete'|translate }}

        {{ 'CoreAdminHome_OptOutCompleteBis'|translate }}
        </p>
        <p id=\"textOptOut\" {% if not trackVisits %}style=\"display:none\"{% endif %}>
            {{ 'CoreAdminHome_YouMayOptOut2'|translate }} {{ 'CoreAdminHome_YouMayOptOut3'|translate }}
        </p>
        {%  endif %}

        <p id=\"textError_cookies\" style=\"display:none; color: red; font-weight: bold;\">
            {{ 'CoreAdminHome_OptOutErrorNoCookies'|translate }}
        </p>
        <p id=\"textError_https\" style=\"display:none; color: red; font-weight: bold;\">
            {{ 'CoreAdminHome_OptOutErrorNotHttps'|translate }}
        </p>
        <p id=\"textError_popupBlocker\" style=\"display:none; color: red; font-weight: bold;\">
            {{ 'CoreAdminHome_OptOutErrorWindowOpen'|translate }}
        </p>

    {% if showConfirmOnly %}</noscript>{% endif %}

    {% if not showConfirmOnly %}
    <form method=\"post\" action=\"?{{ queryParameters|url_encode|raw }}\" target=\"_blank\">
        <input type=\"hidden\" name=\"nonce\" value=\"{{ nonce }}\" />
        <input type=\"hidden\" name=\"fuzz\" value=\"{{ \"now\"|date }}\" />
        <input onclick=\"submitForm(event, this.form);\" type=\"checkbox\" id=\"trackVisits\" name=\"trackVisits\" {% if trackVisits %}checked=\"checked\"{% endif %} />
        <label for=\"trackVisits\"><strong>
                <span id=\"labelOptOut\" {% if not trackVisits %} style=\"display:none;\"{% endif %}>
                    {{ 'CoreAdminHome_YouAreNotOptedOut'|translate }} {{ 'CoreAdminHome_UncheckToOptOut'|translate }}
                </span>

                <span id=\"labelOptIn\" {% if trackVisits %} style=\"display:none;\"{% endif %}>
                    {{ 'CoreAdminHome_YouAreOptedOut'|translate }} {{ 'CoreAdminHome_CheckToOptIn'|translate }}
                </span>
        </strong></label>
        <noscript>
            <button type=\"submit\">{{ 'General_Save'|translate }}</button>
        </noscript>
    </form>
    {% endif %}
{% endif %}

{% if javascripts.external|length > 0 %}
    {% for script in javascripts.external %}
        <script type=\"text/javascript\" src=\"{{ script|raw }}\"></script>
    {% endfor %}
{% endif %}
{% if javascripts.inline|length > 0 %}
    <script>
        {% for script in javascripts.inline %}
        {{ script|raw }}
        {% endfor %}
    </script>
{% endif %}
</body>
</html>
", "@CoreAdminHome/optOut.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/CoreAdminHome/templates/optOut.twig");
    }
}
