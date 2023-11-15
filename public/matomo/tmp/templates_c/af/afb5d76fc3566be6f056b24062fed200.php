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

/* @Dashboard/index.twig */
class __TwigTemplate_e3d75021064e660c86f7376f2a4c4836 extends Template
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
        $this->loadTemplate("@Dashboard/_header.twig", "@Dashboard/index.twig", 1)->display($context);
        // line 2
        echo "<div class=\"top_controls\">
    ";
        // line 3
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@Dashboard/index.twig", 3)->display($context);
        // line 4
        echo "    ";
        echo $this->env->getFunction('postEvent')->getCallable()("Template.nextToCalendar");
        echo "
    ";
        // line 5
        $this->loadTemplate($context["dashboardSettingsControl"]->getTemplateFile(), "@Dashboard/index.twig", 5)->display(twig_array_merge($context, $context["dashboardSettingsControl"]->getTemplateVars()));
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "    <div id=\"Dashboard\" class=\"piwikTopControl borderedControl piwikSelector\">
        <ul>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard"]) {
                // line 10
                echo "                <li id=\"Dashboard_embeddedIndex_";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dashboard"], "iddashboard", [], "any", false, false, false, 10), "html", null, true);
                echo "\">
                    <a href=\"#\" onclick=\"\$('#dashboardWidgetsArea').dashboard('loadDashboard', ";
                // line 11
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dashboard"], "iddashboard", [], "any", false, false, false, 11), "html", null, true);
                echo ");\"
                       class=\"item\">";
                // line 12
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dashboard"], "name", [], "any", false, false, false, 12));
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </ul>
    </div>
    ";
        }
        // line 18
        echo "</div>
";
        // line 19
        $macros["ajax"] = $this->macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@Dashboard/index.twig", 19)->unwrap();
        // line 20
        echo twig_call_macro($macros["ajax"], "macro_loadingDiv", [], 20, $context, $this->getSourceContext());
        echo "
";
        // line 21
        $this->loadTemplate("@Dashboard/embeddedIndex.twig", "@Dashboard/index.twig", 21)->display($context);
        // line 22
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Dashboard/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  94 => 21,  90 => 20,  88 => 19,  85 => 18,  80 => 15,  71 => 12,  67 => 11,  62 => 10,  58 => 9,  54 => 7,  51 => 6,  49 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"@Dashboard/_header.twig\" %}
<div class=\"top_controls\">
    {% include \"@CoreHome/_periodSelect.twig\" %}
    {{ postEvent(\"Template.nextToCalendar\") }}
    {% render dashboardSettingsControl %}
    {% if dashboards|length %}
    <div id=\"Dashboard\" class=\"piwikTopControl borderedControl piwikSelector\">
        <ul>
            {% for dashboard in dashboards %}
                <li id=\"Dashboard_embeddedIndex_{{ dashboard.iddashboard }}\">
                    <a href=\"#\" onclick=\"\$('#dashboardWidgetsArea').dashboard('loadDashboard', {{ dashboard.iddashboard }});\"
                       class=\"item\">{{ dashboard.name|escape }}</a>
                </li>
            {% endfor %}
        </ul>
    </div>
    {% endif %}
</div>
{% import 'ajaxMacros.twig' as ajax %}
{{ ajax.loadingDiv }}
{% include \"@Dashboard/embeddedIndex.twig\" %}
</body>
</html>", "@Dashboard/index.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/Dashboard/templates/index.twig");
    }
}
