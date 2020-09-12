$(function() {
    var $nav = $("#navArea");
    var $btn = $(".toggle_btn");
    var $mask = $("#mask");
    // class追加用
    var open = "open";

    // menu open close
    $btn.on("click", function() {
        if (!$nav.hasClass(open)) {
            $nav.addClass(open);
        } else {
            $nav.removeClass(open);
        }
    });

    // mask close
    $mask.on("click", function() {
        $nav.removeClass(open);
    });
});
