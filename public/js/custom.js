$(document).ready(function(){
    'use strict'

    $('.share-copy').click(function(){
        var $temp = $("<input>");
        var val = $(this).data('link');
        $("body").append($temp);
        $temp.val(val).select();
        document.execCommand("copy");
        $temp.remove();

        Toast.fire({
            icon: "success",
            title: "Link Copied",
        });
    });
});