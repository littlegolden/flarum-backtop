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
    (new Extend\Frontend('forum'))
    ->css(__DIR__ . '/resources/less/extension.less'),
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->foot[] = '
            <!-- BackTop -->
            <script src="https://cdn.jsdelivr.net/gh/Littlegolden/CDN@1.1/scrollTop/menu.js?ver=4.9.9"></script>
            <a href="#" class="scroll-up" style="display: none;">
                <i class="fa fa-chevron-up"></i>
            </a>
            <!-- BackTop -->
            ';
        })
];
