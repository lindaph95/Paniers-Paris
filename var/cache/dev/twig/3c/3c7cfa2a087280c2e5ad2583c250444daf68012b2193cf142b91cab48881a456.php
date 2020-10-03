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
class __TwigTemplate_eea06cb6f2d9bb2160b5f35a53aae7c51037fa9cdadc467bb7c1f978c0993397 extends Template
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
            'header' => [$this, 'block_header'],
            'login' => [$this, 'block_login'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
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

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('footer', $context, $blocks);
        // line 171
        echo "

";
        // line 173
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Paniers Paris ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.12.0/css/all.css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-grid.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "<header id=\"header\">

    <div class=\"container\">

        <div class=\"row\">

            ";
        // line 25
        echo "            <div class=\"col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2\">
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Logo_blanc.png"), "html", null, true);
        echo "\"
                                                    alt=\"Logo Paniers Paris\" id=\"logo\"/> </a>
            </div>

            ";
        // line 31
        echo "            <div>
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/menuHamburger.png"), "html", null, true);
        echo "\" alt=\"Menu\" id=\"menuHamburger\"/>
            </div>

            ";
        // line 36
        echo "            <div class=\"nav col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7\">
                <nav id=\"navHeader\" class=\"text-center text-nowrap\">
                    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/puce_nav_blanc.png"), "html", null, true);
        echo "\"
                                                        alt=\"puce_nav_blanc\"/> Concept</a>
                    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paniers");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/puce_nav_blanc.png"), "html", null, true);
        echo "\"
                                                          alt=\"puce_nav_blanc\"/> Paniers du
                        mois</a>
                    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/puce_nav_blanc.png"), "html", null, true);
        echo "\"
                                                           alt=\"puce_nav_blanc\"/> Ma Commande </a>
                </nav>
            </div>

            ";
        // line 49
        echo "            <div class=\"col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3\">

                <div class=\"infoscompte\">

                    ";
        // line 53
        $this->displayBlock('login', $context, $blocks);
        // line 98
        echo "

                </div>

            </div>

        </div>

    </div>

</header>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login"));

        // line 54
        echo "                    
                        ";
        // line 55
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) {
            // line 56
            echo "
                            <form action=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" method=\"POST\">
                                <h5><i class=\"fas fa-user-alt\"> </i> <a href=\"#\">&nbsp; Mon compte </a></h5>


                                <input type=\"text\" name=\"pseudo\" placeholder=\"Votre pseudo\">
                                <input type=\"password\" name=\"password\" placeholder=\"Votre mot de passe\">
                                <a class=\"btnheader\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> Inscription </a>

                                <button type=\"submit\"> Connexion</button>


                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                                
                             </form>

                        
                    ";
        } else {
            // line 75
            echo "
                        <h5> <i class=\"fas fa-user-alt\"> </i> <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "pseudo", [], "any", false, false, false, 76), "html", null, true);
            echo " </a></h5>
                        <br>
                        
                        ";
            // line 79
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 80
                echo "                           <a class=\"btnheader\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\"> Admin </a>
                           <br>
                           <br>
                        ";
            }
            // line 84
            echo "                        
                        <a class=\"btnheader\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\"> Profil </a>
                        <a class=\"btnheader\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> Se déconnecter </a><br><br>
          
                        <h5> <a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande");
            echo "\"> 
                        <span> ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serviceCommand"]) || array_key_exists("serviceCommand", $context) ? $context["serviceCommand"] : (function () { throw new RuntimeError('Variable "serviceCommand" does not exist.', 89, $this->source); })()), "quantite", [], "method", false, false, false, 89), "html", null, true);
            echo " </span> &nbsp;
                        <i class=\"fas fa-shopping-basket\"> </i> &nbsp; Ma commande 
                        </a> </h5>
                                       

                    ";
        }
        // line 95
        echo "

                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 115
        echo "<footer id=\"footer\">

    <div class=\"container\">

        <div class=\"row\">

            ";
        // line 122
        echo "            <div class=\"newsletter col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3\">
                ";
        // line 123
        $context["form_newsletter"] = twig_get_attribute($this->env, $this->source, (isset($context["serviceNewsletter"]) || array_key_exists("serviceNewsletter", $context) ? $context["serviceNewsletter"] : (function () { throw new RuntimeError('Variable "serviceNewsletter" does not exist.', 123, $this->source); })()), "formNewsletter", [], "method", false, false, false, 123);
        // line 124
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_newsletter"]) || array_key_exists("form_newsletter", $context) ? $context["form_newsletter"] : (function () { throw new RuntimeError('Variable "form_newsletter" does not exist.', 124, $this->source); })()), 'form_start', ["attr" => ["id" => "formRecevoirNewsletter", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter")]]);
        echo "
                    <p>
                        <small> <i class=\"far fa-envelope\"></i> &nbsp;Recevoir notre newsletter</small>
                    </p>
                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_newsletter"]) || array_key_exists("form_newsletter", $context) ? $context["form_newsletter"] : (function () { throw new RuntimeError('Variable "form_newsletter" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, false, 128), 'widget', ["attr" => ["id" => "emailNewsletter", "placeholder" => "Votre email"]]);
        echo "
                    <input type=\"submit\" name=\"confirmation_newsletter\" value=\"Confirmer\"/>

                    ";
        // line 132
        echo "                    <p><small id=\"txtConfNewsletter\"> </small></p>
                ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_newsletter"]) || array_key_exists("form_newsletter", $context) ? $context["form_newsletter"] : (function () { throw new RuntimeError('Variable "form_newsletter" does not exist.', 133, $this->source); })()), 'form_end');
        echo "
            </div>

            ";
        // line 137
        echo "            <div class=\"navfooter col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6\">
                <nav>

                    <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/puce_nav_blanc.png"), "html", null, true);
        echo "\"
                                                               alt=\"puce_nav_blanc\"/> Créer un compte</a>
                    <a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/puce_nav_blanc.png"), "html", null, true);
        echo "\"
                                                         alt=\"puce_nav_blanc\"/> Nous contacter</a>
                    <a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentions");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/puce_nav_blanc.png"), "html", null, true);
        echo "\"
                                                           alt=\"puce_nav_blanc\"/>Mentions légales</a>
                </nav>
            </div>

            ";
        // line 150
        echo "            <div class=\"reseaux col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3\">
                <p><small>Restons connectés</small></p>
                <a href=\"https://fr-fr.facebook.com/\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"https://www.instagram.com/?hl=fr\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                <a href=\"https://twitter.com/explore\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
            </div>
        </div>

        ";
        // line 159
        echo "        <div class=\"row\">
            <p id=\"credits\" class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                <span>&copy; &nbsp; Bastien DAUGENNE, Sarah HAMI, Linda PHAN </span>
            </p>
        </div>

    </div>

</footer>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 173
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 174
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_communaute.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_compte.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_footer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_formcontact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_header.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_index.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_index1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_mentions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/javascript/script_modalnewsletter.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  470 => 183,  466 => 182,  462 => 181,  458 => 180,  454 => 179,  450 => 178,  446 => 177,  442 => 176,  438 => 175,  435 => 174,  428 => 173,  410 => 159,  400 => 150,  390 => 144,  383 => 142,  376 => 140,  371 => 137,  365 => 133,  362 => 132,  356 => 128,  348 => 124,  346 => 123,  343 => 122,  335 => 115,  328 => 114,  316 => 111,  307 => 95,  298 => 89,  294 => 88,  289 => 86,  285 => 85,  282 => 84,  274 => 80,  272 => 79,  264 => 76,  261 => 75,  252 => 69,  243 => 63,  234 => 57,  231 => 56,  229 => 55,  226 => 54,  219 => 53,  200 => 98,  198 => 53,  192 => 49,  182 => 43,  174 => 40,  167 => 38,  163 => 36,  157 => 32,  154 => 31,  145 => 26,  142 => 25,  134 => 18,  127 => 17,  117 => 11,  113 => 10,  109 => 8,  102 => 7,  89 => 5,  80 => 185,  78 => 173,  74 => 171,  72 => 114,  69 => 113,  67 => 111,  65 => 17,  60 => 14,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %} Paniers Paris {% endblock %}</title>

    {% block stylesheets %}

        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.12.0/css/all.css\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap-grid.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">

    {% endblock %}
</head>

<body>
{% block header %}
<header id=\"header\">

    <div class=\"container\">

        <div class=\"row\">

            {# LOGO #}
            <div class=\"col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2\">
                <a href=\"{{ path('index') }}\"> <img src=\"{{ asset('assets/img/Logo_blanc.png') }}\"
                                                    alt=\"Logo Paniers Paris\" id=\"logo\"/> </a>
            </div>

            {# HAMBURGER POUR VERSION MOBILE #}
            <div>
                <img src=\"{{ asset ('assets/img/menuHamburger.png') }}\" alt=\"Menu\" id=\"menuHamburger\"/>
            </div>

            {# NAV #}
            <div class=\"nav col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7\">
                <nav id=\"navHeader\" class=\"text-center text-nowrap\">
                    <a href=\"{{ path('index') }}\"> <img src=\"{{ asset ('assets/img/puce_nav_blanc.png') }}\"
                                                        alt=\"puce_nav_blanc\"/> Concept</a>
                    <a href=\"{{ path('paniers') }}\"> <img src=\"{{ asset ('assets/img/puce_nav_blanc.png') }}\"
                                                          alt=\"puce_nav_blanc\"/> Paniers du
                        mois</a>
                    <a href=\"{{ path('commande') }}\"> <img src=\"{{ asset ('assets/img/puce_nav_blanc.png') }}\"
                                                           alt=\"puce_nav_blanc\"/> Ma Commande </a>
                </nav>
            </div>

            {# SE CONNECTER/ CREER UN COMPTE/MA COMMANDE #}
            <div class=\"col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3\">

                <div class=\"infoscompte\">

                    {% block login %}
                    
                        {% if not app.user %}

                            <form action=\"{{ path('app_login') }}\" method=\"POST\">
                                <h5><i class=\"fas fa-user-alt\"> </i> <a href=\"#\">&nbsp; Mon compte </a></h5>


                                <input type=\"text\" name=\"pseudo\" placeholder=\"Votre pseudo\">
                                <input type=\"password\" name=\"password\" placeholder=\"Votre mot de passe\">
                                <a class=\"btnheader\" href=\"{{ path('app_register') }}\"> Inscription </a>

                                <button type=\"submit\"> Connexion</button>


                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"{{ csrf_token('authenticate') }}\">
                                
                             </form>

                        
                    {% else %}

                        <h5> <i class=\"fas fa-user-alt\"> </i> <a href=\"{{ path('user',{id: app.user.id}) }}\"> {{ app.user.pseudo }} </a></h5>
                        <br>
                        
                        {% if is_granted('ROLE_ADMIN') %}
                           <a class=\"btnheader\" href=\"{{path('admin',{id: app.user.id}) }}\"> Admin </a>
                           <br>
                           <br>
                        {% endif %}
                        
                        <a class=\"btnheader\" href=\"{{ path('user',{id: app.user.id}) }}\"> Profil </a>
                        <a class=\"btnheader\" href=\"{{ path('app_logout') }}\"> Se déconnecter </a><br><br>
          
                        <h5> <a href=\"{{ path('commande') }}\"> 
                        <span> {{ serviceCommand.quantite() }} </span> &nbsp;
                        <i class=\"fas fa-shopping-basket\"> </i> &nbsp; Ma commande 
                        </a> </h5>
                                       

                    {% endif %}


                    {% endblock %}


                </div>

            </div>

        </div>

    </div>

</header>

{% endblock %}
{% block body %}
{% endblock %}

{% block footer %}
<footer id=\"footer\">

    <div class=\"container\">

        <div class=\"row\">

            {# NEWSLETTER #}
            <div class=\"newsletter col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3\">
                {% set form_newsletter = serviceNewsletter.formNewsletter() %}
                {{ form_start(form_newsletter, { attr: {id: \"formRecevoirNewsletter\", action: path('app_newsletter')}}) }}
                    <p>
                        <small> <i class=\"far fa-envelope\"></i> &nbsp;Recevoir notre newsletter</small>
                    </p>
                    {{ form_widget(form_newsletter.email, {attr: {id:\"emailNewsletter\", placeholder: \"Votre email\"}}) }}
                    <input type=\"submit\" name=\"confirmation_newsletter\" value=\"Confirmer\"/>

                    {# affichage texte avec js #}
                    <p><small id=\"txtConfNewsletter\"> </small></p>
                {{ form_end(form_newsletter) }}
            </div>

            {# NAV #}
            <div class=\"navfooter col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6\">
                <nav>

                    <a href=\"{{ path('app_register') }}\"> <img src=\"{{ asset ('assets/img/puce_nav_blanc.png') }}\"
                                                               alt=\"puce_nav_blanc\"/> Créer un compte</a>
                    <a href=\"{{ path('app_contact') }}\"><img src=\"{{ asset ('assets/img/puce_nav_blanc.png') }}\"
                                                         alt=\"puce_nav_blanc\"/> Nous contacter</a>
                    <a href=\"{{ path('app_mentions') }}\"> <img src=\"{{ asset ('assets/img/puce_nav_blanc.png') }}\"
                                                           alt=\"puce_nav_blanc\"/>Mentions légales</a>
                </nav>
            </div>

            {# RS #}
            <div class=\"reseaux col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3\">
                <p><small>Restons connectés</small></p>
                <a href=\"https://fr-fr.facebook.com/\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"https://www.instagram.com/?hl=fr\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                <a href=\"https://twitter.com/explore\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
            </div>
        </div>

        {# CREDITS #}
        <div class=\"row\">
            <p id=\"credits\" class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                <span>&copy; &nbsp; Bastien DAUGENNE, Sarah HAMI, Linda PHAN </span>
            </p>
        </div>

    </div>

</footer>


{% endblock %}


{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"{{ asset('assets/javascript/script_communaute.js') }}\"></script>
    <script src=\"{{ asset('assets/javascript/script_compte.js') }}\"></script>
    <script src=\"{{ asset('assets/javascript/script_footer.js') }}\"></script>
    <script src=\"{{ asset('assets/javascript/script_formcontact.js') }}\"></script>
    <script src=\"{{ asset('assets/javascript/script_header.js') }}\"></script>
    <script src=\"{{ asset('assets/javascript/script_index.js') }}\"></script>
    <script src=\"{{ asset('assets/javascript/script_index1.js') }}\"></script>
    <script src=\"{{ asset('assets/javascript/script_mentions.js') }}\"></script>
    <script src=\"{{ asset('assets/javascript/script_modalnewsletter.js') }}\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "/Users/lindaphan/Documents/PaniersParisSymfony/templates/base.html.twig");
    }
}
