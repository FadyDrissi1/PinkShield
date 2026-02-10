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

/* base.html.twig */
class __TwigTemplate_253fa1d5b1298f191665bc4bd133a977 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 53
        yield "
        ";
        // line 54
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 57
        yield "    </head>
    <body>
        ";
        // line 59
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 60
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "        <style>
            :root{
                --bg-start: #ffd6dd;
                --bg-end: #f6b0c1;
                --card-bg: rgba(255,255,255,0.95);
                --accent: #d93b47;
                --accent-dark: #b82e36;
                --muted: #7a6f6f;
                --radius: 12px;
                font-family: \"Helvetica Neue\", Arial, sans-serif;
            }
            html,body{height:100%;}
            body{
                margin:0;
                min-height:100%;
                background: linear-gradient(135deg,var(--bg-start),var(--bg-end));
                display:flex;
                align-items:center;
                justify-content:center;
                -webkit-font-smoothing:antialiased;
                -moz-osx-font-smoothing:grayscale;
            }
            .container{width:100%;max-width:980px;padding:24px;box-sizing:border-box}
            .card{
                background:var(--card-bg);
                border-radius:var(--radius);
                box-shadow:0 10px 30px rgba(0,0,0,0.12);
                padding:36px;
            }
            .auth-box{width:420px;margin:0 auto}
            .brand{display:flex;align-items:center;gap:12px;justify-content:center;margin-bottom:18px}
            .brand .logo{width:64px;height:64px;border-radius:50%;background:#ffffff;display:flex;align-items:center;justify-content:center;padding:6px;box-shadow:0 6px 18px rgba(0,0,0,0.12)}
            .brand .logo-img{width:100%;height:100%;object-fit:contain;border-radius:50%}
            .brand .title{font-size:22px;color:var(--accent-dark);font-weight:700}
            label{display:block;margin-top:12px;color:var(--muted);font-size:14px}
            input[type=\"email\"],input[type=\"text\"],input[type=\"password\"]{width:100%;padding:12px 14px;border-radius:8px;border:1px solid rgba(0,0,0,0.08);margin-top:6px;box-sizing:border-box}
            .btn{display:inline-block;padding:12px 18px;border-radius:28px;background:var(--accent);color:#fff;border:none;cursor:pointer;margin-top:18px;width:100%;font-weight:700}
            .link-muted{display:block;text-align:center;margin-top:12px;color:var(--muted);font-size:14px}
            .flash-error{background:#ffe6e9;color:#7a1b22;padding:8px;border-radius:6px;margin-bottom:12px}
            .flash-success{background:#eaf9ee;color:#0b6b32;padding:8px;border-radius:6px;margin-bottom:12px}
            .dashboard-wrap{display:flex;gap:20px}
            .sidebar{width:200px;padding:18px;border-radius:12px;background:rgba(255,255,255,0.9)}
            .content{flex:1;padding:18px;border-radius:12px;background:rgba(255,255,255,0.9)}
        </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 56
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  231 => 59,  208 => 55,  197 => 56,  194 => 55,  181 => 54,  126 => 8,  113 => 7,  90 => 5,  77 => 60,  75 => 59,  71 => 57,  69 => 54,  66 => 53,  64 => 7,  59 => 5,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
        <style>
            :root{
                --bg-start: #ffd6dd;
                --bg-end: #f6b0c1;
                --card-bg: rgba(255,255,255,0.95);
                --accent: #d93b47;
                --accent-dark: #b82e36;
                --muted: #7a6f6f;
                --radius: 12px;
                font-family: \"Helvetica Neue\", Arial, sans-serif;
            }
            html,body{height:100%;}
            body{
                margin:0;
                min-height:100%;
                background: linear-gradient(135deg,var(--bg-start),var(--bg-end));
                display:flex;
                align-items:center;
                justify-content:center;
                -webkit-font-smoothing:antialiased;
                -moz-osx-font-smoothing:grayscale;
            }
            .container{width:100%;max-width:980px;padding:24px;box-sizing:border-box}
            .card{
                background:var(--card-bg);
                border-radius:var(--radius);
                box-shadow:0 10px 30px rgba(0,0,0,0.12);
                padding:36px;
            }
            .auth-box{width:420px;margin:0 auto}
            .brand{display:flex;align-items:center;gap:12px;justify-content:center;margin-bottom:18px}
            .brand .logo{width:64px;height:64px;border-radius:50%;background:#ffffff;display:flex;align-items:center;justify-content:center;padding:6px;box-shadow:0 6px 18px rgba(0,0,0,0.12)}
            .brand .logo-img{width:100%;height:100%;object-fit:contain;border-radius:50%}
            .brand .title{font-size:22px;color:var(--accent-dark);font-weight:700}
            label{display:block;margin-top:12px;color:var(--muted);font-size:14px}
            input[type=\"email\"],input[type=\"text\"],input[type=\"password\"]{width:100%;padding:12px 14px;border-radius:8px;border:1px solid rgba(0,0,0,0.08);margin-top:6px;box-sizing:border-box}
            .btn{display:inline-block;padding:12px 18px;border-radius:28px;background:var(--accent);color:#fff;border:none;cursor:pointer;margin-top:18px;width:100%;font-weight:700}
            .link-muted{display:block;text-align:center;margin-top:12px;color:var(--muted);font-size:14px}
            .flash-error{background:#ffe6e9;color:#7a1b22;padding:8px;border-radius:6px;margin-bottom:12px}
            .flash-success{background:#eaf9ee;color:#0b6b32;padding:8px;border-radius:6px;margin-bottom:12px}
            .dashboard-wrap{display:flex;gap:20px}
            .sidebar{width:200px;padding:18px;border-radius:12px;background:rgba(255,255,255,0.9)}
            .content{flex:1;padding:18px;border-radius:12px;background:rgba(255,255,255,0.9)}
        </style>
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\driss\\Desktop\\Pink\\PinkShield\\templates\\base.html.twig");
    }
}
