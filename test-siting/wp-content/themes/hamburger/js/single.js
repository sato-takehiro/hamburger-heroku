jQuery(function(){ //投稿ページであるsingle.phpで、投稿の見た目を整えるためにクラス名を付与する関数
    
    if (jQuery('.post p').length) {//通常
        jQuery('.post p').addClass('u-mt312vw u-mt72vw-md u-mt8vw-sm u-mt0');
    }
    if (jQuery('.post h1,.post h2,.post h3,.post h4,.post h5,.post h6').length) {//通常
        jQuery('.post h1,.post h2,.post h3,.post h4,.post h5,.post h6').addClass('u-mt312vw u-mt72vw-md u-mt8vw-sm');
    }
    if (jQuery('.post .wp-block-quote').length) {//引用があるとき
        jQuery('.post .wp-block-quote').addClass('c-blockquote u-mt312vw u-mt72vw-md u-mt8vw-sm');
        jQuery('.post .wp-block-quote p').removeClass('u-mt312vw u-mt72vw-md u-mt8vw-sm u-mt0');
        jQuery('.post .wp-block-quote cite').addClass('c-blockquote__source');
    }
    if (jQuery('.post .wp-block-image').length) {//画像があるとき
        jQuery('.post .wp-block-image').addClass('p-media p-media--only u-mt312vw u-mt72vw-md u-mt8vw-sm u-mt0');
        jQuery('.post .wp-block-image img').addClass('p-media__img');
    }
    if (jQuery('.wp-block-code').length) { //ブロックコードがあるとき
        jQuery('.wp-block-code code').addClass('c-code');
        if (jQuery('.wp-block-group__inner-container > .wp-block-code').length) { //ブロックコードがある要素の直下にあるとき、
            jQuery('.wp-block-group__inner-container > .wp-block-code').addClass('c-code__wrapper u-mt312vw u-mt72vw-md u-mt8vw-sm');
        }
    }
    if (jQuery('.wp-block-table').length) {  //テーブルがあるとき
        jQuery('.wp-block-table').addClass('u-mt312vw u-mt72vw-md u-mt8vw-sm');
    }
})