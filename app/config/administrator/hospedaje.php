<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Hospedajes',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Hospedaje',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'Hospedaje',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'hotel' => array(
            'title' => 'Hotel'
        ),
        'fecha_inicio' => array(
            'title' => 'Fecha Inicio'
        ),
        'fecha_fin' => array(
            'title' => 'Fecha Fin'
        ),
        'inst_hospedaje' => array(
            'title' => 'Institución que paga hospedaje'
        ),
        'costo' => array(
            'title' => 'Costo'
        ),
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'hotel' => array(
            'title' => 'Hotel',
            'type' => 'text'
        ),
        'fecha_inicio' => array(
            'title' => 'Fecha Inicio',
            'type' => 'date'
        ),
        'fecha_fin' => array(
            'title' => 'Fecha Fin',
            'type' => 'date'
        ),
        'inst_hospedaje' => array(
            'title' => 'Institución que paga hospedaje',
            'type' => 'text'
        ),
        'costo' => array(
            'title' => 'Costo',
            'type' => 'number',
            'decimals' => 2
        ),
    ),
    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'fecha_inicio',
        'direction' => 'asc',
    ),
);

?>