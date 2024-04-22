let page_index = (function () {
    let default_ajax_path = `${settings.paths.primary.PHP}index/`;

    function page_index(){ initialize(); }

    function initialize(){

        function set_events() {

        }

        set_events();
    }

    function get(get_type, data, success_function){
        data["get_type"] = get_type;
        $.ajax({
            url: `${default_ajax_path}get.php`,
            type: "POST",
            data: data,
            async: false,
            success: function (data) {
                console.log(data);
                success_function(data);
            }, timeout: settings.ajax_timeouts.NORMAL
        });
    }

    function set (set_type, data, success_function,async= false){
        helper_sweet_alert.wait("İşlem Sürdürülüyor", "İşleminiz yapılıyor lütfen bekleyiniz...");
        data["set_type"] = set_type;
        $.ajax({
            url: `${default_ajax_path}set.php`,
            type: "POST",
            data: data,
            async: async,
            success: function (data) {
                console.log(data);
                success_function(data);
            },error: helper_sweet_alert.close(), timeout: settings.ajax_timeouts.NORMAL
        });
    }

    return page_index;
})();

$(function () {
    let _page_index = new page_index();
});
