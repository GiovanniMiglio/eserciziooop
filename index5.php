<?php
require_once 'class.php';
class Post {
    public $title;
    public $Category;
    public $Tag;
    public function __construct($title, Category $Category, $Tag) {
        $this->title = $title;
        $this->Category = $Category;
        $this->Tag = $Tag;
    }
    public function getPost() {
        return "Titolo: {$this->title}, Categoria: {$this->Category->getCategory()}, Tag: {$this->Tag}\n";
    }
}
$post1 = new Post("Notizie dal mondo", new Attualità(), "mondo");
$post2 = new Post("Partite di calcio", new Sport(), "calcio");
$post3 = new Post("Ultime dal mondo dello spettacolo", new Gossip(), "spettacolo");
$post4 = new Post("Eventi storici", new Storia(), "storia");
$posts = [$post1, $post2, $post3, $post4];
foreach ($posts as $post) {
    echo $post->getPost();
}