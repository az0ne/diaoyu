<?php
class FisheriesModelDB extends MyDB {
    
    //field_arr start
    protected $field_arr = array (
      'fisheryid' => 
      array (
        'name' => 'FISHERYID',
        'type' => 'bigint',
        'max_length' => '20',
        'validate' => 1,
      ),
      'uid' => 
      array (
        'name' => 'UID',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
      'latitude' => 
      array (
        'name' => 'LATITUDE',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'longitude' => 
      array (
        'name' => 'LONGITUDE',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'region_code' => 
      array (
        'name' => 'REGION_CODE',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
      'region_code_index_province' => 
      array (
        'name' => 'REGION_CODE_INDEX_PROVINCE',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
      'region_code_index_city' => 
      array (
        'name' => 'REGION_CODE_INDEX_CITY',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
      'fave_count' => 
      array (
        'name' => 'FAVE_COUNT',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
      'show_count' => 
      array (
        'name' => 'SHOW_COUNT',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
      'share_count' => 
      array (
        'name' => 'SHARE_COUNT',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
      'comment_count' => 
      array (
        'name' => 'COMMENT_COUNT',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
      'create_time' => 
      array (
        'name' => 'CREATE_TIME',
        'type' => 'int',
        'max_length' => '11',
        'validate' => 1,
      ),
      'charge_type' => 
      array (
        'name' => 'CHARGE_TYPE',
        'type' => 'tinyint',
        'max_length' => '3',
        'validate' => 1,
      ),
      'geohash' => 
      array (
        'name' => 'GEOHASH',
        'type' => 'char',
        'max_length' => '8',
        'validate' => 1,
      ),
      'photo_infos' => 
      array (
        'name' => 'PHOTO_INFOS',
        'type' => 'varchar',
        'max_length' => '1024',
        'validate' => 1,
      ),
      'title' => 
      array (
        'name' => 'TITLE',
        'type' => 'varchar',
        'max_length' => '1024',
        'validate' => 1,
      ),
      'describe' => 
      array (
        'name' => 'DESCRIBE',
        'type' => 'varchar',
        'max_length' => '4096',
        'validate' => 1,
      ),
      'address' => 
      array (
        'name' => 'ADDRESS',
        'type' => 'varchar',
        'max_length' => '1024',
        'validate' => 1,
      ),
      'tags' => 
      array (
        'name' => 'TAGS',
        'type' => 'varchar',
        'max_length' => '1024',
        'validate' => 1,
      ),
      'status' => 
      array (
        'name' => 'STATUS',
        'type' => 'tinyint',
        'max_length' => '8',
        'validate' => 1,
      ),
      'hot_type' => 
      array (
        'name' => 'HOT_TYPE',
        'type' => 'tinyint',
        'max_length' => '8',
        'validate' => 1,
      ),
      'hot_end' => 
      array (
        'name' => 'HOT_END',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
      'notice1' => 
      array (
        'name' => 'NOTICE1',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'notice2' => 
      array (
        'name' => 'NOTICE2',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'notice3' => 
      array (
        'name' => 'NOTICE3',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'notice4' => 
      array (
        'name' => 'NOTICE4',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'notice5' => 
      array (
        'name' => 'NOTICE5',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'notice6' => 
      array (
        'name' => 'NOTICE6',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'notice7' => 
      array (
        'name' => 'NOTICE7',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'notice8' => 
      array (
        'name' => 'NOTICE8',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'notice9' => 
      array (
        'name' => 'NOTICE9',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'notice10' => 
      array (
        'name' => 'NOTICE10',
        'type' => NULL,
        'max_length' => NULL,
        'validate' => 1,
      ),
      'praise_count' => 
      array (
        'name' => 'PRAISE_COUNT',
        'type' => 'int',
        'max_length' => '10',
        'validate' => 1,
      ),
    );
        //field_arr end 68e22b8d271d65da8d6fff1e039159f41
    
    public function __construct($dbname = null, array $db_config = array()) {
        parent::__construct($dbname, $db_config);
        parent::setTableName("t_fisheries");
    }
}
?>
