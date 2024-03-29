tinyMCE.init({
    file_browser_callback: function (e, t, i, n) {
        return tinyMCE.activeEditor.windowManager.open({
            file: "/js/tinymce/plugins/kcfinder/browse.php?opener=tinymce4&lang=ru&field=" + e + "&type=" + i,
            title: "KCFinder",
            width: 700,
            height: 500,
            inline: !0,
            close_previous: !1
        }, {window: n, input: e}), !1
    },
    mode: "textareas",
    elements: "absurls",
    theme: "modern",
    plugins: ["advlist link image lists charmap preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern"],
    toolbar1: "newdocument | cut copy paste | searchreplace | alignleft aligncenter alignright alignjustify | bold italic underline strikethrough | styleselect fontsizeselect | forecolor backcolor | bullist numlist | outdent indent blockquote | undo redo | table | hr removeformat | subscript superscript | charmap emoticons | link unlink anchor image media code | visualblocks nonbreaking | fullscreen",
    menubar: !1,
    toolbar_items_size: "middle",
    image_advtab: !0,
    language: "ru",
    selector: ".tinymce",
    external_image_list_url: "admin/tiny_mce_images.php",
    height: 300,
    relative_urls: !1
});