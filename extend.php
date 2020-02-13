<?php
 /*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 use Flarum\Extend;
 use Flarum\Frontend\Document;

 return [
    // Register extenders here to customize your forum!
     (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '
            <script src="https://cdn.jsdelivr.net/gh/Littlegolden/CDN@1.1/scrollTop/jquery.js?ver=1.12.4"></script>
            <script src="https://cdn.jsdelivr.net/gh/Littlegolden/CDN@1.1/scrollTop/menu.js?ver=4.9.9"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Littlegolden/CDN@1.1/scrollTop/css.css?ver=20200128">

            <a href="#" class="scroll-up" style="display: none;"><i class="fa fa-chevron-up"></i> </a>
            ';
        })
];
