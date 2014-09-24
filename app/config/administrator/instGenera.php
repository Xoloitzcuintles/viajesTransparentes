<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Instituciones que Generan',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Institución que Genera',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'InstGenera',
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
            'title' => 'Institución',
        )
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'name' => array(
            'title' => 'Institución',
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