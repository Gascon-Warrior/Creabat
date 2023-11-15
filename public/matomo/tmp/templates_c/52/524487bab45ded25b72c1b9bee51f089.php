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

/* @Marketplace/macros.twig */
class __TwigTemplate_ab0300aafa613d63dea6ecdf8c8be810 extends Template
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
        echo "
";
        // line 5
        echo "
";
        // line 12
        echo "
";
    }

    // line 2
    public function macro_pluginDeveloper($__owner__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "owner" => $__owner__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            if ((("piwik" == (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 3, $this->source); })())) || ("matomo-org" == (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 3, $this->source); })())))) {
                echo "<img title=\"Matomo\" alt=\"Matomo\" style=\"padding-bottom:2px;height:12px;\" src=\"plugins/Morpheus/images/logo-dark.svg\"/>";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 3, $this->source); })()), "html", null, true);
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 6
    public function macro_featuredIcon($__align__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "align" => $__align__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 7
            echo "    <img class=\"featuredIcon\"
         title=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_FeaturedPlugin"), "html", null, true);
            echo "\"
         src=\"plugins/Marketplace/images/rating_important.png\"
         align=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" />
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 13
    public function macro_missingRequirementsPleaseUpdateNotice($__plugin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "plugin" => $__plugin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 14
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 14, $this->source); })()), "missingRequirements", [], "any", false, false, false, 14) && (0 < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 14, $this->source); })()), "missingRequirements", [], "any", false, false, false, 14))))) {
                // line 15
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["plugin"]) || array_key_exists("plugin", $context) ? $context["plugin"] : (function () { throw new RuntimeError('Variable "plugin" does not exist.', 15, $this->source); })()), "missingRequirements", [], "any", false, false, false, 15));
                foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                    // line 16
                    echo "<div class=\"alert alert-danger\">
                ";
                    // line 17
                    $context["requirement"] = twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["req"], "requirement", [], "any", false, false, false, 17));
                    // line 18
                    echo "                ";
                    if (("Php" == (isset($context["requirement"]) || array_key_exists("requirement", $context) ? $context["requirement"] : (function () { throw new RuntimeError('Variable "requirement" does not exist.', 18, $this->source); })()))) {
                        // line 19
                        echo "                    ";
                        $context["requirement"] = "PHP";
                        // line 20
                        echo "                ";
                    }
                    // line 21
                    echo "                ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_MissingRequirementsNotice", (isset($context["requirement"]) || array_key_exists("requirement", $context) ? $context["requirement"] : (function () { throw new RuntimeError('Variable "requirement" does not exist.', 21, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["req"], "actualVersion", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, $context["req"], "requiredVersion", [], "any", false, false, false, 21)), "html", null, true);
                    echo "
            </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@Marketplace/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 24,  142 => 21,  139 => 20,  136 => 19,  133 => 18,  131 => 17,  128 => 16,  123 => 15,  120 => 14,  107 => 13,  96 => 10,  91 => 8,  88 => 7,  75 => 6,  61 => 3,  48 => 2,  43 => 12,  40 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro pluginDeveloper(owner) %}
    {% if 'piwik' == owner or 'matomo-org' == owner %}<img title=\"Matomo\" alt=\"Matomo\" style=\"padding-bottom:2px;height:12px;\" src=\"plugins/Morpheus/images/logo-dark.svg\"/>{% else %}{{ owner }}{% endif %}
{% endmacro %}

{% macro featuredIcon(align='') %}
    <img class=\"featuredIcon\"
         title=\"{{ 'Marketplace_FeaturedPlugin'|translate }}\"
         src=\"plugins/Marketplace/images/rating_important.png\"
         align=\"{{ align }}\" />
{% endmacro %}

{% macro missingRequirementsPleaseUpdateNotice(plugin) %}
    {% if plugin.missingRequirements and 0 < plugin.missingRequirements|length %}
        {% for req in plugin.missingRequirements -%}
            <div class=\"alert alert-danger\">
                {% set requirement = req.requirement|capitalize %}
                {% if 'Php' == requirement %}
                    {% set requirement = 'PHP' %}
                {% endif %}
                {{ 'CorePluginsAdmin_MissingRequirementsNotice'|translate(requirement, req.actualVersion, req.requiredVersion) }}
            </div>
        {%- endfor %}
    {% endif %}
{% endmacro %}
", "@Marketplace/macros.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/Marketplace/templates/macros.twig");
    }
}
