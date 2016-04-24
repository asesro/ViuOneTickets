<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => 'Configuracion',
  'nav-agents'                    => 'Usuarios',
  'nav-dashboard'                 => 'Tablero',
  'nav-categories'                => 'Categorias',
  'nav-priorities'                => 'Prioridades',
  'nav-statuses'                  => 'Estados',
  'nav-configuration'             => 'Configuration',
  'nav-administrator'             => 'Administrator',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => 'Nombre',
  'table-action'                  => 'Accion',
  'table-categories'              => 'Categorias',
  'table-join-category'           => 'Categoria Añadida',
  'table-remove-agent'            => 'Quitar de Usuarios',
  'table-remove-administrator'    => 'Quitar de Administradores', // New

  'table-slug'                    => 'Slug',
  'table-default'                 => 'Valor por defecto',
  'table-value'                   => 'Mi valor',
  'table-lang'                    => 'Lang',
  'table-edit'                    => 'Editar',

  'btn-back'                      => 'Cancelar',
  'btn-delete'                    => 'Borrar',
  'btn-edit'                      => 'Editar',
  'btn-join'                      => 'Añadir',
  'btn-remove'                    => 'Borrar',
  'btn-submit'                    => 'Aceptar',
  'btn-save'                      => 'Guardar',
  'btn-update'                    => 'Guardar',

  'colon'                         => ': ',

 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'ViuOne Tickets',
  'index-empty-records'                 => 'Sin Tickets',
  'index-total-tickets'                 => 'Total tickets',
  'index-open-tickets'                  => 'Tickets abiertos',
  'index-closed-tickets'                => 'Tickets cerrados',
  'index-performance-indicator'         => 'Indicador de eficiencia',
  'index-periods'                       => 'Periodos',
  'index-3-months'                      => '3 meses',
  'index-6-months'                      => '6 meses',
  'index-12-months'                     => '12 meses',
  'index-tickets-share-per-category'    => 'Tickets share per category',
  'index-tickets-share-per-agent'       => 'Tickets share per agent',
  'index-categories'                    => 'Categorias',
  'index-category'                      => 'Categoria',
  'index-agents'                        => 'Usuarios',
  'index-agent'                         => 'Usuario',
  'index-administrators'                => 'Administradores',  //new
  'index-administrator'                 => 'Administrador',  //new
  'index-users'                         => 'Usuarios',
  'index-user'                          => 'Usuario',
  'index-tickets'                       => 'Tickets',
  'index-open'                          => 'Abierto',
  'index-closed'                        => 'Cerrado',
  'index-total'                         => 'Total',
  'index-month'                         => 'Mes',
  'index-performance-chart'             => 'Cuantos dias en promedio para atender un ticket?',
  'index-categories-chart'              => 'Tickets distribution per category',
  'index-agents-chart'                  => 'Tickets distribution per Agent',

// tickets-admin/agent/____
  'agent-index-title'             => 'Administracion de usuarios',
  'btn-create-new-agent'          => 'Crear nuevo usuario',
  'agent-index-no-agents'         => 'No hay usuarios, ',
  'agent-index-create-new'        => 'Agregar usuarios',
  'agent-create-title'            => 'Agregar usuario',
  'agent-create-add-agents'       => 'Agregar usuarios',
  'agent-create-no-users'         => 'No hay cuentas de usuario, debe crear una primero.',
  'agent-create-select-user'      => 'Seleccione cuenta de usuario para ser agregada',

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'Administracion de administradores',  //new
  'btn-create-new-administrator'                => 'Crear nuevo administrador',  //new
  'administrator-index-no-administrators'       => 'No hay administradores, ',  //new
  'administrator-index-create-new'              => 'Agregar administradores',  //new
  'administrator-create-title'                  => 'Agregar administrador',  //new
  'administrator-create-add-administrators'     => 'Agregar administradores',  //new
  'administrator-create-no-users'               => 'There are no user accounts, create user accounts first.',  //new
  'administrator-create-select-user'            => 'Seleccione cuenta de usuario para ser agregada como Administrador',  //new

// tickets-admin/category/____
  'category-index-title'          => 'Administracion de categorias',
  'btn-create-new-category'       => 'Crear nueva categoria',
  'category-index-no-categories'  => 'There are no categories, ',
  'category-index-create-new'     => 'Crear nueva categoria',
  'category-index-js-delete'      => 'Are you sure you want to delete the category: ',
  'category-create-title'         => 'Create New Category',
  'category-create-name'          => 'Nombre',
  'category-create-color'         => 'Color',
  'category-edit-title'           => 'Editar Categoria: :name',

// tickets-admin/priority/____
  'priority-index-title'          => 'Administracion de prioridades',
  'btn-create-new-priority'       => 'Crear nueva prioridad',
  'priority-index-no-priorities'  => 'There are no priorities, ',
  'priority-index-create-new'     => 'create new priority',
  'priority-index-js-delete'      => 'Are you sure you want to delete the priority: ',
  'priority-create-title'         => 'Create New Priority',
  'priority-create-name'          => 'Nombre',
  'priority-create-color'         => 'Color',
  'priority-edit-title'           => 'Editar Pioridad: :name',

// tickets-admin/status/____
  'status-index-title'            => 'Administracion de estados',
  'btn-create-new-status'         => 'Crear nuevo estado',
  'status-index-no-statuses'      => 'There are no statues,',
  'status-index-create-new'       => 'create new status',
  'status-index-js-delete'        => 'Are you sure you want to delete the status: ',
  'status-create-title'           => 'Create New Status',
  'status-create-name'            => 'Nombre',
  'status-create-color'           => 'Color',
  'status-edit-title'             => 'Editar Estado: :name',

// tickets-admin/configuration/____
  'config-index-title'            => 'Configuration Settings',
  'config-index-subtitle'         => 'Settings',
  'btn-create-new-config'         => 'Add new setting',
  'config-index-no-settings'      => 'There are no settings,',
  'config-index-initial'          => 'Initial',
  'config-index-tickets'          => 'Tickets',
  'config-index-notifications'    => 'Notifications',
  'config-index-permissions'      => 'Permissions',
  'config-index-editor'           => 'Editor', //Added: 2016.01.14
  'config-index-other'            => 'Other',
  'config-create-title'           => 'Create: New Global Setting',
  'config-create-subtitle'        => 'Create Setting',
  'config-edit-title'             => 'Edit: Global Configuration',
  'config-edit-subtitle'          => 'Edit Setting',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => 'Slug',
  'config-edit-default'           => 'Default value',
  'config-edit-value'             => 'My value',
  'config-edit-language'          => 'Language',
  'config-edit-unserialize'       => 'Get the array values, and change the values',
  'config-edit-serialize'         => 'Get the serialized string of the changed values (to be entered in the field)',
  'config-edit-should-serialize'  => 'Serialize', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'When checked, the server will run eval()!
  									  Don\'t use this if eval() is disabled on your server or if you don\'t exactly know what you are doing!
  									  Exact code executed:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Re-enter your password', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Password mismatch', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Invalid value', //Added: 2016-01-16
  'config-edit-tools'             => 'Tools:',

];
