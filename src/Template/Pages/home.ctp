<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'Julien Rousset - Web Dev Back & Front';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <meta property="og:url" content="http://julien-rousset.fr/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Julien Rousset - Web Dev - Back & Front" />
    <meta property="og:description" content="Currently looking for an internship of six month" />
    <meta property="og:image" content="http://julien-rousset.fr/img/share.jpg"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <?= $this->Html->meta('apple-touch-icon','img/favicon/apple-icon-57x57.png', ['sizes' => '57x57','type' => 'icon']); ?>
    <?= $this->Html->meta('apple-touch-icon','img/favicon/apple-icon-60x60.png', ['sizes' => '60x60','type' => 'icon']); ?>
    <?= $this->Html->meta('apple-touch-icon','img/favicon/apple-icon-72x72.png', ['sizes' => '72x72','type' => 'icon']); ?>
    <?= $this->Html->meta('apple-touch-icon','img/favicon/apple-icon-76x76.png', ['sizes' => '76x76','type' => 'icon']); ?>
    <?= $this->Html->meta('apple-touch-icon','img/favicon/apple-icon-114x114.png', ['sizes' => '114x114','type' => 'icon']); ?>
    <?= $this->Html->meta('apple-touch-icon','img/favicon/apple-icon-120x120.png', ['sizes' => '120x120','type' => 'icon']); ?>
    <?= $this->Html->meta('apple-touch-icon','img/favicon/apple-icon-144x144.png', ['sizes' => '144x144','type' => 'icon']); ?>
    <?= $this->Html->meta('apple-touch-icon','img/favicon/apple-icon-152x152.png', ['sizes' => '152x152','type' => 'icon']); ?>
    <?= $this->Html->meta('apple-touch-icon','img/favicon/apple-icon-180x180.png', ['sizes' => '180x180','type' => 'icon']); ?>
    <?= $this->Html->meta('icon','img/favicon/android-icon-144x144.png', ['sizes' => '144x144', 'type' => 'image/png']); ?>
    <?= $this->Html->meta('icon','img/favicon/android-icon-96x96.png', ['sizes' => '96x96', 'type' => 'image/png']); ?>
    <?= $this->Html->meta('icon','img/favicon/android-icon-48x48.png', ['sizes' => '48x48', 'type' => 'image/png']); ?>
    <?= $this->Html->meta('icon','img/favicon/android-icon-36x36.png', ['sizes' => '36x36', 'type' => 'image/png']); ?>
    <?= $this->Html->css('master.css') ?>
</head>
<body>
    <div id="loader" class="loader">
        <div id="percent" class="percentage">0%</div>
        <div class="panel panel-left">
            <div class="border"></div>
        </div>
        <div class="panel panel-right">
            <div class="border"></div>
        </div>
    </div>
    <nav>
        <div class="menu-icon"></div>
        <ul>
            <li class="to-home"><span class="number active">_00</span>.HOME</li>
            <li class="to-project"><span class="number">_01</span>.WORKS</li>
            <li class="to-about"><span class="number">_02</span>.ABOUT</li>
            <li class="to-contact"><span class="number">_03</span>.CONTACT</li>
        </ul>
    </nav>
    <div id="home" class="content first">
        <div class="border-bellow">
            <div class="main-title">
                <h1>
                    Julien Rousset
                </h1>
                <span class="subtitle">Web Dev - Front & Back</span>
                <svg width="575px" height="196px" id="border-main-title"></svg>
                <svg version="1.1" id="border" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="575px" height="196.001px"
                     viewBox="0 0 575 196.001" style="enable-background:new 0 0 575 196.001;" xml:space="preserve">
                    <path id="path1" class="path" fill="none" stroke="#45BFAD" stroke-width="12" stroke-miterlimit="10" d="M199.895,182.877 14.119,182.877
                        13.333,12.705 10.115,8.342 14.119,5.887 570.594,5.887 570.594,182.877 568.596,186.161 564.897,182.877 368.895,182.877 	"/>
                    <path id="path2" class="path" fill="none" stroke="#000000" stroke-width="12" stroke-miterlimit="10" d="M199.895,189.695 7.301,189.695
                        7.301,12.705 563.776,12.705 563.776,182.877 563.776,189.695 369.895,189.695"/>
                </svg>
            </div>
            <div class="event-alert text">
                Currently looking for an <span class="bold">internship of six month</span> (could be anywhere in the world)
                Back and/or Front Web Developpement (<span class="bold">WebGL</span> and <span class="bold">Three.js</span> would be the DREAM)
            </div>
            <div class="ctn-resume">
                <?= $this->Html->link($this->Html->image("download.png").' Resume',
                "/documents/CV_JULIEN_ROUSSET.pdf",['escape' => false, 'target' => '_blank']);
                ?>
            </div>
            <div id="arrow-bottom" class="arrow-bottom">
                <img src="img/arrow_bottom.png" alt="" />
            </div>
        </div>
    </div>
    <div id="project" class="content">
        <div class="border-bellow">
            <div id="arrow-top" class="arrow-top">
                <img src="img/arrow_top.png" alt="" />
            </div>
            <div class="ctn-projects">
                <?php foreach($projects as $project) { ?>
                    <div class="ctn-project">
                        <div class="project">
                            <?= $this->Html->link($this->Html->image('project/'.$project['img_min']),
                            ['controller' => 'Projects', 'action' => 'view',$project['slug']],['escape' => false]); ?>
                            <p class="mobile"> - <?= $project['title'] ?> - </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div id="about" class="content">
        <div class="border-bellow">
            <div class="at-pic mobile">
                <img src="img/me.jpg" alt="" />
            </div>
            <div class="about">
                <div class="about-top">
                    <div class="at-content">
                        <h2>Hi, It's me, Julien</h2>
                        <p class="text">
                            I’m a 21 yo <span class="bold">web developper</span> and if by any chance you’re interested in taking in a <span class="bold">trainee for 6 month</span> (April to September 2017) i’ll be pleased if you <span id="to-contact" class="like-link">contact me</span> <br/>
                            I’ve started my web learning during my first diploma (DUT MMI - Nancy, France) and improved it at <a href="http://ingenieur-imac.fr/" target="_blank" alt="imac school">IMAC Engeneering School</a> (Paris, France). <br/>
                        </p>
                    </div>
                    <div class="at-content image">
                        <?= $this->Html->image('/img/about/tennis.png'); ?>
                        <?= $this->Html->image('/img/about/pizza.png'); ?>
                        <?= $this->Html->image('/img/about/beer.png'); ?>
                        <?= $this->Html->image('/img/about/guitar.png'); ?>
                        <?= $this->Html->image('/img/about/gameboy.png'); ?>
                    </div>
                </div>
                <div class="about-bottom">
                    <div class="ab-content">
                        <h2>Things I know</h2>
                        <ul class="tag">
                            <li>Laravel</li>
                            <li>CakePHP</li>
                            <li>AngularJS</li>
                            <li>VueJS</li>
                            <li>Responsive Design</li>
                            <li>Object Programming</li>
                            <li>Git</li>
                            <li>Agile software development</li>
                            <li>Photoshop</li>
                            <li>Illustrator</li>
                            <li>InDesign</li>
                        </ul>
                    </div>
                    <div class="ab-content">
                        <h2>Future Work</h2>
                        <p class="text">
                            As it’s the future of web-programming I would like to do an internship working on <span class="bold">WebGL</span> (with Three.js and tools like that). <span class="bold">Virtual Reality</span> is amazing and this is what i want to do for the years to come
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="content">
        <div class="border-bellow">
            <div class="ct-content">
                <div class="replace-form">
                    <p><a href="mailto:julien.rousset01@gmail.com">julien.rousset01[at]gmail.com</a></p>
                    <p><a href="tel:+33608957135">(+33)6.08.95.71.35</p></a>
                    <p>Paris</p>
                    <div class="icon_contact">
                        <a href="https://twitter.com/JulienRst" target="_blank"><img src="img/icon_twitter.png" alt=""></a>
                        <a href="https://github.com/JulienRst" target="_blank"><img src="img/icon_github.png" alt=""></a>
                        <a href="https://fr.linkedin.com/in/julien-rousset-75a6a1b4" target="_blank"><img src="img/icon_linkedin.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="inner-map">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBajuFJwFQdA8eYZzPjMVk5B__ywED97vw'></script>
                    <div style='overflow:hidden;height:100%;width:100%;'>
                        <div id='gmap_canvas' style='height:100%;width:100%;'></div>
                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                    </div>
                    <script type='text/javascript'>
                        function init_map(){
                            var myOptions = {
                                zoom:12,
                                center:new google.maps.LatLng(48.856614,2.3522219000000177),
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                disableDefaultUI: true
                            };
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                    <div class="ctn-border">
                        <div class="border-bot"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Html->script("master"); ?>
</body>
</html>
