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

/* admin/form_product.html.twig */
class __TwigTemplate_cb7dc1a4cb104721cc6e9287d5bd3402c4fecd2006784a49ba390b10e498e436 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form_product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/form_product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Producteurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <main id=\"form_producteur\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12\">

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                        <h1>Interface Admin  </h1>
                            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\"><i class=\"fas fa-door-open fa-3x exit\"></i></a>

                            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_product"]) || array_key_exists("form_product", $context) ? $context["form_product"] : (function () { throw new RuntimeError('Variable "form_product" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                                <div id=\"form_product\">


                                ";
        // line 24
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                                <h2>Modifier les informations ?</h2>
                                ";
        } else {
            // line 27
            echo "                                <h2>Nouveau producteur ?</h2>
                                ";
        }
        // line 29
        echo "
                                    <form action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producteurs_add");
        echo "\" method=\"POST\">
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_product"]) || array_key_exists("form_product", $context) ? $context["form_product"] : (function () { throw new RuntimeError('Variable "form_product" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'row', ["attr" => ["placeholder" => "Saisissez le nom"]]);
        echo "
                                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_product"]) || array_key_exists("form_product", $context) ? $context["form_product"] : (function () { throw new RuntimeError('Variable "form_product" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "Saisissez le prénom"]]);
        echo "
                                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_product"]) || array_key_exists("form_product", $context) ? $context["form_product"] : (function () { throw new RuntimeError('Variable "form_product" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), 'row', ["attr" => ["placeholder" => "Saisissez le type de producteurs"]]);
        echo "
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_product"]) || array_key_exists("form_product", $context) ? $context["form_product"] : (function () { throw new RuntimeError('Variable "form_product" does not exist.', 34, $this->source); })()), "ville", [], "any", false, false, false, 34), 'row', ["attr" => ["placeholder" => "Saisissez la ville"]]);
        echo "
                                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_product"]) || array_key_exists("form_product", $context) ? $context["form_product"] : (function () { throw new RuntimeError('Variable "form_product" does not exist.', 35, $this->source); })()), "departement", [], "any", false, false, false, 35), 'row', ["attr" => ["placeholder" => "Saisissez le département"]]);
        echo "
                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_product"]) || array_key_exists("form_product", $context) ? $context["form_product"] : (function () { throw new RuntimeError('Variable "form_product" does not exist.', 36, $this->source); })()), "description_producteur", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "Description producteur"]]);
        echo "

                                            <button type=\"submit\" class=\"add\">

                                                ";
        // line 40
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "                                                    Enregistrer
                                                ";
        } else {
            // line 43
            echo "                                                    Ajouter
                                                ";
        }
        // line 45
        echo "                                            </button>
                                    </form>
                                </div>
                        ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_product"]) || array_key_exists("form_product", $context) ? $context["form_product"] : (function () { throw new RuntimeError('Variable "form_product" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/form_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 58,  171 => 48,  166 => 45,  162 => 43,  158 => 41,  156 => 40,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  122 => 29,  118 => 27,  114 => 25,  112 => 24,  105 => 20,  100 => 18,  95 => 16,  87 => 10,  80 => 9,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Producteurs{% endblock %}

{% block header %}
{% endblock %}


{% block body %}

    <main id=\"form_producteur\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12\">

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                        <h1>Interface Admin  </h1>
                            <a href=\"{{path('admin')}}\"><i class=\"fas fa-door-open fa-3x exit\"></i></a>

                            {{ form_start(form_product) }}
                                <div id=\"form_product\">


                                {% if editMode %}
                                <h2>Modifier les informations ?</h2>
                                {% else %}
                                <h2>Nouveau producteur ?</h2>
                                {% endif %}

                                    <form action=\"{{ path('producteurs_add') }}\" method=\"POST\">
                                        {{ form_row(form_product.nom, {'attr': {'placeholder': \"Saisissez le nom\" }})}}
                                        {{ form_row(form_product.prenom, {'attr': {'placeholder': \"Saisissez le prénom\" }}) }}
                                        {{ form_row(form_product.type, {'attr': {'placeholder': \"Saisissez le type de producteurs\" }}) }}
                                        {{ form_row(form_product.ville, {'attr': {'placeholder': \"Saisissez la ville\" }}) }}
                                        {{ form_row(form_product.departement, {'attr': {'placeholder': \"Saisissez le département\" }}) }}
                                        {{ form_row(form_product.description_producteur, {'attr': {'placeholder': \"Description producteur\" }}) }}

                                            <button type=\"submit\" class=\"add\">

                                                {% if editMode %}
                                                    Enregistrer
                                                {% else %}
                                                    Ajouter
                                                {% endif %}
                                            </button>
                                    </form>
                                </div>
                        {{ form_end(form_product) }}
                </div>
            </div>
        </div>
    </main>
{% endblock %}




{% block footer %}
{% endblock %}", "admin/form_product.html.twig", "C:\\Users\\WEBFORCE3\\Desktop\\PaniersParisSymfony\\PaniersParisSymfony\\templates\\admin\\form_product.html.twig");
    }
}
