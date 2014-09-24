<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Compañías de Transporte',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Compañía de Transporte',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'CompaniaTransporte',
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
            'title' => 'Compañía',
        )
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Compañía',
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