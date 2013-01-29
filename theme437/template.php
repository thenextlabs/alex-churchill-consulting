<?php

function theme437_preprocess_page(&$vars) {
  	
  	if (isset($vars['node'])) {
    	$vars['template_files'][] = 'page-node-' . $vars['node']->type;
  	}
  	
}

function theme437_preprocess_node(&$vars, $hook) {
  $node = $vars['node'];
  $vars['template_file'] = 'node-'. $node->type;
}


function theme437_menu_local_task($link, $active = FALSE) {
  return '<li '. ($active ? 'class="active" ' : '') .'><span><span>'. $link ."</span></span></li>\n";
}
?><?php
function theme437_l($text, $path, $options = array()) {
  $options += array(
      'attributes' => array(),
      'html' => TRUE,
    );
  if ($path == $_GET['q'] || ($path == '<front>' && drupal_is_front_page())) {
    if (isset($options['attributes']['class'])) {
      $options['attributes']['class'] .= ' active';
    }
    else {
      $options['attributes']['class'] = 'active';
    }
  }
  if (isset($options['attributes']['title']) && strpos($options['attributes']['title'], '<') !== FALSE) {
    $options['attributes']['title'] = strip_tags($options['attributes']['title']);
  }
  return '<a href="'. check_url(url($path, $options)) .'"'. drupal_attributes($options['attributes']) .'>'. ($options['html'] ? $text : check_plain($text)) .'</a>';
}
/*** Override theme_links to include <span> in list.*/
function theme437_links($links, $attributes = array('class' => 'links')) {
 $output = '';
  if (count($links) > 0) {
    $output = '<ul'. drupal_attributes($attributes) .'>';
    $num_links = count($links);
    $i = 1;
    foreach ($links as $key => $link) {
      $class = '';
      if (isset($link['attributes']) && isset($link['attributes']['class'])) {
        $link['attributes']['class'] .= ' ' . $key;
        $class = $key;
      }
      else {
        $link['attributes']['class'] = $key;
        $class = $key;
      }
      $extra_class = '';
      if ($i == 1) {
        $extra_class .= 'first ';
      }
      if ($i == $num_links) {
        $extra_class .= 'last ';
      }
      $current = '';
      if (strstr($class, 'active')) {
        $current = ' active';
      }
      $output .= '<li class="'. $extra_class . $class . $current .'">';
      $html = isset($link['html']) && $link['html'];
      $link['query'] = isset($link['query']) ? $link['query'] : NULL;
      $link['fragment'] = isset($link['fragment']) ? $link['fragment'] : NULL;
      if (isset($link['href'])) {
        $spanned_title = "<span ". drupal_attributes($link['attributes']) ."><span>".$link['title']."</span></span>";
       $output .= theme437_l($spanned_title, $link['href'], $link['attributes'], $link['query'], $link['fragment']);
      } else if ($link['title']) {
        if (!$html) {
          $link['title'] = check_plain($link['title']);
        }
        $output .= '<span'. drupal_attributes($link['attributes']) .'>'. $link['title'] .'</span>';
      }
      $i++;
      $output .= "</li>\n";
    }
    $output .= '</ul>';
  }
  return $output;
}

?>