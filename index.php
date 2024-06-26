<?php

class Post
{
    public string $title;

    public bool $published;

    public string $author;

    public function __construct(string $title, string $author, bool $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

function isPublished(Post $post): bool {
    return $post->published;
}

function isNotPublished(Post $post): bool {
    return ! $post->published;
}


$posts = [
    new Post('My First Post', 'AV', true),
    new Post('My Second Post', 'CV', true),
    new Post('My Third Post', 'AV', true),
    new Post('My Fourth Post', 'YT', false)
];

$unpublishedPosts = array_filter($posts, 'isNotPublished');

$publishedPosts = array_filter($posts, 'isPublished');

$posts = array_map(function ($post): array {
    return (array) $post;
}, $posts);

$titles = array_column($posts,'author', 'title');

foreach (array_keys($titles) as $title) {
    echo $title . ', by ' . $titles[$title] . '<br>';
}

var_dump($publishedPosts);