<?php
/**
 * Plugin Name: Markdown Display by Logic Hop
 * Plugin URI: https://logichop.com/docs/markdown-display
 * Description: Renders markdown as HTML using http://parsedown.org
 * Version: 1.0.2
 * Author: Logic Hop
 * Website: https://logichop.com
 * License: GPLv2 or later
 */

if (!defined('ABSPATH')) die;

function logic_hop_markdown_metabox () {
  add_meta_box(
    'logic_hop_markdown_metabox',
    __( 'Markdown Display', 'logic_hop_markdown' ),
    'logic_hop_markdown_metabox_render',
    array( 'page', 'post' ),
    'side',
    'low',
    array()
  );
}
add_action( 'add_meta_boxes', 'logic_hop_markdown_metabox' );

function logic_hop_markdown_metabox_render ( $post ) {
  $markdown = get_post_meta( $post->ID, '_logichop_markdown_display', true );
  printf( '<p>
            <select id="_logichop_markdown_display" name="_logichop_markdown_display">
              <option value="">%s</option>
              <option value="markdown" %s>%s</option>
            </select>
          </p>',
          __( 'Markdown Display Disabled', 'logic_hop_markdown' ),
          ( $markdown ) ? 'selected' : '',
          __( 'Markdown Display Enabled', 'logic_hop_markdown' )
        );
}

function logic_hop_markdown_metabox_save ( $id ) {
  if ( array_key_exists( '_logichop_markdown_display', $_POST) ) {
    $value = ( $_POST['_logichop_markdown_display'] == 'markdown' ) ? 'markdown' : false;
    update_post_meta( $id, '_logichop_markdown_display', $value );
  }
}
add_action( 'save_post', 'logic_hop_markdown_metabox_save' );

function logichop_markdown_parsedown ( $content ) {
  if ( ! class_exists( 'Parsedown' ) ) {
	   require_once( 'Parsedown.php' );
  }

  $parse = new Parsedown();
  $parsed_content = $parse->setUrlsLinked( false )->setMarkupEscaped( false )->text( $content );

  // PARSE SHORTCODE TO RENDER AS HTML
  $parsed_content = str_replace( '[[', '&#91;', $parsed_content );
  $parsed_content = str_replace( ']]', '&#93;', $parsed_content );

  // PARSE LOGIC HOP TO RENDER AS HTML
  $parsed_content = str_replace( '{{{', '&#123;&#123;', $parsed_content );
  $parsed_content = str_replace( '}}}', '&#125;&#125;', $parsed_content );
  $parsed_content = str_replace( '{{%', '&#123;%', $parsed_content );
  $parsed_content = str_replace( '%}}', '%&#125;', $parsed_content );

  return $parsed_content;
}

function logic_hop_markdown_content ( $content ) {

  if ( ! get_post_meta( get_the_ID(), '_logichop_markdown_display', true ) ) return $content;

  return sprintf( '<div class="markdown">%s</div>', logichop_markdown_parsedown( $content ) );
}
add_filter( 'the_content', 'logic_hop_markdown_content', 1 );
add_filter( 'the_excerpt', 'logic_hop_markdown_content', 1 );
