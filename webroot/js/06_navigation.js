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

        // --- Initialisation of selector --- //

        me.nav = document.querySelector('nav');

        //Place current active on nav
        me.currentPage[0] = Math.round(window.scrollY / window.innerHeight);
        document.querySelector('span.active').classList.remove('active');
        document.querySelector('li.' + me.arraySearch(me.pages, me.currentPage[0]) + ' span').classList.add('active');
    };

    /*
    | changePage
    | paremeter : idPage : key-name of the page or the id, value
    | return : null
    */

    this.changePage = function (idPage, value) {
        value = value || false;
        if (value !== false) { idPage = me.arraySearch(me.pages, idPage); }
        if (me.pages[idPage] !== undefined) {
            me.animate = true;
            me.nav.classList.add('hide');
            document.querySelector('nav li span.active').classList.remove('active');
            document.querySelector('nav li.' + idPage + ' span').classList.add('active');
            var valueTop = me.pages[idPage] * window.innerHeight;
            TweenLite.to(window, 0.5, {
                scrollTo: valueTop,
                onComplete: function () {
                    me.animate = false;
                    if (me.mobile && me.nav.classList.contains('active')) {
                        document.querySelector('nav.active').classList.remove("active");
                        me.activateMenuMobileOpen();
                    }
                    me.nav.classList.remove('hide');
                }
            });
            me.currentPage[0] = me.pages[idPage];
            me.currentPage[1] = 0;
        }
    };

    this.innerActivateMenuMobileOpen = function () {
        me.nav.classList.add("active");
        me.activateMenuMobileClose();
    };

    this.activateMenuMobileOpen = function () {
        document.querySelector('.menu-icon').removeEventListener('click', me.innerActivateMenuMobileClose);
        document.querySelector('.menu-icon').addEventListener('click', me.innerActivateMenuMobileOpen);
    };

    this.innerActivateMenuMobileClose = function () {
        me.nav.classList.remove("active");
        me.activateMenuMobileOpen();
    };

    this.activateMenuMobileClose = function () {
        document.querySelector('.menu-icon').removeEventListener('click', me.innerActivateMenuMobileOpen);
        document.querySelector('.menu-icon').addEventListener('click', me.innerActivateMenuMobileClose);
    };
}
