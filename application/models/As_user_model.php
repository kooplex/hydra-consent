<?php

/**
 * Created by PhpStorm.
 * User: davidt
 * Date: 2019.04.09.
 * Time: 10:59
 */
class As_user_model extends BF_Model
{
    protected $table_name = 'as_users';

    public function find_all()
    {
        $this->db->join('bf_authsource','bf_as_users.authsource = bf_authsource.id');
        return parent::find_all();
    }

    public function getprofile(){
        return [
            'username'=>$this->username,
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'displayname'=>$this->displayname,
            'email'=>$this->email,
        ];
    }
    
}