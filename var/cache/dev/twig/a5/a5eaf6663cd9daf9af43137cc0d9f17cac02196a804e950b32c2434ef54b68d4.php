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

/* admin/admin.html.twig */
class __TwigTemplate_6d4b7c440da5c9c9f23675f69270ba4dd6419d288c71423b1f330c0e5a37b974 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Interface Admin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <main id=\"admin\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12\">
                    <h1>Interface Admin </h1>

                    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><i class=\"fas fa-door-open fa-3x exit\"></i></a>


                    ";
        // line 18
        echo "

                    <h2><i class=\"fas fa-user-cog\"></i> Liste des membres : </h2>

                    <table>
                        <thead>
                        <tr>
                            <th>Nom complet</th>
                            <th>Pseudo</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>DOB</th>
                            <th>Adresse complète</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "                            <tr>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "DOB", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cp", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "ville", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td><span><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i
                                                    class=\"fas fa-trash-alt trash\"> </i></a> </span>
                                    <span><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><i
                                                    class=\"far fa-edit edit\"></i></a> </span>
                                    <span><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"far fa-plus-square square\"></i></a> </span>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </tbody>
                    </table>


                    ";
        // line 56
        echo "

                    <h2><i class=\"fas fa-shopping-basket\"></i> Liste des paniers :</h2>
                    <table>
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Composition</th>
                            <th>Prix/€</th>
                            <th>Poids/kg</th>
                            <th>Stock</th>
                            <th>Description du panier</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 73
            echo "                            <tr>
                                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "nomPanier", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "composition", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "prixPanier", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "poidsPanier", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "stock", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "descriptionPanier", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                <td><span id=\"delete\"><a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_paniers_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\"><i
                                                    class=\"fas fa-trash-alt trash\"></i></a></span>
                                    <span><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paniers_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["panier"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\"><i
                                                    class=\"far fa-edit edit\"></i></a> </span>
                                    <span><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paniers_add");
            echo "\"><i class=\"far fa-plus-square square\"></i></a> </span>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                        </tbody>
                    </table>


                    ";
        // line 93
        echo "                    <h2><i class=\"fas fa-tractor\"></i> Liste des producteurs :</h2>

                    <table>
                        <thead>
                        <tr>
                            <th>Nom complet</th>
                            <th>Type</th>
                            <th>Ville</th>
                            <th>Departement</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producteurs"]) || array_key_exists("producteurs", $context) ? $context["producteurs"] : (function () { throw new RuntimeError('Variable "producteurs" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producteur"]) {
            // line 107
            echo "                            <tr>
                                <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producteur"], "nom", [], "any", false, false, false, 108), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producteur"], "prenom", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                                <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producteur"], "type", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                                <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producteur"], "ville", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producteur"], "departement", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                                <td><span id=\"delete\"><a
                                                href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_producteur_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["producteur"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\"><i
                                                    class=\"fas fa-trash-alt trash\"></i></a></span>
                                    <span><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producteurs_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["producteur"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\"><i
                                                    class=\"far fa-edit edit\"></i></a> </span>
                                    <span><a href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producteurs_add");
            echo "\"><i
                                                    class=\"far fa-plus-square square\"></i></a> </span></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                        </tbody>
                    </table>

                    ";
        // line 125
        echo "                    <h2><i class=\"fas fa-carrot\"></i> Liste des produits -- Octobre 2020 :</h2>

                    <table class=\"formAdmin\">
                        <thead>
                        <tr>
                            <th> Producteur -- Fornisseur</th>
                            <th> Référence produit</th>
                            <th> Nom produit</th>
                            <th> Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 139
            echo "                            <tr>
                                <td> ";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "producteur", [], "any", false, false, false, 140), "prenom", [], "any", false, false, false, 140), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "producteur", [], "any", false, false, false, 140), "nom", [], "any", false, false, false, 140), "html", null, true);
            echo " </td>
                                <td> ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 141), "html", null, true);
            echo " </td>
                                <td> ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 142), "html", null, true);
            echo " </td>
                                <td>
                                    <span id=\"delete\"> <a
                                                href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            echo "\"> </a> <i
                                                class=\"fas fa-trash-alt trash\"> </i> </span>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                        </tbody>
                    </table>


                    ";
        // line 155
        echo "                    <h2><i class=\"fas fa-shopping-cart\"></i> Liste des commandes -- Octobre 2020 :</h2>

                    <table class=\"formAdmin\">
                        <thead>
                        <tr>
                            <th> Référence commande</th>
                            <th> Membre</th>
                            <th> Prix/€</th>
                            <th> Date</th>
                            <th> Statut</th>
                            <th> Retrait</th>
                            <th> Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 172
            echo "                            <tr>
                                <td> ";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 173), "html", null, true);
            echo " </td>
                                <td> ";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174), "html", null, true);
            echo " -- ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", [], "any", false, false, false, 174), "pseudo", [], "any", false, false, false, 174), "html", null, true);
            echo " </td>
                                <td> ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "prixTotal", [], "any", false, false, false, 175), "html", null, true);
            echo " </td>
                                <td> ";
            // line 176
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 176), "d/m/Y"), "html", null, true);
            echo " </td>
                                <td> ";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 177), "html", null, true);
            echo " </td>
                                <td>
                                    <select>
                                        <option> ";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "retrait", [], "any", false, false, false, 180), "html", null, true);
            echo " </option>
                                        <option> oui</option>
                                    </select>
                                </td>
                                <td>
                                    <span id=\"delete\">
                                        <a href=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_commandes_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 186)]), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-trash-alt trash\"> </i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 193,  436 => 186,  427 => 180,  421 => 177,  417 => 176,  413 => 175,  407 => 174,  403 => 173,  400 => 172,  396 => 171,  378 => 155,  372 => 150,  361 => 145,  355 => 142,  351 => 141,  345 => 140,  342 => 139,  338 => 138,  323 => 125,  318 => 121,  308 => 117,  303 => 115,  298 => 113,  293 => 111,  289 => 110,  285 => 109,  279 => 108,  276 => 107,  272 => 106,  257 => 93,  251 => 88,  241 => 84,  236 => 82,  231 => 80,  227 => 79,  223 => 78,  219 => 77,  215 => 76,  211 => 75,  207 => 74,  204 => 73,  200 => 72,  182 => 56,  176 => 51,  166 => 47,  161 => 45,  156 => 43,  148 => 42,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  126 => 37,  123 => 36,  119 => 35,  100 => 18,  94 => 14,  86 => 8,  79 => 7,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Interface Admin{% endblock %}
{% block header %}
{% endblock %}

{% block body %}
    <main id=\"admin\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12\">
                    <h1>Interface Admin </h1>

                    <a href=\"{{ path('index') }}\"><i class=\"fas fa-door-open fa-3x exit\"></i></a>


                    {# ---------------------------------- ADMIN USERS -------------------------------- #}


                    <h2><i class=\"fas fa-user-cog\"></i> Liste des membres : </h2>

                    <table>
                        <thead>
                        <tr>
                            <th>Nom complet</th>
                            <th>Pseudo</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>DOB</th>
                            <th>Adresse complète</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.prenom }} {{ user.prenom }}</td>
                                <td>{{ user.pseudo }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.tel }}</td>
                                <td>{{ user.DOB }}</td>
                                <td>{{ user.adresse }} {{ user.cp }} {{ user.ville }}</td>
                                <td><span><a href=\"{{ path('admin_user_delete',{id: user.id}) }}\"><i
                                                    class=\"fas fa-trash-alt trash\"> </i></a> </span>
                                    <span><a href=\"{{ path('register_edit',{id: user.id}) }}\"><i
                                                    class=\"far fa-edit edit\"></i></a> </span>
                                    <span><a href=\"{{ path('app_register') }}\"><i class=\"far fa-plus-square square\"></i></a> </span>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>


                    {# ---------------------------------- ADMIN PANIERS -------------------------------- #}


                    <h2><i class=\"fas fa-shopping-basket\"></i> Liste des paniers :</h2>
                    <table>
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Composition</th>
                            <th>Prix/€</th>
                            <th>Poids/kg</th>
                            <th>Stock</th>
                            <th>Description du panier</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for panier in paniers %}
                            <tr>
                                <td>{{ panier.nomPanier }}</td>
                                <td>{{ panier.composition }}</td>
                                <td>{{ panier.prixPanier }}</td>
                                <td>{{ panier.poidsPanier }}</td>
                                <td>{{ panier.stock }}</td>
                                <td>{{ panier.descriptionPanier }}</td>
                                <td><span id=\"delete\"><a href=\"{{ path('admin_paniers_delete',{id: panier.id}) }}\"><i
                                                    class=\"fas fa-trash-alt trash\"></i></a></span>
                                    <span><a href=\"{{ path('paniers_edit',{id: panier.id}) }}\"><i
                                                    class=\"far fa-edit edit\"></i></a> </span>
                                    <span><a href=\"{{ path('paniers_add') }}\"><i class=\"far fa-plus-square square\"></i></a> </span>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>


                    {# ---------------------------------- ADMIN PRODUCTEURS -------------------------------- #}
                    <h2><i class=\"fas fa-tractor\"></i> Liste des producteurs :</h2>

                    <table>
                        <thead>
                        <tr>
                            <th>Nom complet</th>
                            <th>Type</th>
                            <th>Ville</th>
                            <th>Departement</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for producteur in producteurs %}
                            <tr>
                                <td>{{ producteur.nom }} {{ producteur.prenom }}</td>
                                <td>{{ producteur.type }}</td>
                                <td>{{ producteur.ville }}</td>
                                <td>{{ producteur.departement }}</td>
                                <td><span id=\"delete\"><a
                                                href=\"{{ path('admin_producteur_delete',{id: producteur.id}) }}\"><i
                                                    class=\"fas fa-trash-alt trash\"></i></a></span>
                                    <span><a href=\"{{ path('producteurs_edit',{id: producteur.id}) }}\"><i
                                                    class=\"far fa-edit edit\"></i></a> </span>
                                    <span><a href=\"{{ path('producteurs_add') }}\"><i
                                                    class=\"far fa-plus-square square\"></i></a> </span></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>

                    {# ---------------------------------- ADMIN PRODUITS-------------------------------- #}
                    <h2><i class=\"fas fa-carrot\"></i> Liste des produits -- Octobre 2020 :</h2>

                    <table class=\"formAdmin\">
                        <thead>
                        <tr>
                            <th> Producteur -- Fornisseur</th>
                            <th> Référence produit</th>
                            <th> Nom produit</th>
                            <th> Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for produit in produits %}
                            <tr>
                                <td> {{ produit.producteur.prenom }}  {{ produit.producteur.nom }} </td>
                                <td> {{ produit.id }} </td>
                                <td> {{ produit.nomProduit }} </td>
                                <td>
                                    <span id=\"delete\"> <a
                                                href=\"{{ path('admin_produits_delete',{id:produit.id}) }}\"> </a> <i
                                                class=\"fas fa-trash-alt trash\"> </i> </span>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>


                    {# ---------------------------------- ADMIN COMMANDES -------------------------------- #}
                    <h2><i class=\"fas fa-shopping-cart\"></i> Liste des commandes -- Octobre 2020 :</h2>

                    <table class=\"formAdmin\">
                        <thead>
                        <tr>
                            <th> Référence commande</th>
                            <th> Membre</th>
                            <th> Prix/€</th>
                            <th> Date</th>
                            <th> Statut</th>
                            <th> Retrait</th>
                            <th> Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for commande in commandes %}
                            <tr>
                                <td> {{ commande.id }} </td>
                                <td> {{ commande.user.id }} -- {{ commande.user.pseudo }} </td>
                                <td> {{ commande.prixTotal }} </td>
                                <td> {{ commande.date | date('d/m/Y') }} </td>
                                <td> {{ commande.statut }} </td>
                                <td>
                                    <select>
                                        <option> {{ commande.retrait }} </option>
                                        <option> oui</option>
                                    </select>
                                </td>
                                <td>
                                    <span id=\"delete\">
                                        <a href=\"{{ path('admin_commandes_delete',{id:commande.id}) }}\">
                                            <i class=\"fas fa-trash-alt trash\"> </i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
{% endblock %}
", "admin/admin.html.twig", "C:\\Users\\WEBFORCE3\\Desktop\\PaniersParisSymfony\\PaniersParisSymfony\\templates\\admin\\admin.html.twig");
    }
}
