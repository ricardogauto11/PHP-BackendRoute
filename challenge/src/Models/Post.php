<?php

namespace App;

class Post
{
    protected $title;
    protected $content;
    protected $category;

    public function addCategory(Category $category)
    {
        $this->category = $category;
    }

    public function addTitle(string $title)
    {
        $this->title = $title;
    }

    public function addContent(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): array
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'category' => $this->category->getName()
        ];
    }
}