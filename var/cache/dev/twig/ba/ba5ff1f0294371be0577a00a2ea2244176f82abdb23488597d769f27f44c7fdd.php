<?php

/* SurveyCarBundle:Project:list.html.twig */
class __TwigTemplate_c037e68adc143033171e9cc2b476bf2608880a841132f67df96936f633a97d86 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SurveyCarBundle:Project:list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SurveyCarBundle:Project:list.html.twig"));

        // line 1
        echo "<table class=\"table table-striped\" data-url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("survey_car_project_list");
        echo "\">
    <thead>
    <tr>
        <th>序号</th>
        <th>项目名称</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 11
            echo "            <tr>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <button type=\"button\" class=\"btn btn-primary btn-xs import\" data-id=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"></span> 导入</button>
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("survey_car_project_export", array("project_id" => twig_get_attribute($this->env, $this->source, $context["val"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"></span> 导出</a>
                    <button type=\"button\" class=\"btn btn-primary btn-xs edit\" data-id=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "name", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> 编辑</button>
                    <button type=\"button\" class=\"btn btn-primary btn-xs delete\" data-id=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> 删除</button>
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("survey_car_project_survey", array("project_id" => twig_get_attribute($this->env, $this->source, $context["val"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> 进入问卷</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
</table>
";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 25, $this->source); })()));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SurveyCarBundle:Project:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  86 => 23,  76 => 19,  72 => 18,  66 => 17,  62 => 16,  58 => 15,  53 => 13,  49 => 12,  46 => 11,  42 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-striped\" data-url=\"{{ path('survey_car_project_list') }}\">
    <thead>
    <tr>
        <th>序号</th>
        <th>项目名称</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
        {% for val in pagination %}
            <tr>
                <td>{{ val.id }}</td>
                <td>{{ val.name }}</td>
                <td>
                    <button type=\"button\" class=\"btn btn-primary btn-xs import\" data-id=\"{{ val.id }}\"><span class=\"glyphicon glyphicon-cloud-upload\" aria-hidden=\"true\"></span> 导入</button>
                    <a href=\"{{ path('survey_car_project_export',{'project_id' : val.id}) }}\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-cloud-download\" aria-hidden=\"true\"></span> 导出</a>
                    <button type=\"button\" class=\"btn btn-primary btn-xs edit\" data-id=\"{{ val.id }}\" data-name=\"{{ val.name }}\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> 编辑</button>
                    <button type=\"button\" class=\"btn btn-primary btn-xs delete\" data-id=\"{{ val.id }}\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> 删除</button>
                    <a href=\"{{ path('survey_car_project_survey',{'project_id' : val.id}) }}\" class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> 进入问卷</a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{{ knp_pagination_render(pagination) }}", "SurveyCarBundle:Project:list.html.twig", "/Users/zp/Desktop/zp/project/php/symfony_survey/src/Survey/CarBundle/Resources/views/Project/list.html.twig");
    }
}
