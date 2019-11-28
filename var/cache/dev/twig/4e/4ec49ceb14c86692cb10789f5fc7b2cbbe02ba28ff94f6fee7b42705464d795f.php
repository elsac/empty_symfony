<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_b11bc825a697edcddf44b0070ac86a4a6c7477cd5c36142e076b73c91ffe9bcc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        <!-- Font Awesome JS -->
        <script defer src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/solid.js\" ></script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js\" integrity=\"sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY\" crossorigin=\"anonymous\"></script>

    </head>
    <body>
        <div class=\"wrapper\">
            <!-- Sidebar  -->
            <nav id=\"sidebar\">
                <div class=\"sidebar-header\">
                    <h3>Marathon des Sables</h3>
                    <strong>BS</strong>
                </div>
        
                <ul class=\"list-unstyled components\">
                    <li class=\"active\">
                        <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                            <i class=\"fas fa-home\"></i>
                            Home
                        </a>
                        <ul class=\"collapse list-unstyled\" id=\"homeSubmenu\">
                            <li>
                                <a href=\"#\">Home 1</a>
                            </li>
                            <li>
                                <a href=\"#\">Home 2</a>
                            </li>
                            <li>
                                <a href=\"#\">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-briefcase\"></i>
                            About
                        </a>
                        <a href=\"#pageSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                            <i class=\"fas fa-copy\"></i>
                            Pages
                        </a>
                        <ul class=\"collapse list-unstyled\" id=\"pageSubmenu\">
                            <li class=\"nav-item ";
        // line 53
        if (((isset($context["onglets_menu"]) || array_key_exists("onglets_menu", $context) ? $context["onglets_menu"] : (function () { throw new RuntimeError('Variable "onglets_menu" does not exist.', 53, $this->source); })()) == "home")) {
            echo "active";
        }
        echo "\">
                                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"nav-item ";
        // line 56
        if (((isset($context["onglets_menu"]) || array_key_exists("onglets_menu", $context) ? $context["onglets_menu"] : (function () { throw new RuntimeError('Variable "onglets_menu" does not exist.', 56, $this->source); })()) == "prop")) {
            echo "active";
        }
        echo "\">
                                <a class=\"nav-link\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prop");
        echo "\">Properties</a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Dropdown
                                </a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        
            <!-- Page Content  -->
            <div id=\"content\">

                <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                    <div class=\"container-fluid\">

                        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
                            <i class=\"fas fa-align-left\"></i>
                        </button>
                        <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <i class=\"fas fa-align-justify\"></i>
                        </button>

                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item ";
        // line 90
        if (((isset($context["onglets_menu"]) || array_key_exists("onglets_menu", $context) ? $context["onglets_menu"] : (function () { throw new RuntimeError('Variable "onglets_menu" does not exist.', 90, $this->source); })()) == "home")) {
            echo "active";
        }
        echo "\">
                                    <a class=\"nav-link\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                                </li>
                                <li class=\"nav-item ";
        // line 93
        if (((isset($context["onglets_menu"]) || array_key_exists("onglets_menu", $context) ? $context["onglets_menu"] : (function () { throw new RuntimeError('Variable "onglets_menu" does not exist.', 93, $this->source); })()) == "prop")) {
            echo "active";
        }
        echo "\">
                                    <a class=\"nav-link\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prop");
        echo "\">Properties</a>
                                </li>
                                <li class=\"nav-item ";
        // line 96
        if (((isset($context["onglets_menu"]) || array_key_exists("onglets_menu", $context) ? $context["onglets_menu"] : (function () { throw new RuntimeError('Variable "onglets_menu" does not exist.', 96, $this->source); })()) == "admin")) {
            echo "active";
        }
        echo "\">
                                    <a class=\"nav-link\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Admin</a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "request", [], "any", false, false, false, 101), "getLocale", [], "method", false, false, false, 101) == "fr")) {
            echo " French ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "request", [], "any", false, false, false, 101), "getLocale", [], "method", false, false, false, 101) == "en")) {
            echo " English ";
        }
        // line 102
        echo "                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "get", [0 => "_route"], "method", false, false, false, 104), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "get", [0 => "_route_params"], "method", false, false, false, 104), ["_locale" => "fr"])), "html", null, true);
        echo "\">French</a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "request", [], "any", false, false, false, 105), "get", [0 => "_route"], "method", false, false, false, 105), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "request", [], "any", false, false, false, 105), "get", [0 => "_route_params"], "method", false, false, false, 105), ["_locale" => "en"])), "html", null, true);
        echo "\">English</a>
                                    </div>
                                </li>
                                <li class=\"nav-item ";
        // line 108
        if (((isset($context["onglets_menu"]) || array_key_exists("onglets_menu", $context) ? $context["onglets_menu"] : (function () { throw new RuntimeError('Variable "onglets_menu" does not exist.', 108, $this->source); })()) == "login")) {
            echo "active";
        }
        echo "\">
                                    <a class=\"nav-link\" href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login Page</a>
                                </li>
                                ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111)) {
            // line 112
            echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a>
                                    </li>
                                ";
        }
        // line 116
        echo "                            </ul>
                        </div>
                    </div>
                </nav>

                ";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "            </div>
        </div>

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
        ";
        // line 128
        $this->displayBlock('javascripts', $context, $blocks);
        // line 131
        echo "        
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 129
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 129,  324 => 128,  306 => 121,  293 => 8,  283 => 7,  264 => 5,  251 => 131,  249 => 128,  241 => 122,  239 => 121,  232 => 116,  226 => 113,  223 => 112,  221 => 111,  216 => 109,  210 => 108,  204 => 105,  200 => 104,  196 => 102,  190 => 101,  183 => 97,  177 => 96,  172 => 94,  166 => 93,  161 => 91,  155 => 90,  119 => 57,  113 => 56,  105 => 53,  60 => 10,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
        {% block stylesheets %}
            <link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
        
        <!-- Font Awesome JS -->
        <script defer src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/solid.js\" ></script>
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js\" integrity=\"sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY\" crossorigin=\"anonymous\"></script>

    </head>
    <body>
        <div class=\"wrapper\">
            <!-- Sidebar  -->
            <nav id=\"sidebar\">
                <div class=\"sidebar-header\">
                    <h3>Marathon des Sables</h3>
                    <strong>BS</strong>
                </div>
        
                <ul class=\"list-unstyled components\">
                    <li class=\"active\">
                        <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                            <i class=\"fas fa-home\"></i>
                            Home
                        </a>
                        <ul class=\"collapse list-unstyled\" id=\"homeSubmenu\">
                            <li>
                                <a href=\"#\">Home 1</a>
                            </li>
                            <li>
                                <a href=\"#\">Home 2</a>
                            </li>
                            <li>
                                <a href=\"#\">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-briefcase\"></i>
                            About
                        </a>
                        <a href=\"#pageSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">
                            <i class=\"fas fa-copy\"></i>
                            Pages
                        </a>
                        <ul class=\"collapse list-unstyled\" id=\"pageSubmenu\">
                            <li class=\"nav-item {% if onglets_menu == 'home' %}active{% endif %}\">
                                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"nav-item {% if onglets_menu == 'prop' %}active{% endif %}\">
                                <a class=\"nav-link\" href=\"{{ path('prop') }}\">Properties</a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Dropdown
                                </a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        
            <!-- Page Content  -->
            <div id=\"content\">

                <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                    <div class=\"container-fluid\">

                        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
                            <i class=\"fas fa-align-left\"></i>
                        </button>
                        <button class=\"btn btn-dark d-inline-block d-lg-none ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <i class=\"fas fa-align-justify\"></i>
                        </button>

                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item {% if onglets_menu == 'home' %}active{% endif %}\">
                                    <a class=\"nav-link\" href=\"{{ path('home') }}\">Home</a>
                                </li>
                                <li class=\"nav-item {% if onglets_menu == 'prop' %}active{% endif %}\">
                                    <a class=\"nav-link\" href=\"{{ path('prop') }}\">Properties</a>
                                </li>
                                <li class=\"nav-item {% if onglets_menu == 'admin' %}active{% endif %}\">
                                    <a class=\"nav-link\" href=\"{{ path('admin') }}\">Admin</a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    {% if(app.request.getLocale()=='fr')  %} French {% elseif (app.request.getLocale()=='en') %} English {% endif %}
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item\" href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\">French</a>
                                        <a class=\"dropdown-item\" href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">English</a>
                                    </div>
                                </li>
                                <li class=\"nav-item {% if onglets_menu == 'login' %}active{% endif %}\">
                                    <a class=\"nav-link\" href=\"{{ path('login') }}\">Login Page</a>
                                </li>
                                {% if app.user %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path('logout') }}\">Logout</a>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                </nav>

                {% block body %}{% endblock %}
            </div>
        </div>

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
        {% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('assets/js/main.js') }}\"></script>
        {% endblock %}
        
    </body>
</html>
", "base.html.twig", "/home/elsa/Documents/projet_symfony/MyProject/templates/base.html.twig");
    }
}
