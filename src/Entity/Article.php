<?php // src/Entity/Article.php
    namespace App\Entity;
    use Doctrine\ORM\Mapping as ORM;
    /**
     * @ORM\Entity
     * @ORM\Table(name="product")
     */
    class Article {
        /**
         * @ORM\Column(type="integer")
         * @ORM\Id()
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;
        /**
         * @ORM\Column(type="string", length=100)
         */
        private $title;
        /**
         * @ORM\Column(type="text")
         */
        private $body;
        
        //Getters and Setters
        public function getID(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getBody(){
            return $this->body;
        }

        public function setTitle($title){
            $this->title = $title;
        }
        public function setBody($body){
            $this->body = $body;
        }
    }
?>