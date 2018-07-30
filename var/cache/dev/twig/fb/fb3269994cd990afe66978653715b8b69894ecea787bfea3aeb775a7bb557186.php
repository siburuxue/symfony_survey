<?php

/* @KnpPaginator/Pagination/bootstarp_pagination.html.twig */
class __TwigTemplate_50d39745a7e73eb61a01260bf8f56ce1c11608de30205aa3ad46e7e7461fa626 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bootstarp_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bootstarp_pagination.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 3, $this->source); })()) > 1)) {
            // line 4
            echo "    <ul class=\"pagination\" style=\"margin-top:0\">
        ";
            // line 5
            if (((isset($context["first"]) || array_key_exists("first", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 5, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 5, $this->source); })())))) {
                // line 6
                echo "            <li class=\"first\">
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 7, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 7, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 7, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 7, $this->source); })())))), "html", null, true);
                echo "\">first</a>
            </li>
        ";
            } else {
                // line 10
                echo "            <li class=\"first disabled\"><a href=\"#\">first</a></li>
        ";
            }
            // line 12
            echo "
        ";
            // line 13
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 14
                echo "            <li class=\"previous\">
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 15, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 15, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 15, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 15, $this->source); })())))), "html", null, true);
                echo "\">prev</a>
            </li>
        ";
            } else {
                // line 18
                echo "            <li class=\"previous disabled\"><a href=\"#\">prev</a></li>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new Twig_Error_Runtime('Variable "pagesInRange" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "            ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 22, $this->source); })()))) {
                    // line 23
                    echo "                <li class=\"page\">
                    <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 24, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 24, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 24, $this->source); })()) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 27
                    echo "                <li class=\"active\"><a href=\"#\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 29
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
        ";
            // line 32
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 33
                echo "            <li class=\"next\">
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 34, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 34, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 34, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 34, $this->source); })())))), "html", null, true);
                echo "\">next</a>
            </li>
        ";
            } else {
                // line 37
                echo "            <li class=\"next disabled\"><a href=\"#\">next</a></li>
        ";
            }
            // line 39
            echo "
        ";
            // line 40
            if (((isset($context["last"]) || array_key_exists("last", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 40, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 40, $this->source); })())))) {
                // line 41
                echo "            <li class=\"last\">
                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 42, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 42, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 42, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 42, $this->source); })())))), "html", null, true);
                echo "\">last</a>
            </li>
        ";
            } else {
                // line 45
                echo "            <li class=\"last disabled\"><a href=\"#\">last</a></li>
        ";
            }
            // line 47
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bootstarp_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 47,  136 => 45,  130 => 42,  127 => 41,  125 => 40,  122 => 39,  118 => 37,  112 => 34,  109 => 33,  107 => 32,  104 => 31,  97 => 29,  91 => 27,  83 => 24,  80 => 23,  77 => 22,  73 => 21,  70 => 20,  66 => 18,  60 => 15,  57 => 14,  55 => 13,  52 => 12,  48 => 10,  42 => 7,  39 => 6,  37 => 5,  34 => 4,  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# default Sliding pagination control implementation #}

{% if pageCount > 1 %}
    <ul class=\"pagination\" style=\"margin-top:0\">
        {% if first is defined and current != first %}
            <li class=\"first\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">first</a>
            </li>
        {% else %}
            <li class=\"first disabled\"><a href=\"#\">first</a></li>
        {% endif %}

        {% if previous is defined %}
            <li class=\"previous\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">prev</a>
            </li>
        {% else %}
            <li class=\"previous disabled\"><a href=\"#\">prev</a></li>
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <li class=\"page\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                </li>
            {% else %}
                <li class=\"active\"><a href=\"#\">{{ page }}</a></li>
            {% endif %}

        {% endfor %}

        {% if next is defined %}
            <li class=\"next\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">next</a>
            </li>
        {% else %}
            <li class=\"next disabled\"><a href=\"#\">next</a></li>
        {% endif %}

        {% if last is defined and current != last %}
            <li class=\"last\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">last</a>
            </li>
        {% else %}
            <li class=\"last disabled\"><a href=\"#\">last</a></li>
        {% endif %}
    </ul>
{% endif %}
", "@KnpPaginator/Pagination/bootstarp_pagination.html.twig", "/Users/zp/Desktop/zp/project/php/symfony_survey/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/bootstarp_pagination.html.twig");
    }
}
