<?php
    function registerUser_model($user_email, $user_password, $user_firstname, $user_lastname) {
        $data = [
            'user_email_new'=> $user_email, 
            'user_password_new' => $user_password,
            'user_firstname_new' => $user_firstname,
            'user_lastname_new' => $user_lastname,
            'create' => '',
        ];
        return $data;
    }
    function loginUser_model($user_email, $user_password) {
        $data = [
            'user_email'=> $user_email, 
            'user_password' => $user_password,
            'login' => '',
        ];
        return $data;
    }
?>