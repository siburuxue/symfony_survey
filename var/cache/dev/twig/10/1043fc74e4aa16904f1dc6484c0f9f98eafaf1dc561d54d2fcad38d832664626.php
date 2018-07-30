<?php

/* SurveyCarBundle:Project:survey.html.twig */
class __TwigTemplate_c77b406482661d969c6271444b551a9d04adaa5b034f02f483a4258eef8969a9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SurveyCarBundle:Project:survey.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SurveyCarBundle:Project:survey.html.twig"));

        // line 1
        echo "<!doctype HTML>
<html>
    <head>
        <link rel=\"shortcut icon\" href=\"http://pdt.idataway.com/Images/enableq.ico\" type=\"image/x-icon\">
        <style>
            *{ margin:0;padding:0;}
            html,body{width:100%;height:100%;overflow:hidden}
            #box{width:100%;height:100%;display:inline-block;zoom:1;text-align:center;position: relative}
            #container{height:80%;width:75%;position:relative;display:inline-block;margin-top:3%}
            hr{width:75%;display:inline-block;}
            #footer{width:75%;display:inline-block;padding-top:5px;text-align:left}
            #header{width:auto;height:10%;text-align:left;padding-top:1%;padding-left:1%}
            #no,select{width:300px;height:30px;margin-right:20px;font-size:large}
            #no{padding-left:5px;}
            #search{height:30px;display:inline-block;background:#428bca;line-height: 30px;text-align:center;width:200px;color:white;border-radius:5px;cursor:default;}
            .body{width:100%;height:auto;padding-top:20px;visibility: hidden}
            .item{width:19%;float:left;margin-right:5px;border:1px solid #c9c9c9;border-radius:20px;}
            .item div{margin-top:10px;}
            .none{height:100%;font-size:x-large}
            .item:hover{background:orange}
            img{width:218px;}
        </style>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resource/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resource/js/layer/layer.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resource/js/common.js"), "html", null, true);
        echo "\"></script>
        <script>
            String.prototype.PadLeft = function (len, charStr) {
                var s = this + '';
                return new Array(len - s.length + 1).join(charStr, '') + s;
            };
            var json = [];
            var _no = null;
            var _city = null;
            \$(function (){
                var len = \$('.body').length.toString().length;
                var height = \$('.item:eq(0)').css('height');
                \$('.item').css('height',height);
                height = height.replace('px','');
                var marginTop = (height - 33 * 6) / 7;
                \$('.none div').css('margin-top',marginTop + 'px');
                \$('.none div').css('margin-bottom',marginTop + 'px');
                \$('#search').click(function () {
                    if(\$('#no').val().trim() == ''){
                        layer.msg('请输入编号',{time:1000});
                        return false;
                    }
                    if(\$('#city').val() == ''){
                        layer.msg('请选择城市',{time:1000});
                        return false;
                    }
                    _no = \$('#no').val().trim();
                    _city = \$('#city').val().trim();
                    \$('.body:first').css('visibility','visible');
                });
                \$('.item').click(function () {
                    var _self = \$(this);
                    if(!_self.hasClass('none')){
                        _self.data('isSelected','1');
                    }
                    _self.parent().find('.item:not(:last)').each(function () {
                        json.push({
                            no:\$('#no').val(),
                            card:\"q\" + \$(this).parents('.body').data('question').toString().PadLeft(len,'0') + '_' + \$(this).data('index'),
                            config:\$(this).data('config'),
                            isSelected:\$(this).data('isSelected') || 0
                        });
                    });
                    _self.parent().remove();
                    \$('.body:first').css('visibility','visible');
                    if(\$('.body').length == 0){
                        layer.msg('答题结束');
                        ajax_common({
                            url:Routing.generate('survey_car_project_save'),
                            data:{
                                project_id:\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["project_id"]) || array_key_exists("project_id", $context) ? $context["project_id"] : (function () { throw new Twig_Error_Runtime('Variable "project_id" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "\",
                                no:_no,
                                city:_city,
                                json:JSON.stringify(json)
                            },
                            success:function () {

                            }
                        })
                    }
                });
            });
        </script>
    </head>
    <body>
        <div id=\"box\">
            <div id=\"container\">
                <div id=\"header\">
                    <input type=\"text\" id=\"no\" name=\"no\" placeholder=\"请输入编号\">
                    <select id=\"city\" name=\"city\">
                        <option value=\"\">请选择城市</option>
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new Twig_Error_Runtime('Variable "city" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 99
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                    </select>
                    <div id=\"search\">开始答题</div>
                </div>
                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new Twig_Error_Runtime('Variable "list" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 105
            echo "                <div class=\"body\" data-question=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "question_id", array()), "html", null, true);
            echo "\">
                    ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["value"], "cars", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 107
                echo "                    <div class=\"item\" data-brand=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "brand_name", array()), "html", null, true);
                echo "\" data-config=\"";
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "config", array()), "val", array())), "html", null, true);
                echo "\" data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "index", array()), "html", null, true);
                echo "\" data-isSelected=\"0\">
                        <div>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "brand_name", array()), "html", null, true);
                echo "</div>
                        <div><img src=\"";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "brand_img", array()), "html", null, true);
                echo "\"></div>
                        ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "config", array()), "content", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 111
                    echo "                        <div>";
                    echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                    echo "</div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                        <div><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "car_info", array()), "html", null, true);
                echo "\"></div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                    <div class=\"item none\">
                        <div>以</div>
                        <div>上</div>
                        <div>都</div>
                        <div>不</div>
                        <div>选</div>
                        <div>择</div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "            </div>
            <hr>
            <div id=\"footer\">© 零点有数 2018</div>
        </div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SurveyCarBundle:Project:survey.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 126,  219 => 116,  209 => 113,  200 => 111,  196 => 110,  192 => 109,  188 => 108,  179 => 107,  175 => 106,  170 => 105,  166 => 104,  161 => 101,  150 => 99,  146 => 98,  122 => 77,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype HTML>
<html>
    <head>
        <link rel=\"shortcut icon\" href=\"http://pdt.idataway.com/Images/enableq.ico\" type=\"image/x-icon\">
        <style>
            *{ margin:0;padding:0;}
            html,body{width:100%;height:100%;overflow:hidden}
            #box{width:100%;height:100%;display:inline-block;zoom:1;text-align:center;position: relative}
            #container{height:80%;width:75%;position:relative;display:inline-block;margin-top:3%}
            hr{width:75%;display:inline-block;}
            #footer{width:75%;display:inline-block;padding-top:5px;text-align:left}
            #header{width:auto;height:10%;text-align:left;padding-top:1%;padding-left:1%}
            #no,select{width:300px;height:30px;margin-right:20px;font-size:large}
            #no{padding-left:5px;}
            #search{height:30px;display:inline-block;background:#428bca;line-height: 30px;text-align:center;width:200px;color:white;border-radius:5px;cursor:default;}
            .body{width:100%;height:auto;padding-top:20px;visibility: hidden}
            .item{width:19%;float:left;margin-right:5px;border:1px solid #c9c9c9;border-radius:20px;}
            .item div{margin-top:10px;}
            .none{height:100%;font-size:x-large}
            .item:hover{background:orange}
            img{width:218px;}
        </style>
        <script src=\"{{ asset('resource/js/jquery-3.3.1.min.js') }}\"></script>
        <script src=\"{{ asset('resource/js/layer/layer.js') }}\"></script>
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
        <script src=\"{{ asset('resource/js/common.js') }}\"></script>
        <script>
            String.prototype.PadLeft = function (len, charStr) {
                var s = this + '';
                return new Array(len - s.length + 1).join(charStr, '') + s;
            };
            var json = [];
            var _no = null;
            var _city = null;
            \$(function (){
                var len = \$('.body').length.toString().length;
                var height = \$('.item:eq(0)').css('height');
                \$('.item').css('height',height);
                height = height.replace('px','');
                var marginTop = (height - 33 * 6) / 7;
                \$('.none div').css('margin-top',marginTop + 'px');
                \$('.none div').css('margin-bottom',marginTop + 'px');
                \$('#search').click(function () {
                    if(\$('#no').val().trim() == ''){
                        layer.msg('请输入编号',{time:1000});
                        return false;
                    }
                    if(\$('#city').val() == ''){
                        layer.msg('请选择城市',{time:1000});
                        return false;
                    }
                    _no = \$('#no').val().trim();
                    _city = \$('#city').val().trim();
                    \$('.body:first').css('visibility','visible');
                });
                \$('.item').click(function () {
                    var _self = \$(this);
                    if(!_self.hasClass('none')){
                        _self.data('isSelected','1');
                    }
                    _self.parent().find('.item:not(:last)').each(function () {
                        json.push({
                            no:\$('#no').val(),
                            card:\"q\" + \$(this).parents('.body').data('question').toString().PadLeft(len,'0') + '_' + \$(this).data('index'),
                            config:\$(this).data('config'),
                            isSelected:\$(this).data('isSelected') || 0
                        });
                    });
                    _self.parent().remove();
                    \$('.body:first').css('visibility','visible');
                    if(\$('.body').length == 0){
                        layer.msg('答题结束');
                        ajax_common({
                            url:Routing.generate('survey_car_project_save'),
                            data:{
                                project_id:\"{{ project_id }}\",
                                no:_no,
                                city:_city,
                                json:JSON.stringify(json)
                            },
                            success:function () {

                            }
                        })
                    }
                });
            });
        </script>
    </head>
    <body>
        <div id=\"box\">
            <div id=\"container\">
                <div id=\"header\">
                    <input type=\"text\" id=\"no\" name=\"no\" placeholder=\"请输入编号\">
                    <select id=\"city\" name=\"city\">
                        <option value=\"\">请选择城市</option>
                        {% for val in city %}
                            <option value=\"{{ val.id }}\">{{ val.name }}</option>
                        {% endfor %}
                    </select>
                    <div id=\"search\">开始答题</div>
                </div>
                {% for value in list %}
                <div class=\"body\" data-question=\"{{ value.question_id }}\">
                    {% for val in value.cars %}
                    <div class=\"item\" data-brand=\"{{ val.brand_name }}\" data-config=\"{{ val.config.val|json_encode }}\" data-index=\"{{ val.index }}\" data-isSelected=\"0\">
                        <div>{{ val.brand_name }}</div>
                        <div><img src=\"{{ val.brand_img }}\"></div>
                        {% for v in val.config.content %}
                        <div>{{ v }}</div>
                        {% endfor %}
                        <div><img src=\"{{ val.car_info }}\"></div>
                    </div>
                    {% endfor %}
                    <div class=\"item none\">
                        <div>以</div>
                        <div>上</div>
                        <div>都</div>
                        <div>不</div>
                        <div>选</div>
                        <div>择</div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <hr>
            <div id=\"footer\">© 零点有数 2018</div>
        </div>
    </body>
</html>", "SurveyCarBundle:Project:survey.html.twig", "/Users/zp/Desktop/zp/project/php/symfony_survey/src/Survey/CarBundle/Resources/views/Project/survey.html.twig");
    }
}
