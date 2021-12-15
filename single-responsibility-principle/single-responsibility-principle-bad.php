<?php

// An example of a code that does not conform to the Single responsibility principle
// Referring to https://accesto.com/blog/solid-php-solid-principles-in-php#SingleResponsibilityPrinciple

class BlogPost
{
    private Author $author;
    private string $title;
    private string $content;
    private \DateTime $date;

    // ..

    public function getData(): array
    {
        return [
            'author' => $this->author->fullName(),
            'title' => $this->title,
            'content' => $this->content,
            'timestamp' => $this->date->getTimestamp(),
        ];
    }

    public function printJson(): string
    {
        return json_encode($this->getData());
    }

    public function printHtml(): string
    {
        return `<article>
                    <h1>{$this->title}</h1>
                    <article>
                        <p>{$this->date->format('Y-m-d H:i:s')}</p>
                        <p>{$this->author->fullName()}</p>
                        <p>{$this->content}</p>
                    </article>
                </article>`;
    }
}
