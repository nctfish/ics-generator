<?php

namespace Nctfish\IcsGenerator;


class IcsGenerator
{
    private $url;
    private $dtstart;
    private $dtend;
    private $summary;
    private $description;
    private $location;

    /**
     * @param mixed $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param mixed $dtstart
     * @return $this
     */
    public function setDtstart($dtstart)
    {
        $this->dtstart = $dtstart;

        return $this;
    }

    /**
     * @param mixed $dtend
     * @return $this
     */
    public function setDtend($dtend)
    {
        $this->dtend = $dtend;

        return $this;
    }

    /**
     * @param mixed $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @param mixed $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param mixed $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    public function getString()
    {
      $string = "BEGIN:VCALENDAR" . PHP_EOL;
      $string .= "VERSION:2.0" . PHP_EOL;
      $string .= "BEGIN:VEVENT" . PHP_EOL;
      $string .= "URL:" . $this->url . PHP_EOL;
      $string .= "DTSTART:" . $this->dtstart . PHP_EOL;
      $string .= "DTEND:" . $this->dtend . PHP_EOL;
      $string .= "SUMMARY:" . $this->summary . PHP_EOL;
      $string .= "DESCRIPTION:" . $this->description . PHP_EOL;
      $string .= "LOCATION:" . $this->location . PHP_EOL;
      $string .= "END:VEVENT" . PHP_EOL;
      $string .= "END:VCALENDAR" . PHP_EOL;

      return $string;
    }
}
