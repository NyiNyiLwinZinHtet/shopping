<?php
// phpcs:ignore
namespace app\Models;

use DateTime;
// phpcs:ignore
class Model {
    protected int $id;  
    /**
     * CONSTRUCTOR
     * 
     * @param DateTime $created_at time created
     * @param DateTime $updated_at time updated
     *
     * @return void
     */
    public function __construct(    
        public DateTime $created_at,
        public DateTime $updated_at
    ) {
    
    }
}
