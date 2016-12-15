/**
requirejs 檔案與依賴設定
shimdeps({
    'jquery': ['bower_components/jquery/dist/jquery.min', 
        false
    ],
    'vmodel': ['bower_components/vmodel/src/jquery.vmodel.min', [
        'jquery', 'test'
    ]],
});
*/
var shimdeps = function (obj){
    var oo      = {}
    //路徑
    oo.paths    = {}
    //依賴
    oo.shim     = {}
    for  (var mname in obj) {
        var script_path = obj[mname][0];
        var deps_ary    = obj[mname][1];
        oo.paths[mname] = script_path;
        if (deps_ary) {
            oo.shim[mname]  = {deps: deps_ary};
        }
    }     
    return oo; 
}

