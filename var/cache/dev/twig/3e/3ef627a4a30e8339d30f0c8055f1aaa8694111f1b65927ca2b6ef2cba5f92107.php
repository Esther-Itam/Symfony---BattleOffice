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
class __TwigTemplate_ac5765b7c5d9d0f3342b28677d70fd544be54a128d758bb3b2f61f9f5984d420 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>BattleOffice, petites guerres entre amis - Vente privée de jouets Nerfs Elite</title>

        <link  rel=\"icon\" type=\"image/x-icon\" href=\"favicon.png\" />
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"assets/css/main.css\">
        <link rel=\"stylesheet\" href=\"assets/css/main_new.css\">

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        <div class=\"navbar\">
            <nav class=\"white\">
                <div class=\"nav-wrapper\">
                    <div class=\"row\">
                        <div class=\"col s12 m6\">
                            <a href=\"#!\" class=\"brand-logo\">BattleOffice</a>
                        </div>
                        <div class=\"col s12 m6\">
                            <div class=\"picto-nav\">
                                <i class=\"fas fa-shipping-fast\"></i>
                                <span>Livraison gratuite</span>
                                Pour toute commande !
                            </div>
                            <div class=\"picto-nav\">
                                <i class=\"fas fa-grin\"></i>
                                <span>Garantie 100% Satisfait</span>
                                Ou remboursé !
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </div>

        <main class=\"page\">
            ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        </main>

        <footer class=\"page-footer white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col s12\">
                        <h5 class=\"color_brand_primary center-align\">POUR VOTRE SANTÉ, PRATIQUEZ UNE ACTIVITÉ PHYSIQUE RÉGULIÈRE </h5>
                        <p class=\"color_brand_primary center-align\">
                            BattleOffice ne garantit pas la paix dans les bureaux et open-spaces. Il est déconseillé d'utiliser nos produits dans des espaces publiques. Ne déclenchez pas de guerres que vous regretteriez.
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\">
                <div class=\"container color_brand_primary\">
                    © 2020 Tous droits réservés battleoffice
                    <a class=\"color_brand_primary right\" href=\"#\" target=\"_blank\">Conditions Générales de Vente</a>
                </div>
            </div>
        </footer>
        <script src=\"assets/js/materialize.js\"></script>
        <script src=\"assets/js/main.js\"></script>
        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 65,  150 => 42,  132 => 13,  120 => 66,  118 => 65,  94 => 43,  92 => 42,  62 => 14,  60 => 13,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>BattleOffice, petites guerres entre amis - Vente privée de jouets Nerfs Elite</title>

        <link  rel=\"icon\" type=\"image/x-icon\" href=\"favicon.png\" />
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"assets/css/main.css\">
        <link rel=\"stylesheet\" href=\"assets/css/main_new.css\">

        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <div class=\"navbar\">
            <nav class=\"white\">
                <div class=\"nav-wrapper\">
                    <div class=\"row\">
                        <div class=\"col s12 m6\">
                            <a href=\"#!\" class=\"brand-logo\">BattleOffice</a>
                        </div>
                        <div class=\"col s12 m6\">
                            <div class=\"picto-nav\">
                                <i class=\"fas fa-shipping-fast\"></i>
                                <span>Livraison gratuite</span>
                                Pour toute commande !
                            </div>
                            <div class=\"picto-nav\">
                                <i class=\"fas fa-grin\"></i>
                                <span>Garantie 100% Satisfait</span>
                                Ou remboursé !
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </div>

        <main class=\"page\">
            {% block body %}{% endblock %}
        </main>

        <footer class=\"page-footer white\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col s12\">
                        <h5 class=\"color_brand_primary center-align\">POUR VOTRE SANTÉ, PRATIQUEZ UNE ACTIVITÉ PHYSIQUE RÉGULIÈRE </h5>
                        <p class=\"color_brand_primary center-align\">
                            BattleOffice ne garantit pas la paix dans les bureaux et open-spaces. Il est déconseillé d'utiliser nos produits dans des espaces publiques. Ne déclenchez pas de guerres que vous regretteriez.
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\">
                <div class=\"container color_brand_primary\">
                    © 2020 Tous droits réservés battleoffice
                    <a class=\"color_brand_primary right\" href=\"#\" target=\"_blank\">Conditions Générales de Vente</a>
                </div>
            </div>
        </footer>
        <script src=\"assets/js/materialize.js\"></script>
        <script src=\"assets/js/main.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/azerty/devilbox/data/www/BattleOffice/templates/base.html.twig");
    }
}
