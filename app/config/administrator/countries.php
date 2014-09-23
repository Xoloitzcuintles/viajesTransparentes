<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Países',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'País',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Country',
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
        )
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
            'title' => 'Nombre del país',
            'type' => 'text'
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