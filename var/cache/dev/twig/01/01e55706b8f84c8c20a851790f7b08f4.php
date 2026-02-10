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

/* product/index.html.twig */
class __TwigTemplate_a6417b3bfc575426a5c085725bcbfd24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

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

        yield "Gestion Parapharmacie - PinkShield";
        
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
        <h1 class=\"h3 mb-0 text-gray-800\">Catalogue Herboristerie</h1>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_new");
        yield "\" class=\"btn btn-primary shadow-sm\">
            <i class=\"fas fa-plus fa-sm text-white-50 mr-2\"></i>Ajouter un nouveau produit
        </a>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" class=\"row g-3 align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchQuery", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 18, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control border-primary\" placeholder=\"Rechercher une herbe (ex: Thym)...\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"submit\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <select name=\"sort\" class=\"form-control\" onchange=\"this.form.submit()\">
                        <option value=\"\">Trier par défaut</option>
                        <option value=\"price_asc\" ";
        // line 29
        yield (((((array_key_exists("currentSort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 29, $this->source); })()), "")) : ("")) == "price_asc")) ? ("selected") : (""));
        yield ">Prix : Croissant</option>
                        <option value=\"price_desc\" ";
        // line 30
        yield (((((array_key_exists("currentSort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 30, $this->source); })()), "")) : ("")) == "price_desc")) ? ("selected") : (""));
        yield ">Prix : Décroissant</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" class=\"btn btn-secondary btn-block\">Réinitialiser</a>
                </div>
            </form>
        </div>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\" style=\"background-color: var(--pink-light);\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Liste des herbes et produits naturels</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Nom du Produit</th>
                            <th>Description</th>
                            <th>Prix (DT)</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 60
            yield "                        <tr>
                            <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                            <td class=\"text-center\">
                                <i class=\"fas fa-leaf text-success fa-2x\"></i>
                            </td>
                            <td class=\"font-weight-bold text-dark\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                            <td class=\"small text-muted\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 66), 0, 50), "html", null, true);
            yield "...</td>
                            <td class=\"text-primary font-weight-bold\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 67), 2, ",", " "), "html", null, true);
            yield " DT</td>
                            <td>
                                ";
            // line 69
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 69) > 10)) {
                // line 70
                yield "                                    <span class=\"badge badge-success\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 70), "html", null, true);
                yield " en stock</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 71
$context["product"], "stock", [], "any", false, false, false, 71) > 0)) {
                // line 72
                yield "                                    <span class=\"badge badge-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 72), "html", null, true);
                yield " critique</span>
                                ";
            } else {
                // line 74
                yield "                                    <span class=\"badge badge-danger\">Rupture</span>
                                ";
            }
            // line 76
            yield "                            </td>
                            <td class=\"text-center\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 88
        if (!$context['_iterated']) {
            // line 89
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center py-5\">
                                <img src=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/undraw_empty.svg"), "html", null, true);
            yield "\" style=\"max-width: 150px;\" class=\"mb-3 d-block mx-auto\">
                                <span class=\"text-muted\">Aucun produit ne correspond à votre recherche.</span>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
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
        return "product/index.html.twig";
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
        return array (  259 => 96,  248 => 91,  244 => 89,  242 => 88,  231 => 82,  225 => 79,  220 => 76,  216 => 74,  210 => 72,  208 => 71,  203 => 70,  201 => 69,  196 => 67,  192 => 66,  188 => 65,  181 => 61,  178 => 60,  173 => 59,  145 => 34,  138 => 30,  134 => 29,  120 => 18,  114 => 15,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion Parapharmacie - PinkShield{% endblock %}

{% block body %}
    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
        <h1 class=\"h3 mb-0 text-gray-800\">Catalogue Herboristerie</h1>
        <a href=\"{{ path('app_product_new') }}\" class=\"btn btn-primary shadow-sm\">
            <i class=\"fas fa-plus fa-sm text-white-50 mr-2\"></i>Ajouter un nouveau produit
        </a>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" action=\"{{ path('app_product_index') }}\" class=\"row g-3 align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" value=\"{{ searchQuery|default('') }}\" class=\"form-control border-primary\" placeholder=\"Rechercher une herbe (ex: Thym)...\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"submit\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <select name=\"sort\" class=\"form-control\" onchange=\"this.form.submit()\">
                        <option value=\"\">Trier par défaut</option>
                        <option value=\"price_asc\" {{ currentSort|default('') == 'price_asc' ? 'selected' : '' }}>Prix : Croissant</option>
                        <option value=\"price_desc\" {{ currentSort|default('') == 'price_desc' ? 'selected' : '' }}>Prix : Décroissant</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <a href=\"{{ path('app_product_index') }}\" class=\"btn btn-secondary btn-block\">Réinitialiser</a>
                </div>
            </form>
        </div>
    </div>

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\" style=\"background-color: var(--pink-light);\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Liste des herbes et produits naturels</h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead class=\"thead-light\">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Nom du Produit</th>
                            <th>Description</th>
                            <th>Prix (DT)</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for product in products %}
                        <tr>
                            <td>{{ product.id }}</td>
                            <td class=\"text-center\">
                                <i class=\"fas fa-leaf text-success fa-2x\"></i>
                            </td>
                            <td class=\"font-weight-bold text-dark\">{{ product.nom }}</td>
                            <td class=\"small text-muted\">{{ product.description|slice(0, 50) }}...</td>
                            <td class=\"text-primary font-weight-bold\">{{ product.prix|number_format(2, ',', ' ') }} DT</td>
                            <td>
                                {% if product.stock > 10 %}
                                    <span class=\"badge badge-success\">{{ product.stock }} en stock</span>
                                {% elseif product.stock > 0 %}
                                    <span class=\"badge badge-warning\">{{ product.stock }} critique</span>
                                {% else %}
                                    <span class=\"badge badge-danger\">Rupture</span>
                                {% endif %}
                            </td>
                            <td class=\"text-center\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('app_product_edit', {'id': product.id}) }}\" class=\"btn btn-sm btn-outline-info\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\" class=\"text-center py-5\">
                                <img src=\"{{ asset('back/img/undraw_empty.svg') }}\" style=\"max-width: 150px;\" class=\"mb-3 d-block mx-auto\">
                                <span class=\"text-muted\">Aucun produit ne correspond à votre recherche.</span>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "product/index.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\product\\index.html.twig");
    }
}
