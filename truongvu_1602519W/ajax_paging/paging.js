$(document).ready(function(){
    function loaddata(page){
        var wrap = $('.load_paging');
        $.ajax
        ({
            type: "POST",
            url: "ajax_paging/index.php",
            data: {page:page},
            success: function(msg)
            {
                wrap.html(msg);
            }
        }); 
    }
    loaddata(1);
    $('.load_paging').on('click','.pagination li.active',function(){
        var page = $(this).attr('p');
        loaddata(page);
    });
});