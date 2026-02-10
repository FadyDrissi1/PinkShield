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

/* base_back.html.twig */
class __TwigTemplate_d088aee0fe2de5aa9da7860b56018c28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/sb-admin-2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <style>
        :root { 
            --pink-primary: #d63384; 
            --pink-hover: #e83e8c;
            --pink-light: #fdf2f7; 
        }

        .bg-gradient-primary {
            background-color: var(--pink-primary) !important;
            background-image: linear-gradient(180deg, var(--pink-primary) 10%, var(--pink-hover) 100%) !important;
        }

        .sidebar-brand {
            background-color: #ffffff !important;
            height: auto !important;
            padding: 1.5rem 0 !important;
            border-bottom: 1px solid #f8d7da;
        }

        .sidebar-brand img {
            max-height: 70px;
            width: auto;
        }

        .sidebar-dark .nav-item.active .nav-link {
            font-weight: 700;
        }

        .btn-primary {
            background-color: var(--pink-primary) !important;
            border-color: var(--pink-primary) !important;
        }

        .btn-primary:hover {
            background-color: var(--pink-hover) !important;
        }

        .text-primary {
            color: var(--pink-primary) !important;
        }
    </style>
</head>

<body id=\"page-top\">

    <div id=\"wrapper\">
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
            
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
                <div class=\"sidebar-brand-icon\">
                    <img src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/transparent-logo.png"), "html", null, true);
        yield "\" alt=\"PinkShield Logo\">
                </div>
            </a>

            <hr class=\"sidebar-divider my-0\">

            <li class=\"nav-item ";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "get", ["_route"], "method", false, false, false, 70) == "admin_dashboard")) ? ("active") : (""));
        yield "\">
                <a class=\"nav-link\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Tableau de Bord</span></a>
            </li>

            <hr class=\"sidebar-divider\">

            <div class=\"sidebar-heading\">Gestion Consultation & Boutique</div>

            <li class=\"nav-item ";
        // line 80
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "get", ["_route"], "method", false, false, false, 80)) && is_string($_v1 = "admin_appointment") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
                <a class=\"nav-link\" href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointments_list");
        yield "\">
                    <i class=\"fas fa-fw fa-calendar-check\"></i>
                    <span>Gestion Rendez-vous</span>
                </a>
            </li>

            <li class=\"nav-item ";
        // line 87
        yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "get", ["_route"], "method", false, false, false, 87)) && is_string($_v3 = "app_product") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
        yield "\">
                <a class=\"nav-link\" href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\">
                    <i class=\"fas fa-fw fa-pills\"></i>
                    <span>Parapharmacie</span>
                </a>
            </li>

            <hr class=\"sidebar-divider d-none d-md-block\">

            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>
        </ul>

        <div id=\"content-wrapper\" class=\"d-flex flex-column\">
            <div id=\"content\">
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\" style=\"color: var(--pink-primary);\"></i>
                    </button>

                    <ul class=\"navbar-nav ml-auto\">
                        <div class=\"topbar-divider d-none d-sm-block\"></div>
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">
                                    ";
        // line 113
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "email", [], "any", false, false, false, 113), "html", null, true)) : ("Administrateur"));
        yield "
                                </span>
                                <img class=\"img-profile rounded-circle\" src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/img/undraw_profile.svg"), "html", null, true);
        yield "\">
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                                <a class=\"dropdown-item\" href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\">
                                    <i class=\"fas fa-desktop fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Retour au Front
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class=\"container-fluid\">
                    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "flashes", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 134
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 135
                yield "                            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : (((($context["label"] == "success")) ? ("success") : ("info"))));
                yield " alert-dismissible fade show\" role=\"alert\">
                                ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span>&times;</span></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "
                    ";
        // line 142
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 143
        yield "                </div>
            </div>

            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; PinkShield 2026</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <script src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
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

        yield "PinkShield - Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 142
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
        return "base_back.html.twig";
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
        return array (  328 => 142,  305 => 8,  291 => 159,  287 => 158,  283 => 157,  279 => 156,  264 => 143,  262 => 142,  259 => 141,  253 => 140,  243 => 136,  238 => 135,  233 => 134,  229 => 133,  216 => 123,  208 => 118,  202 => 115,  197 => 113,  169 => 88,  165 => 87,  156 => 81,  152 => 80,  140 => 71,  136 => 70,  127 => 64,  122 => 62,  69 => 12,  64 => 10,  59 => 8,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}PinkShield - Admin{% endblock %}</title>

    <link href=\"{{ asset('back/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"{{ asset('back/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">

    <style>
        :root { 
            --pink-primary: #d63384; 
            --pink-hover: #e83e8c;
            --pink-light: #fdf2f7; 
        }

        .bg-gradient-primary {
            background-color: var(--pink-primary) !important;
            background-image: linear-gradient(180deg, var(--pink-primary) 10%, var(--pink-hover) 100%) !important;
        }

        .sidebar-brand {
            background-color: #ffffff !important;
            height: auto !important;
            padding: 1.5rem 0 !important;
            border-bottom: 1px solid #f8d7da;
        }

        .sidebar-brand img {
            max-height: 70px;
            width: auto;
        }

        .sidebar-dark .nav-item.active .nav-link {
            font-weight: 700;
        }

        .btn-primary {
            background-color: var(--pink-primary) !important;
            border-color: var(--pink-primary) !important;
        }

        .btn-primary:hover {
            background-color: var(--pink-hover) !important;
        }

        .text-primary {
            color: var(--pink-primary) !important;
        }
    </style>
</head>

<body id=\"page-top\">

    <div id=\"wrapper\">
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
            
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{ path('admin_dashboard') }}\">
                <div class=\"sidebar-brand-icon\">
                    <img src=\"{{ asset('images/transparent-logo.png') }}\" alt=\"PinkShield Logo\">
                </div>
            </a>

            <hr class=\"sidebar-divider my-0\">

            <li class=\"nav-item {{ app.request.get('_route') == 'admin_dashboard' ? 'active' : '' }}\">
                <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Tableau de Bord</span></a>
            </li>

            <hr class=\"sidebar-divider\">

            <div class=\"sidebar-heading\">Gestion Consultation & Boutique</div>

            <li class=\"nav-item {{ app.request.get('_route') starts with 'admin_appointment' ? 'active' : '' }}\">
                <a class=\"nav-link\" href=\"{{ path('admin_appointments_list') }}\">
                    <i class=\"fas fa-fw fa-calendar-check\"></i>
                    <span>Gestion Rendez-vous</span>
                </a>
            </li>

            <li class=\"nav-item {{ app.request.get('_route') starts with 'app_product' ? 'active' : '' }}\">
                <a class=\"nav-link\" href=\"{{ path('app_product_index') }}\">
                    <i class=\"fas fa-fw fa-pills\"></i>
                    <span>Parapharmacie</span>
                </a>
            </li>

            <hr class=\"sidebar-divider d-none d-md-block\">

            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>
        </ul>

        <div id=\"content-wrapper\" class=\"d-flex flex-column\">
            <div id=\"content\">
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\" style=\"color: var(--pink-primary);\"></i>
                    </button>

                    <ul class=\"navbar-nav ml-auto\">
                        <div class=\"topbar-divider d-none d-sm-block\"></div>
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">
                                    {{ app.user ? app.user.email : 'Administrateur' }}
                                </span>
                                <img class=\"img-profile rounded-circle\" src=\"{{ asset('back/img/undraw_profile.svg') }}\">
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                                <a class=\"dropdown-item\" href=\"{{ path('dashboard') }}\">
                                    <i class=\"fas fa-desktop fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Retour au Front
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class=\"container-fluid\">
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label == 'error' ? 'danger' : (label == 'success' ? 'success' : 'info') }} alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span>&times;</span></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    {% block body %}{% endblock %}
                </div>
            </div>

            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; PinkShield 2026</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <script src=\"{{ asset('back/vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('back/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
    <script src=\"{{ asset('back/js/sb-admin-2.min.js') }}\"></script>
</body>
</html>", "base_back.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\base_back.html.twig");
    }
}
