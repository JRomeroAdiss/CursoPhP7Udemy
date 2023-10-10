<?php

namespace Blog\Models;

class Article {
    protected int $id;
    protected string $title;
    protected string $content;

    public function __construct(int $id, string $title, string $content)
    {
        $this->id= $id;
        $this->title= $title;
        $this->content= $content;
    }

    /**
     * @return int
     */
    public function getId():int{
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle():string{
        return $this->title;
    }

    /**
     * @return string
     */
    public function getIContent():string{
        return $this->content;
    }
}