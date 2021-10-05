<?php
    //テーマサポート
    register_nav_menus(); //メニューのサポートを許可
    add_theme_support('title-tag');//タイトルタグのサポートを許可
    add_theme_support( 'custom-background' ); //カスタム背景機能をサポートを許可
    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    //テーマのテキストドメインを指定する
    if ( ! function_exists('hamburger_setup') ) {
        add_action( 'after_setup_theme', 'hamburger_setup' );
        function hamburger_setup(){
            load_theme_textdomain( 'hamburger', get_template_directory() . '/languages' );
        }
    }

    //自分のスタイルシートファイルを クラッシックエディターへスタイリング
    add_editor_style('style.css');

    //CSS や JavaScript の読込
    function hamburger_script() {
        wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1');
        wp_enqueue_style( 'googlefonts', 'https://fonts.gstatic.com', array());
        wp_enqueue_style('googlemap', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array());
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
        wp_enqueue_style('hamburger', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0');
        wp_enqueue_script('sidebar-script', get_template_directory_uri() . '/js/sidebar.js', array(), '1.0.0', true);
        if ( is_single()) : //投稿ページかつpostクラスがあるときにjsファイルを読み込む
            wp_enqueue_script('single-script', get_template_directory_uri() . '/js/single.js', array(), '1.0.0', true);
        endif;
    }
    //wp_enqueue_scriptsの処理の節目でhamburger_scriptを実行
    add_action( 'wp_enqueue_scripts', 'hamburger_script');

    function hamberger_setup_theme() {
        //フィードのリンクの有効化
        add_theme_support( 'automatic-feed-links' );

        //メニューを登録する
        register_nav_menu( 'footer-navigation', 'Footer navigation' );

        //アイキャッチ画像の有効化
        add_theme_support('post-thumbnails');//サムネイル画像のサポートを許可する
        set_post_thumbnail_size(760, 300, true);

        //コンテンツの最大幅の設定
        $GLOBALS['content_width'] = 704;
    }
    add_action('after_setup_theme', 'hamberger_setup_theme');
    
    //サイドバーを登録する
    function hamberger_widgets_init() {
        // Register main sidebar
        register_sidebar( array(
          'name'          => __('Main Sidebar', 'hamburger' ),//サイドバーの名前
          'id'            => 'sidebar-main',//サイドバーのID
          'description'   => __('Add widgets you want to display in sidebar.', 'hamburger'),//サイドバーの説明文
          'before_widget' => '<section id="%1$s" class="widget %2$s">',//ウィジットの前に表示する文字列
          'after_widget'  => '</section>',//ウィジットの後に表示する文字列
          'before_title'  => '<h5 class="widget-title">',//ウィジットのタイトルの前に表示する文字列
          'after_title'   => '</h5>',//ウィジットのタイトルの後に表示する文字列
        ) );
      }
    add_action( 'widgets_init', 'hamberger_widgets_init' );

    /*
    * Filter the archive title to remove the label of the title.
    */
    function whitesnow_get_the_archive_title( $title ) {
        if ( is_category() ) {
        $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
        } elseif ( is_month() ) {
        $title = get_the_date( 'Y年n月' );
        }
    
        return $title;
    }
    add_filter( 'get_the_archive_title', 'whitesnow_get_the_archive_title' );

    //検索結果のテンプレートを複数用意するための設定
    add_filter('template_include','custom_search_template');
    function custom_search_template($template){
    if ( is_search() ){
        $post_types = get_query_var('post_type');
        foreach ( (array) $post_types as $post_type )
        $templates[] = "search-{$post_type}.php";
        $templates[] = 'search.php';
        $template = get_query_template('search',$templates);
    }
    return $template;
    }

    //body開始タグのすぐあとにソースコードを挿入するための設定
    add_action( 'wp_body_open', function() {
        ?>
        <!--ここから挿入したいソースコードを記入-->
        
        <!--ここまで挿入したいソースコードを記入-->
        <?php
    });

    //Custom CSS Widget
    add_action( 'admin_menu', 'custom_css_hooks' );
    add_action( 'save_post', 'save_custom_css' );
    add_action( 'wp_head','insert_custom_css' );
    function custom_css_hooks() {
        add_meta_box( 'custom_css', 'Custom CSS', 'custom_css_input', 'post', 'normal', 'high' );
        add_meta_box( 'custom_css', 'Custom CSS', 'custom_css_input', 'page', 'normal', 'high' );
    }
    function custom_css_input() {
        global $post;
        echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
        echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css',true).'</textarea>';
    }
    function save_custom_css($post_id) {
        if ( !wp_verify_nonce( $_POST['custom_css_noncename'], 'custom-css' ) ) return $post_id;
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) return $post_id;
        $custom_css = $_POST['custom_css'];
        update_post_meta( $post_id, '_custom_css', $custom_css );
    }
    function insert_custom_css() {
        if ( is_page() || is_single() ) {
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                echo '<style type="text/css">' . get_post_meta(get_the_ID(), '_custom_css', true) . '</style>';
            endwhile; endif;
        rewind_posts();
        }
    }
    //Custom JS Widget
    add_action( 'admin_menu', 'custom_js_hooks' );
    add_action( 'save_post', 'save_custom_js' );
    add_action( 'wp_head','insert_custom_js' );
    function custom_js_hooks() {
        add_meta_box( 'custom_js', 'Custom JS', 'custom_js_input', 'post', 'normal', 'high' );
        add_meta_box( 'custom_js', 'Custom JS', 'custom_js_input', 'page', 'normal', 'high' );
    }
    function custom_js_input() {
        global $post;
        echo '<input type="hidden" name="custom_js_noncename" id="custom_js_noncename" value="'.wp_create_nonce('custom-js').'" />';
        echo '<textarea name="custom_js" id="custom_js" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_js',true).'</textarea>';
    }
    function save_custom_js($post_id) {
        if (!wp_verify_nonce($_POST['custom_js_noncename'], 'custom-js')) return $post_id;
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
                $custom_js = $_POST['custom_js'];
            update_post_meta($post_id, '_custom_js', $custom_js);
    }
    function insert_custom_js() {
        if ( is_page() || is_single() ) {
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                echo '<script type="text/javascript">' . get_post_meta(get_the_ID(), '_custom_js', true) . '</script>';
            endwhile; endif;
        rewind_posts();
        }
    }