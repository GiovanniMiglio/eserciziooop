<?php
abstract class Category {
  abstract public function getCategory();
}
class Attualità extends Category {
  public function getCategory() {
    return "Attualità "."\n";
  }
}
class Sport extends Category {
  public function getCategory() {
    return "Sport "."\n";
  }
}
class Gossip extends Category {
  public function getCategory() {
    return "Gossip ". "\n";
  }
} 
class Storia extends Category {
  public function getCategory() {
    return "Storia "."\n";
  }
}
$categories = [new Attualità(), new Sport(), new Gossip(), new Storia()];
foreach ($categories as $category) {
  echo $category->getCategory();
}