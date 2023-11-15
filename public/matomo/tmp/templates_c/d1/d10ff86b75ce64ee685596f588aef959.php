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

/* @UsersManager/_userInviteEmail.twig */
class __TwigTemplate_9e0f0d065a8611f83a412f837f9a16ed extends Template
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
        ob_start();
        echo "<code>";
        echo \Piwik\piwik_escape_filter($this->env, "</head>", "html");
        echo "</code>";
        $context["closingHeadTag"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo "<p>";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_HelloUser", (isset($context["login"]) || array_key_exists("login", $context) ? $context["login"] : (function () { throw new RuntimeError('Variable "login" does not exist.', 2, $this->source); })())), "html", null, true);
        echo "</p>
<p>";
        // line 3
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 3, $this->source); })());
        echo "</p>
<a target=\"_blank\" href=\"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "?module=";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["loginPlugin"]) || array_key_exists("loginPlugin", $context) ? $context["loginPlugin"] : (function () { throw new RuntimeError('Variable "loginPlugin" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "&action=acceptInvitation&token=";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\"
>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_AcceptInvite"), "html", null, true);
        echo "</a> |
<a target=\"_blank\" href=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "?module=";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["loginPlugin"]) || array_key_exists("loginPlugin", $context) ? $context["loginPlugin"] : (function () { throw new RuntimeError('Variable "loginPlugin" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "&action=declineInvitation&token=";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\"
>";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_DeclineInvite"), "html", null, true);
        echo "</a>
<p>";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@UsersManager/_userInviteEmail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 8,  72 => 7,  64 => 6,  60 => 5,  52 => 4,  48 => 3,  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set closingHeadTag %}<code>{{ '</head>'|e('html') }}</code>{% endset %}
<p>{{ 'General_HelloUser'|translate(login) }}</p>
<p>{{ content|raw }}</p>
<a target=\"_blank\" href=\"{{ piwikUrl }}?module={{ loginPlugin }}&action=acceptInvitation&token={{ token }}\"
>{{ 'CoreAdminHome_AcceptInvite'|translate }}</a> |
<a target=\"_blank\" href=\"{{ piwikUrl }}?module={{ loginPlugin }}&action=declineInvitation&token={{ token }}\"
>{{ 'CoreAdminHome_DeclineInvite'|translate }}</a>
<p>{{ notes }}</p>", "@UsersManager/_userInviteEmail.twig", "/home/gascon/Projets/creabat/public/matomo/plugins/UsersManager/templates/_userInviteEmail.twig");
    }
}
