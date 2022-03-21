<?php

//função geral para puxar as paginas, como se fosse no acm

function get_field2($key, $page_id = 0) {
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($page_id, $key, true);
}

function the_field2($key, $page_id = 0) {
  echo get_field2($key, $page_id);
}

//functions.php
//"cmb2_admin_init" ja existe
add_action("cmb2_admin_init", "cmb2_fields_home");

//array("item1", "item2") === []

function cmb2_fields_home(){
  $cmb = new_cmb2_box([
//caixa de campos

  //ou inves de array(), utilizar colchetes []
    'id' => "home_box",
    'title' => 'Menu da Semana',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page_template',
      'value' => 'page-home.php',
    ],
]);
  $cmb->add_field ([
    'name' => 'Comida',
    'id' => 'comida',
    'type' => 'text',
    ]);

  $cmb->add_field ([
    'name' => 'Descrição',
    'id' => 'descricao',
    'type' => 'textarea',
    ]);

  

  add_action("cmb2_admin_init", "cmb2_fields_sobre");
  
  function cmb2_fields_sobre(){
    $cmb = new_cmb2_box([
        'id' => "sobre_box",
        'title' => 'Sobre',
        'object_types' => ['page'],
        'show_on' => [
          'key' => 'page_template',
          'value' => 'page-sorbe.php',
          ]
        ]);
        }
        $cmb->add_field([
          'name' => 'Foto Rest',
          'id' => 'foto_rest',
          'type' => 'file',
          'option' => [
            'url' => false,
          ],
        ]);
}

?>