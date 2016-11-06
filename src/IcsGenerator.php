<?php

namespace Nctfish\IcsGenerator;

use DateTime;

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
     *
     * @return $this
     */
    public function setUrl($url): IcsGenerator
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param mixed $dtstart
     *
     * @return $this
     */
    public function setDtstart(DateTime $dtstart): IcsGenerator
    {
        $this->dtstart = $dtstart;

        return $this;
    }

    /**
     * @param mixed $dtend
     *
     * @return $this
     */
    public function setDtend(DateTime $dtend): IcsGenerator
    {
        $this->dtend = $dtend;

        return $this;
    }

    /**
     * @param mixed $summary
     *
     * @return $this
     */
    public function setSummary($summary): IcsGenerator
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * @param mixed $description
     *
     * @return $this
     */
    public function setDescription($description): IcsGenerator
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param mixed $location
     *
     * @return $this
     */
    public function setLocation($location): IcsGenerator
    {
        $this->location = $location;

        return $this;
    }

    public function getString(): string
    {
        $string = 'BEGIN:VCALENDAR'.PHP_EOL;
        $string .= 'VERSION:2.0'.PHP_EOL;
        $string .= 'BEGIN:VEVENT'.PHP_EOL;
        $string .= 'URL:'.$this->url.PHP_EOL;
        $string .= 'DTSTART:'.$this->dtstart->format('Ymd\THis\Z').PHP_EOL;
        $string .= 'DTEND:'.$this->dtend->format('Ymd\THis\Z').PHP_EOL;
        $string .= 'SUMMARY:'.$this->summary.PHP_EOL;
        $string .= 'DESCRIPTION:'.$this->description.PHP_EOL;
        $string .= 'LOCATION:'.$this->location.PHP_EOL;
        $string .= 'END:VEVENT'.PHP_EOL;
        $string .= 'END:VCALENDAR'.PHP_EOL;

        return $string;
    }
}
