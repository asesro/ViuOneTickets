<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Tickets Abiertos',
  'nav-completed-tickets'            => 'Tickets Cerrados',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Titulo',
  'table-owner'                      => 'Propietario',
  'table-status'                     => 'Estado',
  'table-last-updated'               => 'Ultima actualizacion',
  'table-priority'                   => 'Prioridad',
  'table-agent'                      => 'Usuario',
  'table-category'                   => 'Categoria',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'Sin tickets',
  'table-info'                       => 'Mostrando _START_ a _END_ de _TOTAL_ tickets',
  'table-info-empty'                 => 'Mostrando 0 a 0 de 0 tickets',
  'table-info-filtered'              => '(filtered from _MAX_ total entries)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Show _MENU_ entries',
  'table-loading-results'            => 'Cargando...',
  'table-processing'                 => 'Procesando...',
  'table-search'                     => 'Buscar:',
  'table-zero-records'               => 'No encontrado',
  'table-paginate-first'             => 'Primero',
  'table-paginate-last'              => 'Ultimo',
  'table-paginate-next'              => 'Siguiente',
  'table-paginate-prev'              => 'Anterior',
  'table-aria-sort-asc'              => ': activate to sort column ascending',
  'table-aria-sort-desc'             => ': activate to sort column descending',

  'btn-back'                         => 'Cancelar',
  'btn-cancel'                       => 'Cancel', // NEW
  'btn-close'                        => 'Close',
  'btn-delete'                       => 'Borrar',
  'btn-edit'                         => 'Editar',
  'btn-mark-complete'                => 'Marcar como completado',
  'btn-submit'                       => 'Aceptar',

  'agent'                            => 'Usuario',
  'category'                         => 'Categoria',
  'colon'                            => ': ',
  'comments'                         => 'Comentarios',
  'created'                          => 'Creado',
  'description'                      => 'Descripcion',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Last Update',
  'no-replies'                       => 'No replies.',
  'owner'                            => 'Propietario',
  'priority'                         => 'Prioridad',
  'reopen-ticket'                    => 'Reaperturar Ticket',
  'reply'                            => 'Responder',
  'responsible'                      => 'Responsible',
  'status'                           => 'Estado',
  'subject'                          => 'Titulo',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Helpdesk main page',

// tickets/____
  'index-my-tickets'                 => 'Mis Tickets',
  'btn-create-new-ticket'            => 'Nuevo ticket',
  'index-complete-none'              => 'Sin tickets',
  'index-active-check'               => 'Be sure to check Active Tickets if you cannot find your ticket.',
  'index-active-none'                => 'There are no active tickets,',
  'index-create-new-ticket'          => 'Crear nuevo ticket',
  'index-complete-check'             => 'Be sure to check Complete Tickets if you cannot find your ticket.',

  'create-ticket-title'              => 'New Ticket Form',
  'create-new-ticket'                => 'Crear nuevo Ticket',
  'create-ticket-brief-issue'        => 'Breve comentario de su incidente',
  'create-ticket-describe-issue'     => 'Describa su incidente con mas detalle',

  'show-ticket-title'                => 'Ticket',
  'show-ticket-js-delete'            => 'Are you sure you want to delete: ',
  'show-ticket-modal-delete-title'   => 'Borrar Ticket',
  'show-ticket-modal-delete-message' => 'Are you sure you want to delete ticket: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Agents :names are added to agents',
  'administrators-are-added-to-administrators'      => 'Administrators :names are added to administrators', //New
  'agents-joined-categories-ok'                     => 'Joined categories successfully',
  'agents-is-removed-from-team'                     => 'Removed agent\s :name from the agent team',
  'administrators-is-removed-from-team'             => 'Removed administrator\s :name from the administrators team', // New

// CategoriesController
  'category-name-has-been-created'   => 'The category :name has been created!',
  'category-name-has-been-modified'  => 'The category :name has been modified!',
  'category-name-has-been-deleted'   => 'The category :name has been deleted!',

// PrioritiesController
  'priority-name-has-been-created'   => 'The priority :name has been created!',
  'priority-name-has-been-modified'  => 'The priority :name has been modified!',
  'priority-name-has-been-deleted'   => 'The priority :name has been deleted!',
  'priority-all-tickets-here'        => 'All priority related tickets here',

// StatusesController
  'status-name-has-been-created'   => 'The status :name has been created!',
  'status-name-has-been-modified'  => 'The status :name has been modified!',
  'status-name-has-been-deleted'   => 'The status :name has been deleted!',
  'status-all-tickets-here'        => 'All status related tickets here',

// CommentsController
  'comment-has-been-added-ok'        => 'Comentario añadido!',

// NotificationsController
  'notify-new-comment-from'          => 'Nuevo comentario de ',
  'notify-on'                        => ' on ',
  'notify-status-to-complete'        => ' status to Complete',
  'notify-status-to'                 => ' status to ',
  'notify-transferred'               => ' transferred ',
  'notify-to-you'                    => ' to you',
  'notify-created-ticket'            => ' created ticket ',
  'notify-updated'                   => ' updated ',

 // TicketsController
  'the-ticket-has-been-created'      => 'El ticket ha sido creado!',
  'the-ticket-has-been-modified'     => 'El ticket ha sido modificado!',
  'the-ticket-has-been-deleted'      => 'The ticket :name has been deleted!',
  'the-ticket-has-been-completed'    => 'The ticket :name has been completed!',
  'the-ticket-has-been-reopened'     => 'The ticket :name has been reopened!',
  'you-are-not-permitted-to-do-this' => 'You are not permitted to do this action!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'You are not permitted to access this page!',

];
