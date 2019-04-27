<?php

namespace Extcode\Contacts\Domain\Model;

class Address extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Title
     *
     * @var string
     */
    protected $title;

    /**
     * Type
     *
     * @var string
     */
    protected $type = 'INTL,POSTAL,PARCEL,WORK';

    /**
     * Street
     *
     * @var string
     */
    protected $street = '';

    /**
     * Street Number
     *
     * @var string
     */
    protected $streetNumber = '';

    /**
     * Addition to Address 1
     *
     * @var string
     */
    protected $addition1 = '';

    /**
     * Addition to Address 2
     *
     * @var string
     */
    protected $addition2 = '';

    /**
     * ZIP
     *
     * @var string
     */
    protected $zip = '';

    /**
     * City
     *
     * @var string
     */
    protected $city = '';

    /**
     * Region
     *
     * @var string
     */
    protected $region = '';

    /**
     * Country
     *
     * @var \Extcode\Contacts\Domain\Model\Country
     */
    protected $country = '';

    /**
     * Post Box
     *
     * @var string
     */
    protected $postBox = '';

    /**
     * Lon
     *
     * @var string
     */
    protected $lon = '';

    /**
     * Lat
     *
     * @var string
     */
    protected $lat = '';

    /**
     * TT Content
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Extcode\Contacts\Domain\Model\TtContent>
     * @lazy
     */
    protected $ttContent;

    /**
     * Contact
     *
     * @var \Extcode\Contacts\Domain\Model\Contact
     */
    protected $contact = null;

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $type
     *
     * @throws \InvalidArgumentException
     */
    public function setType($type)
    {
        $types = ['DOM', 'INTL', 'POSTAL', 'PARCEL', 'HOME', 'WORK'];

        if (!in_array($type, $types)) {
            throw new \InvalidArgumentException(
                'The type have to be a set of (DOM, INTL, POSTAL, PARCEL, HOME, WORK).',
                1373530255
            );
        }

        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $streetNumber
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param string $addition1
     */
    public function setAddition1($addition1)
    {
        $this->addition1 = $addition1;
    }

    /**
     * @return string
     */
    public function getAddition1()
    {
        return $this->addition1;
    }

    /**
     * @param string $addition2
     */
    public function setAddition2($addition2)
    {
        $this->addition2 = $addition2;
    }

    /**
     * @return string
     */
    public function getAddition2()
    {
        return $this->addition2;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param \Extcode\Contacts\Domain\Model\Country $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return \Extcode\Contacts\Domain\Model\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $postBox
     */
    public function setPostBox($postBox)
    {
        $this->postBox = $postBox;
    }

    /**
     * @return string
     */
    public function getPostBox()
    {
        return $this->postBox;
    }

    /**
     * @param string $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param string $lon
     */
    public function setLon($lon)
    {
        $this->lon = $lon;
    }

    /**
     * @return string
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Returns the contact
     *
     * @return \Extcode\Contacts\Domain\Model\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Returns the TT Content
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getTtContent()
    {
        return $this->ttContent;
    }

    /**
     * Sets the TT Content
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $ttContent
     */
    public function setTtContent($ttContent)
    {
        $this->ttContent = $ttContent;
    }
}
