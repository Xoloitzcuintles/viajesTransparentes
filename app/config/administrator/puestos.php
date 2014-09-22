<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Puestos',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'puesto',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Puesto',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id' => array(
            'title' => 'Id'
        ),
        'clave' => array(
            'title' => 'Clave',
//            'output' => '<img src="/uploads/homepagesliders/resize/(:value)" height="100" />',
        ),
        'nombre' => array(
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
        'clave' => array(
            'title' => 'Clave',
            'type' => 'text'
        ),
        'nombre' => array(
            'title' => 'Nombre del puesto',
            'type' => 'text'
        ),
    ),
    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'nombre',
        'direction' => 'asc',
    ),
);

?>