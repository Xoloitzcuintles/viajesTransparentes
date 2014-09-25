<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Remuneraciones',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Remuneración',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Remuneracion',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id' => array(
            'title' => 'Id'
        ),
        'grupo_jerarquico' => array(
            'title' => 'Grupo Jerarquico'
        ),
        'tipo_viaje' => array(
            'title' => 'Tipo Viaje (Nacional, Internacional)'
        ),
        'zona_destino' => array(
            'title' => 'Zona Destino (A, B)'
        ),
        'tarifa_diaria_mxn' => array(
            'title' => 'Tarifa Diaria MXN',
        ),
        'tarifa_diaria_usd' => array(
            'title' => 'Tarifa Diaria USD',
        )
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'grupo_jerarquico' => array(
            'title' => 'Grupo Jerarquico',
            'type' => 'text'
        ),
        'tipo_viaje' => array(
            'title' => 'Tipo Viaje (Nacional, Internacional)',
            'type' => 'text'
        ),
        'zona_destino' => array(
            'title' => 'Zona Destino (A, B)',
            'type' => 'text'
        ),
        'tarifa_diaria_mxn' => array(
            'title' => 'Tarifa Diaria MXN',
            'type' => 'number',
            'decimals' => 2,
        ),
        'tarifa_diaria_usd' => array(
            'title' => 'Tarifa Diaria USD',
            'type' => 'number',
            'decimals' => 2,
        )
    ),
    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'id',
        'direction' => 'asc',
    ),
);

?>