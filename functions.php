<?php
/// funcao para colcoar abreviado os valores
function get_field($key, $page_id = 0) {      /// get_field é para somente pegar o valor do que quero
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
  }
  
  function the_field($key, $page_id = 0) {    /// the_field é para mostrar algo no site
    echo get_field($key, $page_id);  
  }
  
// functions.php
add_action('cmb2_admin_init', 'cmb2_fields_home');

// array('item1', 'item2') === ['item1', 'item2']
function cmb2_fields_home() {
  // Adiciona um bloco
  $cmb = new_cmb2_box([         /// está dentro de um Array, que é o [];
    'id' => 'home_box', // id deve ser único
    'title' => 'Menu da Semana',   /// o title deve ser igual ao page-template
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], // modelo de página
  ]);

   // Adiciona um campo ao bloco criado
   $cmb->add_field([
     'name' => 'Primeiro Prato',
     'id' => 'comida1',
     'type' => 'text',
   ]);

  // O campo repetidor é do tipo group  // aqui é para repetir os pratos
  $pratos = $cmb->add_field([
    'name' => 'Pratos',
    'id' => 'pratos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Prato {#}',  /// aqui aparece o numero da posição do prato
      'add_button' => 'Adicionar Prato',
      'remove_button' => 'Remover Prato',
      'sortable' => true,   /// se quero que o cliente mude a ordem;
    ],
  ]);

  // Cada campo é adicionado com add_group_field
  // Passando sempre o campo de grupo como primeiro argumento
  $cmb->add_group_field($pratos, [
    'name' => 'Nome',
    'id' => 'nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos, [
    'name' => 'Descrição',
    'id' => 'descricao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos, [
    'name' => 'Preço',
    'id' => 'preco',
    'type' => 'text',
  ]);

   // Adiciona um campo ao bloco criado
   $cmb->add_field([
    'name' => 'Segundo Prato',
    'id' => 'comida2',
    'type' => 'text',
  ]);

  // O campo repetidor é do tipo group  // aqui é para repetir os pratos
  $pratos2 = $cmb->add_field([
    'name' => 'Pratos2',
    'id' => 'pratos2',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Prato {#}',  /// aqui aparece o numero da posição do prato
      'add_button' => 'Adicionar Prato Dois',
      'remove_button' => 'Remover Prato Dois',
      'sortable' => true,   /// se quero que o cliente mude a ordem;
    ],
  ]);

  // Cada campo é adicionado com add_group_field
  // Passando sempre o campo de grupo como primeiro argumento
  $cmb->add_group_field($pratos2, [
    'name' => 'Nome',
    'id' => 'nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos2, [
    'name' => 'Descrição',
    'id' => 'descricao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos2, [
    'name' => 'Preço',
    'id' => 'preco',
    'type' => 'text',
  ]);
}

// aqui começa o sobre:
add_action('cmb2_admin_init', 'cmb2_fields_sobre');

// array('item1', 'item2') === ['item1', 'item2']
function cmb2_fields_sobre() {
  // Adiciona um bloco
  $cmb = new_cmb2_box([         /// está dentro de um Array, que é o [];
    'id' => 'sobre_box', // id deve ser único
    'title' => 'Sobre',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-sobre.php',
    ], // modelo de página
  ]);

  // Adiciona um campo ao bloco criado
  $cmb->add_field([
    'name' => 'Foto Rest',
    'id' => 'foto_rest',
    'type' => 'file',
    'options' => [
      'url' => false,
    ]
  ]);
}


// aqui começa o contato:
add_action('cmb2_admin_init', 'cmb2_fields_contato');

// array('item1', 'item2') === ['item1', 'item2']
function cmb2_fields_contato() {
  // Adiciona um bloco
  $cmb = new_cmb2_box([         /// está dentro de um Array, que é o [];
    'id' => 'contato_box', // id deve ser único
    'title' => 'contato',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ], // modelo de página
  ]);

  // Adiciona um campo ao bloco criado
  $cmb->add_field([
    'name' => 'Localização Rest',
    'desc'    => 'Aqui é colcocado a imagem da localizacao do Restaurante e deve ser de 800px x 600px',
    'id' => 'localizacao_rest',
    'type' => 'file',
    'options' => [
      'url' => false,
    ]
  ]);

  $cmb->add_field([
    'name' => 'Texto alternativo da imagem',
    'desc'    => 'Aqui é colocado a descrição da imagem como sobre o que a imagem é',
    'id' => 'textoAlt',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Primeiro item do contato',
    'desc'    => 'Aqui é o titulo do primeiro item do contato',
    'id' => 'primeiroItemContato',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Telefone do Restaurante',
    'desc'    => 'Aqui é o telefone do restaurante e muda no cabeçalho também',
    'id' => 'telefone',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'E-mail do Restaurante',
    'id' => 'email',
    'type' => 'text_email',
  ]);

  $cmb->add_field([
    'name' => 'Facebook do Restaurante',
    'id' => 'facebook',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Primeiro item dos horários',
    'desc'    => 'Aqui é o titulo do primeiro item dos horários',
    'id' => 'primeiroItemHorario',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Horário de funcionamento',
    'desc'    => 'Horário de segunda a sexta',
    'id' => 'funcionamento',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Horário de sabado',
    'id' => 'sabado',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Horario de domingo',
    'id' => 'domingo',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Primeiro item do endereço',
    'desc'    => 'Aqui é o titulo do primeiro item dos endereços',
    'id' => 'primeiroItemEndereco',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'rua',
    'id' => 'rua',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Cidade',
    'id' => 'cidade',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'País',
    'id' => 'pais',
    'type' => 'text',
  ]);
}
?>

