<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Viajes',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'viaje',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Viaje',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'ur' => array(
            'title' => 'UR'
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'ur' => array(
            'title' => 'UR',
            'type' => 'text'
        ),
        'eventos' => array(
            'title' => 'Eventos',
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
        'field' => 'UR',
        'direction' => 'asc',
    ),
);

?>