<?php

/* SurveyCarBundle:Project:index.html.twig */
class __TwigTemplate_964e797b500b157805c6c0d2a39fd47d9ccd29192cb42d811cac34a683aae815 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SurveyCarBundle:Common:base.html.twig", "SurveyCarBundle:Project:index.html.twig", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SurveyCarBundle:Common:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SurveyCarBundle:Project:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SurveyCarBundle:Project:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 3
        echo "    <script>
        \$(function () {
            _global.registe('.table-box');
            var layer_index = null;
            //画面加载
            var routing = Routing.generate('survey_car_project_list');
            \$('.table-box').load(routing,_global.pagination);
            //新建
            \$('#new-project').click(function () {
                var obj = \$('#txt_name').clone();
                obj.attr('id','').prop('hidden',false).addClass('txt_name').css('width','500px').css('height','35px').css('margin-left','10px').css('margin-top','15px');
                layer_index = layer.open({
                    title:'添加项目',
                    type:1,
                    content:obj.get(0).outerHTML,
                    btn:['保存','取消'],
                    area:['520px','auto'],
                    yes:save_project,
                    cancel:function (index) {
                        layer.close(index);
                    }
                });
                \$('.txt_name').focus();
            });
            //更新
            var id = null;
            \$(document).on('click','.edit',function () {
                id = \$(this).data('id');
                var name = \$(this).data('name');
                var obj = \$('#txt_name').clone();
                obj.attr('id','').prop('hidden',false).addClass('txt_name').css('width','500px').css('height','35px').css('margin-left','10px').css('margin-top','15px');
                layer_index = layer.open({
                    title:'编辑项目',
                    type:1,
                    content:obj.get(0).outerHTML,
                    btn:['保存','取消'],
                    area:['520px','auto'],
                    yes:save_project,
                    cancel:function (index) {
                        layer.close(index);
                    }
                });
                \$('.txt_name').val('').focus().val(name);
            });
            \$(document).on('keydown','.txt_name',function (e) {
                if(e.keyCode == 13){
                    save_project(layer_index);
                }
            });
            function save_project(index) {
                if(id == null){
                    var name = \$('.txt_name').val();
                    if(name.trim() == ''){
                        layer.msg('请输入项目名称',{time:1500});
                        return false;
                    }
                    var setting = {
                        url: Routing.generate('survey_car_project_insert'),
                        data: {
                            name:name
                        },
                        success: function (data) {
                            if(data.flg =='success'){
                                layer.msg(data.msg,{time:1500},function () {
                                    layer.close(index);
                                    _global.reload();
                                });
                            }else{
                                layer.msg(data.msg,{time:1500});
                            }
                        }
                    };
                    ajax_common(setting);
                }else{
                    var name = \$('.txt_name').val();
                    if(name.trim() == ''){
                        layer.msg('请输入项目名称',{time:1500});
                        return false;
                    }
                    var setting = {
                        url: Routing.generate('survey_car_project_update'),
                        data: {
                            name:name,
                            id:id,
                        },
                        success: function (data) {
                            if(data.flg =='success'){
                                layer.msg(data.msg,{time:1500},function () {
                                    layer.close(index);
                                    _global.reload();
                                });
                            }else{
                                layer.msg(data.msg,{time:1500});
                            }
                        }
                    };
                    ajax_common(setting);
                }
            }
            //删除
            \$(document).on('click','.delete',function () {
                if (confirm(\"警告！！！数据删除后无法恢复！\")) {
                    var setting = {
                        url: Routing.generate('survey_car_project_delete'),
                        data: {
                            'id': \$(this).data('id'),
                        },
                        success: function () {
                            _global.reload();
                        }
                    };
                    ajax_common(setting);
                }
            });
            //导入
            var project_id = null;
            \$(document).on('click','.import',function () {
                project_id = \$(this).data('id');
                \$('#file').click();
            });
            //上传文件
            \$('#file').change(function () {
                var data = new FormData();
                data.append('id',project_id);
                data.append('file',this.files[0]);
                var setting = {
                    processData:false,
                    contentType:false,
                    async:false,
                    url: Routing.generate('survey_car_project_import'),
                    data: data,
                    success: function (data) {
                        layer.msg(data.msg,{time:1500});
                    }
                };
                ajax_common(setting);
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 144
        echo "    <form id=\"forms\" enctype=\"multipart/form-data\">
        <input type=\"text\" id=\"txt_name\" name='txt_name' hidden value=\"\"/>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
            <h1 class=\"page-header\">
                项目列表
                <button type=\"button\" class=\"btn btn-primary btn-large\" id=\"new-project\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> 新建</button></h1>
                <input type=\"text\" id=\"txt_name\" class=\"hidden\" value=\"\" placeholder=\"请输入项目名称\">
                <input type=\"file\" id=\"file\" class=\"hidden\" value=\"\" name=\"file\">
            <div class=\"table-responsive table-box\"></div>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SurveyCarBundle:Project:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 144,  203 => 143,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SurveyCarBundle:Common:base.html.twig' %}
{% block js %}
    <script>
        \$(function () {
            _global.registe('.table-box');
            var layer_index = null;
            //画面加载
            var routing = Routing.generate('survey_car_project_list');
            \$('.table-box').load(routing,_global.pagination);
            //新建
            \$('#new-project').click(function () {
                var obj = \$('#txt_name').clone();
                obj.attr('id','').prop('hidden',false).addClass('txt_name').css('width','500px').css('height','35px').css('margin-left','10px').css('margin-top','15px');
                layer_index = layer.open({
                    title:'添加项目',
                    type:1,
                    content:obj.get(0).outerHTML,
                    btn:['保存','取消'],
                    area:['520px','auto'],
                    yes:save_project,
                    cancel:function (index) {
                        layer.close(index);
                    }
                });
                \$('.txt_name').focus();
            });
            //更新
            var id = null;
            \$(document).on('click','.edit',function () {
                id = \$(this).data('id');
                var name = \$(this).data('name');
                var obj = \$('#txt_name').clone();
                obj.attr('id','').prop('hidden',false).addClass('txt_name').css('width','500px').css('height','35px').css('margin-left','10px').css('margin-top','15px');
                layer_index = layer.open({
                    title:'编辑项目',
                    type:1,
                    content:obj.get(0).outerHTML,
                    btn:['保存','取消'],
                    area:['520px','auto'],
                    yes:save_project,
                    cancel:function (index) {
                        layer.close(index);
                    }
                });
                \$('.txt_name').val('').focus().val(name);
            });
            \$(document).on('keydown','.txt_name',function (e) {
                if(e.keyCode == 13){
                    save_project(layer_index);
                }
            });
            function save_project(index) {
                if(id == null){
                    var name = \$('.txt_name').val();
                    if(name.trim() == ''){
                        layer.msg('请输入项目名称',{time:1500});
                        return false;
                    }
                    var setting = {
                        url: Routing.generate('survey_car_project_insert'),
                        data: {
                            name:name
                        },
                        success: function (data) {
                            if(data.flg =='success'){
                                layer.msg(data.msg,{time:1500},function () {
                                    layer.close(index);
                                    _global.reload();
                                });
                            }else{
                                layer.msg(data.msg,{time:1500});
                            }
                        }
                    };
                    ajax_common(setting);
                }else{
                    var name = \$('.txt_name').val();
                    if(name.trim() == ''){
                        layer.msg('请输入项目名称',{time:1500});
                        return false;
                    }
                    var setting = {
                        url: Routing.generate('survey_car_project_update'),
                        data: {
                            name:name,
                            id:id,
                        },
                        success: function (data) {
                            if(data.flg =='success'){
                                layer.msg(data.msg,{time:1500},function () {
                                    layer.close(index);
                                    _global.reload();
                                });
                            }else{
                                layer.msg(data.msg,{time:1500});
                            }
                        }
                    };
                    ajax_common(setting);
                }
            }
            //删除
            \$(document).on('click','.delete',function () {
                if (confirm(\"警告！！！数据删除后无法恢复！\")) {
                    var setting = {
                        url: Routing.generate('survey_car_project_delete'),
                        data: {
                            'id': \$(this).data('id'),
                        },
                        success: function () {
                            _global.reload();
                        }
                    };
                    ajax_common(setting);
                }
            });
            //导入
            var project_id = null;
            \$(document).on('click','.import',function () {
                project_id = \$(this).data('id');
                \$('#file').click();
            });
            //上传文件
            \$('#file').change(function () {
                var data = new FormData();
                data.append('id',project_id);
                data.append('file',this.files[0]);
                var setting = {
                    processData:false,
                    contentType:false,
                    async:false,
                    url: Routing.generate('survey_car_project_import'),
                    data: data,
                    success: function (data) {
                        layer.msg(data.msg,{time:1500});
                    }
                };
                ajax_common(setting);
            });
        });
    </script>
{% endblock %}
{% block body %}
    <form id=\"forms\" enctype=\"multipart/form-data\">
        <input type=\"text\" id=\"txt_name\" name='txt_name' hidden value=\"\"/>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
            <h1 class=\"page-header\">
                项目列表
                <button type=\"button\" class=\"btn btn-primary btn-large\" id=\"new-project\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> 新建</button></h1>
                <input type=\"text\" id=\"txt_name\" class=\"hidden\" value=\"\" placeholder=\"请输入项目名称\">
                <input type=\"file\" id=\"file\" class=\"hidden\" value=\"\" name=\"file\">
            <div class=\"table-responsive table-box\"></div>
        </div>
    </form>
{% endblock %}", "SurveyCarBundle:Project:index.html.twig", "/Users/zp/Desktop/zp/project/php/symfony_survey/src/Survey/CarBundle/Resources/views/Project/index.html.twig");
    }
}
