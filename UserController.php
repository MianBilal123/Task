<?php

require_once 'User.php';

class UserController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new User($db);
    }

    public function create($name, $email) {
        if ($this->userModel->create($name, $email)) {
            return 'User created successfully';
        }
        return 'Failed to create user';
    }

    public function read() {
        $users = $this->userModel->read();
        return json_encode($users);
    }

    public function update($id, $name, $email) {
        if ($this->userModel->update($id, $name, $email)) {
            return 'User updated successfully';
        }
        return 'Failed to update user';
    }

    public function delete($id) {
        if ($this->userModel->delete($id)) {
            return 'User deleted successfully';
        }
        return 'Failed to delete user';
    }
}
?>