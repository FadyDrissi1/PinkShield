<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* security/register.html.twig */
class __TwigTemplate_46dbab07da0365f450298f99c3be5321 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container\">
        <div class=\"auth-box\">
            <div class=\"card\">
                <div class=\"brand\">
                    <div class=\"logo\"><img src=\"/images/transparent-logo.png\" alt=\"PinkShield\" class=\"logo-img\" width=\"56\" height=\"56\" loading=\"lazy\"></div>
                    <div class=\"title\">PinkShield</div>
                </div>

                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 15
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                yield "                        <div class=\"flash-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
                <form method=\"post\" action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                    <label for=\"firstName\">Prénom</label>
                    <input type=\"text\" id=\"firstName\" name=\"firstName\" maxlength=\"100\">

                    <label for=\"lastName\">Nom</label>
                    <input type=\"text\" id=\"lastName\" name=\"lastName\" maxlength=\"100\">

                    <label for=\"phone\">Téléphone</label>
                    <input type=\"tel\" id=\"phone\" name=\"phone\" maxlength=\"30\">

                    <label for=\"gender\">Genre</label>
                    <select id=\"gender\" name=\"gender\">
                        <option value=\"\">--</option>
                        <option value=\"male\">Homme</option>
                        <option value=\"female\">Femme</option>
                        <option value=\"other\">Autre</option>
                    </select>

                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" required>

                    <label for=\"password\">Password</label>
                    <input type=\"password\" id=\"password\" name=\"password\" required minlength=\"6\">

                    <button class=\"btn\" type=\"submit\">S'INSCRIRE</button>
                </form>

                <div class=\"link-muted\">Déjà inscrit? <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter</a></div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  169 => 47,  139 => 20,  136 => 19,  130 => 18,  119 => 16,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"auth-box\">
            <div class=\"card\">
                <div class=\"brand\">
                    <div class=\"logo\"><img src=\"/images/transparent-logo.png\" alt=\"PinkShield\" class=\"logo-img\" width=\"56\" height=\"56\" loading=\"lazy\"></div>
                    <div class=\"title\">PinkShield</div>
                </div>

                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"flash-{{ label }}\">{{ message }}</div>
                    {% endfor %}
                {% endfor %}

                <form method=\"post\" action=\"{{ path('app_register') }}\">
                    <label for=\"firstName\">Prénom</label>
                    <input type=\"text\" id=\"firstName\" name=\"firstName\" maxlength=\"100\">

                    <label for=\"lastName\">Nom</label>
                    <input type=\"text\" id=\"lastName\" name=\"lastName\" maxlength=\"100\">

                    <label for=\"phone\">Téléphone</label>
                    <input type=\"tel\" id=\"phone\" name=\"phone\" maxlength=\"30\">

                    <label for=\"gender\">Genre</label>
                    <select id=\"gender\" name=\"gender\">
                        <option value=\"\">--</option>
                        <option value=\"male\">Homme</option>
                        <option value=\"female\">Femme</option>
                        <option value=\"other\">Autre</option>
                    </select>

                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" required>

                    <label for=\"password\">Password</label>
                    <input type=\"password\" id=\"password\" name=\"password\" required minlength=\"6\">

                    <button class=\"btn\" type=\"submit\">S'INSCRIRE</button>
                </form>

                <div class=\"link-muted\">Déjà inscrit? <a href=\"{{ path('app_login') }}\">Se connecter</a></div>
            </div>
        </div>
    </div>
{% endblock %}
", "security/register.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\security\\register.html.twig");
    }
}
