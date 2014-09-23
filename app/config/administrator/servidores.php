<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Servidores',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'servidor',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Servidor',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id' => array(
            'title' => 'Id'
        ),
        'nombre' => array(
            'title' => 'Nombre',
//            'output' => '<a href="(:value)" target="_blank">(:value)</a>',
        ),
        'apellidoPaterno' => array(
            'title' => 'Apellido Paterno',
        ),
        'apellidoMaterno' => array(
            'title' => 'Apellido Materno',
        ),
        'correoElectronico' => array(
            'title' => 'Correo Electrónico',
        ),
        'puesto_name' => array(
            'title' => 'Puesto',
            'relationship' => 'puesto',
            'select' => "(:table).nombre",
        ),
        'unidadAdministrativa_name' => array(
            'title' => 'Unidad Administrativa',
            'relationship' => 'unidadAdministrativa',
            'select' => "(:table).nombre",
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'nombre' => array(
            'title' => 'Nombre del Servidor',
            'type' => 'text'
        ),
        'apellidoPaterno' => array(
            'title' => 'Apellido Paterno',
            'type' => 'text'
        ),
        'apellidoMaterno' => array(
            'title' => 'Apellido Materno',
            'type' => 'text'
        ),
        'correoElectronico' => array(
            'title' => 'Correo Electrónico',
            'type' => 'text'
        ),
        'puesto' => array(
            'title' => 'Puesto',
            'type' => 'relationship',
            'name_field' => 'nombre',
        ),
        'unidadAdministrativa' => array(
            'title' => 'Unidad Administrativa',
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
        'field' => 'id',
        'direction' => 'asc',
    ),
);

?>