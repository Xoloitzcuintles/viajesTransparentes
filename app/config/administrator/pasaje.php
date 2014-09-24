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