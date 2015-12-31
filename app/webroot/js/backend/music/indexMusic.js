// $.noConflict();
$(document).ready(function(){
    var baseurl = document.location.origin+'/';
    if(baseurl == "http://localhost/")
    {
        baseurl += "du_an_ca_nhan/amnhac/";
    }
    datatable();

    function datatable()
    {
        $('#listSong').dataTable({
            "pageLength": 50,
            "processing": true,
            "serverSide": true,
            "language": 
            {
                "search": "Tìm kiếm",
                "info": "Hiển thị trang thứ _PAGE_ trong tất cả _PAGES_ trang",
                "zeroRecords": "Chưa có bình luận nào",
                "lengthMenu": "Hiển thị _MENU_ bình luận",
                "infoEmpty": "Chưa có dữ liệu nào",
                "loadingRecords": "Đang tải...",
                "processing":     "<img src='"+baseurl+"app/webroot/img/loading.gif' alt='Đang xử lý...' class='loading pull-center'/>"
            },
            "ajax": {
                "url": baseurl + "musics/list_song",
                "contentType": "application/json; charset=utf-8",
                "complete": function()
                {
                    // icheck();
                    // removecomment();
                }
            }
        });
    }
});
    // var options = {
    //     target:   '#data',
    //     beforeSubmit:  showRequest,
    //     success:  afterSuccess
    // };
    // $('#deleteComment').ajaxForm(options);
    // function showRequest()
    // {
    //     $('#data').fadeOut('fast', function() {});
    //     $('#busy-indicator').fadeIn('fast', function() {});
    // }
    // function afterSuccess()
    // {
    //     $('#data').fadeIn('fast', function() {});
    //     $('#busy-indicator').fadeOut('fast', function() {});
    //     datatable();
    //     removecomment();
    // }
    // function removecomment()
    // {
    //     $('.removecomment').click(function(event) 
    //     {
    //         $('.notifyjs-metro-base').trigger('notify-hide');
    //         nconfirm();
    //         var id = $(this).attr('commentid');
    //         $(document).off('click', '.notifyjs-metro-base .no').on('click', '.notifyjs-metro-base .no', function() {
    //             $(this).trigger('notify-hide');
    //         });
    //         $(document).off('click', '.notifyjs-metro-base .yes').on('click', '.notifyjs-metro-base .yes', function() {
    //             $(this).trigger('notify-hide');
    //             var obj = $('#remove-'+id);
    //             $.ajax({
    //                 url: baseurl + 'author/comments/delete',
    //                 type: 'POST',
    //                 dataType: 'json',
    //                 data: {id: id},
    //                 success: function(res)
    //                 {
    //                     if(res.alert == 1){
    //                         obj.parent().parent().parent().fadeOut("slow",function(){$(this).remove()});
    //                         $.notify({
    //                             title: false,
    //                             text: 'Xóa bình luận thành công',
    //                             image: "<i class='fa fa-check'></i>"
    //                         }, {
    //                             style: 'metro',
    //                             className: 'success',
    //                             globalPosition:'top center',
    //                             showAnimation: "show",
    //                             showDuration: 0,
    //                             hideDuration: 0,
    //                             autoHide: false,
    //                             clickToHide: true
    //                         });
    //                     } else {
    //                         $.notify({
    //                             title: false,
    //                             text: 'Xóa bình luận thất bại',
    //                             image: "<i class='fa fa-exclamation'></i>"
    //                         }, {
    //                             style: 'metro',
    //                             className: 'error',
    //                             globalPosition:'top center',
    //                             showAnimation: "show",
    //                             showDuration: 0,
    //                             hideDuration: 0,
    //                             autoHide: false,
    //                             clickToHide: true
    //                         });
    //                     }
    //                 },
    //                 error: function()
    //                 {
    //                     $.notify({
    //                         title: false,
    //                         text: 'Có lỗi xảy ra không thể xóa bình luận này',
    //                         image: "<i class='fa fa-exclamation'></i>"
    //                     }, {
    //                         style: 'metro',
    //                         className: 'error',
    //                         globalPosition:'top center',
    //                         showAnimation: "show",
    //                         showDuration: 0,
    //                         hideDuration: 0,
    //                         autoHide: false,
    //                         clickToHide: true
    //                     });
    //                 }
    //             });
    //         });
    //     });
    // }
    // function nconfirm() {
    //     $.notify({
    //         title: 'Bạn có chắc muốn xóa không',
    //         text: '<div class="clearfix"></div><br><a class="btn btn-sm btn-default yes">Có</a> <a class="btn btn-sm btn-danger no">Không</a>',
    //         image: "<i class='fa fa-warning'></i>"
    //     }, {
    //         style: 'metro',
    //         className: "cool",
    //         showAnimation: "show",
    //         showDuration: 0,
    //         hideDuration: 0,
    //         autoHide: false,
    //         clickToHide: false
    //     });
    // }
// });