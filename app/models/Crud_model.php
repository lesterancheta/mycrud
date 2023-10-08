<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Crud_model extends Model {
	public function insert($username, $password,$email,$age){
        $data=array(
            'username'=>$username,
            'password'=>$password,
            'email'=>$email,
            'age'=>$age
        );

        $result= $this->db->table('users')->insert($data);
    }

    public function show(){
        return $this->db->raw("select * from users");
    }
    
    public function delete($id){
        $result= $this->db->table('users')->where(array('id'=>$id))->delete();
        if($result==true) {
            return true;
        }
    }

    public function update($id,$username,$password,$email,$age){
        $data=array(
            'username'=>$username,
            'password'=>$password,
            'email'=>$email,
            'age'=>$age
        );
        return $this->db->table('users')->where('id',$id)->update($data);
    }

    public function get($id){
        return $this->db->table('users')->where('id', $id)->get();
    }
}
?>
