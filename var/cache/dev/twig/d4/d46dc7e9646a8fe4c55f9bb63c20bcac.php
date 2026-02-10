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

/* medical_record/index.html.twig */
class __TwigTemplate_537d780003b2ac600a71d8cd404f9e9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medical_record/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medical_record/index.html.twig"));

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

        yield "Dossiers Médicaux";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"card shadow-sm border-0 p-4\" style=\"border-radius: 15px;\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2 style=\"color: #d63384;\">Dossiers Médicaux</h2>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medical_record_new");
        yield "\" class=\"btn text-white\" style=\"background-color: #d63384; border-radius: 20px;\">
                + Nouveau Dossier
            </a>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Patient</th>
                        <th>Groupe Sanguin</th>
                        <th>Dernière visite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["records"]) || array_key_exists("records", $context) ? $context["records"] : (function () { throw new RuntimeError('Variable "records" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 27
            yield "                    <tr>
                        <td><strong>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["record"], "patientName", [], "any", false, false, false, 28), "html", null, true);
            yield "</strong></td>
                        <td><span class=\"badge bg-info text-dark\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["record"], "bloodType", [], "any", false, false, false, 29), "html", null, true);
            yield "</span></td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["record"], "updatedAt", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
            yield "</td>
                        <td>
                            <button class=\"btn btn-sm btn-outline-primary\">Consulter</button>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 35
        if (!$context['_iterated']) {
            // line 36
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center text-muted\">Aucun dossier trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['record'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                </tbody>
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
        return "medical_record/index.html.twig";
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
        return array (  162 => 40,  153 => 36,  151 => 35,  141 => 30,  137 => 29,  133 => 28,  130 => 27,  125 => 26,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dossiers Médicaux{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"card shadow-sm border-0 p-4\" style=\"border-radius: 15px;\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2 style=\"color: #d63384;\">Dossiers Médicaux</h2>
            <a href=\"{{ path('medical_record_new') }}\" class=\"btn text-white\" style=\"background-color: #d63384; border-radius: 20px;\">
                + Nouveau Dossier
            </a>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead class=\"table-light\">
                    <tr>
                        <th>Patient</th>
                        <th>Groupe Sanguin</th>
                        <th>Dernière visite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for record in records %}
                    <tr>
                        <td><strong>{{ record.patientName }}</strong></td>
                        <td><span class=\"badge bg-info text-dark\">{{ record.bloodType }}</span></td>
                        <td>{{ record.updatedAt|date('d/m/Y') }}</td>
                        <td>
                            <button class=\"btn btn-sm btn-outline-primary\">Consulter</button>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"text-center text-muted\">Aucun dossier trouvé.</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}", "medical_record/index.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\medical_record\\index.html.twig");
    }
}
