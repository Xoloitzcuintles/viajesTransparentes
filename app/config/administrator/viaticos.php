<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Viáticos',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Viático',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Viatico',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id' => array(
            'title' => 'Id'
        ),
        'gasto' => array(
            'title' => 'Gasto',
        ),
        'comprobado' => array(
            'title' => 'Comprobado',
        ),
        'sin_comprobar' => array(
            'title' => 'Sin Comprobar',
        ),
        'devuelto' => array(
            'title' => 'Devuelto',
        ),
        'descripcion' => array(
            'title' => 'Descripción',
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'gasto' => array(
            'title' => 'Gasto',
            'type' => 'number',
            'decimals' => 2,
        ),
        'comprobado' => array(
            'title' => 'Comprobado',
            'type' => 'number',
            'decimals' => 2,
        ),
        'sin_comprobar' => array(
            'title' => 'Sin Comprobar',
            'type' => 'number',
            'decimals' => 2,
        ),
        'devuelto' => array(
            'title' => 'Devuelto',
            'type' => 'number',
            'decimals' => 2,
        ),
        'descripcion' => array(
            'title' => 'Descripción',
            'type' => 'text'
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