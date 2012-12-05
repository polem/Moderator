<?php

namespace Moderator;

class Content
{
    protected $title;
    protected $body;
    protected $author;

    /**
     * Get title.
     *
     * @return title.
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title.
     *
     * @param title the value to set.
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get body.
     *
     * @return body.
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set body.
     *
     * @param body the value to set.
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * setAuthor
     *
     * @param Author $author
     */
    public function setAuthor(Author $author)
    {
        $this->author = $author;
        return $this;
    }
}
