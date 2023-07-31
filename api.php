<?php

class Api
{
    /* 3 метода для получения данных, 
     1 метод для добавления, редактирования и удаления, как указано в задании.
     Почему статик? Указано вызов метода класса, а не объекта.
     Т. к. в задании не было написано про HTML/Js - их не использовал.
    */

    static function getUsers()
    {
        $json = file_get_contents('https://jsonplaceholder.typicode.com/users');
        $data = json_decode($json, true);
        return $data;

    }

    static function getPosts()
    {
        $json = file_get_contents('https://jsonplaceholder.typicode.com/posts');
        $data = json_decode($json, true);
        return $data;

    }

    static function getTodos()
    {
        $json = file_get_contents('https://jsonplaceholder.typicode.com/todos');
        $data = json_decode($json, true);
        return $data;

    }


    // 1 методом для добавления, редактирования и удаления
    static function editPost($action, $posts, $postId = 0, $title = '', $textBody = '')
    {
        if ($action == 'add') {
            $posts[] = ['userId' => count($posts) + 1, 'title' => $title, 'body' => $textBody];
            return $posts;
        } elseif ($action == 'edit') {
            $userId = $posts[$postId - 1]['userId'];
            $posts[$postId - 1] = ['userId' => $userId, 'id' => $postId, 'title' => $title, 'body' => $textBody];
            return $posts;
        } elseif ($action == 'remove') {
            unset($posts[$postId - 1]);
            return $posts;
        }

    }

}

// Вызываем методы и получаем в ответ массивы.
$users = Api::getUsers();
$posts = Api::getPosts();
$todos = Api::getTodos();


// Тут значения которые мы потенциально получаем с фронта
$id = 99;
$title = 'Новый заголовок';
$textBody = 'Новый текст в пост';

// Вызываем метод класса с разными параметрами
// Первый параметр обозначает, что мы будем делать (add/remove/edit)
$added = Api::editPost('add', $posts, 0, $title, $textBody);
$removed = Api::editPost('remove', $posts, $id);
$edited = Api::editPost('edit', $posts, $id, $title, $textBody);

// Проверяем. Заголовок и текст меняются, id и userId остаются прежними
var_dump($edited);