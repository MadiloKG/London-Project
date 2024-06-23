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

/* dashboard/index.html.twig */
class __TwigTemplate_8b0d29a83666e70b71e4858d2e366cf0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        // line 1
        yield "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Home - Live London</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href=\"/\">Accueil</a></li>
                <li><a href=\"/enseignants\">Liste des Enseignants</a></li>
                <li><a href=\"/matieres\">Liste des Matières</a></li>
                <li><a href=\"/enseignant/add-matiere\">Enseignants & Matières</a></li>
                <li><a href=\"/logout\">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class=\"hero\">
            <h1>Bienvenue</h1>
            <p> En direct de Londres
                disponible sous 24h, 7 jours sur 7, de 7h à 23h !</p>
        </section>

        <section class=\"features\">
            <div class=\"feature\">
             <p>Les meilleurs podcasts sur la culture britannique
Il existe de nombreux podcasts intéressants sur la culture britannique, couvrant une variété de sujets tels que l'histoire, la musique, la cuisine, la littérature et bien plus encore. Voici quelques...</p>
                <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://livelondon.fr/images/2024/01/28/S5_%20janvier24_meilleurs%20podcasts_%20culture%20britannique_thumbnail.jpg"), "html", null, true);
        yield "\">
            </div>
            <div class=\"feature\">
            <p>Culture générale anglo-saxonne : quels livres doit-on lire ?
La culture générale anglosaxonne est vaste et diversifiée, et il existe de nombreux livres qui peuvent vous donner un aperçu de ses différentes facettes. Voici quelques suggestions de livres...</p>
                 <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://livelondon.fr/images/2024/01/26/S4_%20janvier24_culture%20anglosaxone_%20livres_thumbnail.jpg"), "html", null, true);
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
        return "dashboard/index.html.twig";
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
        return array (  87 => 39,  79 => 34,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
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
                <li><a href=\"/\">Accueil</a></li>
                <li><a href=\"/enseignants\">Liste des Enseignants</a></li>
                <li><a href=\"/matieres\">Liste des Matières</a></li>
                <li><a href=\"/enseignant/add-matiere\">Enseignants & Matières</a></li>
                <li><a href=\"/logout\">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class=\"hero\">
            <h1>Bienvenue</h1>
            <p> En direct de Londres
                disponible sous 24h, 7 jours sur 7, de 7h à 23h !</p>
        </section>

        <section class=\"features\">
            <div class=\"feature\">
             <p>Les meilleurs podcasts sur la culture britannique
Il existe de nombreux podcasts intéressants sur la culture britannique, couvrant une variété de sujets tels que l'histoire, la musique, la cuisine, la littérature et bien plus encore. Voici quelques...</p>
                <img src=\"{{ asset('https://livelondon.fr/images/2024/01/28/S5_%20janvier24_meilleurs%20podcasts_%20culture%20britannique_thumbnail.jpg') }}\">
            </div>
            <div class=\"feature\">
            <p>Culture générale anglo-saxonne : quels livres doit-on lire ?
La culture générale anglosaxonne est vaste et diversifiée, et il existe de nombreux livres qui peuvent vous donner un aperçu de ses différentes facettes. Voici quelques suggestions de livres...</p>
                 <img src=\"{{ asset('https://livelondon.fr/images/2024/01/26/S4_%20janvier24_culture%20anglosaxone_%20livres_thumbnail.jpg') }}\">
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Live London. All rights reserved.</p>
    </footer>
</body>
</html>
", "dashboard/index.html.twig", "/Users/madilo/Documents/Projet-Symfony/LondonV1/templates/dashboard/index.html.twig");
    }
}
