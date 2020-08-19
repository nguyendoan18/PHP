function likes(id){
    $.ajax({
        url: "likes.php?id="+id,
        type: "get",
        success: function(ketqua){
            $('#likes').html("<i class=\"fa fa-thumbs-up\"></i>"+ketqua);
        }
    });
}
function dislikes(id){
    $.ajax({
        url: "dislikes.php?id="+id,
        type: "get",
        success: function(ketqua){
            $('#dislikes').html("<i class=\"fa fa-thumbs-down\"></i>"+ketqua);
        }
    });
}
function cmt(id){
    $.ajax({
        url: "guibinhluan.php?id="+id,
        type: "get",
        success: function(ketqua1){
            $('#cmt').html(ketqua1);
        }

    });
}