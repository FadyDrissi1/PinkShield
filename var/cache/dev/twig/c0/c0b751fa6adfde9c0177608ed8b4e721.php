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

/* appointments/new.html.twig */
class __TwigTemplate_89a0ef69fa336c43c622e28457dbfcf7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointments/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointments/new.html.twig"));

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

        yield "Nouveau Rendez-vous - PinkShield";
        
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
    <div class=\"row justify-content-center\">
        <div class=\"col-md-7\">
            
            ";
        // line 11
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 12
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                yield "                    <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show mb-4\" role=\"alert\" style=\"border-radius: 15px;\">
                        ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
            <div class=\"card shadow-sm border-0\" style=\"border-radius: 20px;\">
                <div class=\"card-body p-5\">
                    <h2 class=\"mb-4 text-center\" style=\"color: var(--pink-primary); font-weight: 800;\">
                        Prendre un Rendez-vous
                    </h2>
                    
                    <p class=\"text-center text-muted mb-4\">Veuillez remplir le formulaire ci-dessous pour confirmer votre demande.</p>
                    
                    ";
        // line 29
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        
                        ";
        // line 32
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'errors');
        yield "

                        <div class=\"mb-4\">
                            <label class=\"form-label fw-bold\">Nom du Docteur</label>
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "doctorname", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control form-control-lg", "style" => "border-radius: 10px; border-color: #f8d7da;", "placeholder" => "Ex: Dr. Ben Ammar"]]);
        // line 40
        yield "
                            <div class=\"text-danger mt-1 small fw-bold\">";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "doctorname", [], "any", false, false, false, 41), 'errors');
        yield "</div>
                        </div>

                        <div class=\"mb-4\">
                            <label class=\"form-label fw-bold\">Date & Heure souhaitée</label>
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "date", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control form-control-lg", "style" => "border-radius: 10px; border-color: #f8d7da;"]]);
        // line 49
        yield "
                            <div class=\"text-danger mt-1 small fw-bold\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "date", [], "any", false, false, false, 50), 'errors');
        yield "</div>
                        </div>

                        <div class=\"mb-4\">
                            <label class=\"form-label fw-bold\">Motif de la consultation</label>
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "motif", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 10px; border-color: #f8d7da;", "placeholder" => "Décrivez brièvement votre besoin (min. 10 caractères)...", "rows" => "4"]]);
        // line 60
        yield "
                            <div class=\"text-danger mt-1 small fw-bold\">";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "motif", [], "any", false, false, false, 61), 'errors');
        yield "</div>
                        </div>

                        <div class=\"d-grid gap-2 mt-3\">
                            <button type=\"submit\" class=\"btn btn-pink py-3 shadow-sm\" style=\"font-weight: 700; font-size: 1.1rem; border-radius: 50px;\">
                                <i class=\"bi bi-calendar-check me-2\"></i> Confirmer la demande
                            </button>
                            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"btn btn-link text-muted text-decoration-none mt-2\">
                                Annuler et retourner au tableau de bord
                            </a>
                        </div>
                    ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
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
        return "appointments/new.html.twig";
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
        return array (  210 => 72,  203 => 68,  193 => 61,  190 => 60,  188 => 55,  180 => 50,  177 => 49,  175 => 46,  167 => 41,  164 => 40,  162 => 36,  154 => 32,  148 => 29,  137 => 19,  131 => 18,  121 => 14,  116 => 13,  111 => 12,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Nouveau Rendez-vous - PinkShield{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-7\">
            
            {# Affichage des messages de succès/erreur #}
            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show mb-4\" role=\"alert\" style=\"border-radius: 15px;\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}
            {% endfor %}

            <div class=\"card shadow-sm border-0\" style=\"border-radius: 20px;\">
                <div class=\"card-body p-5\">
                    <h2 class=\"mb-4 text-center\" style=\"color: var(--pink-primary); font-weight: 800;\">
                        Prendre un Rendez-vous
                    </h2>
                    
                    <p class=\"text-center text-muted mb-4\">Veuillez remplir le formulaire ci-dessous pour confirmer votre demande.</p>
                    
                    {# novalidate force la validation SERVEUR (PHP) pour ton examen #}
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                        
                        {# Erreurs globales du formulaire #}
                        {{ form_errors(form) }}

                        <div class=\"mb-4\">
                            <label class=\"form-label fw-bold\">Nom du Docteur</label>
                            {{ form_widget(form.doctorname, {'attr': {
                                'class': 'form-control form-control-lg', 
                                'style': 'border-radius: 10px; border-color: #f8d7da;',
                                'placeholder': 'Ex: Dr. Ben Ammar'
                            }}) }}
                            <div class=\"text-danger mt-1 small fw-bold\">{{ form_errors(form.doctorname) }}</div>
                        </div>

                        <div class=\"mb-4\">
                            <label class=\"form-label fw-bold\">Date & Heure souhaitée</label>
                            {{ form_widget(form.date, {'attr': {
                                'class': 'form-control form-control-lg', 
                                'style': 'border-radius: 10px; border-color: #f8d7da;'
                            }}) }}
                            <div class=\"text-danger mt-1 small fw-bold\">{{ form_errors(form.date) }}</div>
                        </div>

                        <div class=\"mb-4\">
                            <label class=\"form-label fw-bold\">Motif de la consultation</label>
                            {{ form_widget(form.motif, {'attr': {
                                'class': 'form-control', 
                                'style': 'border-radius: 10px; border-color: #f8d7da;', 
                                'placeholder': 'Décrivez brièvement votre besoin (min. 10 caractères)...',
                                'rows': '4'
                            }}) }}
                            <div class=\"text-danger mt-1 small fw-bold\">{{ form_errors(form.motif) }}</div>
                        </div>

                        <div class=\"d-grid gap-2 mt-3\">
                            <button type=\"submit\" class=\"btn btn-pink py-3 shadow-sm\" style=\"font-weight: 700; font-size: 1.1rem; border-radius: 50px;\">
                                <i class=\"bi bi-calendar-check me-2\"></i> Confirmer la demande
                            </button>
                            <a href=\"{{ path('dashboard') }}\" class=\"btn btn-link text-muted text-decoration-none mt-2\">
                                Annuler et retourner au tableau de bord
                            </a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "appointments/new.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\appointments\\new.html.twig");
    }
}
