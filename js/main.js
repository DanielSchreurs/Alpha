(
    function () {

        jQuery(function () {
            jQuery(".show-search").click(function () {
                jQuery('.search-form').toggleClass("search-form--open");
            });

            jQuery('.carte-container').click(function () {
                jQuery('.carte-container iframe').css("pointer-events", "auto");
            });

            jQuery('.open_nav').on("click",function(){
                event.preventDefault();
                jQuery(this).toggleClass("active");
                jQuery('.menu-container').toggleClass("menu-container--open");
            });
        });
    }
)();
