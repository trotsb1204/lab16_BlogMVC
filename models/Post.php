<?php

use Carbon\Carbon;

class Post {
    public $title;
    public $content;
    public $createdAt;


    public function __construct(string $title, string $content, ?string $createdAt = null) {
        $this -> title = $title;
        $this -> content = $content;
        $this -> createdAt = $createdAt ?? Carbon::now()->locale('uk')->isoFormat('DD MM YYYY');
    }

    public static function getAll() {
        return [
            new Post("Мій перший пост", 
                    "Це приклад першого поста в блозі.",
                    Carbon::now()->subDays(5)->locale('uk')->isoFormat('DD MM YYYY')
                    ),
            new Post("MVC у PHP", 
                    "MVC -- це розділення коду на три частини: Model, View, Controller.",
                    Carbon::now()->subDays(3)->locale('uk')->isoFormat('DD MM YYYY')
                    ),
            new Post("GitHub", 
                    "GitHub -- сервіс для зберігання та спільної роботи над кодом.",
                    Carbon::now()->subDays(1)->locale('uk')->isoFormat('DD MM YYYY')
                    ),
            new Post("Наступний крок", 
                    "Далі можна додати пошук, Markdown або базу даних",
                    Carbon::now()->locale('uk')->isoFormat('DD MM YYYY')
                    ),   
        ];
    }

    public static function search(string $query): array {
    $all = self::getAll();
    if (trim($query) === '') {
        return $all;
    }

    return array_filter($all, function(Post $post) use ($query) {
        return mb_stripos($post->title, $query) !== false || mb_stripos($post->content, $query) !== false;
    });
}
}