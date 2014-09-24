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
        'servidor_name' => array(
            'title' => 'Servidor Público',
            'relationship' => 'servidor',
            'select' => "(:table).nombre",
        ),
        'tema_name' => array(
            'title' => 'Tema',
            'relationship' => 'tema',
            'select' => "(:table).name",
        ),
        'tipo_comision_name' => array(
            'title' => 'Tipo de Comisión',
            'relationship' => 'tipo_comision',
            'select' => "(:table).name",
        ),
        'mecanismo_origen_name' => array(
            'title' => 'Mecanismo de Origen',
            'relationship' => 'mecanismo_origen',
            'select' => "(:table).name",
        ),
        'inst_genera_name' => array(
            'title' => 'Institución que Genera',
            'relationship' => 'inst_genera',
            'select' => "(:table).name",
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
        'servidor' => array(
            'title' => 'Servidor Público',
            'type' => 'relationship',
            'name_field' => 'nombre',
        ),
        'tema' => array(
            'title' => 'Tema',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'tipo_comision' => array(
            'title' => 'Tipo de Comisión',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'mecanismo_origen' => array(
            'title' => 'Mecanismo de Origen',
            'type' => 'relationship',
            'name_field' => 'name',
        ),
        'inst_genera' => array(
            'title' => 'Institución que Genera',
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