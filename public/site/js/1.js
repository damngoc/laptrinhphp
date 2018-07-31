 $(document).ready(function(){
 	$(window).resize(function(event) {
 		if($(window).width() < 576){ 			 
 			$('.menutop ul li ul').slideUp();
 		}
 	});
 	$('.menutop .navbar-light .navbar-nav > li ') .bind('touchstart',function(){		 
		$(this).children('ul').slideToggle();
 	})
 
 	// jquery cho phan hieu ung 
 	$('ul.tdtab li b').click(function(){
 		$('ul.tdtab li b').removeClass('active');
 		$(this).addClass('active');

 		chiso = $(this).parent().index() + 1;
 		

 		$('ul.ndtab li .divsanpham').removeClass('xuathien');
 		$('ul.ndtab li:nth-child(' + chiso + ") .divsanpham ").addClass('xuathien');
	 

 	})
    // Hàm active tab nào đó
    function activeTab(obj)
    {
        // Xóa class active tất cả các tab
        $('.tab-wrapper ul li').removeClass('active');
 
        // Thêm class active vòa tab đang click
        $(obj).addClass('active');
 
        // Lấy href của tab để show content tương ứng
        var id = $(obj).find('a').attr('href');
 
        // Ẩn hết nội dung các tab đang hiển thị
        $('.tab-item').hide();
 
        // Hiển thị nội dung của tab hiện tại
        $(id) .show();
    }
 
    // Sự kiện click đổi tab
    $('.tab li').click(function(){
        activeTab(this);
        return false;
    });
 
    // Active tab đầu tiên khi trang web được chạy
    activeTab($('.tab li:first-child'));

    // hieu ung phong to anh
    // $('.thumbnails a').fancybox();
    $(window).scroll(function(){
        var cuon =  $('html,body').scrollTop();
        console.log(cuon);
        if(cuon >= 300){
            $('b.click').addClass('hienra');
        }else{
            $('b.click').removeClass('hienra');
        }
       
    })

    $('b.click').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        $('html,body').animate({scrollTop:0}, 3000);
    });


    // $('.plus').on('click', function () {
    //         var divUpd = $(this).parent().find('.qty'), newVal = parseInt(divUpd.text(), 10) + 1;
    //         divUpd.text(newVal);


});
 