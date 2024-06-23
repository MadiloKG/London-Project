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

/* enseignant/list.html.twig */
class __TwigTemplate_888bcbcb52eeac13e501629dfeea61d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "enseignant/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Enseignants";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/enseignant.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<header>
    <nav>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        yield "\" class=\"home-link\">Retour</a>
    </nav>
</header>

<div class=\"main-content\">
    <h1>Liste des Enseignants</h1>
    <ul class=\"enseignant-list\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 20
            yield "            <li>
                <span>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "email", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>
                ";
            // line 22
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "matieres", [], "any", false, false, false, 22))) {
                // line 23
                yield "                    <ul>
                        ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "matieres", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                    // line 25
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matiere"], "nom", [], "any", false, false, false, 25), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                yield "                    </ul>
                ";
            } else {
                // line 29
                yield "                    <p>Aucune matière assignée</p>
                ";
            }
            // line 31
            yield "                <div class=\"buttons\">
                    <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enseignant_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Modifier</a>
                    <form method=\"post\" action=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enseignant_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet enseignant ?');\" style=\"display:inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 34))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "    </ul>
</div>

<footer>
    <p>© 2024 Live London. All rights reserved.</p>
</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "enseignant/list.html.twig";
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
        return array (  168 => 40,  156 => 34,  152 => 33,  148 => 32,  145 => 31,  141 => 29,  137 => 27,  128 => 25,  124 => 24,  121 => 23,  119 => 22,  115 => 21,  112 => 20,  108 => 19,  98 => 12,  94 => 10,  87 => 9,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Enseignants{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/enseignant.css') }}\">
{% endblock %}

{% block body %}
<header>
    <nav>
        <a href=\"{{ path('dashboard') }}\" class=\"home-link\">Retour</a>
    </nav>
</header>

<div class=\"main-content\">
    <h1>Liste des Enseignants</h1>
    <ul class=\"enseignant-list\">
        {% for enseignant in enseignants %}
            <li>
                <span>{{ enseignant.email }}</span>
                {% if enseignant.matieres is not empty %}
                    <ul>
                        {% for matiere in enseignant.matieres %}
                            <li>{{ matiere.nom }}</li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <p>Aucune matière assignée</p>
                {% endif %}
                <div class=\"buttons\">
                    <a href=\"{{ path('enseignant_edit', {'id': enseignant.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                    <form method=\"post\" action=\"{{ path('enseignant_delete', {'id': enseignant.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet enseignant ?');\" style=\"display:inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ enseignant.id) }}\">
                        <button class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </li>
        {% endfor %}
    </ul>
</div>

<footer>
    <p>© 2024 Live London. All rights reserved.</p>
</footer>
{% endblock %}
", "enseignant/list.html.twig", "/Users/madilo/Documents/Projet-Symfony/LondonV1/templates/enseignant/list.html.twig");
    }
}
