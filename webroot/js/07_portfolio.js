function Portfolio() {
    "use strict";
    var me = this;
    this.navigation = new Navigation();
    this.iscroll = null;

    this.init = function () {
        me.navigation.init();
        window.onresize = function () {
            document.body.scrollLeft = me.navigation.currentPage[1] * window.innerWidth;
            document.body.scrollTop = me.navigation.currentPage[0] * window.innerHeight;
            me.mobile = (window.innerHeight < 760) ? true : false;
        };
    };

    this.activateMenuLoop = function (item, menuItem) {
        var dest = menuItem[item].classList[0];
        menuItem[item].addEventListener("click", function () {me.navigation.changePage(dest); });
    };

    this.activateProjectLoop = function (item, miniaProject) {
        miniaProject[item].addEventListener("click", function () {me.navigation.changeProject(item + 1); });
    };

    this.start = function () {
        var i, menuItem, path;

        // Transition between HOME AND PROJECT
        document.getElementById('arrow-bottom').addEventListener('click', function () {
            me.navigation.changePage("to-project");
        });

        document.getElementById('arrow-top').addEventListener('click', function () {
            me.navigation.changePage("to-home");
        });

        //To contact
        document.getElementById('to-contact').addEventListener('click', function () {
            me.navigation.changePage('to-contact');
        });

        // ACTIVATION MENU ::
        menuItem = document.getElementsByTagName("li");
        for (i = 0; i < menuItem.length; i += 1) {
            me.activateMenuLoop(i, menuItem);
        }

        // ACTIVATION MENU :: MOBILE
        me.navigation.activateMenuMobileOpen();

        // SVG //
        console.log("Excute");
        path = document.querySelectorAll('.path');

        path[0].style.strokeDashoffset = path[0].getTotalLength();
        path[1].style.strokeDashoffset = path[1].getTotalLength();
        path[0].style.strokeDasharray = path[0].getTotalLength();
        path[1].style.strokeDasharray = path[1].getTotalLength();

        path[0].style.animation = "dash 2s linear forwards";
        path[1].style.animation = "dash 2s linear forwards";
    };
}
