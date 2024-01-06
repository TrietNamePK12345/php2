<?php 
class HomeModel extends Model{
        private $__table = 'users';

    function tableFill()
    {
        return 'users';
    }

    function fieldFill(){
        return '*';  
    }

    function primaryKey(){
        return 'id';
    }

    public function showUsers()
    {
        $data = $this->db->table('users')
            ->select('*')
            ->get();
        return $data;
    }



 
}

?>