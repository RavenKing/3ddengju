<?php
class ProductPic extends AppModel {
	var $name = 'ProductPic';
	var $validate = array(
		'product_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	'src' => array('Empty' => array('check' => false)),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
var $actsAs = array (
	// models/behaviors/meio_upload.php
    'MeioUpload' => array (
        'src' => array (
            'dir' => 'img/images',
            'create_directory' => true,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/gif', 'image/png'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png', '.gif'),'thumbsizes' => array(
          'normal' => array('width'=>200, 'height'=>200),
        ),
		
		'default'=>'default.jpg',
		)
    )
); 
	
	
	
	
	
	}
