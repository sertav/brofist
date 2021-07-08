<?php
/*
 * Review
 */
register_post_type( 'reviews',
    array(
        'labels' => array(
            'name'               => _x( 'Отзывы', 'post type general name' ),
            'singular_name'      => _x( 'Отзыв' , 'post type singular name'),
            'menu_name'          => _x( 'Отзывы', 'admin menu'             ),
            'name_admin_bar'     => _x( 'Отзыв' , 'add new on admin bar'   ),
            'add_new'            => _x( 'Добавить отзыв'   , 'Review Item' ),
            'add_new_item'       => __( 'Добавить новый отзыв'             ),
            'new_item'           => __( 'Новый отзыв'                      ),
            'edit_item'          => __( 'Редактировать отзыв'              ),
            'view_item'          => __( 'Показать отзыв'                   ),
            'all_items'          => __( 'Все отзывы'                       ),
            'search_items'       => __( 'Найти отзывы'                     ),
            'parent_item_colon'  => __( 'Родительский отзыв:'              ),
            'not_found'          => __( 'Отзывов не найдено.'              ),
            'not_found_in_trash' => __( 'Отзывов в корзине не найдено.'    )
        ),
        'has_archive'  => false,
        'hierarchical' => false,
        'menu_icon'    => 'dashicons-thumbs-up',
        'public'       => true,
        'rewrite'      => array( 'slug' => _x( 'reviews', 'reviews slug' ), 'with_front' => false ),
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
        // 'taxonomies'   => array( 'review-type' ),
    )
);


/*
 * Brands
 */
register_post_type( 'events',
    array(
        'labels' => array(
            'name'               => _x( 'События', 'post type general name'  ),
            'singular_name'      => _x( 'Событие' , 'post type singular name'),
            'menu_name'          => _x( 'События', 'admin menu'              ),
            'name_admin_bar'     => _x( 'Событие' , 'add new on admin bar'   ),
            'add_new'            => _x( 'Добавить событие'   , 'Brand Item'  ),
            'add_new_item'       => __( 'Добавить новое событие'             ),
            'new_item'           => __( 'Новое событие'                      ),
            'edit_item'          => __( 'Редактировать событие'              ),
            'view_item'          => __( 'Показать событие'                   ),
            'all_items'          => __( 'Все события'                        ),
            'search_items'       => __( 'Найти события'                      ),
            'parent_item_colon'  => __( 'Родительское событие'               ),
            'not_found'          => __( 'События не найдены'                 ),
            'not_found_in_trash' => __( 'События в корзине не найдены.'      )
        ),
        'has_archive'  => false,
        'hierarchical' => false,
        'menu_icon'    => 'dashicons-calendar-alt',
        'public'       => true,
        'rewrite'      => array( 'slug' => _x( 'events', 'events slug' ), 'with_front' => false ),
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
        // 'taxonomies'   => array( 'brand-type' ),
    )
);


/*
 * Brands
 */
register_post_type( 'brands',
    array(
        'labels' => array(
            'name'               => _x( 'Бренды', 'post type general name' ),
            'singular_name'      => _x( 'Бренд' , 'post type singular name'),
            'menu_name'          => _x( 'Бренды', 'admin menu'             ),
            'name_admin_bar'     => _x( 'Бренд' , 'add new on admin bar'   ),
            'add_new'            => _x( 'Добавить бренд'   , 'Brand Item'  ),
            'add_new_item'       => __( 'Добавить новый бренд'             ),
            'new_item'           => __( 'Новый бренд'                      ),
            'edit_item'          => __( 'Редактирвать бренд'               ),
            'view_item'          => __( 'Показать бренд'                   ),
            'all_items'          => __( 'Все бренды'                       ),
            'search_items'       => __( 'Искать бренды'                    ),
            'parent_item_colon'  => __( 'Родительский бренд'               ),
            'not_found'          => __( 'Бренды не найдены.'               ),
            'not_found_in_trash' => __( 'Бренды не найдены в корзине.'     )
        ),
        'has_archive'  => true,
        'hierarchical' => true,
        'menu_icon'    => 'dashicons-tide',
        'public'       => true,
        'rewrite'      => array( 'slug' => _x( 'brands', 'brands slug' ), 'with_front' => false ),
        'supports'     => array( 'title', 'editor', 'thumbnail'),
        'taxonomies'   => array( 'brands-category' ),
    )
);

register_taxonomy( 'brands-city', 'brands',
    array(
        'labels' => array(
            'name'                       => _x( 'Страны', 'taxonomy general name'               ),
            'singular_name'              => _x( 'Страна' , 'taxonomy singular name'             ),
            'search_items'               => __( 'Искать страны'                                 ),
            'popular_items'              => __( 'Популярные страны'                             ),
            'all_items'                  => __( 'Все страны'                                    ),
            'edit_item'                  => __( 'Редактировать страну'                          ),
            'update_item'                => __( 'Обновить страну'                               ),
        'add_new_item'               => __( 'Добавить новую страну'                             ),
            'new_item_name'              => __( 'Добавить новое название'                       ),
            'separate_items_with_commas' => __( 'Разделяйте страны запятыми.'                   ),
            'add_or_remove_items'        => __( 'Добавьте или удалите страны'                   ),
            'choose_from_most_used'      => __( 'Выберите из наиболеее часто используемых стран'),
            'not_found'                  => __( 'Стран не найдено.'                             ),
            'menu_name'                  => __( 'Страны'                                        ),
            'parent_item'                => null,
            'parent_item_colon'          => null,
        ),
        'exclude_from_search' => true,
        'has_archive'         => true,
        'hierarchical'        => true,
        'rewrite'             => array( 'slug' => _x( 'brands-city', 'brands-city slug' ), 'with_front' => false ),
        'show_ui'             => true,
        'show_tagcloud'       => false,
    )
);

register_taxonomy( 'brands-languages', 'brands',
    array(
        'labels' => array(
            'name'                       => _x( 'Языки', 'taxonomy general name'                    ),
            'singular_name'              => _x( 'Язык' , 'taxonomy singular name'                   ),
            'search_items'               => __( 'Искать языки'                                      ),
            'popular_items'              => __( 'Популярные языки'                                  ),
            'all_items'                  => __( 'Все языки'                                         ),
            'edit_item'                  => __( 'Редактировать язык'                                ),
            'update_item'                => __( 'Обновить язык'                                     ),
            'add_new_item'               => __( 'Добавить новый язык'                               ),
            'new_item_name'              => __( 'Добавить новое название'                           ),
            'separate_items_with_commas' => __( 'Разделяйте языки запятыми.'                        ),
            'add_or_remove_items'        => __( 'Добавьте или удалите языки'                        ),
            'choose_from_most_used'      => __( 'Выберите из наиболеее часто используемых языков'   ),
            'not_found'                  => __( 'Языки не найдены.'                                 ),
            'menu_name'                  => __( 'Языки'                                             ),
            'parent_item'                => null,
            'parent_item_colon'          => null,
        ),
        'exclude_from_search' => true,
        'has_archive'         => true,
        'hierarchical'        => true,
        'rewrite'             => array( 'slug' => _x( 'brands-languages', 'brands-languages slug' ), 'with_front' => false ),
        'show_ui'             => true,
        'show_tagcloud'       => false,
    )
);

register_taxonomy( 'brands-payments', 'brands',
    array(
        'labels' => array(
            'name'                       => _x( 'Способы оплаты', 'taxonomy general name'                    ),
            'singular_name'              => _x( 'Способ оплаты' , 'taxonomy singular name'                   ),
            'search_items'               => __( 'Искать способы оплаты'                                      ),
            'popular_items'              => __( 'Популярные способы оплаты'                                  ),
            'all_items'                  => __( 'Все Способы оплаты'                                         ),
            'edit_item'                  => __( 'Редактировать способ оплаты'                                ),
            'update_item'                => __( 'Обновить способ оплаты'                                     ),
            'add_new_item'               => __( 'Добавить новый способ оплаты'                               ),
            'new_item_name'              => __( 'Добавить новое название'                           		 ),
            'separate_items_with_commas' => __( 'Разделяйте способы оплаты запятыми.'                        ),
            'add_or_remove_items'        => __( 'Добавьте или удалите способы оплаты'                        ),
            'choose_from_most_used'      => __( 'Выберите из наиболеее часто используемых Способов оплаты'   ),
            'not_found'                  => __( 'Способы оплаты не найдены.'                                 ),
            'menu_name'                  => __( 'Способы оплаты'                                             ),
            'parent_item'                => null,
            'parent_item_colon'          => null,
        ),
        'exclude_from_search' => true,
        'has_archive'         => true,
        'hierarchical'        => true,
        'rewrite'             => array( 'slug' => _x( 'brands-payments', 'brands-payments slug' ), 'with_front' => false ),
        'show_ui'             => true,
        'show_tagcloud'       => false,
    )
);

register_taxonomy( 'brands-license', 'brands',
    array(
        'labels' => array(
            'name'                       => _x( 'Лицензии', 'taxonomy general name'                    ),
            'singular_name'              => _x( 'Лицензия' , 'taxonomy singular name'                  ),
            'search_items'               => __( 'Искать лицензии'                                      ),
            'popular_items'              => __( 'Популярные лицензии'                                  ),
            'all_items'                  => __( 'Все лицензии'                                         ),
            'edit_item'                  => __( 'Редактировать лицензию'                               ),
            'update_item'                => __( 'Обновить лицензию'                                    ),
            'add_new_item'               => __( 'Добавить новую лицензию'                          	   ),
            'new_item_name'              => __( 'Добавить новое название'                              ),
            'separate_items_with_commas' => __( 'Разделяйте лицензии запятыми.'                        ),
            'add_or_remove_items'        => __( 'Добавьте или удалите лицензии'                        ),
            'choose_from_most_used'      => __( 'Выберите из наиболеее часто используемых лицензий'    ),
            'not_found'                  => __( 'Лицензии не найдены.'                                 ),
            'menu_name'                  => __( 'Лицензии'                                             ),
            'parent_item'                => null,
            'parent_item_colon'          => null,
        ),
        'exclude_from_search' => true,
        'has_archive'         => true,
        'hierarchical'        => true,
        'rewrite'             => array( 'slug' => _x( 'brands-license', 'brands-license slug' ), 'with_front' => false ),
        'show_ui'             => true,
        'show_tagcloud'       => false,
    )
);

add_filter( 'manage_taxonomies_for_brands_columns', 'genesis_brands_columns' );
function genesis_brands_columns( $taxonomies ) {
    $taxonomies[] = 'brands-license';
    return $taxonomies;
}

function wpse_139269_term_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'brands-license' ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { // Don't override 3rd party walkers.
            if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
                class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) {
                        $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'", "checked='checked'" ),
                            $output
                        );
                        return $output;
                    }
                }
            }
            $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
        }
    }
    return $args;
}
add_filter( 'wp_terms_checklist_args', 'wpse_139269_term_radio_checklist' );