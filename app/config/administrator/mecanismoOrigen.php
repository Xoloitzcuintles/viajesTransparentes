<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Mecanismos de Origen',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Mecanismo de Origen',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'MecanismoOrigen',
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
            'title' => 'Mecanismo',
        )
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Mecanismo',
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