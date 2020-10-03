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

/* index/index.html.twig */
class __TwigTemplate_ae9865d982d31c24a81e7cfc2d1b0cf563d95c20e6d713a111c78ad751bc59f1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <main id=\"index\">
    <!--MODAL COOKIES-->
    <div id=\"cookies\">
        <p>Un cookie HTTP (cookie web, cookie de navigateur) est un petit ensemble de données qu'un serveur envoie au
            navigateur web de l'utilisateur.
            Le navigateur peut alors le stocker localement, puis le renvoyer à la prochaine requête vers le même serveur.
            Typiquement, cette méthode est utilisée par le serveur pour déterminer si deux requêtes proviennent du même
            navigateur — pour exemple pour garder un utilisateur connecté.
            Les cookies permettent de conserver de l'information en passant par le procotole HTTP qui est lui \"sans état\".</p>
        <button id=\"accepter\"> ACCEPTER</button>
    </div>
    <!-- FIN MODAL COOKIES-->



        <div class=\"container-fluid\" id=\"container-image\">

            <div class=\"row p-4\" id=\"texte-intro\">

                <div class=\"col-lg-12 \">
                    <div class=\"presentation\">
                        <h3>Bienvenue !</h3>
                        <p> <span class=\"accueil\"> Réinstaurer de la confiance dans notre alimentation. Une plus grande transparence. Le circuit-court peut assurer un revenu plus juste aux producteurs. <br> <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paniers");
        echo "\"> <i class=\"fas fa-shopping-basket\"> </i> <u>Découvrir nos paniers</u></a>  </span> </p>

                    </div>
                </div>


                <div class=\"col-lg-12\">
                    <div class=\"presentation\">
                        <h3>Que faisons-nous ?</h3>
                        <p><span class=\"accueil\">Encourager nos producteurs locaux. Nos paniers sont de toutes premières fraîcheur, pour des valeurs nutritives et des saveurs
                préservées. <br> <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paniers");
        echo "\"> <i class=\"fas fa-shopping-basket\"> </i> <u>Découvrir nos paniers</u></a>  </span></p>
                    </div>
                </div>


                <div class=\"col-lg-12\">
                    <div class=\"presentation\">
                        <h3>Nos offres </h3>
                        <p><span class=\"accueil\">De la variété chaque semaine, au fil des saisons. Des box réalisées avec du sens... <br> <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paniers");
        echo "\"> <i class=\"fas fa-shopping-basket\"> </i> <u>Découvrir nos paniers</u></a>  </span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-------------------------------SLIDE TEXTE FIN--------------------------------->


        <!-- MODAL NEWSLETTER-->

        <div id=\"modalNL\">

            <p><i class=\"far fa-envelope\"></i> &nbsp;Souscrire à notre newsletter ?</p>
            ";
        // line 60
        $context["form_newsletter_modal"] = twig_get_attribute($this->env, $this->source, (isset($context["serviceNewsletter"]) || array_key_exists("serviceNewsletter", $context) ? $context["serviceNewsletter"] : (function () { throw new RuntimeError('Variable "serviceNewsletter" does not exist.', 60, $this->source); })()), "formNewsletter", [], "method", false, false, false, 60);
        // line 61
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_newsletter_modal"]) || array_key_exists("form_newsletter_modal", $context) ? $context["form_newsletter_modal"] : (function () { throw new RuntimeError('Variable "form_newsletter_modal" does not exist.', 61, $this->source); })()), 'form_start', ["attr" => ["id" => "FormNL", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter")]]);
        echo "

                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_newsletter_modal"]) || array_key_exists("form_newsletter_modal", $context) ? $context["form_newsletter_modal"] : (function () { throw new RuntimeError('Variable "form_newsletter_modal" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), 'widget', ["attr" => ["id" => "emailNL", "placeholder" => "Votre email"]]);
        echo "

                <button class=\"Btn\" type=\"submit\"> Confirmer</button>
                <a href=\"#\" id=\"btnNo\" class=\"Btn\"> Plus tard</a>

                <!--affichage texte avec js-->
                <p> <small id=\"txtConfNewsletter\"> </small></p>

            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_newsletter_modal"]) || array_key_exists("form_newsletter_modal", $context) ? $context["form_newsletter_modal"] : (function () { throw new RuntimeError('Variable "form_newsletter_modal" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 73
            echo "                <div id=\"confirmCtc\" >
                    ";
            // line 74
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>

        <!--------------------------NOS VALEURS DEBUT -------------------------->
        <div>
            <br />
            <br />
        </div>
        <section id=\"valeurs\">

            <div class=\"container\">

                <h4 id=\"banniere\">NOS VALEURS</h4>

                <div>
                    <br />
                    <br />
                </div>

                <div class=\"row\">

                    <article class=\"col-lg-3\"> <br>
                        <span class=\"icones\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_bleu.png"), "html", null, true);
        echo "\" alt=\"logo paniers paris\"></span>
                        <h5>PROXIMIT&#201;</h5>

                    </article>

                    <article id=\"validation\" class=\"col-lg-3\"><br>
                        <span class=\"icones\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_rouge.png"), "html", null, true);
        echo "\" alt=\"logo paniers paris\"></span>
                        <h5>QUALIT&#201;</h5>

                    </article>

                    <article class=\"col-lg-3\"><br>
                        <span class=\"icones\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_noir.png"), "html", null, true);
        echo "\" alt=\"logo paniers paris\"></span>

                        <h5>EQUILIBRE</h5>

                    </article>

                    <article class=\"col-lg-3\"><br>
                        <span class=\"icones\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_violet.png"), "html", null, true);
        echo "\" alt=\"logo paniers paris\"></span>

                        <h5>SIMPLICIT&#201;</h5>

                    </article>

                </div>

            </div>

        </section>
        <div>
            <br />
            <br />
            <br />
        </div>
        <!---------------------COMMENT CA MARCHE ?----------------------------->
        <section class=\"validation\">

            <div class=\"container\">

                <h4 id=\"banniere\">Comment ca marche ?</h4>

                <div>
                    <br />
                    <br />
                </div>

                <div class=\"row\">

                    <article class=\"col-lg-4\"> <br>
                        <span class=\"icones\"><i class=\"fas fa-shopping-basket\"></i></span>
                        <h5>Choix du panier</h5>
                        <p class=\"texteBas\">Produits frais et de saisons choisis avec soin !</p>
                    </article>

                    <article id=\"validation\" class=\"col-lg-4\"><br>
                        <span class=\"icones\"><i class=\"fas fa-mouse\"></i></span>
                        <h5>Validation de la commande</h5>
                        <p class=\"texteBas\">Simple, rapide efficace en quelques click votre commande est validé !</p>
                    </article>

                    <article class=\"col-lg-4\"><br>
                        <span class=\"icones\"><i class=\"fas fa-store\"></i></span>

                        <h5>Click & Collect</h5>
                        <p class=\"texteBas\">
                            Retirer votre commande dans notre boutique parisienne !
                        </p>
                    </article>

                </div>

            </div>

        </section>
        <!---------------------COMMENT CA MARCHE ? FIN ----------------------------->


        <!----------------------------------NOS PRODUCTEURS----------------------->

        <div>
            <br />
            <br />
            <br>
            <br>
        </div>

        <section id=\"producteurs\">

            <div class=\"container\">
                <h4 id=\"banniere\">NOS PRODUCTEURS</h4>
                <div>
                    <br />
                    <br />
                </div>
                <div class=\"row\">

                    <figure class=\"col-lg-6 text-center\">
                        <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/claude.png"), "html", null, true);
        echo "\" alt=\"photo producteur\">

                        <h4><b>Claude Thimo</b></h4>

                        <figcaption>
                            Situé au nord de Paris à Auvers-sur-Oise, nous sommes une entreprise familiale : depuis sa
                            création par mes parents en 1994, j'ai toujours été présent, et lorsque j'ai eu terminé mes études de
                            commerce, cela était une évidence pour moi de les rejoindre! Depuis 12 ans, je suis devenu associé de la
                            production. Nous cultivons avec fierté toutes sortes de fruits et légumes selon les saisons. Un objectif
                            m’anime au quotidien : créer un lien plus intime avec le consommateur et faire goûter la nature...
                            <br>
                            <b><i> « Fier d’être producteur !» </i> </b>
                        </figcaption>

                    </figure>

                    <figure class=\"col-lg-6 text-center\">
                        <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bernard.png"), "html", null, true);
        echo "\" alt=\"photo producteur\">

                        <h4><b>Bernard Grath</b>
                        </h4>

                        <figcaption>
                            Producteur de fruits et légumes depuis plus de 30 ans à Magny-en-Vexin. D'abord arboriculteurs de père en
                            fils, nous avons développé notre activité grâce au maraîchage. Résolument tourné vers l’avenir,c’est avec
                            plaisir que je consacre du temps à cultiver mes produits dans le respect de la nature, sur un sol vivant,
                            à la main et sans aucun produit. C’est l’intervention humaine et le savoir-faire allié à l’amour de la
                            terre qui feront la différence .
                            <br>
                            <i><strong> « Il faut être passionné pour faire ce métier et cela représente beaucoup de choses pour moi.»
                                </strong></i>
                        </figcaption>

                    </figure>

                </div>

            </div>

        </section>

    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 213,  310 => 196,  228 => 117,  218 => 110,  209 => 104,  200 => 98,  177 => 77,  168 => 74,  165 => 73,  161 => 72,  157 => 71,  146 => 63,  140 => 61,  138 => 60,  121 => 46,  110 => 38,  97 => 28,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index{% endblock %}

{% block body %}
    <main id=\"index\">
    <!--MODAL COOKIES-->
    <div id=\"cookies\">
        <p>Un cookie HTTP (cookie web, cookie de navigateur) est un petit ensemble de données qu'un serveur envoie au
            navigateur web de l'utilisateur.
            Le navigateur peut alors le stocker localement, puis le renvoyer à la prochaine requête vers le même serveur.
            Typiquement, cette méthode est utilisée par le serveur pour déterminer si deux requêtes proviennent du même
            navigateur — pour exemple pour garder un utilisateur connecté.
            Les cookies permettent de conserver de l'information en passant par le procotole HTTP qui est lui \"sans état\".</p>
        <button id=\"accepter\"> ACCEPTER</button>
    </div>
    <!-- FIN MODAL COOKIES-->



        <div class=\"container-fluid\" id=\"container-image\">

            <div class=\"row p-4\" id=\"texte-intro\">

                <div class=\"col-lg-12 \">
                    <div class=\"presentation\">
                        <h3>Bienvenue !</h3>
                        <p> <span class=\"accueil\"> Réinstaurer de la confiance dans notre alimentation. Une plus grande transparence. Le circuit-court peut assurer un revenu plus juste aux producteurs. <br> <a href=\"{{ path('paniers') }}\"> <i class=\"fas fa-shopping-basket\"> </i> <u>Découvrir nos paniers</u></a>  </span> </p>

                    </div>
                </div>


                <div class=\"col-lg-12\">
                    <div class=\"presentation\">
                        <h3>Que faisons-nous ?</h3>
                        <p><span class=\"accueil\">Encourager nos producteurs locaux. Nos paniers sont de toutes premières fraîcheur, pour des valeurs nutritives et des saveurs
                préservées. <br> <a href=\"{{ path('paniers') }}\"> <i class=\"fas fa-shopping-basket\"> </i> <u>Découvrir nos paniers</u></a>  </span></p>
                    </div>
                </div>


                <div class=\"col-lg-12\">
                    <div class=\"presentation\">
                        <h3>Nos offres </h3>
                        <p><span class=\"accueil\">De la variété chaque semaine, au fil des saisons. Des box réalisées avec du sens... <br> <a href=\"{{ path('paniers') }}\"> <i class=\"fas fa-shopping-basket\"> </i> <u>Découvrir nos paniers</u></a>  </span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-------------------------------SLIDE TEXTE FIN--------------------------------->


        <!-- MODAL NEWSLETTER-->

        <div id=\"modalNL\">

            <p><i class=\"far fa-envelope\"></i> &nbsp;Souscrire à notre newsletter ?</p>
            {% set form_newsletter_modal = serviceNewsletter.formNewsletter()%}
            {{ form_start(form_newsletter_modal, { attr: { id: 'FormNL', action: path('app_newsletter') } }) }}

                {{ form_widget(form_newsletter_modal.email,{'attr': {'id':'emailNL', 'placeholder' : 'Votre email'}}) }}

                <button class=\"Btn\" type=\"submit\"> Confirmer</button>
                <a href=\"#\" id=\"btnNo\" class=\"Btn\"> Plus tard</a>

                <!--affichage texte avec js-->
                <p> <small id=\"txtConfNewsletter\"> </small></p>

            {{ form_end(form_newsletter_modal) }}
            {% for message in app.flashes('success') %}
                <div id=\"confirmCtc\" >
                    {{ message }}
                </div>
            {% endfor %}
        </div>

        <!--------------------------NOS VALEURS DEBUT -------------------------->
        <div>
            <br />
            <br />
        </div>
        <section id=\"valeurs\">

            <div class=\"container\">

                <h4 id=\"banniere\">NOS VALEURS</h4>

                <div>
                    <br />
                    <br />
                </div>

                <div class=\"row\">

                    <article class=\"col-lg-3\"> <br>
                        <span class=\"icones\"><img src=\"{{ asset('assets/img/logo_bleu.png') }}\" alt=\"logo paniers paris\"></span>
                        <h5>PROXIMIT&#201;</h5>

                    </article>

                    <article id=\"validation\" class=\"col-lg-3\"><br>
                        <span class=\"icones\"><img src=\"{{ asset('assets/img/logo_rouge.png') }}\" alt=\"logo paniers paris\"></span>
                        <h5>QUALIT&#201;</h5>

                    </article>

                    <article class=\"col-lg-3\"><br>
                        <span class=\"icones\"><img src=\"{{ asset('assets/img/logo_noir.png') }}\" alt=\"logo paniers paris\"></span>

                        <h5>EQUILIBRE</h5>

                    </article>

                    <article class=\"col-lg-3\"><br>
                        <span class=\"icones\"><img src=\"{{ asset('assets/img/logo_violet.png') }}\" alt=\"logo paniers paris\"></span>

                        <h5>SIMPLICIT&#201;</h5>

                    </article>

                </div>

            </div>

        </section>
        <div>
            <br />
            <br />
            <br />
        </div>
        <!---------------------COMMENT CA MARCHE ?----------------------------->
        <section class=\"validation\">

            <div class=\"container\">

                <h4 id=\"banniere\">Comment ca marche ?</h4>

                <div>
                    <br />
                    <br />
                </div>

                <div class=\"row\">

                    <article class=\"col-lg-4\"> <br>
                        <span class=\"icones\"><i class=\"fas fa-shopping-basket\"></i></span>
                        <h5>Choix du panier</h5>
                        <p class=\"texteBas\">Produits frais et de saisons choisis avec soin !</p>
                    </article>

                    <article id=\"validation\" class=\"col-lg-4\"><br>
                        <span class=\"icones\"><i class=\"fas fa-mouse\"></i></span>
                        <h5>Validation de la commande</h5>
                        <p class=\"texteBas\">Simple, rapide efficace en quelques click votre commande est validé !</p>
                    </article>

                    <article class=\"col-lg-4\"><br>
                        <span class=\"icones\"><i class=\"fas fa-store\"></i></span>

                        <h5>Click & Collect</h5>
                        <p class=\"texteBas\">
                            Retirer votre commande dans notre boutique parisienne !
                        </p>
                    </article>

                </div>

            </div>

        </section>
        <!---------------------COMMENT CA MARCHE ? FIN ----------------------------->


        <!----------------------------------NOS PRODUCTEURS----------------------->

        <div>
            <br />
            <br />
            <br>
            <br>
        </div>

        <section id=\"producteurs\">

            <div class=\"container\">
                <h4 id=\"banniere\">NOS PRODUCTEURS</h4>
                <div>
                    <br />
                    <br />
                </div>
                <div class=\"row\">

                    <figure class=\"col-lg-6 text-center\">
                        <img src=\"{{ asset('assets/img/claude.png') }}\" alt=\"photo producteur\">

                        <h4><b>Claude Thimo</b></h4>

                        <figcaption>
                            Situé au nord de Paris à Auvers-sur-Oise, nous sommes une entreprise familiale : depuis sa
                            création par mes parents en 1994, j'ai toujours été présent, et lorsque j'ai eu terminé mes études de
                            commerce, cela était une évidence pour moi de les rejoindre! Depuis 12 ans, je suis devenu associé de la
                            production. Nous cultivons avec fierté toutes sortes de fruits et légumes selon les saisons. Un objectif
                            m’anime au quotidien : créer un lien plus intime avec le consommateur et faire goûter la nature...
                            <br>
                            <b><i> « Fier d’être producteur !» </i> </b>
                        </figcaption>

                    </figure>

                    <figure class=\"col-lg-6 text-center\">
                        <img src=\"{{ asset('assets/img/bernard.png') }}\" alt=\"photo producteur\">

                        <h4><b>Bernard Grath</b>
                        </h4>

                        <figcaption>
                            Producteur de fruits et légumes depuis plus de 30 ans à Magny-en-Vexin. D'abord arboriculteurs de père en
                            fils, nous avons développé notre activité grâce au maraîchage. Résolument tourné vers l’avenir,c’est avec
                            plaisir que je consacre du temps à cultiver mes produits dans le respect de la nature, sur un sol vivant,
                            à la main et sans aucun produit. C’est l’intervention humaine et le savoir-faire allié à l’amour de la
                            terre qui feront la différence .
                            <br>
                            <i><strong> « Il faut être passionné pour faire ce métier et cela représente beaucoup de choses pour moi.»
                                </strong></i>
                        </figcaption>

                    </figure>

                </div>

            </div>

        </section>

    </main>

{% endblock %}
", "index/index.html.twig", "C:\\Users\\WEBFORCE3\\Desktop\\PaniersParisSymfony\\PaniersParisSymfony\\templates\\index\\index.html.twig");
    }
}
