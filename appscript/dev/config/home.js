// 檔案與依賴
var shimdeps_page = {
    'welcome': [path_appscript + 'controller/home/md/welcome', [
        'vmodel'
    ]]
};

//進行設定
var setting     = shimdeps(Object.assign(shimdeps_global, shimdeps_page));
setting.urlArgs = urlArgs;
setting.map     = map;
requirejs.config(setting);