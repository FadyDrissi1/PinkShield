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

/* dashboard/index.html.twig */
class __TwigTemplate_7026853344d9f2d6669c13d4454be08b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

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

        yield "Mon Suivi - PinkShield";
        
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
    <div class=\"row mb-5\">
        <div class=\"col-md-8\">
            <h2 style=\"color: var(--pink-primary); font-weight: 800; font-size: 2.5rem;\">Bonjour, ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "userIdentifier", [], "any", false, false, false, 9), "html", null, true);
        yield "</h2>
            <p class=\"text-muted fs-5\">Bienvenue dans votre espace de suivi de santé personnel.</p>
        </div>
        <div class=\"col-md-4 text-md-end\">
            <a href=\"#\" class=\"btn btn-pink shadow-sm\" style=\"padding: 12px 30px; font-size: 1.1rem;\">
                <i class=\"bi bi-calendar-plus me-2\"></i> Prendre un RDV
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-sm border-0\" style=\"border-radius: 20px;\">
                <div class=\"card-header bg-white border-0 pt-4 px-4\">
                    <h4 class=\"fw-bold mb-0\" style=\"color: #444;\">Mes Prochains Rendez-vous</h4>
                </div>
                <div class=\"card-body p-4\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Date & Heure</th>
                                    <th>Docteur</th>
                                    <th>Motif</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 38
        yield "                                <tr>
                                    <td class=\"fw-bold\">12 Fév 2026 - 10:30</td>
                                    <td>Dr. Ben Ammar</td>
                                    <td>Consultation Générale</td>
                                    <td><span class=\"badge rounded-pill bg-success\">Confirmé</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-4\">
            <div class=\"card shadow-sm border-0 mb-4\" style=\"border-radius: 20px; background-color: white;\">
                <div class=\"card-body p-4 text-center\">
                    <div class=\"mb-3\" style=\"color: var(--pink-primary); font-size: 3rem;\">
                        <i class=\"bi bi-heart-pulse\"></i>
                    </div>
                    <h4 class=\"fw-bold\">Mon Suivi</h4>
                    <p class=\"text-muted\">Consultez vos constantes médicales et vos derniers bilans.</p>
                    <hr class=\"my-4\" style=\"border-color: var(--pink-bg);\">
                    
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span class=\"text-muted\">Dernier Poids</span>
                        <span class=\"fw-bold\">75 kg</span>
                    </div>
                    <div class=\"d-flex justify-content-between mb-4\">
                        <span class=\"text-muted\">Tension</span>
                        <span class=\"fw-bold\">12/8</span>
                    </div>

                    <a href=\"#\" class=\"btn w-100\" style=\"background-color: var(--pink-bg); color: var(--pink-primary); border-radius: 50px; font-weight: 600;\">
                        Voir l'historique complet
                    </a>
                </div>
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
        return "dashboard/index.html.twig";
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
        return array (  136 => 38,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Mon Suivi - PinkShield{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row mb-5\">
        <div class=\"col-md-8\">
            <h2 style=\"color: var(--pink-primary); font-weight: 800; font-size: 2.5rem;\">Bonjour, {{ app.user.userIdentifier }}</h2>
            <p class=\"text-muted fs-5\">Bienvenue dans votre espace de suivi de santé personnel.</p>
        </div>
        <div class=\"col-md-4 text-md-end\">
            <a href=\"#\" class=\"btn btn-pink shadow-sm\" style=\"padding: 12px 30px; font-size: 1.1rem;\">
                <i class=\"bi bi-calendar-plus me-2\"></i> Prendre un RDV
            </a>
        </div>
    </div>

    <div class=\"row g-4\">
        <div class=\"col-lg-8\">
            <div class=\"card shadow-sm border-0\" style=\"border-radius: 20px;\">
                <div class=\"card-header bg-white border-0 pt-4 px-4\">
                    <h4 class=\"fw-bold mb-0\" style=\"color: #444;\">Mes Prochains Rendez-vous</h4>
                </div>
                <div class=\"card-body p-4\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Date & Heure</th>
                                    <th>Docteur</th>
                                    <th>Motif</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                {# Ici tu feras ta boucle sur tes rendez-vous #}
                                <tr>
                                    <td class=\"fw-bold\">12 Fév 2026 - 10:30</td>
                                    <td>Dr. Ben Ammar</td>
                                    <td>Consultation Générale</td>
                                    <td><span class=\"badge rounded-pill bg-success\">Confirmé</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-4\">
            <div class=\"card shadow-sm border-0 mb-4\" style=\"border-radius: 20px; background-color: white;\">
                <div class=\"card-body p-4 text-center\">
                    <div class=\"mb-3\" style=\"color: var(--pink-primary); font-size: 3rem;\">
                        <i class=\"bi bi-heart-pulse\"></i>
                    </div>
                    <h4 class=\"fw-bold\">Mon Suivi</h4>
                    <p class=\"text-muted\">Consultez vos constantes médicales et vos derniers bilans.</p>
                    <hr class=\"my-4\" style=\"border-color: var(--pink-bg);\">
                    
                    <div class=\"d-flex justify-content-between mb-2\">
                        <span class=\"text-muted\">Dernier Poids</span>
                        <span class=\"fw-bold\">75 kg</span>
                    </div>
                    <div class=\"d-flex justify-content-between mb-4\">
                        <span class=\"text-muted\">Tension</span>
                        <span class=\"fw-bold\">12/8</span>
                    </div>

                    <a href=\"#\" class=\"btn w-100\" style=\"background-color: var(--pink-bg); color: var(--pink-primary); border-radius: 50px; font-weight: 600;\">
                        Voir l'historique complet
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "dashboard/index.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\dashboard\\index.html.twig");
    }
}
