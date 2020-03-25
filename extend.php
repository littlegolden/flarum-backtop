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
            $document->foot[] = '
            <!-- BackTop -->
            <script src="https://cdn.jsdelivr.net/gh/Littlegolden/CDN@1.1/scrollTop/menu.js?ver=4.9.9"></script>
            <style>
				.scroll-up {
				    background-color: #f8504b; /*初始颜色*/
				    color:#ffffff; /*文字白色*/
				    transition: transform 0.5s; /*设置效果出现、消失过渡时间*/
				}
				
				.scroll-up:hover, .scroll-up:focus { /*悬浮、点击样式*/
				    background-color: #f8504b;
				    color:#ffffff;
				    transform: scale(1.1,1.1); /*缩放*/
				    transition:all 100ms; /*动画过渡*/
				}
				
				.scroll-up {
				    border-radius: 50px; /*圆角*/
				    bottom: 70px; /*距离网页底部*/
				    padding: 3px;
				    display: none;
				    height: 50px; /*圆高度*/
				    opacity: 1;
				    position: fixed;
				    right: 70px; /*距离网页右边*/
				    text-align: center; /*文本居中*/
				    width: 50px; /*圆宽度*/
				    overflow: hidden; /*属性规定当内容溢出元素框时，修剪多余内容*/
				    z-index: 9999; /*设置元素的堆叠顺序（在网页的图层顺序），拥有更高堆叠顺序的元素总是会处于堆叠顺序较低的元素的前面*/
				    line-height: 2.5;
				    color: #ffffff;
				    box-shadow: 0 2px 4px 0 rgba(0,0,0,.3);
				}
				@media (max-width: 768px){
				    .scroll-up {
				        bottom:60px;
				        right:10px;
				        width:40px;
				        height:40px;
				    }
				}
			</style>
            <a href="#" class="scroll-up" style="display: none;">
                <i class="fa fa-chevron-up"></i>
            </a>
            <!-- BackTop -->
            ';
        })
];
