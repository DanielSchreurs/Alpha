(
    function () {
        $(function () {
            $(".show-search").click(function () {
                $('.search-form').toggleClass("search-form--open");
            });

            $('.carte-container').click(function () {
                $('.carte-container iframe').css("pointer-events", "auto");
            });

            $('.open_nav').on("click",function(){
                event.preventDefault();
                $(this).toggleClass("active");
                $('.menu-container').toggleClass("menu-container--open");
            });
        });
    }
)();
