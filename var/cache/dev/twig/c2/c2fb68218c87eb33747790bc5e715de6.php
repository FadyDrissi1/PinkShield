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

/* base_front.html.twig */
class __TwigTemplate_5fa83bc978582ab1cef84b73a4e7cde6 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:300,400,500,600,700\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css\" rel=\"stylesheet\">

  <style>
    :root { 
      --pink-primary: #d63384; 
      --pink-hover: #e83e8c;
      --sidebar-bg: #ffffff;
    }
    body { font-family: \"Open Sans\", sans-serif; background-color: #fdf2f7; margin: 0; }

    .sidebar {
      width: 280px;
      height: 100vh;
      position: fixed;
      left: 0; top: 0;
      background: var(--sidebar-bg);
      border-right: 1px solid #f8d7da;
      padding: 20px;
      z-index: 1000;
    }

    .sidebar .logo-box {
      display: block;
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar .logo-box img { max-width: 180px; height: auto; }

    .nav-menu { list-style: none; padding: 0; }
    .nav-item { margin-bottom: 10px; }

    .nav-link {
      display: flex;
      align-items: center;
      padding: 12px 15px;
      color: #555;
      text-decoration: none;
      border-radius: 10px;
      transition: 0.3s;
      font-weight: 600;
    }

    .nav-link i { font-size: 1.2rem; margin-right: 15px; color: var(--pink-primary); }

    .nav-link:hover, .nav-link.active {
      background-color: var(--pink-primary);
      color: white !important;
    }

    .nav-link:hover i, .nav-link.active i { color: white; }

    .main-content { margin-left: 280px; padding: 40px; min-height: 100vh; }

    .logout-btn { position: absolute; bottom: 20px; width: calc(100% - 40px); }
  </style>
</head>

<body>

  <aside class=\"sidebar shadow-sm\">
    <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"logo-box\">
      <img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/colored-logo.png"), "html", null, true);
        yield "\" alt=\"PinkShield Logo\">
    </a>

    <ul class=\"nav-menu\">
      <li class=\"nav-item\">
        <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "get", ["_route"], "method", false, false, false, 77) == "dashboard")) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-grid-fill\"></i> Dashboard
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointments_new");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82) == "appointments_new")) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-calendar-plus\"></i> Prendre Rendez-vous
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointments");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "get", ["_route"], "method", false, false, false, 87) == "appointments")) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-calendar-check\"></i> Mes Rendez-vous
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" class=\"nav-link ";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "get", ["_route"], "method", false, false, false, 92)) && is_string($_v1 = "app_product") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-shop\"></i> Parapharmacie
        </a>
      </li>
    </ul>

    <div class=\"logout-btn\">
      <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"nav-link text-danger\">
        <i class=\"bi bi-box-arrow-right text-danger\"></i> Déconnexion
      </a>
    </div>
  </aside>

  <main class=\"main-content\">
      ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "flashes", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 107
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 108
                yield "              <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : (((($context["label"] == "success")) ? ("success") : ("info"))));
                yield " alert-dismissible fade show shadow-sm\" role=\"alert\" style=\"border-radius: 15px;\">
                  ";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "
      ";
        // line 115
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 116
        yield "  </main>

  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "PinkShield - Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 115
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_front.html.twig";
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
        return array (  262 => 115,  239 => 6,  224 => 116,  222 => 115,  219 => 114,  213 => 113,  203 => 109,  198 => 108,  193 => 107,  189 => 106,  179 => 99,  167 => 92,  157 => 87,  147 => 82,  137 => 77,  129 => 72,  125 => 71,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>{% block title %}PinkShield - Dashboard{% endblock %}</title>

  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:300,400,500,600,700\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css\" rel=\"stylesheet\">

  <style>
    :root { 
      --pink-primary: #d63384; 
      --pink-hover: #e83e8c;
      --sidebar-bg: #ffffff;
    }
    body { font-family: \"Open Sans\", sans-serif; background-color: #fdf2f7; margin: 0; }

    .sidebar {
      width: 280px;
      height: 100vh;
      position: fixed;
      left: 0; top: 0;
      background: var(--sidebar-bg);
      border-right: 1px solid #f8d7da;
      padding: 20px;
      z-index: 1000;
    }

    .sidebar .logo-box {
      display: block;
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar .logo-box img { max-width: 180px; height: auto; }

    .nav-menu { list-style: none; padding: 0; }
    .nav-item { margin-bottom: 10px; }

    .nav-link {
      display: flex;
      align-items: center;
      padding: 12px 15px;
      color: #555;
      text-decoration: none;
      border-radius: 10px;
      transition: 0.3s;
      font-weight: 600;
    }

    .nav-link i { font-size: 1.2rem; margin-right: 15px; color: var(--pink-primary); }

    .nav-link:hover, .nav-link.active {
      background-color: var(--pink-primary);
      color: white !important;
    }

    .nav-link:hover i, .nav-link.active i { color: white; }

    .main-content { margin-left: 280px; padding: 40px; min-height: 100vh; }

    .logout-btn { position: absolute; bottom: 20px; width: calc(100% - 40px); }
  </style>
</head>

<body>

  <aside class=\"sidebar shadow-sm\">
    <a href=\"{{ path('dashboard') }}\" class=\"logo-box\">
      <img src=\"{{ asset('images/colored-logo.png') }}\" alt=\"PinkShield Logo\">
    </a>

    <ul class=\"nav-menu\">
      <li class=\"nav-item\">
        <a href=\"{{ path('dashboard') }}\" class=\"nav-link {{ app.request.get('_route') == 'dashboard' ? 'active' : '' }}\">
          <i class=\"bi bi-grid-fill\"></i> Dashboard
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{ path('appointments_new') }}\" class=\"nav-link {{ app.request.get('_route') == 'appointments_new' ? 'active' : '' }}\">
          <i class=\"bi bi-calendar-plus\"></i> Prendre Rendez-vous
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{ path('appointments') }}\" class=\"nav-link {{ app.request.get('_route') == 'appointments' ? 'active' : '' }}\">
          <i class=\"bi bi-calendar-check\"></i> Mes Rendez-vous
        </a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{ path('app_product_index') }}\" class=\"nav-link {{ app.request.get('_route') starts with 'app_product' ? 'active' : '' }}\">
          <i class=\"bi bi-shop\"></i> Parapharmacie
        </a>
      </li>
    </ul>

    <div class=\"logout-btn\">
      <a href=\"{{ path('app_logout') }}\" class=\"nav-link text-danger\">
        <i class=\"bi bi-box-arrow-right text-danger\"></i> Déconnexion
      </a>
    </div>
  </aside>

  <main class=\"main-content\">
      {% for label, messages in app.flashes %}
          {% for message in messages %}
              <div class=\"alert alert-{{ label == 'error' ? 'danger' : (label == 'success' ? 'success' : 'info') }} alert-dismissible fade show shadow-sm\" role=\"alert\" style=\"border-radius: 15px;\">
                  {{ message }}
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
              </div>
          {% endfor %}
      {% endfor %}

      {% block body %}{% endblock %}
  </main>

  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>", "base_front.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\base_front.html.twig");
    }
}
