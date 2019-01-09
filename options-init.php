<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "r_nikolay";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'r_nikolay',
        'dev_mode' => TRUE,
        'use_cdn' => TRUE,
        'page_title' => 'Настройки темы',
        'update_notice' => TRUE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Настройки темы',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    

    Redux::setArgs( $opt_name, $args );
/*
  * ---> END ARGUMENTS
  */

    


/*
  *
  * ---> START SECTIONS
  *
  */

// Главная вкладка
Redux::setSection( $opt_name, array(
    'title'  => 'Основные настройки - первая вкладка',
    'id'     => 'basic',
    'desc'   => 'Basic field with no subsections.',
    'icon'   => 'el el-home',
    'fields' => array(
        array(
            'id'       => 'phone',
            'type'     => 'text',
            'title'    => 'Телефон',
            // 'desc'     => 'Example description.',
            // 'subtitle' => 'Example subtitle.',
        ),
        array(
          'id'       => 'mail',
          'type'     => 'text',
          'title'    => 'E-mail',
        ),
        array(
          'id'       => 'work',
          'type'     => 'text',
          'title'    => 'Время',
        ),
        array(     // с переносом строк
          'id'      => 'address',
          'type'    => 'editor',
          'title'   => 'Адрес',
          'args'    => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 6,
              'teeny'         => false,
              'quicktags'     => false,
          ),
          'full_width'        => true,
        ),
        array(     // с переносом строк
          'id'       => 'our_advantages',
          'type'     => 'editor',
          'title'    => 'Наши преимущества',
          'subtitle' => 'Находятся в подвале сайта',
          'args'     => array(
              'wpautop'       => false,
              'media_buttons' => false,
              'textarea_rows' => 6,
              'teeny'         => false,
              'quicktags'     => false,
          ),
          'full_width'        => true,
        ),
        array(
          'id'       => 'expir',
          'type'     => 'text',
          'title'    => 'Более 10 лет опыта...',
          'subtitle' => 'Данный текст находится в подвале сайта',
        ),
    )
) );

// Первая Подвкладка главной вкладки
Redux::setSection( $opt_name, array(
    'title' => 'Основные настройки',
    'id'    => 'basic',
    'desc'  => 'Данные, которые выводятся на всех страницах',
    'icon'  => 'el el-home'
) );


// Вторая Подвкладка главной вкладки
Redux::setSection( $opt_name, array(
    'title'      => 'Ссылки на соц. сети',
    // 'desc'       => 'Описание',
    'id'         => 'soclincs',
    'subsection' => true,
    'fields'     => array(
        array(
          'id'       => 'my_vk',
          'type'     => 'text',
          'title'    => 'Ссылка на vk',
        ),
        array(
          'id'       => 'my_twitter',
          'type'     => 'text',
          'title'    => 'Ссылка на twitter',
        ),
        array(
          'id'       => 'my_facebook',
          'type'     => 'text',
          'title'    => 'Ссылка на facebook',
        ),
        array(
          'id'       => 'my_pinterest',
          'type'     => 'text',
          'title'    => 'Ссылка на pinterest',
        ),
        array(
          'id'       => 'my_youtube',
          'type'     => 'text',
          'title'    => 'Ссылка на youtube',
        ),
        array(
          'id'       => 'my_instagram',
          'type'     => 'text',
          'title'    => 'Ссылка на instagram',
        ),
    )
) );

// Третья подвкладка Главной вкладки
// Redux::setSection( $opt_name, array(
//     'title'      => __( 'Text Area', 'redux-framework-demo' ),
//     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>',
//     'id'         => 'opt-textarea-subsection',
//     'subsection' => true,
//     'fields'     => array(
//         array(
//             'id'       => 'textarea-example',
//             'type'     => 'textarea',
//             'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
//             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
//             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
//             'default'  => 'Default Text',
//         ),
//     )
// ) );

/*
  * <--- END SECTIONS
  */