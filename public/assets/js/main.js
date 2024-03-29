var deleteCookie, delta, getCookie, map_initialize, onPlayerReady, onYouTubePlayerAPIReady, setCookie, slider_height,
    video_bg, video_h, video_id, video_orig_h, video_orig_w, video_ratio, video_w, view_h, view_w;
setCookie = function (e, o, t) {
    var r, a;
    return a = t ? ((r = new Date).setTime(r.getTime() + 24 * t * 60 * 60 * 1e3), "; expires=" + r.toGMTString()) : "", document.cookie = e + "=" + o + a + "; path=/"
}, getCookie = function (e) {
    var o, t, r, a;
    for (a = e + "=", t = document.cookie.split(";"), r = 0; r < t.length;) {
        for (o = t[r]; " " === o.charAt(0);)o = o.substring(1, o.length);
        if (0 === o.indexOf(a))return o.substring(a.length, o.length);
        r++
    }
    return null
}, deleteCookie = function (e) {
    return setCookie(e, "", -1)
}, validatePhone = function () {
    var e = /(^\+[0-9]{12}$)|(^0[0-9]{9}$)/.test($("#order-phone").val());
    return !1 === e ? $("#order-phone").addClass("phoneInval") : $("#order-phone").removeClass("phoneInval"), e
}, slider_height = function () {
    var e;
    return $("#home_slider").length ? (e = $(window).height(), $("#home_slider, #home_slider .slick-slide").height(Math.max(e, 568))) : void 0
}, video_bg = function () {
    var e, o;
    return $("#video-bg").length ? setTimeout(function () {
        (o = document.createElement("script")).src = "https://www.youtube.com/player_api", (e = document.getElementsByTagName("script")[0]).parentNode.insertBefore(o, e)
    }, 1e4) : void 0
}, video_h = video_w = 0, $("#video-bg").length && (view_w = $(".advantages-block").width(), (view_h = $(".advantages-block").height()) < (video_h = (video_w = view_w) * (video_ratio = (video_orig_w = 640) / (video_orig_h = 360))) && (delta = view_h - video_h, $("#video-bg").css("top", delta / 2))), video_id = "zPl-JRdpt70", onYouTubePlayerAPIReady = function () {
    return new YT.Player("video-bg", {
        playerVars: {
            playlist: video_id,
            loop: 1,
            autoplay: 1,
            controls: 0,
            showinfo: 0,
            autohide: 1
        }, width: video_w, height: video_h, videoId: video_id, events: {onReady: onPlayerReady}
    })
}, onPlayerReady = function (e) {
    return e.target.mute()
}, map_initialize = function (e) {
    var o, t, r, a;
    $("#map-modal").modal(), o = (e = e.split(","))[0], t = e[1], console.log(o, t), a = {
        zoom: 17,
        center: new google.maps.LatLng(o, t),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: !1
    }, r = new google.maps.Map(document.getElementById("map-canvas"), a), new google.maps.Marker({
        position: new google.maps.LatLng(o, t),
        icon: "/images/marker.png",
        map: r
    })
}, (new WOW).init(), $(function () {
    return slider_height(), video_bg(), getCookie("city") && "" !== getCookie("city") || $("#city-change") && $("#city-change").modal(), $("#city-change .city-list span").click(function () {
        return setCookie("city", $(this).attr("data-value"), 365), location.reload(!0)
    }), $("#contact-form").validate({
        rules: {
            "contact[name]": {required: !0, minlength: 2},
            "contact[email]": {required: !0, email: !0},
            "contact[text]": {required: !0, minlength: 5}
        }, submitHandler: function (e) {
            $.ajax({
                url: "/ajax/contact",
                type: "POST",
                dataType: "json",
                data: $("#contact-form").serialize(),
                beforeSend: function () {
                    $(".contact-block form").stop(!0, !0).slideUp(), $(".contact-block .loader").stop(!0, !0).slideDown()
                },
                success: function (e) {
                    $(".contact-block form").stop(!0, !0).slideDown(), $(".contact-block .loader").stop(!0, !0).slideUp(), !0 === e.status ? $(".contact-block form").html('<div class="success">' + e.msg + "</div>") : alert(e.msg)
                }
            })
        }
    }), $("#review-form").validate({
        rules: {
            "review[name]": {required: !0, minlength: 2},
            "review[email]": {required: !0, email: !0},
            "review[text]": {required: !0, minlength: 5}
        }, submitHandler: function (e) {
            $.ajax({
                url: "/ajax/review",
                type: "POST",
                dataType: "json",
                data: $("#review-form").serialize(),
                beforeSend: function () {
                    $(".review-block form").stop(!0, !0).slideUp(), $(".review-block .loader").stop(!0, !0).slideDown()
                },
                success: function (e) {
                    $(".review-block form").stop(!0, !0).slideDown(), $(".review-block .loader").stop(!0, !0).slideUp(), !0 === e.status ? $(".review-block form").html('<div class="success">' + e.msg + "</div>") : alert(e.msg)
                }
            })
        }
    }), $(".order-item").click(function (e) {
        return e.preventDefault(), $("#order-form").modal("handleUpdate"), $("#order-type").val($(this).data("type")).change(), "massage" === $(this).data("type") && $("#order-type-massage").val($(this).data("item")).change(), "gift" === $(this).data("type") ? $("#order-type-gift").val($(this).data("item")).change() : void 0
    }), $("#order-form").on("show.bs.modal", function (e) {
        return $(".gift-modal").hide()
    }), $("#order-form").on("hide.bs.modal", function (e) {
        return $(".gift-modal").modal("hide")
    }), $("#order-type").on("change", function () {
        var e;
        return e = $(this).val(), $("#order-btn").attr("disabled", ""), $("#order-price").text(0), "gift" === e ? ($(".gift-field").show(), $('.massage-field, .massage-time-field, .massage-salon-field, #order-length option:not([value=""]), .price-title').hide(), $("#order-type-massage, #order-length, #order-time, #order-salon").val("")) : "massage" === e ? ($(".gift-field, .price-title").hide(), $(".massage-field").show(), $("#order-type-gift").val("")) : ($(".price-title").show(), $('.massage-field, .massage-time-field, .massage-salon-field, .gift-field, #order-length option:not([value=""])').hide(), $("#order-type-massage, #order-length, #order-time, #order-salon, #order-type-gift").val(""))
    }), $("#order-type-massage").on("change", function () {
        var e;
        return "" !== (e = $(this).val()) ? ($("#order-length").val(""), $('#order-length option:not([value=""])').remove(), console.log($("#order-length-proto").find(".massage-" + e)), $("#order-length").append($("#order-length-proto").find(".massage-" + e)), $(".massage-time-field, .massage-salon-field").show(), $("#order-btn").attr("disabled", ""), $("#order-price").text(0)) : void 0
    }), $("#order-type-gift").on("change", function () {
        var e;
        return e = parseInt($(this).find(":selected").data("price")), isNaN(e) && (e = 0), $("#order-price").text(e), 0 < e && "" !== $("#order-name").val() && validatePhone() ? $("#order-btn").removeAttr("disabled") : $("#order-btn").attr("disabled", "")
    }), $("#order-time").on("change", function () {
        var e, o;
        return "" !== $("#order-time").val() && "" !== $("#order-length").val() ? (o = $(this).val(), e = parseInt($("#order-length").find(":selected").data(o)), isNaN(e) && (e = 0), $("#order-price").text(e), 0 < e && "" !== $("#order-name").val() && validatePhone() && "" !== $("#order-salon").val() ? $("#order-btn").removeAttr("disabled") : $("#order-btn").attr("disabled", "")) : ($("#order-btn").attr("disabled", ""), $("#order-price").text(0))
    }), $("#order-length").on("change", function () {
        var e, o;
        return "" !== $("#order-time").val() ? (o = $("#order-time").val(), e = parseInt($(this).find(":selected").data(o)), isNaN(e) && (e = 0), $("#order-price").text(e), 0 < e && "" !== $("#order-name").val() && validatePhone() && "" !== $("#order-salon").val() ? $("#order-btn").removeAttr("disabled") : $("#order-btn").attr("disabled", "")) : ($("#order-btn").attr("disabled", ""), $("#order-price").text(0))
    }), $("#order-salon").on("change", function () {
        var e;
        return "" !== $("#order-salon").val() ? (e = parseInt($("#order-price").text()), isNaN(e) && (e = 0), 0 < e && "" !== $("#order-name").val() && validatePhone() ? $("#order-btn").removeAttr("disabled") : $("#order-btn").attr("disabled", "")) : $("#order-btn").attr("disabled", "")
    }), $("#order-form .person-line :input").on("change keyup input", function () {
        var e;
        return e = parseInt($("#order-price").text()), isNaN(e) && (e = 0), 0 < e && "" !== $("#order-name").val() && validatePhone() && validatePhone() && ("massage" === $("#order-type").val() && "" !== $("#order-salon").val() || "massage" !== $("#order-type").val()) ? $("#order-btn").removeAttr("disabled") : $("#order-btn").attr("disabled", "")
    }), $("#order-form-inner").validate({
        rules: {name: {required: !0, minlength: 2}, phone: {required: !0}},
        submitHandler: function (e) {
            $.ajax({
                url: "/ajax/order",
                type: "POST",
                dataType: "json",
                data: $("#order-form form").serialize(),
                beforeSend: function () {
                    $("#order-form form").stop(!0, !0).slideUp(), $("#order-form .loader").stop(!0, !0).slideDown()
                },
                success: function (e) {
                    gtag("event", "send", {
                        event_category: "order-form",
                        event_action: "button"
                    }), console.log("success gtag"), !0 === e.status ? location.replace(e.link) : ($("#order-form form").stop(!0, !0).slideDown(), $("#order-form .loader").stop(!0, !0).slideUp(), alert(e.msg))
                }
            })
        }
    }), $.stellar.positionProperty.position = {
        setTop: function (e, o, t) {
            e.css("background-position-x", o)
        }, setLeft: function (e, o, t) {
            e.css("background-position-x", o)
        }
    }, $.stellar({
        horizontalScrolling: !1,
        verticalScrolling: !0,
        hideDistantElements: !1,
        parallaxBackgrounds: !0,
        parallaxElements: !0,
        positionProperty: "position"
    })
}), $(window).resize(function () {
    return slider_height()
});
var headerHeight = $("header").outerHeight();
$(window).scroll(function () {
    var e = $(window).scrollTop();
    headerHeight <= e ? ($("body").hasClass("fixed") || ("https://waithai.ua/" != location.href ? 767 <= $(window).width() ? $("body").addClass("fixed").css("padding-top", headerHeight - 95 + "px") : $("body").addClass("fixed").css("padding-top", headerHeight + "px") : $("body").css("padding-top", 0).removeClass("fixed")), $("header").addClass("fixed")) : ($("body").css("padding-top", 0).removeClass("fixed"), $("header").removeClass("fixed"))
}), $(window).on("resize", function () {
    headerHeight = $("header").outerHeight()
});