<?php

namespace Moderator;

class Author
{
    protected $name;
    protected $mail;
    protected $ip;
    protected $url;

    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * Get name.
     *
     * @return name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name.
     *
     * @param name the value to set.
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get mail.
     *
     * @return mail.
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set mail.
     *
     * @param mail the value to set.
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * Get ip.
     *
     * @return ip.
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set ip.
     *
     * @param ip the value to set.
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * Get url.
     *
     * @return url.
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url.
     *
     * @param url the value to set.
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}
