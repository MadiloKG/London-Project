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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enseignant/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "enseignant/list.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Enseignants";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/enseignant.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "<div class=\"main-content\">
    <h1>Liste des Enseignants</h1>
    <ul class=\"enseignant-list\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 16
            yield "            <li>
                ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "email", [], "any", false, false, false, 17), "html", null, true);
            yield "
                <a href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enseignant_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Modifier</a>
                <form method=\"post\" action=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("enseignant_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet enseignant ?');\" style=\"display:inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["enseignant"], "id", [], "any", false, false, false, 20))), "html", null, true);
            yield "\">
                    <button class=\"btn btn-danger\">Supprimer</button>
                </form>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    </ul>
</div>
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
        return array (  129 => 25,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  103 => 16,  99 => 15,  94 => 12,  87 => 11,  76 => 8,  69 => 7,  55 => 5,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/enseignant/list.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Liste des Enseignants{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/enseignant.css') }}\">
{% endblock %}

{% block body %}
<div class=\"main-content\">
    <h1>Liste des Enseignants</h1>
    <ul class=\"enseignant-list\">
        {% for enseignant in enseignants %}
            <li>
                {{ enseignant.email }}
                <a href=\"{{ path('enseignant_edit', {'id': enseignant.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                <form method=\"post\" action=\"{{ path('enseignant_delete', {'id': enseignant.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet enseignant ?');\" style=\"display:inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ enseignant.id) }}\">
                    <button class=\"btn btn-danger\">Supprimer</button>
                </form>
            </li>
        {% endfor %}
    </ul>
</div>
{% endblock %}
", "enseignant/list.html.twig", "/Users/madilo/Documents/Projet-Symfony/LondonV1/templates/enseignant/list.html.twig");
    }
}
