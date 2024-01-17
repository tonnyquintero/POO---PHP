<?php

interface Search {
    public function all();
}

class User implements Search {
    public function all() {
        return "Obteniedo a los users, XML";
    }
}

class Post implements Search {
    public function all() {
        return "Obteniedo a los post, JSON";
    }
}

$user = new User();
echo $user->all();

$post = new Post();
echo $post->all();