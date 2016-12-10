console.log("Starting Queue");

var i, borders, panels, percent, queue = new createjs.LoadQueue(), app;

function handleComplete() {
    "use strict";
    panels = document.getElementsByClassName('panel');
    panels[0].classList.add('disband');
    panels[1].classList.add('disband');
    percent.classList.add('faded');
    var app = new Portfolio();
    app.init();
    app.start();
    setTimeout(function () {
        var loader = document.getElementById('loader');
        loader.parentNode.removeChild(loader);
    }, 2000);
}

function handleFileLoad() {
    "use strict";
    percent = document.getElementById('percent');
    percent.innerHTML = Math.round(queue.progress * 100) + "%";
    borders = document.getElementsByClassName('border');
    borders[0].style.height = Math.round(queue.progress * 100) + "%";
    borders[1].style.height = Math.round(queue.progress * 100) + "%";
    borders[0].style.top = 50 - Math.round(queue.progress * 100) / 2 + "%";
    borders[1].style.top = 50 - Math.round(queue.progress * 100) / 2 + "%";
}

var listOfFileToAdd = [
    "fonts/BebasNeue/BebasNeue.eot",
    "fonts/BebasNeue/BebasNeue.svg",
    "fonts/BebasNeue/BebasNeue.ttf",
    "fonts/BebasNeue/BebasNeue.woff",
    "fonts/BebasNeue/BebasNeue.woff2",
    "fonts/BebasNeueLight/BebasNeueLight.eot",
    "fonts/BebasNeueLight/BebasNeueLight.svg",
    "fonts/BebasNeueLight/BebasNeueLight.ttf",
    "fonts/BebasNeueLight/BebasNeueLight.woff",
    "fonts/BebasNeueLight/BebasNeueLight.woff2",
    "fonts/OpenSans/OpenSans-Regular.eot",
    "fonts/OpenSans/OpenSans.svg",
    "fonts/OpenSans/OpenSans.ttf",
    "fonts/OpenSans/OpenSans.woff",
    "fonts/OpenSans/OpenSans-Regular.woff2",
    "fonts/Open-Sans-LightItalic/OpenSans-LightItalic.eot",
    "fonts/Open-Sans-LightItalic/OpenSansLight-Italic.svg",
    "fonts/Open-Sans-LightItalic/OpenSansLight-Italic.ttf",
    "fonts/Open-Sans-LightItalic/OpenSansLight-Italic.woff",
    "fonts/Open-Sans-LightItalic/OpenSans-LightItalic.woff2",
    "img/arrow_bottom.png",
    "img/arrow_left.png",
    "img/arrow_right.png",
    "img/arrow_top.png",
    "img/icon_linkedin.png",
    "img/icon_twitter.png",
    "img/icon_github.png",
    "img/me.jpg",
    "img/menu_close.png",
    "img/menu_open.png",
    "img/project/imac.png",
    "img/project/imac-full.png",
    "img/project/imac-devices.png",
    "img/project/thebarbersgarden.png",
    "img/project/thebarbersgarden-full.png",
    "img/project/thebarbersgarden-devices.png"
];

queue.on("fileload", handleFileLoad, this);
queue.on("complete", handleComplete, this);

for (i in listOfFileToAdd) {
    if (listOfFileToAdd.hasOwnProperty(i)) {
        queue.loadFile(listOfFileToAdd[i]);
    }
}
