<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Eventos',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Evento',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Evento',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'name' => array(
            'title' => 'Nombre'
        ),
        'url' => array(
            'title' => 'URL del evento'
        ),
        'ciudad_nombre' => array(
            'title' => 'Ciudad del Evento',
            'relationship' => 'ciudad',
            'select' => "(:table).name",
        ),
        'viatico_nombre' => array(
            'title' => 'Viáticos',
            'relationship' => 'viatico',
            'select' => "(:table).gasto",
        ),
        'tipo_viaje' => array(
            'title' => 'Tipo de Viaje'
        )
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Nombre',
            'type' => 'text'
        ),
        'url' => array(
            'title' => 'URL',
            'type' => 'text'
        ),
        'tipo_viaje' => array(
            'title' => 'Tipo de Viaje (Nacional, Internacional)',
            'type' => 'text'
        ),
        'ciudad' => array(
            'title' => 'Ciudad',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'viatico' => array(
            'title' => 'Viáticos',
            'type' => 'relationship',
            'name_field' => 'gasto',
        ),
        'pasajes' => array(
            'title' => 'Pasajes',
            'type' => 'relationship',
            'name_field' => 'numero_viaje',
        ),
    ),
    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'name',
        'direction' => 'asc',
    ),
);

?>