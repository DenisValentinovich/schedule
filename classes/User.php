<?php


/**
 * Description of User
 *
 * @author den_v
 */
class User extends Table{
    public $user_id = 0;
    public $lastname = '';
    public $firstname = '';
    public $patronymic = '';
    public $login = '';
    public $pass = '';
    public $birthday = '';
    public $gender_id = 0;
    public $role_id = 0;
    public $active = 1;


    public function validate() {
        return false;
    }

}
