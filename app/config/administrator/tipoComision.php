<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Tipos de Comisiones',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Tipo de Comision',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'TipoComision',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id' => array(
            'title' => 'Id'
        ),
        'name' => array(
            'title' => 'Nombre',
        )
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Tipo de Comisión',
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