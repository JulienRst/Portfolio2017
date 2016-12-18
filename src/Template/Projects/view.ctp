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

    <div class="view-project content">
        <div class="border-bellow">
            <div class="arrow_left">
                <?= $this->Html->link($this->Html->image('arrow_left.png'),
                ['controller' => 'Pages', 'action' => 'home', '#' => 'project'],['escape' => false]);
                ?>
            </div>
            <div class="vp-content">
                <div class="top-content">
                    <h2><?= $project["title"] ?></h2>
                    <div class="go-to-project">
                        <a target="_blank" href="http://julien-rousset.fr/thebarbersgarden/"><button>SEE PROJECT</button></a>
                    </div>
                </div>
                <div class="subtitle"><?= $project["desc_min"] ?></div>
                <div class="techno"><?= $project["desc_main"] ?></div>
                <?php foreach ($project["contents"] as $content) {
                    if ($content["type"] === "text") {
                        echo "<p class='text'>".$content["content"]."</p>";
                    } else if ($content["type"] === "img") {
                        echo $this->Html->image('project/'.$content["content"], [
                            "class" => "img-devices"
                        ]);
                    }
                } ?>
                <div class="bottom">
                    <div class="c-d">
                        CONCIEVED AND DEVELOPED WITH
                        <div class="author">
                            <?php
                            $length = count($project["partners"]);
                            foreach ($project["partners"] as $i => $partner) {
                                echo $this->Html->link($partner["name"], $partner["website"], ["target" => "_blank"]);
                                if($i !== $length -1) echo ", ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vp-img">
                <div class="inner-img">
                    <?= $this->Html->image('project/'.$project["img_main"]); ?>
                    <div class="white-border"><div class="true-border"></div></div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->Html->script("master"); ?>
</body>
</html>
