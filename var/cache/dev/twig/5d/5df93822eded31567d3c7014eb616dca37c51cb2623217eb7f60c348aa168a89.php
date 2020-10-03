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

/* admin/form_panier.html.twig */
class __TwigTemplate_899bda42073701651f627d6800dbb3ffe1349daf609a857e02235dd2fd953b2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form_panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/form_panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paniers";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "


<body>
    <main id=\"form_paniers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12\">

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                        <h1>Interface Admin  </h1>
                        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\"><i class=\"fas fa-door-open fa-3x exit\"></i></a>

                            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_paniers"]) || array_key_exists("form_paniers", $context) ? $context["form_paniers"] : (function () { throw new RuntimeError('Variable "form_paniers" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                                <div id=\"formulaire_paniers\">

                                    ";
        // line 25
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                                    <h2>Modification informations paniers</h2>
                                    ";
        } else {
            // line 28
            echo "                                    <h2>Nouveau panier ?</h2>
                                    ";
        }
        // line 30
        echo "
                                        <form action=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paniers_add");
        echo "\" method=\"POST\">
                                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_paniers"]) || array_key_exists("form_paniers", $context) ? $context["form_paniers"] : (function () { throw new RuntimeError('Variable "form_paniers" does not exist.', 32, $this->source); })()), "nom_panier", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "Saisissez le nom"]]);
        echo "
                                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_paniers"]) || array_key_exists("form_paniers", $context) ? $context["form_paniers"] : (function () { throw new RuntimeError('Variable "form_paniers" does not exist.', 33, $this->source); })()), "prix_panier", [], "any", false, false, false, 33), 'row', ["attr" => ["placeholder" => "Saisissez le prix"]]);
        echo "
                                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_paniers"]) || array_key_exists("form_paniers", $context) ? $context["form_paniers"] : (function () { throw new RuntimeError('Variable "form_paniers" does not exist.', 34, $this->source); })()), "poids_panier", [], "any", false, false, false, 34), 'row', ["attr" => ["placeholder" => "Saisissez le poids"]]);
        echo "
                                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_paniers"]) || array_key_exists("form_paniers", $context) ? $context["form_paniers"] : (function () { throw new RuntimeError('Variable "form_paniers" does not exist.', 35, $this->source); })()), "stock", [], "any", false, false, false, 35), 'row', ["attr" => ["placeholder" => "Saisissez le stock"]]);
        echo "
                                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_paniers"]) || array_key_exists("form_paniers", $context) ? $context["form_paniers"] : (function () { throw new RuntimeError('Variable "form_paniers" does not exist.', 36, $this->source); })()), "composition", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "Saisissez la composition"]]);
        echo "
                                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_paniers"]) || array_key_exists("form_paniers", $context) ? $context["form_paniers"] : (function () { throw new RuntimeError('Variable "form_paniers" does not exist.', 37, $this->source); })()), "description_panier", [], "any", false, false, false, 37), 'row', ["attr" => ["placeholder" => "Saisissez la description"]]);
        echo "


                                                <button type=\"submit\" class=\"add\">
                                                    ";
        // line 41
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                                                    Enregistrer
                                                    ";
        } else {
            // line 44
            echo "                                                    Ajouter
                                                    ";
        }
        // line 46
        echo "                                                </button>
                                        </form>
                                </div>
                            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_paniers"]) || array_key_exists("form_paniers", $context) ? $context["form_paniers"] : (function () { throw new RuntimeError('Variable "form_paniers" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </main>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/form_panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 60,  177 => 49,  172 => 46,  168 => 44,  164 => 42,  162 => 41,  155 => 37,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  135 => 32,  131 => 31,  128 => 30,  124 => 28,  120 => 26,  118 => 25,  112 => 22,  107 => 20,  101 => 17,  90 => 8,  83 => 7,  75 => 5,  68 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paniers{% endblock %}
{% block header %}

{% endblock %}
{% block body %}



<body>
    <main id=\"form_paniers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12\">

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                        <h1>Interface Admin  </h1>
                        <a href=\"{{path('admin')}}\"><i class=\"fas fa-door-open fa-3x exit\"></i></a>

                            {{ form_start(form_paniers) }}
                                <div id=\"formulaire_paniers\">

                                    {% if editMode %}
                                    <h2>Modification informations paniers</h2>
                                    {% else %}
                                    <h2>Nouveau panier ?</h2>
                                    {% endif %}

                                        <form action=\"{{ path('paniers_add') }}\" method=\"POST\">
                                            {{ form_row(form_paniers.nom_panier, {'attr': {'placeholder': \"Saisissez le nom\" }})}}
                                            {{ form_row(form_paniers.prix_panier, {'attr': {'placeholder': \"Saisissez le prix\" }}) }}
                                            {{ form_row(form_paniers.poids_panier, {'attr': {'placeholder': \"Saisissez le poids\" }}) }}
                                            {{ form_row(form_paniers.stock, {'attr': {'placeholder': \"Saisissez le stock\" }}) }}
                                            {{ form_row(form_paniers.composition, {'attr': {'placeholder': \"Saisissez la composition\" }}) }}
                                            {{ form_row(form_paniers.description_panier, {'attr': {'placeholder': \"Saisissez la description\" }}) }}


                                                <button type=\"submit\" class=\"add\">
                                                    {% if editMode %}
                                                    Enregistrer
                                                    {% else %}
                                                    Ajouter
                                                    {% endif %}
                                                </button>
                                        </form>
                                </div>
                            {{ form_end(form_paniers) }}
                </div>
            </div>
        </div>
    </main>
</body>

{% endblock %}



{% block footer %}
{% endblock %}", "admin/form_panier.html.twig", "C:\\Users\\WEBFORCE3\\Desktop\\PaniersParisSymfony\\PaniersParisSymfony\\templates\\admin\\form_panier.html.twig");
    }
}
