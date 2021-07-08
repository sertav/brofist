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
	
	
//	function wpse_139269_term_radio_checklist( $args ) {
//		if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'project-type' || $args['taxonomy'] === 'project-category' || $args['taxonomy'] === 'product-category' || $args['taxonomy'] === 'product-type' ) {
//			if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { // Don't override 3rd party walkers.
//				if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
//					class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
//						function walk( $elements, $max_depth, ...$args ) {
//							$output = parent::walk( $elements, $max_depth, ...$args );
//							$output = str_replace(
//								array( 'type="checkbox"', "type='checkbox'" ),
//								array( 'type="radio"', "type='radio'", "checked='checked'" ),
//								$output
//							);
//							return $output;
//						}
//					}
//				}
//				$args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
//			}
//		}
//		return $args;
//	}
//	add_filter( 'wp_terms_checklist_args', 'wpse_139269_term_radio_checklist' );