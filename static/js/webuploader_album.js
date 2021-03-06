//用户相册上传图片

var tipsnow = false;
var maxnum = 50;

// 图片上传demo
jQuery(function() {
    var $ = jQuery,
        $list = $('#imgattachlist'),
        // 优化retina, 在retina下这个值是2
        ratio = window.devicePixelRatio || 1,

        // 缩略图大小
        thumbnailWidth = 200 * ratio,
        thumbnailHeight = 200 * ratio,

        // Web Uploader实例
        uploader;

    // 初始化Web Uploader
    uploader = WebUploader.create({

        // 自动上传。
        auto: false,

        // swf文件路径
        swf: 'http://static.8264.com/static/flash/webuploader.swf',

        // 文件接收服务端。
        server: $("#url_action").val(),

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: {
			id: '#filePicker'
		},
		
		threads: 5,

		fileNumLimit: maxnum,
		
		runtimeOrder: 'html5,flash',

        // 只允许选择文件，可选。
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/jpg,image/jpeg,image/png,image/gif,image/bmp'
        },
		
		formData: {
			policy: $("#url_policy").val(),
			signature: $("#url_signature").val()
		}
    });

	// 当文件被加入队列之前触发
	uploader.on( 'beforeFileQueued', function( file ) {
		if($('.edit-photo-info-list>li').length >  maxnum){
			$(".popnoticebox").show();
			$(".popnoticebox span").html("当前只允许一次性上传 " + maxnum + " 张图片");
			$("#filePicker input").removeAttr("disabled");
			return false;
		}
	});


    // 当有文件添加进来的时候
    uploader.on( 'fileQueued', function( file ) {
		// $("#filePicker input").attr("disabled", true);

		$(".upimgbuttonbox").hide();
		$(".input-wrap").show();

        var fils_sizes = $('.photo-btn-wrap em .sizes').html();
        var this_file_size = Math.floor(file.size / 1000000 * 100) / 100;
        var now_size = Number(fils_sizes) + Number(this_file_size);
        now_size = now_size.toFixed(2);
        $('.photo-btn-wrap em .sizes').html(now_size);

		var $li = $(
				'<li><div id="' + file.id + '" class="photo-wrap undone">' +
					'<img class="photo-img" >' +
					'<div class="photo-op-bar">' +
						'<a class="photo-op-cover" href="javascript:void(0);"><i class="icon-m icon-error-m"></i>上传失败</a>'+
						'<a class="photo-op-delete" href="javascript:void(0);"><i class="icon-m icon-delete-m"></i>删除</a>'+
						// '<a class="photo-op-rotate" href="javascript:void(0);"><i class="icon-m icon-rotate-m"></i>旋转</a>' +
						'<span><img src="/static/images/home/album/brabg.jpg" width="100%" height="32"><em>100%</em></span>' +
					'</div>' +
				'</div></li>'
				),
			$img = $li.find('.photo-img');

		$li.find('.photo-op-cover').hide();
		$li.find('span').hide();

        $li.on('click', '.photo-op-delete', function() {
            var file_id = $(this).parent().parent().attr('id');
            uploader.removeFile( file_id, true );

            var file_counts = uploader.getFiles('inited').length;
            $('.photo-btn-wrap em .counts').html(file_counts);

            $(this).parent().parent().parent().remove();
            // console.log($(this).parent().parent().parent());

            var fils_sizes = $('.photo-btn-wrap em .sizes').html();
            var now_size = Number(fils_sizes) - Number(this_file_size);
            now_size = now_size.toFixed(2);
            $('.photo-btn-wrap em .sizes').html(now_size);
        });

		$(".photo-list").append($li);
		// 创建缩略图
		// 如果为非图片文件，可以不用调用此方法。
		// thumbnailWidth x thumbnailHeight 为 100 x 100
		uploader.makeThumb(file, function (error, src) {
			if (error) {
				$img.replaceWith('<span>不能预览</span>');
				return;
			}
			$img.attr('src', src);
		}, thumbnailWidth, thumbnailHeight);

        var file_counts = uploader.getFiles('inited').length;
        $('.photo-btn-wrap em .counts').html(file_counts);



    });

	$(".imgupbegin").on('click', function () {

		var albumid = $("#album_now").val();
		if(!albumid){
            // jQuery('.popxllist').show();
			jQuery(".popnoticebox").show();
			jQuery(".popnoticebox span").html("未选择相册，请选择相册后再尝试上传");
			return false;
		}

		$.ajax({
			type: 'GET',
			url: 'http://u.8264.com/home.php?mod=misc&ac=swfupload&op=checkalbumid',
			async:false,
			data: { albumid:albumid },
			dataType: 'json',
			success:function(data){
				if(data == 1){
					$(".goonadd").hide();
					$(".photo-list").next('li').hide();
					uploader.upload();
				}else{
					jQuery(".popnoticebox").show();
					jQuery(".popnoticebox span").html("非法albumid");
					return false;
				}
			}
		});

	});



	// 某个文件开始上传前触发，一个文件只会触发一次。
	uploader.on( 'uploadStart', function( file ) {
	});

    // 文件上传过程中创建进度条实时显示。
    uploader.on( 'uploadProgress', function( file, percentage ) {
        var $div = $( '#'+file.id+' .photo-op-bar'),
            $percent = $div.find('span');

		$div.find('.photo-op-cover').hide();
		$div.find('.photo-op-delete').hide();
		$div.find('.photo-op-rotate').hide();

		$percent.show();

        $percent.find("img").attr( 'width', percentage * 100 + '%' );
		$percent.find("em").html( percentage * 100 + '%' );

    });
	
	// 文件上传upyun以后，从upyun服务器获取返回值
	uploader.on('uploadAccept', function(obj, ret){
        var albumid = $("#album_now").val();
        var file_id = obj.file.id;

		if(ret.code == '200'){

			var url = "http://u.8264.com/home.php?mod=misc&ac=swfupload&op=upyunupload";
			$.ajax({
				type : 'POST',
				url : url,
				data : { 'albumid':albumid, 'filesize':ret.file_size, 'type':ret.mimetype, 'url':ret.url, 'time':ret.time, 'raw':ret._raw, 'filename':obj.file.name},
				dataType : 'json',
				async: false,
				success:function(result){
                    $("#"+file_id).removeClass("undone");
                    $("#"+file_id+" span em").html("上传成功");
				}
			});

		}
	});

    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
    uploader.on( 'uploadSuccess', function( file ) {
        // $( '#'+file.id ).parent().hide();
    });

    // 文件上传失败，现实上传出错。
    uploader.on( 'uploadError', function( file, reason ) {
		// 修改了webuploader.js 6886-6889行

        $( '#'+file.id ).find('span').hide();
        $( '#'+file.id ).find('.photo-op-cover').show();
		$( '#'+file.id ).find('.photo-op-delete').show();

		var rea = eval("("+reason+")");
		if(rea.message == 'authorization has expired'){
            jQuery(".popnoticebox").show();
            jQuery(".popnoticebox span").html("签名失效，请刷新页面后再上传图片。");
		}else{
            jQuery(".popnoticebox").show();
            jQuery(".popnoticebox span").html("图片上传失败，请刷新页面后再上传图片。");
		}

		//通过upyun cdn检测工具，获取目标upyun的ip、用户ip、用户省份、用户网络运营商
		$.getJSON("http://pubstatic.b0.upaiyun.com/?_upnode&t="+(+new Date()), function(json) {
			// 将form上传过程中出现的错误，记录到日志中
			var url = "misc.php?mod=swfupload&operation=upyunalbumlog";
			$.ajax({
				type : 'POST',
				url : url,
				data : {'flag':0, 'reason':reason, 'upyun_ip':json.addr, 'user_ip':json.remote_addr, 'user_location':json.remote_addr_location},
				dataType : 'json',
				success:function(result){
					if(1){

					}
				}
			});

		});

		
    });

    // 完成上传完了，成功或者失败，先删除进度条。
    uploader.on( 'uploadComplete', function( file ) {
        // $( '#'+file.id ).find('.progress').remove();
    });
	
	uploader.on( 'uploadFinished', function( file ) {
        var len = $(".photo-list li").find('.undone').length;

        if(len == 0){
            var albumid = $("#album_now").val();

            var url = "/home.php?mod=misc&ac=swfupload&op=finish";
            $.ajax({
                type : 'GET',
                url : url,
                data : { 'albumid':albumid, 'type':1 },
                dataType : 'json',
                async: false,
                success:function(data){
                    if(data.flag == 1){
                        window.location.href = data.url;
                    }
                }
            });
        }
    });

	// 当validate不通过时，会以派送错误事件的形式通知调用者。
	uploader.on('error', function( handler ) {
		
		if(handler == 'Q_EXCEED_NUM_LIMIT'){
			$(".popnoticebox").show();
			$(".popnoticebox span").html("当前只允许一次性上传 " + maxnum + " 张图片");
			$("#filePicker input").removeAttr("disabled");
		}else if(handler == 'Q_TYPE_DENIED'){
			$(".popnoticebox").show();
			$(".popnoticebox span").html("当前只允许上传图片类型文件");
			$("#filePicker input").removeAttr("disabled");
		}
	});
	
});