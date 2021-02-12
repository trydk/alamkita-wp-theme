<?php

function get_main_website_url() {
  return 'https://alamkita.id';
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="btn btn-lg btn-outline-success"';
}