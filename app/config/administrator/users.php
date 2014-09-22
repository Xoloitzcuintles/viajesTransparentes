<?php 

return array(
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Users',
    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'User',
    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'User',
    /**
     * The columns array
     *
     * @type array
     */
    'columns' => array(
        'id' => array(
            'title' => 'Id'
        ),
        'email' => array(
            'title' => 'Email',
//            'output' => '<img src="/uploads/homepagesliders/resize/(:value)" height="100" />',
        ),
        'name' => array(
            'title' => 'Name',
//            'output' => '<a href="(:value)" target="_blank">(:value)</a>',
        ),
        'created_at' => array(
            'title' => 'Member since',
//            'relationship' => 'product',
//            'select' => '(:table).name',
        )
    ),
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'email' => array(
            'title' => 'Email',
            'type' => 'text'
        ),
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
/*        'image' => array(
            'title' => 'Image (1200 x 1314)',
            'type' => 'image',
            'naming' => 'random',
            'location' => 'public/uploads/products/originals/',
            'size_limit' => 2,
            'sizes' => array(
                array(1200, 1314, 'crop', 'public/uploads/products/resize/', 100),
                array(452, 495, 'landscape', 'public/uploads/products/detail/', 100),
            )
        )*/
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