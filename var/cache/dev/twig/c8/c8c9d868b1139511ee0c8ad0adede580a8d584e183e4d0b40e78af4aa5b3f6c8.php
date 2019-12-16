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

/* home_page/index.html.twig */
class __TwigTemplate_0e244b33787c52b5cba3ea0466cd78f5a5c97a84b102f0c5d5ae201ec3c75d1c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        // line 4
        $context["firstvar"] = "firstvalue";
        // line 5
        $context["secondvar"] = "secondevalue";
        // line 6
        $context["obj"] = ["key1" => "value1", "key2" => "value2"];
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomePageController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        echo " ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
<div class=\"container\">
    <h1>Books Store</h1>
    <div class=\"row\">
        <div class=\"col-3\">
        Sidebar-";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["firstvar"]) || array_key_exists("firstvar", $context) ? $context["firstvar"] : (function () { throw new RuntimeError('Variable "firstvar" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "
        </div>
        <div class=\"col-9\">
        Content panel
        <br>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 23, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 24
            echo "         ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 24), "html", null, true);
            echo " Item : ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo " <br>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>
</div>
 <h1>Homepage</h1>

    <hr>

    <h3>is_grantted (levels) : </h3> 

    <br><strong>IS_AUTHENTICATED_REMEMBERED (cookie) : </strong>
        ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "            Yes
        ";
        } else {
            // line 39
            echo "            No
        ";
        }
        // line 40
        echo " 


    <br><strong>IS_AUTHENTICATED_FULLY : </strong>
        ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "            Yes
        ";
        } else {
            // line 47
            echo "            No
        ";
        }
        // line 48
        echo " 


    <br><strong>IS_AUTHENTICATED_ANONYMOUSLY : </strong>
        ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 53
            echo "            Yes
        ";
        } else {
            // line 55
            echo "            No
        ";
        }
        // line 57
        echo "
    <hr>

    <h3>Refuser l'accès à un utilisateur dans les controllers</h3>

    <pre>\$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');</pre>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 57,  218 => 55,  214 => 53,  212 => 52,  206 => 48,  202 => 47,  198 => 45,  196 => 44,  190 => 40,  186 => 39,  182 => 37,  180 => 36,  168 => 26,  149 => 24,  132 => 23,  124 => 18,  117 => 13,  107 => 12,  86 => 10,  67 => 8,  56 => 1,  54 => 6,  52 => 5,  50 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# Declaration d'une variable #}
{% set firstvar = 'firstvalue' %}
{% set secondvar = 'secondevalue' %}
{% set obj = { 'key1' : 'value1','key2' : 'value2' } %}

{% block title %}Hello HomePageController!{% endblock %}

{% block sidebar %} {{ parent() }} {% endblock %}

{% block content %}

<div class=\"container\">
    <h1>Books Store</h1>
    <div class=\"row\">
        <div class=\"col-3\">
        Sidebar-{{ firstvar }}
        </div>
        <div class=\"col-9\">
        Content panel
        <br>
        {% for key,val in obj %}
         {{ loop.index0 }} Item : {{ val }} <br>
        {% endfor %}
        </div>
    </div>
</div>
 <h1>Homepage</h1>

    <hr>

    <h3>is_grantted (levels) : </h3> 

    <br><strong>IS_AUTHENTICATED_REMEMBERED (cookie) : </strong>
        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
            Yes
        {% else %}
            No
        {% endif %} 


    <br><strong>IS_AUTHENTICATED_FULLY : </strong>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            Yes
        {% else %}
            No
        {% endif %} 


    <br><strong>IS_AUTHENTICATED_ANONYMOUSLY : </strong>
        {% if is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}
            Yes
        {% else %}
            No
        {% endif %}

    <hr>

    <h3>Refuser l'accès à un utilisateur dans les controllers</h3>

    <pre>\$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');</pre>

{% endblock %}
", "home_page/index.html.twig", "/Applications/MAMP/htdocs/Symfony_wf3/firstprojectwf3/templates/home_page/index.html.twig");
    }
}
