// 檔案與依賴
var shimdeps_page = {
    '_career_item': [path_appscript + 'controller/careers/md/career_item', [
        'vmodel'
    ]],
    '_layout': [path_appscript + 'controller/careers/md/layout', [
        'vmodel'
    ]],
    '_page': [path_appscript + 'controller/careers/md/page', [
        'vmodel', '_layout'
    ]]
};

//進行設定
var setting     = shimdeps(Object.assign(shimdeps_global, shimdeps_page));
setting.urlArgs = urlArgs;
setting.map     = map;
requirejs.config(setting);