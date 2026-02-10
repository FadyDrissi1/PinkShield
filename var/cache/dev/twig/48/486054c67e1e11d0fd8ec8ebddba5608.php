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

/* medical_record/new.html.twig */
class __TwigTemplate_9b627ad431e80f08caec25fa99ff7883 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medical_record/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medical_record/new.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container mt-5\">
    <div class=\"card shadow-sm border-0 p-4\" style=\"border-radius: 15px;\">
        <h2 class=\"mb-4\" style=\"color: #d63384;\">Créer un Dossier Médical</h2>
        
        ";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        yield "
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label class=\"form-label\">Nom du Patient</label>
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "patientName", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom complet"]]);
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label class=\"form-label\">Groupe Sanguin</label>
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "bloodType", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: A+"]]);
        yield "
                </div>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\">Diagnostic</label>
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "diagnosis", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "rows" => "3"]]);
        yield "
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\">Prescription</label>
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prescription", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "rows" => "3"]]);
        yield "
            </div>
            
            ";
        // line 29
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'rest');
        yield "

            <div class=\"mt-4\">
                <button class=\"btn text-white\" style=\"background-color: #d63384; border-radius: 20px;\">Enregistrer le dossier</button>
                <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medical_records");
        yield "\" class=\"btn btn-outline-secondary\" style=\"border-radius: 20px;\">Retour</a>
            </div>
        ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        yield "
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
        return "medical_record/new.html.twig";
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
        return array (  130 => 35,  125 => 33,  117 => 29,  111 => 25,  104 => 21,  96 => 16,  89 => 12,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"card shadow-sm border-0 p-4\" style=\"border-radius: 15px;\">
        <h2 class=\"mb-4\" style=\"color: #d63384;\">Créer un Dossier Médical</h2>
        
        {{ form_start(form) }}
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label class=\"form-label\">Nom du Patient</label>
                    {{ form_widget(form.patientName, {'attr': {'class': 'form-control', 'placeholder': 'Nom complet'}}) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    <label class=\"form-label\">Groupe Sanguin</label>
                    {{ form_widget(form.bloodType, {'attr': {'class': 'form-control', 'placeholder': 'Ex: A+'}}) }}
                </div>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\">Diagnostic</label>
                {{ form_widget(form.diagnosis, {'attr': {'class': 'form-control', 'rows': '3'}}) }}
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\">Prescription</label>
                {{ form_widget(form.prescription, {'attr': {'class': 'form-control', 'rows': '3'}}) }}
            </div>
            
            {# form_rest génère les jetons de sécurité CSRF indispensables #}
            {{ form_rest(form) }}

            <div class=\"mt-4\">
                <button class=\"btn text-white\" style=\"background-color: #d63384; border-radius: 20px;\">Enregistrer le dossier</button>
                <a href=\"{{ path('medical_records') }}\" class=\"btn btn-outline-secondary\" style=\"border-radius: 20px;\">Retour</a>
            </div>
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}", "medical_record/new.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\medical_record\\new.html.twig");
    }
}
