$(document).ready(function () {

    var ua = detect.parse(navigator.userAgent);
    $("html").addClass(ua.device.type + " " + ua.device.family + " " + ua.os.family + " " + ua.browser.family)

    $(".menuBtn").on("click", function () {
        if ($("header").length > 0) {
            $(".menuBtn").toggleClass("selected")
            $(".lineHead").toggleClass("open").slideToggle(200)
        }
        if ($(".lkPage").length > 0) {
            $(".menuBtn").toggleClass("selected")
            $(".mobileToggle").toggleClass("open").slideToggle(200)
        }
    })

    if ($(".clockBl .iconBl").length > 0) {
        clock();
    }

    if ($(".copyRef").length > 0) {
        new ClipboardJS('.copyRef');

        $(".copyRef").map(function(){
            $(this).on('click', function(e){
                var message = $(this).siblings('.copyMessage')

                if(message != undefined){
                    e.preventDefault();
                    var message = $(this).siblings('.copyMessage');
                    message.stop().fadeIn(200);

                    setTimeout(function(){
                        message.stop().fadeOut(200);
                    }, 2000);
                }
            });
        });
    }

    if ($(".tabs").length > 0) {
        $(".tabs").map(function () {
            $(this).tabs({
                active: 0
            });
        })
    }

    if ($(".settingsTabs").length > 0) {
        $(".settingsTabs").map(function () {
            $(this).tabs({
                show: 300, hide: 300
            });
            $(window).scrollTop(0);
        })


        $('.settingsTabs .listLinks a').map(function (index) {

            $(this).on('click', function (event) {
                event.preventDefault();

                if ($(this).parents('.settingsTabs').length > 0) {
                    window.location.hash = $(this).attr('href');
                    $(window).scrollTop(0);
                }

                var el = $(this),
                    tabs = el.parents('.settingsTabs'),
                    tabContent = tabs.find('.tabsBody').eq(index);

                if (!$(this).hasClass('active')) {
                    el.addClass('active').siblings("a").removeClass('active');
                    tabContent.addClass('active').siblings('.tabsBody').removeClass('active');
                }
            })
        })

        $(window).bind('load', function () {
            $(window).scrollTop(0);
        });

    }

    if ($(".selectricBl").length > 0) {
        $(".selectricBl").map(function () {
            $(this).selectric();
        })

        $('.selectricPic').selectric({
            arrowButtonMarkup: '<span class="icon icon-arrow-down"></span>',
            labelBuilder: function (itemData, element, index) {
                return $(itemData.element[0]).attr('placeholder') ?
                    '<span class="placeholder">' + itemData.text + '</span>' :
                    $(itemData.element[0]).attr('data-image') !== undefined ?
                        '<span class="payIcon" style="background-image: url(' + $(itemData.element[0]).attr('data-image') + ');"></span>' + itemData.text :
                        itemData.text;
            },
            optionsItemBuilder: function (itemData) {
                return $(itemData.element[0]).attr('data-image') !== undefined ?
                    '<span class="payIcon" style="background-image: url(' + $(itemData.element[0]).attr('data-image') + ');"></span>' + itemData.text :
                    itemData.text;
            }
        })

        $('.selectricValue').selectric({
            arrowButtonMarkup: '<span class="icon icon-arrow-down"></span>',
            labelBuilder: function (itemData, element, index) {
                return $(itemData.element[0]).attr('placeholder') ?
                    '<span class="placeholder">' + itemData.text + '</span>' :
                    $(itemData.element[0]).attr('data-image') !== undefined ?
                        '<span class="payIcon" style="background-image: url(' + $(itemData.element[0]).attr('data-image') + ');"></span>' + $(itemData.element[0]).data('text') + '<span class="selecBalance"><span class="selectTit">' + $(itemData.element[0]).data('html') + ': </span>' + $(itemData.element[0]).attr('data-value') + '</span>' : itemData.text;
            },
            optionsItemBuilder: function (itemData) {
                return $(itemData.element[0]).attr('data-image') !== undefined ?
                    '<span class="payIcon" style="background-image: url(' + $(itemData.element[0]).attr('data-image') + ');"></span>' + itemData.text :
                    itemData.text;
            }
        })


    }

    // if ($(".rangeBl").length > 0) {
    //     $(".rangeBl .range").ionRangeSlider({
    //         min: 1,
    //         max: 100000,
    //         from: 25000,
    //         prefix: "<span class='lbl'>$</span>",
    //         grid: false,
    //         onChange: function (data) {
    //             $(data.input).parents(".calcBl").find(".summ").val(data.from)
    //         },
    //         onStart: function (data) {
    //             $(data.input).parents(".calcBl").find(".summ").val(data.from)
    //         }
    //     });
    //     var elSlider = $(".rangeBl .range");
    //     var slider = elSlider.data("ionRangeSlider");
    //     elSlider.parents(".calcBl").find(".summ").on("keypress keyup", function (event) {
    //         var percent = $(this).val();
    //         slider.update({
    //             from: percent
    //         })
    //     })
    // }

    if ($(".sliderPlans").length > 0) {
        $('.sliderPlans').on('init', function(event, slick, currentSlide) {
            var dotsHeight = $(this).find(".my-dots").height();

            slick.$prevArrow.css('margin-top', -dotsHeight / 2 + 'px');
            slick.$nextArrow.css('margin-bottom', -dotsHeight / 2 + 'px');
        });

        $('.sliderPlans').slick({
            infinite: true,
            slidesToShow: 1,
            initialSlide: 0,
            draggable: false,
            vertical: true,
            verticalSwiping: true,
            centerMode: true,
            dots: true,
            dotsClass: "my-dots",
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                    }
                }
            ]
        });

        $('.sliderPlans').on('breakpoint', function(event, slick, currentSlide) {
            var dotsHeight = $(this).find(".my-dots").height();

            slick.$prevArrow.css('margin-top', -dotsHeight / 2 + 'px');
            slick.$nextArrow.css('margin-bottom', -dotsHeight / 2 + 'px');
        });

        $("#plan1").prop('checked', true);

        $('.sliderPlans').on('afterChange', function(event, slick, currentSlide) {
            $(this).find(".slick-current input").prop('checked', true).trigger('change');
        });

        $(".sliderPlans label").click(function() {
            numClick = $(this).parents(".item").attr("data-slick-index")
            $('.sliderPlans').slick('slickGoTo', numClick);
        })
    }

    if ($(".sliderReviews").length > 0) {
        $('.sliderReviews').slick({
            slidesToShow: 1,
            dots: true,
            dotsClass: "reviewDots"
        });
    }

    if ($(".sliderBonus").length > 0) {

        $('.sliderBonus').on('init', function(event, slick, currentSlide) {
            var dotsHeight = $(this).find(".my-dots").height();

            slick.$prevArrow.css('margin-top', -dotsHeight / 2 + 'px');
            slick.$nextArrow.css('margin-bottom', -dotsHeight / 2 + 'px');
        });

        $('.sliderBonus').slick({
            infinite: false,
            slidesToShow: 1,
            initialSlide: 1,
            draggable: false,
            vertical: true,
            verticalSwiping: true,
            centerMode: true,
            dots: true,
            dotsClass: "my-dots",
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                    }
                }
            ]
        });

        $('.sliderPlans').on('breakpoint', function(event, slick, currentSlide) {
            var dotsHeight = $(this).find(".my-dots").height();

            slick.$prevArrow.css('margin-top', -dotsHeight / 2 + 'px');
            slick.$nextArrow.css('margin-bottom', -dotsHeight / 2 + 'px');
        });
    }

    if ($(".faqList").length > 0) {
        var timeOut = false;
        $(".faqList .questBl").click(function () {
            if (timeOut) return false;
            $(this).toggleClass("open").parents('.item').toggleClass("open").find(".answerBl").slideToggle();
            timeOut = true;
            setTimeout(function () {
                timeOut = false;
            }, 500);
        })
    }

    if ($(".representBl").length > 0) {
        var timeOut = false;
        $(".representBl .nameBl").click(function () {
            if (timeOut) return false;
            $(this).toggleClass("open").parents('.item').toggleClass("open").find(".table").slideToggle();
            timeOut = true;
            setTimeout(function () {
                timeOut = false;
            }, 500);
        })
    }

    if ($(".desktopCab").length > 0) {
        var timeOut = false;
        $(".desktopCab .desktopCabName").click(function () {
            if (timeOut) return false;
            $(this).toggleClass("open").parents('.item').toggleClass("open").find(".desktopCabList").slideToggle();
            timeOut = true;
            setTimeout(function () {
                timeOut = false;
            }, 500);
        })
    }

    if ($(".listInvest").length > 0) {
        var timeOut = false;
        $(".listInvest .nameInvest").click(function () {
            if (timeOut) return false;
            $(this).toggleClass("open").parents('.item').toggleClass("open").find(".contentInvest").slideToggle();
            timeOut = true;
            setTimeout(function () {
                timeOut = false;
            }, 500);
        })
    }

    if ($(".listPromo").length > 0) {
        var timeOut = false;
        $(".listPromo .promoName").click(function () {
            if (timeOut) return false;
            $(this).toggleClass("open").parents('.item').toggleClass("open").find(".promoContent").slideToggle();
            timeOut = true;
            setTimeout(function () {
                timeOut = false;
            }, 500);
        })
    }

    if ($(".icViewPass ").length > 0) {
        $(".icViewPass ").click(function () {
            if ($(this).hasClass("click")) {
                $(this).removeClass("click").parents(".inputLine").find("input").prop('type', 'password');
            } else {
                $(this).addClass("click").parents(".inputLine").find("input").prop('type', 'text');
            }
        })
    }

    if ($("#LangDropdown").length > 0) {
        var ddData = [
            {
                text: "",
                value: 1,
                selected: false,
                description: "",
                imageSrc: "img/flag.jpg"
            },
            {
                text: "",
                value: 2,
                selected: false,
                description: "",
                imageSrc: "img/flag.jpg"
            },
        ];
        $('#LangDropdown').ddslick({
            data: ddData,
            width: 60,
            selectText: "",
            imagePosition: "center",
            onSelected: function (selectedData) {
            }
        });
    }

    if ($(".filterBl").length > 0) {
        var dateFormat = "dd.mm.yy",
            from = $("#from")
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    dateFormat: "dd.mm.yy"
                })
                .on("change", function () {
                    to.datepicker("option", "minDate", getDate(this));
                }),
            to = $("#to").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                dateFormat: "dd.mm.yy"
            })
                .on("change", function () {
                    from.datepicker("option", "maxDate", getDate(this));
                });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    }

    if ($(".timerBl").length > 0) {
        $(".timer").map(timer)
    }

    if ($(".tablePartners").length > 0) {
        $(".slideTitle").on("click", function () {
            if ($(this).hasClass('active')) {
                $(this).stop().removeClass('active').siblings('.slideContent').stop().slideUp();
            } else {
                $(this).parent('.slideBlock').siblings('.slideBlock').children('.slideTitle.active')
                    .stop().removeClass('active').siblings('.slideContent').stop().slideUp();
                $(this).stop().addClass('active').siblings('.slideContent').stop().slideDown();
            }
        })
    }

    if ($(".desktopCabList").length > 0) {
        if ($(window).width() < 768) {
            $(".desktopCabList").mCustomScrollbar();
        }
    }

    if ($(".modalsScroll").length > 0) {
        openMod();
    }

    // if ($(".modalsScroll").length > 0) {
    //     modalEventOpen("modal_dep")
    // }

    if ($(".currentVal").length > 0) {
        $('.currentVal ul').slick({
            arrows: false,
            vertical: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            verticalSwiping: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    }
})

var m
var timer = function () {
    var now = new Date($(this).attr('data-now')),
        startTime = new Date($(this).attr('data-start')),
        finishTime = new Date($(this).attr('data-end')),
        startMS = startTime.getTime(),
        finishMS = finishTime.getTime(),
        nowMS = now.getTime(),
        betweenMS = finishMS - startMS,
        lastMS = finishMS - nowMS,
        percent = lastMS * 100 / betweenMS,
        lastHour,
        lastMin,
        lastSec;
        percent = 100 - percent.toFixed();

    if ($(this).siblings(".valueInvest")) {
        $(this).siblings(".valueInvest").find("[class='val']").attr('data-pr', percent);
        $(this).siblings(".valueInvest").find("[class='val']").text(percent + ' %');

        var pr = $(this).siblings(".valueInvest").find("[class='val']").attr("data-pr")
        var prog = $(this).siblings(".valueInvest").find(".prog")
        var cubePr = ((16 / 100) * pr)
        cubePr = cubePr.toFixed();
        for (var i = 0; i < cubePr; i++) {
            prog.find(".cube").eq(i).addClass("open")
        }

    }
    if ($(this).siblings(".circleBl")) {
        $(this).siblings(".circleBl").find("input").attr('value', percent);
        $(this).siblings(".circleBl").find("input").val(percent).trigger('change');
    }

    //if (finishMS > nowMS) {
        m = setInterval(function () {
            nowMS = nowMS + 1000;
            lastMS = finishMS - nowMS;

            // lastHour = Math.floor(lastMS / 1000 / 60 / 60)
            // lastMin = Math.floor((lastMS - (lastHour * 1000 * 60 * 60)) / 1000 / 60)
            // lastSec = Math.floor((lastMS - (lastHour * 1000 * 60 * 60) - (lastMin * 60 * 1000)) / 1000)

            lastHour = Math.floor(lastMS / 1000 / 60 / 60)
            lastMin = Math.floor((lastMS - (lastHour * 1000 * 60 * 60)) / 1000 / 60)
            lastSec = Math.floor((lastMS - (lastHour * 1000 * 60 * 60) - (lastMin * 60 * 1000)) / 1000)

            lastHour = checkTime(lastHour);
            lastMin = checkTime(lastMin);
            lastSec = checkTime(lastSec);

            $(this).find('.hous').text(lastHour);
            $(this).find('.min').text(lastMin);
            $(this).find('.sec').text(lastSec);

            if (lastMS / 1000 < 0) {
                $(this).find('.hous').text('00');
                $(this).find('.min').text('00');
                $(this).find('.sec').text('00');
            }

            // if (lastMS / 1000 <= 1) {
            //     clearInterval(m)
            // }
        }.bind(this), 1000)
    //}
}
var checkTime = function (i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

window.addEventListener('load', function () {
    if ($(".loadPage ").length > 0) {

        $(".dial").knob({
            'min': 0,
            'max': 99,
            'val': 0,
            'format': function (value) {
                return value + '%';
            }
        });
        var time = 4;
        var i = 1,
            num = 99,
            step = 50 * time / num,
            that = $(this),
            int = setInterval(function () {
                if (i <= num) {
                    $('.dial').val(i).trigger('change');

                } else {
                    clearInterval(int);
                    $(".loadPage").addClass("load")
                }
                i++;
            }, step);

    }
})

var flag = true;
function removeEl(el, level) {
    if (el.data('level')>level) {
        removeEl(el.next(), el.data('level'));
        el.remove();
    }
}
function clickRef(level, id) {
    if (flag) {
        flag = false;
        var link = $('#el' + id);
        if (link.parent().hasClass('active')) {
            link.parent().removeClass('active');
            removeEl($('#el' + id).next(), $('#el' + id).data('level'));
            flag = true;
        } else {
            link.parent().addClass('active');
            $.ajax({
                url: '/partner/?level='+level+'&id='+id,
                cache: false,
                success: function (html) {
                    if (html) {
                        $('#el' + id).next('.slideContent').html(html);
                    }
                    flag = true;
                }
            });

        }
    }
    return false;
}