<?php
/// funcao para colcoar abreviado os valores
function get_field($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
  }
  
  function the_field($key, $page_id = 0) {
    echo get_field($key, $page_id);
  }
  
// functions.php
add_action('cmb2_admin_init', 'cmb2_fields_home');

// array('item1', 'item2') === ['item1', 'item2']
function cmb2_fields_home() {
  // Adiciona um bloco
  $cmb = new_cmb2_box([         /// está dentro de um Array, que é o [];
    'id' => 'home_box', // id deve ser único
    'title' => 'Home',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], // modelo de página
  ]);

  // Adiciona um campo ao bloco criado
  $cmb->add_field([
    'name' => 'Primeira Comida',
    'id' => 'comida1',
    'type' => 'text',
  ]);

?>
