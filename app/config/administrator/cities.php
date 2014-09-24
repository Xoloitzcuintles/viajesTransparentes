<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Ciudades',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Ciudad',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'City',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id' => array(
            'title' => 'Id'
        ),
        'key' => array(
            'title' => 'Clave',
//            'output' => '<img src="/uploads/homepagesliders/resize/(:value)" height="100" />',
        ),
        'name' => array(
            'title' => 'Nombre',
//            'output' => '<a href="(:value)" target="_blank">(:value)</a>',
        ),
        'state_name' => array(
            'title' => 'Estado',
            'relationship' => 'state',
            'select' => "(:table).name",
        ),

    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'key' => array(
            'title' => 'Clave',
            'type' => 'text'
        ),
        'name' => array(
            'title' => 'Nombre de la ciudad',
            'type' => 'text'
        ),
        'state' => array(
            'title' => 'Estado',
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