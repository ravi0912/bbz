(function ( $ ) {

    $.fn.linkpreview = function(options) {

        var defaultOptions = {

            outputDiv: $("#html"),
            image_no: 1,
            loaderDiv:'',
            loaderImg: '',
            css: true,
            processor: 'class.linkpreview.php'

        }

        var settings = $.extend(defaultOptions,options);



        return this.each(function() {



            var image = 1;

            $(document).on('click','#changeimg',function() {


                if(image == 5)image=0;

                var src = $("#thumbnail img").data("src");

                if(src != "" && src != null) {


                    src_arr = src.split(',');

                    if(src_arr[image]) {

                        loader.start();

                        $("#thumbnail img").load(function() {

                            loader.stop();

                        }).attr('src',src_arr[image].replace(/[\[\]']+/g,''));


                        image++;

                    }


                }

            });

            $(this).keypress(function(e) {

                var value = $(this).val();
                if(value.indexOf("ajaxtown.com") > -1) {
                    return false;
                }
                if(e.which == 13) {

                    loader.start();

                    $.ajax({
                        url: settings.processor,
                        data: 'url=' + $(this).val() + '&image_no=' + settings.image_no + '&css=' + settings.css,
                        type: 'get',
                        success: function(html) {
                            loader.stop();
                            settings.outputDiv.html(html);
                        },
                        error: function(msg) {
                            loader.stop();
                            settings.outputDiv.html('<span style="text-align: center;color: #696969;">Ajax request failed. Re-check the path of the processor file: <br/> <strong style="color:#696969; background: #ddd; padding: 10px; font-family: monospace; line-height: 50px;">' + settings.processor + ' </strong></span>');
                        }

                    })
                }
            });


            var loader = {

                set: function() {

                    settings.loaderDiv.html('<img src="'+ settings.loaderImg +'">').hide();

                },
                start: function() {
                    settings.loaderDiv.show();
                },
                stop: function() {
                    settings.loaderDiv.hide();
                }

            }

            loader.set();

        });

    };

}( jQuery ));