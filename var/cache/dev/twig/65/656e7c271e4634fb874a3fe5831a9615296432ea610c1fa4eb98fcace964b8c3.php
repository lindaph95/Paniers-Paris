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

/* commande/commande.html.twig */
class __TwigTemplate_edde4090a112406e0b24ea0c39d9c6aab811e4ed70fd29132a7a9fa9cf81c4ed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/commande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/commande.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Ma commande ";
        
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
        echo "                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                    <h2><i class=\"fas fa-shopping-basket\"></i> Ma Commande</h2>
                </div>
                ";
        // line 24
        echo "
                ";
        // line 26
        echo "                ";
        if (((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 26, $this->source); })())), 0)) && twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26))) {
            // line 27
            echo "                    ";
            // line 28
            echo "                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                        <div id=\"maCommande\">
                            <div>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Nom(s) article(s)</th>
                                        <th> Quantité article(s)</th>
                                        <th> Prix unitaire TTC</th>
                                        <th> Prix total TTC</th>
                                        <th><i class=\"fas fa-trash-alt\"></i></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                echo "                                        <tr>
                                            <td> ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 45), "nomPanier", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                                            <td> ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 46), "html", null, true);
                echo " </td>
                                            <td> ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 47), "prixPanier", [], "any", false, false, false, 47), "html", null, true);
                echo " &euro;</td>
                                            <td> ";
                // line 48
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 48), "prixPanier", [], "any", false, false, false, 48) * twig_get_attribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 48)), "html", null, true);
                echo " &euro;</td>
                                            <td><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\"> <i
                                                            class=\"fas fa-trash-alt\"> </i> </a></td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                    </tbody>

                                    <tfoot class=\"montant\">
                                    <tr>
                                        <td colspan=\"3\">Montant total de la commande</td>
                                        <td colspan=\"2\"> ";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()), "html", null, true);
            echo " &euro;</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <br/>
                            <br/>

                            <div id=\"payerCommande\" class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">

                                <form action=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement");
            echo "\" method=\"post\">
                                    <input type=\"submit\" id=\"checkout-button\" value=\"Accèder au paiement\"></input>
                                </form>

                            </div>
                        </div>
                    </div>


                    ";
            // line 79
            echo "                ";
        } elseif (((0 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 79, $this->source); })())), 0)) && twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79))) {
            // line 80
            echo "                    ";
            // line 81
            echo "                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                        <div id=\"maCommande\">
                            <table>
                                <tr>
                                    <td> Votre panier est vide !</td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    ";
            // line 93
            echo "                ";
        } elseif ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93)) {
            // line 94
            echo "                    ";
            // line 95
            echo "                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                        <div id=\"maCommande\">
                            <table>
                                <td><a href='";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "'> Se connecter </a>
                                    ou <a href='";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "'> Créer un compte </a>
                                </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    ";
            // line 107
            echo "                ";
        }
        // line 108
        echo "
            </div>
        </div>
    </main>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "commande/commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 117,  241 => 116,  228 => 108,  225 => 107,  215 => 99,  211 => 98,  206 => 95,  204 => 94,  201 => 93,  188 => 81,  186 => 80,  183 => 79,  171 => 69,  157 => 58,  150 => 53,  140 => 49,  136 => 48,  132 => 47,  128 => 46,  124 => 45,  121 => 44,  117 => 43,  100 => 28,  98 => 27,  95 => 26,  92 => 24,  87 => 20,  74 => 8,  67 => 7,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Ma commande {% endblock %}



{% block body %}

    <main>
        <div class=\"container\">

            <div class=\"row\">

                <div>
                    <br/>
                    <br/>
                </div>

                {# ####################### TITRE ########################## #}
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                    <h2><i class=\"fas fa-shopping-basket\"></i> Ma Commande</h2>
                </div>
                {# ########################## FIN TITRE ###################### #}

                {# ################################ Conditions ########################## #}
                {% if items| length > 0 and app.user %}
                    {# TABLE CONDITIONS = user connecté + commande #}
                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                        <div id=\"maCommande\">
                            <div>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Nom(s) article(s)</th>
                                        <th> Quantité article(s)</th>
                                        <th> Prix unitaire TTC</th>
                                        <th> Prix total TTC</th>
                                        <th><i class=\"fas fa-trash-alt\"></i></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    {% for item in items %}
                                        <tr>
                                            <td> {{ item.article.nomPanier }}</td>
                                            <td> {{ item.quantite }} </td>
                                            <td> {{ item.article.prixPanier }} &euro;</td>
                                            <td> {{ item.article.prixPanier * item.quantite }} &euro;</td>
                                            <td><a href=\"{{ path('commande_delete',{id:item.article.id}) }}\"> <i
                                                            class=\"fas fa-trash-alt\"> </i> </a></td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>

                                    <tfoot class=\"montant\">
                                    <tr>
                                        <td colspan=\"3\">Montant total de la commande</td>
                                        <td colspan=\"2\"> {{ total }} &euro;</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <br/>
                            <br/>

                            <div id=\"payerCommande\" class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">

                                <form action=\"{{ path('paiement') }}\" method=\"post\">
                                    <input type=\"submit\" id=\"checkout-button\" value=\"Accèder au paiement\"></input>
                                </form>

                            </div>
                        </div>
                    </div>


                    {# ######################################  Conditions ######################################### #}
                {% elseif items| length == 0 and app.user %}
                    {# TABLE CONDITIONS = user connecté + pas de commande #}
                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                        <div id=\"maCommande\">
                            <table>
                                <tr>
                                    <td> Votre panier est vide !</td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    {# ######################################### Conditions ######################################### #}
                {% elseif not app.user %}
                    {# TABLE CONDITIONS = user pas connecté #}
                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                        <div id=\"maCommande\">
                            <table>
                                <td><a href='{{ path('app_login') }}'> Se connecter </a>
                                    ou <a href='{{ path('app_register') }}'> Créer un compte </a>
                                </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    {# Fin Conditions #}
                {% endif %}

            </div>
        </div>
    </main>


{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}
", "commande/commande.html.twig", "C:\\Users\\WEBFORCE3\\Desktop\\PaniersParisSymfony\\PaniersParisSymfony\\templates\\commande\\commande.html.twig");
    }
}
