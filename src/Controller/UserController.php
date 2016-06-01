<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.01.
 */

namespace Controller;

use Silex\Application;

class UserController {

    public function getAll(Application $app) {
        $sql = "SELECT * FROM users";
        $users = $app['db']->fetchAssoc($sql);
        return $app->json($users);
    }

    public function get(Application $app, $id){
        $sql = "SELECT * FROM users WHERE id = ?";
        $user = $app['db']->fetchAssoc($sql, [(int) $id]);
        return $app->json($user);
    }

    public function create(Application $app) {
        /** @var \Symfony\Component\HttpFoundation\Request $request */
        $request = $app['request'];
        // $sql = "INSERT INTO users VALUES ()";
        return $app->json($request->request->all());
    }

    public function update($id){
        return "update $id";
    }

    public function delete($id){
        return "delete $id";
    }

}