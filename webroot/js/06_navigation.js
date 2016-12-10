/* ---------------------------------------------------------- ||
|   Class : Navigation                                         |
|   Author : Julien Rousset                                    |
|   For : Portfolio 2017                                       |
|   +++++++++++++++++++++++++++++++++++++++++++++++++++++++++  |
|   Description : Created to navigate into my onepage          |
|   portfolio | include mobile support and scrollable navi-    |
|   gation                                                     |
|| ---------------------------------------------------------- */

function Navigation() {
    "use strict";
    var me = this;
    this.pages = null; // list of pages available in the project
    this.currentPage = null; // coordonate of the current page
    this.animate = null; // status of animation (bool)
    this.mobile = null; // devices (bool)

    /*
    | init
    | paremeter : null
    | return : null
    */

    this.arraySearch = function (table, value) {
        var key, i;
        for (i in table) {
            if (table.hasOwnProperty(i)) {
                if (table[i] === value) {
                    key = i;
                    break;
                }
            }
        }

        return key;
    };

    this.init = function () {
        // --- Initialisation of parameter --- //
        me.pages = {"to-home" : 0, "to-project" : 1, "to-about" : 2, "to-contact" : 3};
        me.currentPage = [0, 0];
        me.animate = false;
        me.mobile = (window.innerHeight < 760) ? true : false;
        // --- Initialisation of Scroll --- //
        // $(document).on('mousewheel', function (event) {
        //     if (!me.animate && !me.mobile) {
        //         if (event.deltaY > 0) {
        //             me.changePage(me.currentPage[0] - 1, true);
        //         } else {
        //             me.changePage(me.currentPage[0] + 1, true);
        //         }
        //     }
        // });
    };

    /*
    | changePage
    | paremeter : idPage : key-name of the page or the id, value
    | return : null
    */

    this.changePage = function (idPage, value) {
        console.log("change page : " + idPage + " value : " + value);
        value = value || false;
        if (value !== false) { idPage = me.arraySearch(me.pages, idPage); }
        if (me.pages[idPage] !== undefined) {
            me.animate = true;
            $("nav").addClass("hide");
            $("body").removeClass("modal-open");
            $("nav li span.active").removeClass("active");
            $("nav li." + idPage + " span").addClass("active");
            var valueTop = me.pages[idPage] * window.innerHeight;
            $('html,body').animate({
                scrollTop : valueTop,
                scrollLeft : 0
            }, 500, function () {
                me.animate = false;
                if (me.mobile) {
                    $("body").removeClass("modal-open");
                    $("nav.active").removeClass("active");
                    me.activateMenuMobileOpen();
                }
                $("nav").removeClass("hide");
            });
            me.currentPage[0] = me.pages[idPage];
            me.currentPage[1] = 0;
        }
    };

    this.changeProject = function (idProject) {
        $("nav").addClass("hide");
        me.animate = true;
        $('html,body').animate({
            scrollTop : window.innerHeight,
            scrollLeft : idProject * window.innerWidth
        }, 500, function () {
            me.animate = false;
            $("nav").removeClass("hide");
        });
        $("body").addClass("modal-open");
        me.currentPage[0] = 1;
        me.currentPage[1] = idProject;
    };

    this.returnProject = function () {
        $("nav").addClass("hide");
        $("body").removeClass("modal-open");
        me.animate = true;
        $('html , body').animate({
            scrollLeft : 0
        }, 500, function () {
            me.animate = false;
            $("nav").removeClass("hide");
        });
        me.currentPage[0] = 1;
        me.currentPage[1] = 0;
    };

    this.activateMenuMobileOpen = function () {
        $('.menu-icon').unbind("click");
        $('nav:not(active) .menu-icon').click(function () {
            $("body").addClass("modal-open");
            $(this).parent().addClass("active");
            me.activateMenuMobileClose();
        });
    };

    this.activateMenuMobileClose = function () {
        $('.menu-icon').unbind("click");
        $('nav .menu-icon').click(function () {
            $("body").removeClass("modal-open");
            $(this).parent().removeClass("active");
            me.activateMenuMobileOpen();
        });
    };
}
