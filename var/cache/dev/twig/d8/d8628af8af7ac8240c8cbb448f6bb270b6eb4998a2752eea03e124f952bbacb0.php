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

/* paiement/paiement.html.twig */
class __TwigTemplate_3d50568fdf1b480b0c1992e65f9d9c79666546afeb0afccad08ec193b43e0576 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/paiement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/paiement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Paiement ";
        
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
    <main>
        <div class=\"container\">

            <div class=\"row\">

                <div>
                    <br/>
                    <br/>
                </div>

                ";
        // line 20
        echo "
                ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                    <div class=\"col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6\">

                        <h2><i class=\"fas fa-shopping-basket\"></i> Récapitulatif de votre commande</h2>

                        ";
            // line 27
            echo "                        <table id=\"recapitulatifCommande\">
                            <thead>
                            <tr>
                                <th><b> Nom(s) article(s) </b></th>
                                <th><b> Quantité article(s) </b></th>
                                <th><b> Prix unitaire TTC </b></th>
                                <th><b> Prix total TTC </b></th>
                            </tr>
                            </thead>

                            <tbody>
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "                                <tr>
                                    <td> ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 40), "nomPanier", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                                    <td> ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 41), "html", null, true);
                echo " </td>
                                    <td> ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 42), "prixPanier", [], "any", false, false, false, 42), "html", null, true);
                echo " &euro;</td>
                                    <td> ";
                // line 43
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 43), "prixPanier", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 43)), "html", null, true);
                echo " &euro;</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                            </tbody>

                            <tfoot class=\"montant\">
                            <tr>
                                <td colspan=\"3\"><b> Montant total de la commande </b></td>
                                <td colspan=\"2\"><b> ";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()), "html", null, true);
            echo " &euro; </b></td>
                            </tr>

                            </tfoot>
                        </table>

                    </div>
                    ";
            // line 59
            echo "

                    ";
            // line 62
            echo "                    <div class=\"col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6\">

                        <h2><i class=\"fas fa-shopping-basket\"></i> Paiement </h2>

                        <form action=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_success");
            echo "\" method=\"post\" id=\"payment-form\">
                            <div>
                                <label for=\"card-element\"> <i class=\"far fa-credit-card\"></i> Carte de crédit </label>
                                <div id=\"card-element\">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display Element errors. -->
                                <div id=\"card-errors\" role=\"alert\"></div>
                            </div>
                            ";
            // line 77
            echo "                            <button id=\"payer\"> Payer</button>
                        </form>

                    </div>
                    ";
            // line 82
            echo "
                    ";
            // line 84
            echo "                ";
        }
        // line 85
        echo "
                ";
        // line 87
        echo "            </div>

            ";
        // line 90
        echo "        </div>
    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_paiement.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "paiement/paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 98,  215 => 96,  208 => 95,  198 => 90,  194 => 87,  191 => 85,  188 => 84,  185 => 82,  179 => 77,  166 => 66,  160 => 62,  156 => 59,  146 => 51,  139 => 46,  130 => 43,  126 => 42,  122 => 41,  118 => 40,  115 => 39,  111 => 38,  98 => 27,  92 => 22,  90 => 21,  87 => 20,  74 => 8,  67 => 7,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Paiement {% endblock %}



{% block body %}

    <main>
        <div class=\"container\">

            <div class=\"row\">

                <div>
                    <br/>
                    <br/>
                </div>

                {# DEBUT CONDITION SI UTILISATEUR CONNECTE #}

                {% if app.user %}
                    <div class=\"col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6\">

                        <h2><i class=\"fas fa-shopping-basket\"></i> Récapitulatif de votre commande</h2>

                        {# ################################ recap commande ####################################### #}
                        <table id=\"recapitulatifCommande\">
                            <thead>
                            <tr>
                                <th><b> Nom(s) article(s) </b></th>
                                <th><b> Quantité article(s) </b></th>
                                <th><b> Prix unitaire TTC </b></th>
                                <th><b> Prix total TTC </b></th>
                            </tr>
                            </thead>

                            <tbody>
                            {% for item in items %}
                                <tr>
                                    <td> {{ item.article.nomPanier }}</td>
                                    <td> {{ item.quantite }} </td>
                                    <td> {{ item.article.prixPanier }} &euro;</td>
                                    <td> {{ item.article.prixPanier * item.quantite }} &euro;</td>
                                </tr>
                            {% endfor %}
                            </tbody>

                            <tfoot class=\"montant\">
                            <tr>
                                <td colspan=\"3\"><b> Montant total de la commande </b></td>
                                <td colspan=\"2\"><b> {{ total }} &euro; </b></td>
                            </tr>

                            </tfoot>
                        </table>

                    </div>
                    {# ################################ fin recap commande ####################################### #}


                    {# ################################ STRIPE ####################################### #}
                    <div class=\"col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6\">

                        <h2><i class=\"fas fa-shopping-basket\"></i> Paiement </h2>

                        <form action=\"{{ path('paiement_success') }}\" method=\"post\" id=\"payment-form\">
                            <div>
                                <label for=\"card-element\"> <i class=\"far fa-credit-card\"></i> Carte de crédit </label>
                                <div id=\"card-element\">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display Element errors. -->
                                <div id=\"card-errors\" role=\"alert\"></div>
                            </div>
                            {# ################################ BOUTON PAYER ####################################### #}
                            <button id=\"payer\"> Payer</button>
                        </form>

                    </div>
                    {# ################################ FIN STRIPE ####################################### #}

                    {# FIN CONDITION UTILISATEUR CONNECTE #}
                {% endif %}

                {# FERMUTURE DIV CLASS ROW #}
            </div>

            {# FERMUTURE DIV CLASS CONTAINER #}
        </div>
    </main>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script src=\"{{ asset('assets/javascript/script_paiement.js') }}\"></script>
{% endblock %}
", "paiement/paiement.html.twig", "C:\\Users\\WEBFORCE3\\Desktop\\PaniersParisSymfony\\PaniersParisSymfony\\templates\\paiement\\paiement.html.twig");
    }
}
