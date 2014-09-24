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
        'ciudad' => array(
            'title' => 'Ciudad',
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
        'field' => 'name',
        'direction' => 'asc',
    ),
);

?>