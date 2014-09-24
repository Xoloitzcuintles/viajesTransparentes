<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Pasajes',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'pasaje',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Pasaje',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'cubre_pasaje' => array(
            'title' => 'Institución que cubre pasaje'
        ),
        'tipo_pasaje' => array(
            'title' => 'Tipo de pasaje'
        ),
        'numero_viaje' => array(
            'title' => 'Número del viaje'
        ),
        'fecha' => array(
            'title' => 'Fecha del viaje'
        ),
        'gasto' => array(
            'title' => 'Costo del pasaje'
        ),
        'tipo' => array(
            'title' => 'Tipo (ida, vuelta)'
        ),
        'compania_nombre' => array(
            'title' => 'Compañía de transporte',
            'relationship' => 'compania',
            'select' => "(:table).name",
        ),
        'ciudad_origen_nombre' => array(
            'title' => 'Ciudad Origen',
            'relationship' => 'ciudad_origen',
            'select' => "(:table).name",
        ),
        'ciudad_destino_nombre' => array(
            'title' => 'Ciudad Destino',
            'relationship' => 'ciudad_destino',
            'select' => "(:table).name",
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'cubre_pasaje' => array(
            'title' => 'Institución que cubre pasaje',
            'type' => 'text',
        ),
        'tipo_pasaje' => array(
            'title' => 'Tipo de pasaje',
            'type' => 'text',
        ),
        'numero_viaje' => array(
            'title' => 'Número del viaje',
            'type' => 'text',
        ),
        'fecha' => array(
            'title' => 'Fecha del viaje',
            'type' => 'date',
        ),
        'gasto' => array(
            'title' => 'Costo del pasaje',
            'type' => 'number',
            'decimals' => 2,
        ),
        'tipo' => array(
            'title' => 'Tipo (ida, vuelta)',
            'type' => 'text',
        ),
        'compania' => array(
            'title' => 'Compañia de transporte',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'ciudad_origen' => array(
            'title' => 'Ciudad Origen',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'ciudad_destino' => array(
            'title' => 'Ciudad Destino',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
    ),
    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'fecha',
        'direction' => 'asc',
    ),
);

?>