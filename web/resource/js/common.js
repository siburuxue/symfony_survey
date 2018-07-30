var _global = new global_setting();
function global_setting(){
    this._table_box = null;
    this.pagination = {
        page:1,
        perPage:10
    };
    this.parameters = {};
    this.registe = function(table){
        this._table_box = $(table);
    };
    this.getParam = function(){
        return $.extend(this.pagination,this.parameters)
    };
    this.reload = function () {
        var url = this._table_box.children('table').data('url');
        this._table_box.load(url,_global.getParam());
    };
}
//ajax共通函数
function ajax_common(config){
    var setting = {
        dataType:'json',
        type:'post',
        error:function(err) {
            console.dir(err);
        }
    };
    config = $.extend(setting,config)
    $.ajax(config);
}

function GetRequest(name,path='') {
    if(path != ""){
        var pathArr = path.split('?');
        if(pathArr.length > 0){
            path = "?" + pathArr[1];
        }else{
            return null;
        }
    }
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var url = path || window.location.search;
    var r = url.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
}


$(function(){
    $(document).on('click','.pagination a',function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        if(url == '#') return false;
        var page = GetRequest('page',url);
        _global.pagination.page = page;
        _global._table_box.load(url,_global.getParam());
    });
});