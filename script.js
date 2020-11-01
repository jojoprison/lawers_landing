$(document).ready(function () {
    var scroll_start = 0;
    var startchange = $(".baton");
    var offset = startchange.offset();

    if (startchange.length) {
        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $("nav").css('background-color', 'rgba(0,0,0,.75)');
            } else {
                $('nav').css('background-color', 'transparent');
            }
        });
    }
});
/*$('.type-it').typeIt({
    strings: ['Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad aspernatur voluptates delectus aliquid facilis! Unde repudiandae ducimus est voluptatem, mollitia necessitatibus vel iusto nostrum voluptate molestias quod illum ipsa distinctio culpa, praesentium aut nobis nulla possimus ea. Quaerat adipisci similique temporibus consequuntur! Sint, error quo. Esse, enim rerum commodi laboriosam soluta a eveniet at, provident impedit corrupti, autem sit.']
});
new TypeIt("#simpleUsage", {
    strings: "This is a simple string.",
    speed: 50,
    waitUntilVisible: true
  }).go();*/
  // object-fit polyfill run
