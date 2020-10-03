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

/* paniers/paniers.html.twig */
class __TwigTemplate_1defa4c5bd6b7890c73ed53e630d936878dfe38bb9f2971c2ac942df61ef5b7d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paniers/paniers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paniers/paniers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Paniers du mois ";
        
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

        <div>
            <br>
            <br>
        </div>

        <div class=\"container\">

            <div class=\"row\">
                ";
        // line 20
        echo "                <div id=\"titre\" class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 \">
                    <h2> ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</h2>
                    <p class=\"chapo\"> Concoctez vos plats avec nos produits frais de saison. Plus la peine de courir :
                        on vous facilite le quotidien!</p>
                </div>
            </div>

            <div class=\"row\">

                ";
        // line 30
        echo "                <div class=\" paniers col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">

                    <figure id=\"figure1\">

                        <img class=\"imgpanier\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paniers.jpg"), "html", null, true);
        echo "\" alt=\"Panier Léger\">

                        <figcaption>
                            <h3> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierleger"]) || array_key_exists("panierleger", $context) ? $context["panierleger"] : (function () { throw new RuntimeError('Variable "panierleger" does not exist.', 37, $this->source); })()), "nomPanier", [], "any", false, false, false, 37), "html", null, true);
        echo "</h3>
                            <p><b> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierleger"]) || array_key_exists("panierleger", $context) ? $context["panierleger"] : (function () { throw new RuntimeError('Variable "panierleger" does not exist.', 38, $this->source); })()), "descriptionPanier", [], "any", false, false, false, 38), "html", null, true);
        echo "</b></p>

                            <p id=\"ensavoirplus1\"><b>En savoir plus</b> &nbsp;<i class=\"far fa-plus-square\"></i></p>
                            ";
        // line 42
        echo "
                            <p id=\"descriptionpanier1\"><b> <u>Composition : </u></b> <br>
                                ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierleger"]) || array_key_exists("panierleger", $context) ? $context["panierleger"] : (function () { throw new RuntimeError('Variable "panierleger" does not exist.', 44, $this->source); })()), "composition", [], "any", false, false, false, 44), "html", null, true);
        echo "
                            </p>

                            <p class=\"prixpanier\"> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierleger"]) || array_key_exists("panierleger", $context) ? $context["panierleger"] : (function () { throw new RuntimeError('Variable "panierleger" does not exist.', 47, $this->source); })()), "prixPanier", [], "any", false, false, false, 47), "html", null, true);
        echo " &euro;</p>

                            <div class=\"quantitepanier\">
                                <form method=\"post\" action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["panierleger"]) || array_key_exists("panierleger", $context) ? $context["panierleger"] : (function () { throw new RuntimeError('Variable "panierleger" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\">
                                    <label for=\"quantite1\">Choisissez la quantité</label>
                                    <select name=\"quantite\" id=\"quantite1\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>

                                    <input type=\"submit\" id=\"ajoutCommande1\" value=\"Ajouter à ma Commande\">
                                </form>
                            </div>
                        </figcaption>
                    </figure>

                </div>

                ";
        // line 67
        echo "                <div class=\"paniers col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">
                    <figure id=\"figure2\">

                        <img class=\"imgpanier\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paniers.jpg"), "html", null, true);
        echo "\" alt=\"Panier Duo\">

                        <figcaption>
                            <h3>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierduo"]) || array_key_exists("panierduo", $context) ? $context["panierduo"] : (function () { throw new RuntimeError('Variable "panierduo" does not exist.', 73, $this->source); })()), "nomPanier", [], "any", false, false, false, 73), "html", null, true);
        echo "</h3>
                            <p><b> ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierduo"]) || array_key_exists("panierduo", $context) ? $context["panierduo"] : (function () { throw new RuntimeError('Variable "panierduo" does not exist.', 74, $this->source); })()), "descriptionPanier", [], "any", false, false, false, 74), "html", null, true);
        echo "</b></p>

                            <p id=\"ensavoirplus2\"><b>En savoir plus</b> &nbsp;<i class=\"far fa-plus-square\"></i></p>
                            ";
        // line 78
        echo "
                            <p id=\"descriptionpanier2\"><b> <u>Composition : </u></b> <br>
                                ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierduo"]) || array_key_exists("panierduo", $context) ? $context["panierduo"] : (function () { throw new RuntimeError('Variable "panierduo" does not exist.', 80, $this->source); })()), "composition", [], "any", false, false, false, 80), "html", null, true);
        echo " </p>

                            <p class=\"prixpanier\"> ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierduo"]) || array_key_exists("panierduo", $context) ? $context["panierduo"] : (function () { throw new RuntimeError('Variable "panierduo" does not exist.', 82, $this->source); })()), "prixPanier", [], "any", false, false, false, 82), "html", null, true);
        echo " &euro;</p>

                            <div class=\"quantitepanier\">
                                <form method=\"post\" action=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["panierduo"]) || array_key_exists("panierduo", $context) ? $context["panierduo"] : (function () { throw new RuntimeError('Variable "panierduo" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\">
                                    <label for=\"quantite2\">Choisissez la quantité</label>
                                    <select name=\"quantite\" id=\"quantite2\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>

                                    <input type=\"submit\" id=\"ajoutCommande2\" value=\"Ajouter à ma Commande\">
                                </form>
                            </div>

                        </figcaption>
                    </figure>

                </div>


                ";
        // line 104
        echo "                <div class=\"paniers col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">

                    <figure id=\"figure3\">

                        <img class=\"imgpanier\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/paniers.jpg"), "html", null, true);
        echo "\" alt=\"Panier Big\">

                        <figcaption>
                            <h3> ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierbig"]) || array_key_exists("panierbig", $context) ? $context["panierbig"] : (function () { throw new RuntimeError('Variable "panierbig" does not exist.', 111, $this->source); })()), "nomPanier", [], "any", false, false, false, 111), "html", null, true);
        echo " </h3>
                            <p><b> ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierbig"]) || array_key_exists("panierbig", $context) ? $context["panierbig"] : (function () { throw new RuntimeError('Variable "panierbig" does not exist.', 112, $this->source); })()), "descriptionPanier", [], "any", false, false, false, 112), "html", null, true);
        echo "</b></p>

                            <p id=\"ensavoirplus3\"><b>En savoir plus</b> &nbsp;<i class=\"far fa-plus-square\"></i></p>
                            ";
        // line 116
        echo "
                            <p id=\"descriptionpanier3\"><b> <u>Composition : </u></b> <br>
                                ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierbig"]) || array_key_exists("panierbig", $context) ? $context["panierbig"] : (function () { throw new RuntimeError('Variable "panierbig" does not exist.', 118, $this->source); })()), "composition", [], "any", false, false, false, 118), "html", null, true);
        echo " </p>

                            <p class=\"prixpanier\"> ";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panierbig"]) || array_key_exists("panierbig", $context) ? $context["panierbig"] : (function () { throw new RuntimeError('Variable "panierbig" does not exist.', 120, $this->source); })()), "prixPanier", [], "any", false, false, false, 120), "html", null, true);
        echo " &euro;</p>

                            <div class=\"quantitepanier\">
                                <form method=\"post\" action=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["panierbig"]) || array_key_exists("panierbig", $context) ? $context["panierbig"] : (function () { throw new RuntimeError('Variable "panierbig" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
        echo "\">
                                    <label for=\"quantite3\"> <b>Choisissez la quantité</b></label>
                                    <select name=\"quantite\" id=\"quantite3\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>


                                    <input type=\"submit\" id=\"ajoutCommande3\" value=\"Ajouter à ma Commande\">

                                </form>
                            </div>


                        </figcaption>
                    </figure>

                </div>


            </div>


        </div>

    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "paniers/paniers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 123,  245 => 120,  240 => 118,  236 => 116,  230 => 112,  226 => 111,  220 => 108,  214 => 104,  193 => 85,  187 => 82,  182 => 80,  178 => 78,  172 => 74,  168 => 73,  162 => 70,  157 => 67,  138 => 50,  132 => 47,  126 => 44,  122 => 42,  116 => 38,  112 => 37,  106 => 34,  100 => 30,  89 => 21,  86 => 20,  73 => 8,  66 => 7,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Paniers du mois {% endblock %}



{% block body %}

    <main>

        <div>
            <br>
            <br>
        </div>

        <div class=\"container\">

            <div class=\"row\">
                {# CHAPO #}
                <div id=\"titre\" class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 \">
                    <h2> {{ titre }}</h2>
                    <p class=\"chapo\"> Concoctez vos plats avec nos produits frais de saison. Plus la peine de courir :
                        on vous facilite le quotidien!</p>
                </div>
            </div>

            <div class=\"row\">

                {# PANIER 1 #}
                <div class=\" paniers col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">

                    <figure id=\"figure1\">

                        <img class=\"imgpanier\" src=\"{{ asset('assets/img/paniers.jpg') }}\" alt=\"Panier Léger\">

                        <figcaption>
                            <h3> {{ panierleger.nomPanier }}</h3>
                            <p><b> {{ panierleger.descriptionPanier }}</b></p>

                            <p id=\"ensavoirplus1\"><b>En savoir plus</b> &nbsp;<i class=\"far fa-plus-square\"></i></p>
                            {# Accordéon display:none / display avec JS #}

                            <p id=\"descriptionpanier1\"><b> <u>Composition : </u></b> <br>
                                {{ panierleger.composition }}
                            </p>

                            <p class=\"prixpanier\"> {{ panierleger.prixPanier }} &euro;</p>

                            <div class=\"quantitepanier\">
                                <form method=\"post\" action=\"{{ path('commande_add',{id:panierleger.id}) }}\">
                                    <label for=\"quantite1\">Choisissez la quantité</label>
                                    <select name=\"quantite\" id=\"quantite1\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>

                                    <input type=\"submit\" id=\"ajoutCommande1\" value=\"Ajouter à ma Commande\">
                                </form>
                            </div>
                        </figcaption>
                    </figure>

                </div>

                {# PANIER 2 #}
                <div class=\"paniers col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">
                    <figure id=\"figure2\">

                        <img class=\"imgpanier\" src=\"{{ asset('assets/img/paniers.jpg') }}\" alt=\"Panier Duo\">

                        <figcaption>
                            <h3>{{ panierduo.nomPanier }}</h3>
                            <p><b> {{ panierduo.descriptionPanier }}</b></p>

                            <p id=\"ensavoirplus2\"><b>En savoir plus</b> &nbsp;<i class=\"far fa-plus-square\"></i></p>
                            {# Accordéon display:none / display avec JS #}

                            <p id=\"descriptionpanier2\"><b> <u>Composition : </u></b> <br>
                                {{ panierduo.composition }} </p>

                            <p class=\"prixpanier\"> {{ panierduo.prixPanier }} &euro;</p>

                            <div class=\"quantitepanier\">
                                <form method=\"post\" action=\"{{ path('commande_add',{id:panierduo.id}) }}\">
                                    <label for=\"quantite2\">Choisissez la quantité</label>
                                    <select name=\"quantite\" id=\"quantite2\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>

                                    <input type=\"submit\" id=\"ajoutCommande2\" value=\"Ajouter à ma Commande\">
                                </form>
                            </div>

                        </figcaption>
                    </figure>

                </div>


                {# PANIER  3 #}
                <div class=\"paniers col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">

                    <figure id=\"figure3\">

                        <img class=\"imgpanier\" src=\"{{ asset('assets/img/paniers.jpg') }}\" alt=\"Panier Big\">

                        <figcaption>
                            <h3> {{ panierbig.nomPanier }} </h3>
                            <p><b> {{ panierbig.descriptionPanier }}</b></p>

                            <p id=\"ensavoirplus3\"><b>En savoir plus</b> &nbsp;<i class=\"far fa-plus-square\"></i></p>
                            {# Accordéon display:none / display avec JS #}

                            <p id=\"descriptionpanier3\"><b> <u>Composition : </u></b> <br>
                                {{ panierbig.composition }} </p>

                            <p class=\"prixpanier\"> {{ panierbig.prixPanier }} &euro;</p>

                            <div class=\"quantitepanier\">
                                <form method=\"post\" action=\"{{ path('commande_add',{id:panierbig.id}) }}\">
                                    <label for=\"quantite3\"> <b>Choisissez la quantité</b></label>
                                    <select name=\"quantite\" id=\"quantite3\">
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>


                                    <input type=\"submit\" id=\"ajoutCommande3\" value=\"Ajouter à ma Commande\">

                                </form>
                            </div>


                        </figcaption>
                    </figure>

                </div>


            </div>


        </div>

    </main>

{% endblock %}
", "paniers/paniers.html.twig", "C:\\Users\\WEBFORCE3\\Desktop\\PaniersParisSymfony\\PaniersParisSymfony\\templates\\paniers\\paniers.html.twig");
    }
}
