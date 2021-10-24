$(function(){
    var $good = $('.btn-good'),　goodBlogId;

    $good.on('click',function(){
        var $this = $(this);
        goodBlogId = $this.parents('.blog').data('blogid');
        $.ajax({
                url:'ajax_good.php',
                type:'POST',
                data: { blogId: goodBlogId},
        }).done(function(data){
                $this.children('i').toggleClass('far');
                $this.children('i').toggleClass('fas'); 
                $this.children('i').toggleClass('active');
                $this.toggleClass('active');
        }).fail(function(msg) {
                console.log('Ajax Error');
        });
    });
});
