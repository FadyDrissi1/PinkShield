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

/* product/_form.html.twig */
class __TwigTemplate_12a9672a781af47d605559e78840eb50 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "
<div class=\"card card-body shadow-sm\" style=\"max-width:900px;margin:0 auto;border-radius:12px;\">
    <div class=\"row g-3 mb-3\">
        <div class=\"col-md-6\">
            ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom du produit"]]);
        yield "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "prix", [], "any", false, false, false, 8), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prix"]]);
        yield "
        </div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Description", "rows" => 4]]);
        yield "
    </div>

    <div class=\"row g-3 mb-3\">
        <div class=\"col-md-6\">
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "stock", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Stock"]]);
        yield "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Image URL"]]);
        yield "
        </div>
    </div>

    <div class=\"d-grid\">
        <button class=\"btn btn-primary btn-lg\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 26, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
    </div>
</div>
";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/_form.html.twig";
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
        return array (  97 => 29,  91 => 26,  83 => 21,  77 => 18,  69 => 13,  61 => 8,  55 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation'}}) }}
<div class=\"card card-body shadow-sm\" style=\"max-width:900px;margin:0 auto;border-radius:12px;\">
    <div class=\"row g-3 mb-3\">
        <div class=\"col-md-6\">
            {{ form_row(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom du produit'}}) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_row(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Prix'}}) }}
        </div>
    </div>

    <div class=\"mb-3\">
        {{ form_row(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description', 'rows': 4}}) }}
    </div>

    <div class=\"row g-3 mb-3\">
        <div class=\"col-md-6\">
            {{ form_row(form.stock, {'attr': {'class': 'form-control', 'placeholder': 'Stock'}}) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_row(form.image, {'attr': {'class': 'form-control', 'placeholder': 'Image URL'}}) }}
        </div>
    </div>

    <div class=\"d-grid\">
        <button class=\"btn btn-primary btn-lg\">{{ button_label|default('Save') }}</button>
    </div>
</div>
{{ form_end(form) }}
", "product/_form.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\product\\_form.html.twig");
    }
}
