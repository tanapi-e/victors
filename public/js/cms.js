$(function() {
    $(".btn-dell").click(function() {
        if (confirm("本当に削除しますか？")) {
            alert("削除しました。");
        } else {
            return false;
        }
    });
});
