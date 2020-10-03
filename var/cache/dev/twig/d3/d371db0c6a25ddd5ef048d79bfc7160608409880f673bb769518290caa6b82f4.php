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

/* newsletter_unsubscribe.html.twig */
class __TwigTemplate_fd62ab9f26878400fa0ccd3421447d4cbaed187d51f9bd7a210d75644aea9ac8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newsletter_unsubscribe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "newsletter_unsubscribe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Newsletter - Désabonnement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- NEWSLETTER --------------------------------------------------------------------------->
    <main id=\"newsletter-main\">

        <div class=\"container\">

            <div class= \"row\">

                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                    <h2> Se désabonner de notre newsletter ?</h2>
                </div>

                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                     <p>
                        Vous êtes redirigé(e) sur cette page car il semble que vous avez cliqué sur le lien \"se désabonner\" présent sur votre mail de newsletter.
                     </p><br><br>
                     <p>
                        Êtes-vous certain(e) de ne plus vouloir recevoir la newsletter de notre site ?
                     </p>

                    <a class=\"btnheader\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletter_unsubscribe", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["newsletter"]) || array_key_exists("newsletter", $context) ? $context["newsletter"] : (function () { throw new RuntimeError('Variable "newsletter" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "confirmed" => 1]), "html", null, true);
        echo "\" >Confirmer ?</a>

                </div>

            </div>
        </div>

    </main>
    <!-- FIN NEWSLETTER -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "newsletter_unsubscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Newsletter - Désabonnement{% endblock %}


{% block body %}
    <!-- NEWSLETTER --------------------------------------------------------------------------->
    <main id=\"newsletter-main\">

        <div class=\"container\">

            <div class= \"row\">

                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                    <h2> Se désabonner de notre newsletter ?</h2>
                </div>

                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                     <p>
                        Vous êtes redirigé(e) sur cette page car il semble que vous avez cliqué sur le lien \"se désabonner\" présent sur votre mail de newsletter.
                     </p><br><br>
                     <p>
                        Êtes-vous certain(e) de ne plus vouloir recevoir la newsletter de notre site ?
                     </p>

                    <a class=\"btnheader\" href=\"{{ path('newsletter_unsubscribe', {id: newsletter.id, confirmed: 1}) }}\" >Confirmer ?</a>

                </div>

            </div>
        </div>

    </main>
    <!-- FIN NEWSLETTER -->
{% endblock %}", "newsletter_unsubscribe.html.twig", "C:\\Users\\WEBFORCE3\\Desktop\\PaniersParisSymfony\\PaniersParisSymfony\\templates\\newsletter_unsubscribe.html.twig");
    }
}
