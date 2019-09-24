<?php

add_action( 'wp_enqueue_scripts', 'naveka_styles' );
add_action( 'wp_enqueue_scripts', 'naveka_scripts' );

function naveka_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/libs/slick/slick.min.js', array('jquery') );
	wp_enqueue_script( 'magnific', get_template_directory_uri() . '/libs/magnific/jquery.magnific-popup.min.js', array('jquery') );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery') );

}

function naveka_styles() {
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/libs/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/libs/slick/slick-theme.css' );
	wp_enqueue_style( 'magnific', get_template_directory_uri() . '/libs/magnific/magnific-popup.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'main', get_stylesheet_uri() );
}

add_theme_support( 'custom-logo' );


add_action('customize_register', 'dco_customize_register');
 
function dco_customize_register($wp_customize) {
$wp_customize->add_section('about_company', array(
    'title' => 'О компании',
    'priority' => 1,
));
$company_phone = 'company_phone';
$company_mail = 'company_mail';
$company_vk = 'company_vk';
$company_insta = 'company_insta';
$company_copy = 'company_copy';

$wp_customize->add_setting($company_phone, array(
    'default' => '+79811094118',
    'sanitize_callback' => 'sanitize_textarea_field',
    'transport' => 'postMessage'
));
$wp_customize->add_setting($company_mail, array(
    'default' => 'na.veka.812@gmail.com',
    'sanitize_callback' => 'sanitize_textarea_field',
    'transport' => 'postMessage'
));
$wp_customize->add_setting($company_vk, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
    'transport' => 'postMessage'
));
$wp_customize->add_setting($company_insta, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
    'transport' => 'postMessage'
));
$wp_customize->add_setting($company_copy, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
    'transport' => 'postMessage'
));


$wp_customize->add_control($company_phone, array(
    'section' => 'about_company',
    'type' => 'textarea',
    'label' => 'Телефон',
));
$wp_customize->add_control($company_mail, array(
    'section' => 'about_company',
    'type' => 'textarea',
    'label' => 'E-mail',
));
$wp_customize->add_control($company_vk, array(
    'section' => 'about_company',
    'type' => 'textarea',
    'label' => 'VK',
));
$wp_customize->add_control($company_insta, array(
    'section' => 'about_company',
    'type' => 'textarea',
    'label' => 'Intagram',
));
$wp_customize->add_control($company_copy, array(
    'section' => 'about_company',
    'type' => 'textarea',
    'label' => 'Copyright',
));

$wp_customize->selective_refresh->add_partial($company_phone, array(
    'selector' => '.phone',
    'render_callback' => function() use ($company_phone) {
        return nl2br(esc_html(get_theme_mod($company_phone)));
    }
));
$wp_customize->selective_refresh->add_partial($company_mail, array(
    'selector' => '.mail',
    'render_callback' => function() use ($company_mail) {
        return nl2br(esc_html(get_theme_mod($company_mail)));
    }
));
$wp_customize->selective_refresh->add_partial($company_vk, array(
    'selector' => '.vk',
    'render_callback' => function() use ($company_vk) {
        return nl2br(esc_html(get_theme_mod($company_vk)));
    }
));
$wp_customize->selective_refresh->add_partial($company_insta, array(
    'selector' => '.insta',
    'render_callback' => function() use ($company_insta) {
        return nl2br(esc_html(get_theme_mod($company_insta)));
    }
));
$wp_customize->selective_refresh->add_partial($company_copy, array(
    'selector' => '.copyright',
    'render_callback' => function() use ($company_copy) {
        return nl2br(esc_html(get_theme_mod($company_copy)));
    }
));

}

add_action('init', 'furniture_post_type');
function furniture_post_type(){

    register_taxonomy('category_furniture', array('furniture'), array(
        'label'                 => 'Категории', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Категории',
            'singular_name'     => 'Категория',
            'search_items'      => 'Искать категории',
            'all_items'         => 'Все категории',
            'view_item '        => 'Просмотреть категории',
            'parent_item'       => 'Родительская категория',
            'parent_item_colon' => 'Родительская категория:',
            'edit_item'         => 'Ред. категорию',
            'update_item'       => 'Обновить категорию',
            'add_new_item'      => 'Добавить новую категорию',
            'new_item_name'     => 'Новая категория',
            'menu_name'         => 'Категория',
        ),
        'description'           => 'Рубрики для категорий', // описание таксономии
        'public'                => true,
        'show_in_nav_menus'     => true, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => false, // равен аргументу show_ui
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'doors', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false),
        'show_admin_column'     => true,
    ) );

    register_post_type('furniture', array(
        'labels'             => array(
            'name'               => 'Мебель', // Основное название типа записи
            'singular_name'      => 'Мебель',
            'add_new'            => 'Добавить новую',
            'add_new_item'       => 'Добавить новую мебель',
            'edit_item'          => 'Редактировать мебель',
            'new_item'           => 'Новая мебель',
            'view_item'          => 'Посмотреть мебель',
            'search_items'       => 'Найти мебель',
            'not_found'          =>  'Мебели не найдено',
            'not_found_in_trash' => 'В корзине мебели не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Мебель'

          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-cart',
        'supports'           => array('title','editor')
    ) );
}


add_action('init', 'orders_post_type');
function orders_post_type(){
    register_post_type('orders', array(
        'labels'             => array(
            'name'               => 'Заказы', // Основное название типа записи
            'singular_name'      => 'Заказ',
            'add_new'            => 'Добавить новую',
            'add_new_item'       => 'Добавить новый заказ',
            'edit_item'          => 'Редактировать заказы',
            'new_item'           => 'Новый заказ',
            'view_item'          => 'Посмотреть заказы',
            'search_items'       => 'Найти заказы',
            'not_found'          =>  'Заказов не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Заказы'

          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-email',
        'supports'           => array('title','editor')
    ) );
}

add_action('init', 'reviews_post_type');
function reviews_post_type(){
    register_post_type('reviews', array(
        'labels'             => array(
            'name'               => 'Отзывы', // Основное название типа записи
            'singular_name'      => 'Отзывы',
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый отзыв',
            'edit_item'          => 'Редактировать отзывы',
            'new_item'           => 'Новый отзыв',
            'view_item'          => 'Посмотреть отзывы',
            'search_items'       => 'Найти отзывы',
            'not_found'          =>  'Отзывов не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Отзывы'

          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array('title','editor')
    ) );
}

add_action( 'admin_post_make_order','make_order_callback' );
function make_order_callback() {
    $name = trim($_POST["name"]);
    $orderTitle = trim($_POST["item"]) . " - " . $name;
    $phone = trim($_POST["phone"]);
    $mail = trim($_POST["mail"]);
    $description = trim($_POST["order-text"]);
    $post_data = array(
        'post_title'    => $orderTitle,
        'post_content'  => $description,
        'post_type'     => 'orders',
        'post_status'   => 'publish',
        'meta_input'     => array( 'fio'=>$name, 'phone' => $phone, 'mail' => $mail ),
    );
    $post_id = wp_insert_post( wp_slash($post_data) );
}

add_action( 'admin_post_make_ind_order','make_ind_order_callback' );
function make_ind_order_callback() {
    $name = trim($_POST["name"]);
    $orderTitle = "Индивидуальный заказ - " . $name;
    $phone = trim($_POST["phone"]);
    $mail = trim($_POST["mail"]);
    $description = trim($_POST["fbinfo"]);
    $post_data = array(
        'post_title'    => $orderTitle,
        'post_content'  => $description,
        'post_type'     => 'orders',
        'post_status'   => 'publish',
        'meta_input'     => array( 'fio'=>$name, 'phone' => $phone, 'mail' => $mail ),
    );
    $post_id = wp_insert_post( wp_slash($post_data) );
}

add_action( 'admin_post_send_review','send_review_callback' );
function send_review_callback() {
    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $mail = trim($_POST["mail"]);
    $text = trim($_POST["review-text"]);
    $date = date('Y-m-d');
    $post_data = array(
        'post_title'    => $name. " - ". $date,
        'post_content'  => $text,
        'post_type'     => 'reviews',
        'post_status'   => 'publish',
        'meta_input'     => array('author' => $name, 'phone' => $phone, 'e-mail' => $mail, 'date' => $date, 'moderated' => false),
    );
    $post_id = wp_insert_post( wp_slash($post_data) );
}