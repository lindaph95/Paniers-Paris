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

/* registration/register.html.twig */
class __TwigTemplate_eeacc153c7438629d390c16a294f8f6a3f0776015635a4355b866043eea36a08 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'Error' => [$this, 'block_Error'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<main>
    <div id=\"compte\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12\">

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">


                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                    <div id=\"form1\">


                        ";
        // line 20
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "                            <h1>Modification de mes informations</h1>
                        ";
        } else {
            // line 23
            echo "                            <h1>Nouveau client ?</h1>
                        ";
        }
        // line 25
        echo "
                            <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"POST\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "pseudo", [], "any", false, false, false, 27), 'row', ["attr" => ["placeholder" => "Saisissez un pseudo"]]);
        echo "
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'row', ["attr" => ["placeholder" => "Saisissez votre nom"]]);
        echo "
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'row', ["attr" => ["placeholder" => "Saisissez votre prénom"]]);
        echo "
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "dob", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "JJ/MM/AAAA"]]);
        echo "
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "tel", [], "any", false, false, false, 31), 'row', ["attr" => ["placeholder" => "Saisissez votre n° de téléphone"]]);
        echo "
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "Saisissez votre adresse"]]);
        echo "
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "ville", [], "any", false, false, false, 33), 'row', ["attr" => ["placeholder" => "Saisissez votre ville"]]);
        echo "
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "cp", [], "any", false, false, false, 34), 'row', ["attr" => ["placeholder" => "Saisissez votre code postal"]]);
        echo "
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'row', ["attr" => ["placeholder" => "Saisissez votre adresse email"]]);
        echo "



                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), 'row', ["label" => "Mot de passe : ", "attr " => ["value" => ""]]);
        echo "

                                <div id=\"agree\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "agreeTerms", [], "any", false, false, false, 42), 'row', ["label" => "J'accepte les conditions d'utilisation"]);
        echo "
                                </div>


                                    <button type=\"submit\" id=\"inscription\">
                                    ";
        // line 47
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "                                        Enregistrer les modifications
                                    ";
        } else {
            // line 50
            echo "                                        Inscription
                                    ";
        }
        // line 52
        echo "                                    </button>
                                ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), 'form_end');
        echo "

                            </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_Error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Error"));

        // line 70
        echo "
";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 72
            echo "    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 74,  213 => 72,  209 => 71,  206 => 70,  199 => 69,  179 => 53,  176 => 52,  172 => 50,  168 => 48,  166 => 47,  158 => 42,  152 => 39,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  106 => 25,  102 => 23,  98 => 21,  96 => 20,  89 => 16,  83 => 13,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}

<main>
    <div id=\"compte\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12\">

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">


                    {{ form_start(registrationForm) }}
                    <div id=\"form1\">


                        {% if editMode %}
                            <h1>Modification de mes informations</h1>
                        {% else %}
                            <h1>Nouveau client ?</h1>
                        {% endif %}

                            <form action=\"{{ path('app_login') }}\" method=\"POST\">
                                {{ form_row(registrationForm.pseudo, {'attr': {'placeholder': \"Saisissez un pseudo\" }}) }}
                                {{ form_row(registrationForm.nom, {'attr': {'placeholder': \"Saisissez votre nom\" }})}}
                                {{ form_row(registrationForm.prenom, {'attr': {'placeholder': \"Saisissez votre prénom\" }}) }}
                                {{ form_row(registrationForm.dob, {'attr': {'placeholder': \"JJ/MM/AAAA\" }}) }}
                                {{ form_row(registrationForm.tel, {'attr': {'placeholder': \"Saisissez votre n° de téléphone\" }}) }}
                                {{ form_row(registrationForm.adresse, {'attr': {'placeholder': \"Saisissez votre adresse\" }}) }}
                                {{ form_row(registrationForm.ville, {'attr': {'placeholder': \"Saisissez votre ville\" }}) }}
                                {{ form_row(registrationForm.cp, {'attr': {'placeholder': \"Saisissez votre code postal\" }}) }}
                                {{ form_row(registrationForm.email, {'attr': {'placeholder': \"Saisissez votre adresse email\" }}) }}



                                {{ form_row(registrationForm.plainPassword, {label: 'Mot de passe : ', 'attr ': { value:\"\"}}) }}

                                <div id=\"agree\">
                                {{ form_row(registrationForm.agreeTerms, {label: 'J\\'accepte les conditions d\\'utilisation'}) }}
                                </div>


                                    <button type=\"submit\" id=\"inscription\">
                                    {% if editMode %}
                                        Enregistrer les modifications
                                    {% else %}
                                        Inscription
                                    {% endif %}
                                    </button>
                                {{ form_end(registrationForm) }}

                            </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

{% endblock %}



{% block Error %}

{% for flashError in app.flashes('verify_email_error') %}
    <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
{% endfor %}

{% endblock %}", "registration/register.html.twig", "C:\\Users\\WEBFORCE3\\Desktop\\PaniersParisSymfony\\PaniersParisSymfony\\templates\\registration\\register.html.twig");
    }
}
