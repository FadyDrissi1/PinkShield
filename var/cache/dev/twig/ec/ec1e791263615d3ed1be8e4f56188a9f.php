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

/* admin/appointments/index.html.twig */
class __TwigTemplate_9daa85497c0c7c5eb663854ca7524dbe extends Template
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
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/appointments/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/appointments/index.html.twig"));

        $this->parent = $this->load("base_back.html.twig", 1);
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

        yield "Gestion des Rendez-vous - PinkShield";
        
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
        yield "    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Gestion des Rendez-vous</h1>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\" style=\"background-color: var(--pink-light);\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Liste globale des consultations</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Patient (Email)</th>
                            <th>Date & Heure</th>
                            <th>Médecin</th>
                            <th>Motif</th>
                            <th>Statut</th>
                            <th>Actions</th>
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
            yield "                            <tr>
                                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "patient", [], "any", false, false, false, 30), "email", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                                <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "date", [], "any", false, false, false, 31), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "doctorname", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "motif", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                <td>
                                    <span class=\"badge badge-";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 35) == "En attente")) {
                yield "warning";
            } else {
                yield "success";
            }
            yield "\">
                                        ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 36), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td>
                                    <form method=\"post\" action=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce rendez-vous ?');\" style=\"display:inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 41))), "html", null, true);
            yield "\">
                                        <button class=\"btn btn-danger btn-sm\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center\">Aucun rendez-vous trouvé en base de données.</td>
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
        return "admin/appointments/index.html.twig";
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
        return array (  191 => 53,  182 => 49,  180 => 48,  168 => 41,  164 => 40,  157 => 36,  149 => 35,  144 => 33,  140 => 32,  136 => 31,  132 => 30,  129 => 29,  124 => 28,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Rendez-vous - PinkShield{% endblock %}

{% block body %}
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Gestion des Rendez-vous</h1>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\" style=\"background-color: var(--pink-light);\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Liste globale des consultations</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Patient (Email)</th>
                            <th>Date & Heure</th>
                            <th>Médecin</th>
                            <th>Motif</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for appointment in appointments %}
                            <tr>
                                <td>{{ appointment.patient.email }}</td>
                                <td>{{ appointment.date|date('d/m/Y H:i') }}</td>
                                <td>{{ appointment.doctorname }}</td>
                                <td>{{ appointment.motif }}</td>
                                <td>
                                    <span class=\"badge badge-{% if appointment.status == 'En attente' %}warning{% else %}success{% endif %}\">
                                        {{ appointment.status }}
                                    </span>
                                </td>
                                <td>
                                    <form method=\"post\" action=\"{{ path('admin_appointment_delete', {'id': appointment.id}) }}\" onsubmit=\"return confirm('Supprimer ce rendez-vous ?');\" style=\"display:inline-block\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ appointment.id) }}\">
                                        <button class=\"btn btn-danger btn-sm\">
                                            <i class=\"fas fa-trash\"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center\">Aucun rendez-vous trouvé en base de données.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "admin/appointments/index.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\admin\\appointments\\index.html.twig");
    }
}
