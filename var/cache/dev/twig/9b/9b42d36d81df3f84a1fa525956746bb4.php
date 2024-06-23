<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_5bf55210fa7190cc885111beed27d4d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Home - Live London</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href=\"/login\">Connexion</a></li>
                <li><a href=\"/register\">S'inscrire</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class=\"hero\">
            <h1>Cours d'anglais par visioconférence</h1>
            <p> En immersion avec un professeur natif, en direct de Londres
                disponible sous 24h, 7 jours sur 7, de 7h à 23h !</p>
        </section>

        <section class=\"features\">
            <div class=\"feature\">
                <h2>Professeurs natifs</h2>
                <p>Apprenez avec des enseignants dont la langue maternelle est l'anglais.</p>
                 <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://livelondon.fr/images/2024/01/28/S5_%20janvier24_meilleurs%20podcasts_%20culture%20britannique_thumbnail.jpg"), "html", null, true);
        yield "\">
            </div>
            <div class=\"feature\">
                <h2>Flexibilité horaire</h2>
                <p>Choisissez les horaires qui vous conviennent le mieux, disponibles 24/7.</p>
                <img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://livelondon.fr/images/2024/01/26/S4_%20janvier24_culture%20anglosaxone_%20livres_thumbnail.jpg"), "html", null, true);
        yield "\">        
            </div>
            <div class=\"feature\">
                <h2>Accès instantané</h2>
                <p>Commencez vos cours en moins de 24 heures après votre inscription.</p>   
                <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://livelondon.fr/images/2024/01/15/S3_%20janvier24_bars%20irlandais_%20Paris_Rennes_Lyon_Bordeaux_Marseille_thumbnail.jpg"), "html", null, true);
        yield "\"> 
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Live London. All rights reserved.</p>
    </footer>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  91 => 40,  83 => 35,  75 => 30,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Home - Live London</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href=\"/login\">Connexion</a></li>
                <li><a href=\"/register\">S'inscrire</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class=\"hero\">
            <h1>Cours d'anglais par visioconférence</h1>
            <p> En immersion avec un professeur natif, en direct de Londres
                disponible sous 24h, 7 jours sur 7, de 7h à 23h !</p>
        </section>

        <section class=\"features\">
            <div class=\"feature\">
                <h2>Professeurs natifs</h2>
                <p>Apprenez avec des enseignants dont la langue maternelle est l'anglais.</p>
                 <img src=\"{{ asset('https://livelondon.fr/images/2024/01/28/S5_%20janvier24_meilleurs%20podcasts_%20culture%20britannique_thumbnail.jpg') }}\">
            </div>
            <div class=\"feature\">
                <h2>Flexibilité horaire</h2>
                <p>Choisissez les horaires qui vous conviennent le mieux, disponibles 24/7.</p>
                <img src=\"{{ asset('https://livelondon.fr/images/2024/01/26/S4_%20janvier24_culture%20anglosaxone_%20livres_thumbnail.jpg') }}\">        
            </div>
            <div class=\"feature\">
                <h2>Accès instantané</h2>
                <p>Commencez vos cours en moins de 24 heures après votre inscription.</p>   
                <img src=\"{{ asset('https://livelondon.fr/images/2024/01/15/S3_%20janvier24_bars%20irlandais_%20Paris_Rennes_Lyon_Bordeaux_Marseille_thumbnail.jpg') }}\"> 
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Live London. All rights reserved.</p>
    </footer>
</body>
</html>
", "home/index.html.twig", "/Users/madilo/Documents/Projet-Symfony/LondonV1/templates/home/index.html.twig");
    }
}
