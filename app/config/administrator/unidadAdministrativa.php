<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Unidades Administrativas',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Unidad Administrativa',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'UnidadAdministrativa',
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
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'nombre' => array(
            'title' => 'Nombre',
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