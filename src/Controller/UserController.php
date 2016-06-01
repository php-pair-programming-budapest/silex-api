<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.01.
 */

namespace Controller;


class UserController {

    public function getAll() {
        return 'GetAll';
    }

    public function get($id){
        return "get $id";
    }

    public function create() {
        return 'create';
    }

    public function update($id){
        return "update $id";
    }

    public function delete($id){
        return "delete $id";
    }

}