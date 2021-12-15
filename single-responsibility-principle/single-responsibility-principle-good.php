<?php

// An example of a code that does conform to the Single responsibility principle
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
}

interface PrintableBlogPost
{
    public function print(BlogPost $blogPost);
}

class JsonBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost)
    {
        return json_encode($blogPost->getData());
    }
}

class HtmlBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost)
    {
        return `<article>
                    <h1>{$blogPost->getTitle()}</h1>
                    <article>
                        <h2>{$blogPost->getDate()->format('Y-m-d H:i:s')} - {$blogPost->getAuthor()->fullName()}</h2>
                        <p>{$blogPost->getContent()}</p>
                    </article>
                </article>`;
    }
}
