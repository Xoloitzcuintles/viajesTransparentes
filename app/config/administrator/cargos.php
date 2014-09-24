<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Cargos',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'cargo',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Cargo',
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
        ),
        'cargo_name' => array(
            'title' => 'Unidad Administrativa',
            'relationship' => 'parent',
            'select' => "(:table).nombre",
        ),
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
            'title' => 'Nombre del cargo',
            'type' => 'text'
        ),
        'parent' => array(
            'title' => 'Cargo Superior Inmediato',
            'type' => 'relationship',
            'name_field' => 'nombre',
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