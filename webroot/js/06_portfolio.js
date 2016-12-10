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
        var i, j, l, menuItem, miniaProject, path, length;
        window.scrollTo(0, 0);

        // Transition between HOME AND PROJECT
        $("#arrow-bottom").on("click", function () {
            me.navigation.changePage("to-project");
        });
        $("#arrow-top").on("click", function () {
            me.navigation.changePage("to-home");
        });

        // ACTIVATION MENU ::
        menuItem = document.getElementsByTagName("li");
        for (i = 0; i < menuItem.length; i += 1) {
            me.activateMenuLoop(i, menuItem);
        }

        // ACTIVATION MENU :: MOBILE
        me.navigation.activateMenuMobileOpen();


        //ACTIVATION PROJECT ::
            //Active miniature project -> big project
        miniaProject = document.getElementsByClassName("project");
        for (j = 0; j < miniaProject.length; j += 1) {
            me.activateProjectLoop(j, miniaProject);
        }

        $(".arrow_left").click(function () {me.navigation.returnProject(); });

        // SVG //
        path = $('.path');
        for (l = 0; l < path.length; l += 1) {
            length = path[l].getTotalLength();
            $(path[l]).css('stroke-dashoffset', length);
            $(path[l]).css('stroke-dasharray', length);
        }

        $('svg').addClass('active');
        $('.path').animate({
            "stroke-dashoffset" : 0
        }, 2000);
    };
}
