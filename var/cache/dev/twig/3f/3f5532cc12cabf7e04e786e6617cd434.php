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

/* appointments/index.html.twig */
class __TwigTemplate_eefc251c8ba96602b5b724f2bb694134 extends Template
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
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointments/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointments/index.html.twig"));

        $this->parent = $this->load("base_front.html.twig", 1);
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

        yield "Mes Rendez-vous - PinkShield";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2 style=\"color: var(--pink-primary); font-weight: 800;\">Mes Rendez-vous</h2>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointments_new");
        yield "\" class=\"btn btn-pink shadow-sm\">
            <i class=\"bi bi-plus-circle me-2\"></i> Nouveau RDV
        </a>
    </div>

    <div class=\"card shadow-sm border-0\" style=\"border-radius: 20px;\">
        <div class=\"card-body p-4\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Date & Heure</th>
                            <th>Docteur</th>
                            <th>Motif</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 29
            yield "                        <tr>
                            <td class=\"fw-bold\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "date", [], "any", false, false, false, 30), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                            <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "doctorname", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                            <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "motif", [], "any", false, false, false, 32), 0, 30), "html", null, true);
            yield "...</td>
                            <td>
                                ";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 34) == "En attente")) {
                // line 35
                yield "                                    <span class=\"badge rounded-pill bg-warning text-dark\">En attente</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 36
$context["appointment"], "status", [], "any", false, false, false, 36) == "Confirmé")) {
                // line 37
                yield "                                    <span class=\"badge rounded-pill bg-success\">Confirmé</span>
                                ";
            } else {
                // line 39
                yield "                                    <span class=\"badge rounded-pill bg-danger\">Annulé</span>
                                ";
            }
            // line 41
            yield "                            </td>
                            <td class=\"text-center\">
                                <a href=\"#\" class=\"btn btn-sm btn-outline-secondary rounded-pill\">Détails</a>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 46
        if (!$context['_iterated']) {
            // line 47
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                Vous n'avez pas encore de rendez-vous.
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['appointment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                    </tbody>
                </table>
            </div>
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
        return "appointments/index.html.twig";
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
        return array (  185 => 53,  174 => 47,  172 => 46,  163 => 41,  159 => 39,  155 => 37,  153 => 36,  150 => 35,  148 => 34,  143 => 32,  139 => 31,  135 => 30,  132 => 29,  127 => 28,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Mes Rendez-vous - PinkShield{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h2 style=\"color: var(--pink-primary); font-weight: 800;\">Mes Rendez-vous</h2>
        <a href=\"{{ path('appointments_new') }}\" class=\"btn btn-pink shadow-sm\">
            <i class=\"bi bi-plus-circle me-2\"></i> Nouveau RDV
        </a>
    </div>

    <div class=\"card shadow-sm border-0\" style=\"border-radius: 20px;\">
        <div class=\"card-body p-4\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th>Date & Heure</th>
                            <th>Docteur</th>
                            <th>Motif</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for appointment in appointments %}
                        <tr>
                            <td class=\"fw-bold\">{{ appointment.date|date('d/m/Y H:i') }}</td>
                            <td>{{ appointment.doctorname }}</td>
                            <td>{{ appointment.motif|slice(0, 30) }}...</td>
                            <td>
                                {% if appointment.status == 'En attente' %}
                                    <span class=\"badge rounded-pill bg-warning text-dark\">En attente</span>
                                {% elseif appointment.status == 'Confirmé' %}
                                    <span class=\"badge rounded-pill bg-success\">Confirmé</span>
                                {% else %}
                                    <span class=\"badge rounded-pill bg-danger\">Annulé</span>
                                {% endif %}
                            </td>
                            <td class=\"text-center\">
                                <a href=\"#\" class=\"btn btn-sm btn-outline-secondary rounded-pill\">Détails</a>
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center py-4 text-muted\">
                                Vous n'avez pas encore de rendez-vous.
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "appointments/index.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\appointments\\index.html.twig");
    }
}
