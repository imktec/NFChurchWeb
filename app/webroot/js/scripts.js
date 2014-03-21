//left side accordion
$(function() {
    $('#nav-accordion').dcAccordion({
        eventType: 'click',
        autoClose: true,
        saveState: true,
        disableLink: true,
        speed: 'slow',
        showCount: false,
        autoExpand: true,
        classExpand: 'dcjq-current-parent'
    });



});


var Script = function () {

    //  menu auto scrolling

    jQuery('#sidebar .sub-menu > a').click(function () {
        var o = ($(this).offset());
        diff = 80 - o.top;
        if(diff>0)
            $("#sidebar").scrollTo("-="+Math.abs(diff),500);
        else
            $("#sidebar").scrollTo("+="+Math.abs(diff),500);
    });

    // toggle bar

    $(function() {
        var wd;
        wd = $(window).width();
        function responsiveView() {
            var newd = $(window).width();
            if(newd==wd){
                return true;
            }else{
                wd = newd;
            }
            var wSize = $(window).width();
            if (wSize <= 768) {
                $('#sidebar').addClass('hide-left-bar');

            }
        else{
                $('#sidebar').removeClass('hide-left-bar');
            }

        }
        $(window).on('load', responsiveView);
        $(window).on('resize', responsiveView);




    });

    $('.sidebar-toggle-box .fa-bars').click(function (e) {
        $('#sidebar').toggleClass('hide-left-bar');
        $('#main-content').toggleClass('merge-left');
        e.stopPropagation();
        if( $('#container').hasClass('open-right-panel')){
            $('#container').removeClass('open-right-panel')
        }
        if( $('.right-sidebar').hasClass('open-right-bar')){
            $('.right-sidebar').removeClass('open-right-bar')
        }

        if( $('.header').hasClass('merge-header')){
            $('.header').removeClass('merge-header')
        }



    });
    $('.toggle-right-box .fa-bars').click(function (e) {
        $('#container').toggleClass('open-right-panel');
        $('.right-sidebar').toggleClass('open-right-bar');
        $('.header').toggleClass('merge-header');

        e.stopPropagation();
    });

    $('.header,#main-content,#sidebar').click(function () {
       if( $('#container').hasClass('open-right-panel')){
           $('#container').removeClass('open-right-panel')
       }
        if( $('.right-sidebar').hasClass('open-right-bar')){
            $('.right-sidebar').removeClass('open-right-bar')
        }

        if( $('.header').hasClass('merge-header')){
            $('.header').removeClass('merge-header')
        }


    });


   // custom scroll bar
    $("#sidebar").niceScroll({styler:"fb",cursorcolor:"#1FB5AD", cursorwidth: '3', cursorborderradius: '10px', background: '#404040', spacebarenabled:false, cursorborder: ''});
    $(".right-sidebar").niceScroll({styler:"fb",cursorcolor:"#1FB5AD", cursorwidth: '3', cursorborderradius: '10px', background: '#404040', spacebarenabled:false, cursorborder: ''});


   // widget tools

    jQuery('.panel .tools .fa-chevron-down').click(function () {
        var el = jQuery(this).parents(".panel").children(".panel-body");
        if (jQuery(this).hasClass("fa-chevron-down")) {
            jQuery(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
            el.slideUp(200);
        } else {
            jQuery(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
            el.slideDown(200);
        }
    });

    jQuery('.panel .tools .fa-times').click(function () {
        jQuery(this).parents(".panel").parent().remove();
    });

   // tool tips

    $('.tooltips').tooltip();

    // popovers

    $('.popovers').popover();

    // notification pie chart
    $(function() {
        $('.notification-pie-chart').easyPieChart({
            onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            },
            barColor: "#39b6ac",
            lineWidth: 3,
            size:50,
            trackColor: "#efefef",
            scaleColor:"#cccccc"

        });

    });


    $(function() {

        var datatPie = [30,50];
// DONUT
        $.plot($(".target-sell"), datatPie,
            {
                series: {
                    pie: {
                        innerRadius: 0.6,
                        show: true,
                        label: {
                            show: false

                        },
                        stroke: {
                            width:.01,
                            color: '#fff'

                        }
                    }




                },

                legend: {
                    show: true
                },
                grid: {
                    hoverable: true,
                    clickable: true
                },

                colors: ["#ff6d60", "#cbcdd9"]
            });
    });

    $(function() {
        $('.pc-epie-chart').easyPieChart({
            onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            },
            barColor: "#5bc6f0",
            lineWidth: 3,
            size:50,
            trackColor: "#32323a",
            scaleColor:"#cccccc"

        });

    });



    $(function() {
        $(".d-pending").sparkline([3,1], {
            type: 'pie',
            width: '40',
            height: '40',
            sliceColors: ['#e1e1e1','#8175c9']
        });
    });



// SPARKLINE
    $(function () {
        var sparkLine = function () {
            $(".sparkline").each(function(){
                var $data = $(this).data();
                ($data.type == 'pie') && $data.sliceColors && ($data.sliceColors = eval($data.sliceColors));
                ($data.type == 'bar') && $data.stackedBarColor && ($data.stackedBarColor = eval($data.stackedBarColor));

                $data.valueSpots = {'0:': $data.spotColor};
                $(this).sparkline( $data.data || "html", $data);


                if($(this).data("compositeData")){
                    $spdata = $(this).data("compositeConfig");
                    $spdata.composite = true;
                    $spdata.minSpotColor = false;
                    $spdata.maxSpotColor = false;
                    $spdata.valueSpots = {'0:': $spdata.spotColor};
                    $(this).sparkline($(this).data("compositeData"), $spdata);
                };
            });
        };

        var sparkResize;
        $(window).resize(function (e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(function () {
                sparkLine(true)
            }, 500);
        });
        sparkLine(false);
    });

    /*==Collapsible==*/
    $(function() {
        $('.widget-head').click(function(e)
        {
            var widgetElem = $(this).children('.widget-collapse').children('i');

            $(this)
                .next('.widget-container')
                .slideToggle('slow');
            if ($(widgetElem).hasClass('ico-minus')) {
                $(widgetElem).removeClass('ico-minus');
                $(widgetElem).addClass('ico-plus');
            }
            else
            {
                $(widgetElem).removeClass('ico-plus');
                $(widgetElem).addClass('ico-minus');
            }
            e.preventDefault();
        });

    });

//    $(function() {
//
//    $('.todo-check label').click(function(){
//        var n = $(this).parents('li input[type="checkbox"]');
//        if ($(n).is(':checked')){
//alert('tets');
//        }
//        else{
//            alert('none');
//        }
//
//    });
//
//    });
}();

//função que faz marcar todos os checkbox dentro de uma div
function MarcarTodos(div, checked){
    console.debug(div);
    if(checked){
        $('#'+div+' input[type=checkbox]').attr('checked', 'checked');
    }else{
        $('#'+div+' input[type=checkbox]').removeAttr('checked');
    }
}

    /*
     * Função que faz carregar a div de load no na view para carregar outra página
     */

     //pace
    paceOptions = {
        elements: true
    };

function ajaxload(url) {
    //$(".wrapper").html('<div class="load-div"><h2 class="loading">Carregando...</h2><div class="progress progress-striped active progress-sm"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">Carregando...</span></div></div></div>');

    /* 
     * Função que faz a barra de progresso entrar em ação
     * Depois que a barra de progresso entrar em ação, faz com que carregue uma view na div ".wrapper"
     */

    $(".wrapper").html(''); // Apaga todo o HTML da div ".wrapper"
    setTimeout(function(){
        $(".wrapper").load(url, function() {
            Pace.start();
            $('form').ajaxForm({ 
                success: function(data) { 
                    return false;
                } 
            }), Pace.stop();
        })
    }, 300);
}

$(document).ready(function() {
    /* 
     * Para ativar a função em algum elemento, coloque a classe "menuRoll" sobre a mesma
     * Se não funcionar, verifique a classe que verifica se aquele elemento já chegou no TOP. Obrigado
     * Se não funcionar ainda, esquece, vai pro google.
     */

    //verifica o tamanho da janela do navegador/dispositivo do cliente
    var windowMax = $(document).width();
    if (windowMax > 765) {

        //cria a função que cria o box flutuante de opções
        var stickyNaves = function() {  
            var scrollTop = $(window).scrollTop();
            var topCss = $(".brand").css("height");
            topCss = topCss.replace('px', '');
            var novoTopCss = parseInt(topCss) - 20;

            if (scrollTop > novoTopCss) {

                var cssAdd = $(".breadcrumb").css("width");
                var marginActive = (topCss * -1) + 20;
                marginActive = marginActive + 'px';                   
                $('.menuRoll').addClass('navBares').css("width", cssAdd).css("margin-top", marginActive);

                var heightFix = $(".menuRoll").css("height");
                $('.menuRollNext').css("margin-top", heightFix);
            } else {  
                $('.menuRoll').removeClass('navBares').removeAttr('style');
                $('.menuRollNext').css("margin-top", 0);
            }
        };

        stickyNaves();  

        $(window).scroll(function() {  
            stickyNaves();  
        });
    }   
});