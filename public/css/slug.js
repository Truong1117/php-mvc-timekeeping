$("input#name").keyup(function(event) {
    // Act on the event
var title, slug;

    // Lấy text từ thẻ input title
    title = $(this).val();

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
    
    //Đổi  ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ặ|ẵ|â|ấ|ầ|ẩ|ậ|ậ/gi,'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ế|ề|ể|ể|ễ|ệ/gi,'e');
    slug = slug.replace(/i|í|ỉ|ĩ|ị/gi,'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi,'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi,'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi,'y');

    //Xóa các ký tự đặc biệt
    slug = slug.replace(/\'|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\-|\:|\;|_/gi,'');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id "slug"
    $("input#slug").val(slug);
});