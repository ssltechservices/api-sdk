<?php

namespace Secretel\ApiSdk\Objects;

class HondaLead {

    public $title;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $testriderequestdate;
    public $testridetimeslot;
    public $dealer;
    public $model;
    public $variant;
    public $colour;
    public $accesories;
    public $market;
    public $productgroup;
    public $requesttype;
    public $contacttype;
    public $contacturl;
    public $contactdatetime;
    public $contactipaddress;
    public $campaign;
    public $source;
    public $city;
    public $licence;
    public $comments;
    public $uuid;

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(?string $title): self {
        $this->title = $title;

        return $this;
    }

    public function getSupplier(): ?string {
        return $this->supplier;
    }

    public function setSupplier(?string $supplier): self {
        $this->supplier = $supplier;

        return $this;
    }

    public function getCity(): ?string {
        return $this->city;
    }

    public function setCity(?string $city): self {
        $this->city = $city;

        return $this;
    }

    public function getLicence(): ?string {
        return $this->licence;
    }

    public function setLicence(?string $licence): self {
        $this->licence = $licence;

        return $this;
    }

    public function getCampaign(): ?string {
        return $this->campaign;
    }

    public function setCampaign(?string $campaign): self {
        $this->campaign = $campaign;

        return $this;
    }

    public function getSource(): ?string {
        return $this->source;
    }

    public function setSource(?string $source): self {
        $this->source = $source;

        return $this;
    }

    public function getFirstname(): ?string {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(?string $email): self {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?int {
        return $this->phone;
    }

    public function setPhone(?int $phone): self {
        $this->phone = $phone;

        return $this;
    }

    public function getTestriderequestdate(): ?\DateTimeInterface {
        return $this->testriderequestdate;
    }

    public function setTestriderequestdate(?\DateTimeInterface $testriderequestdate): self {
        $this->testriderequestdate = $testriderequestdate;

        return $this;
    }

    public function getTestridetimeslot(): ?string {
        return $this->testridetimeslot;
    }

    public function setTestridetimeslot(?string $testridetimeslot): self {
        $this->testridetimeslot = $testridetimeslot;

        return $this;
    }

    public function getDealer(): ?string {
        return $this->dealer;
    }

    public function setDealer(?string $dealer): self {
        $this->dealer = $dealer;

        return $this;
    }

    public function getModel(): ?string {
        return $this->model;
    }

    public function setModel(?string $model): self {
        $this->model = $model;

        return $this;
    }

    public function getVariant(): ?string {
        return $this->variant;
    }

    public function setVariant(?string $variant): self {
        $this->variant = $variant;

        return $this;
    }

    public function getColour(): ?string {
        return $this->colour;
    }

    public function setColour(?string $colour): self {
        $this->colour = $colour;

        return $this;
    }

    public function getAccesories(): ?string {
        return $this->accesories;
    }

    public function setAccesories(?string $accesories): self {
        $this->accesories = $accesories;

        return $this;
    }

    public function getMarket(): ?string {
        return $this->market;
    }

    public function setMarket(?string $market): self {
        $this->market = $market;

        return $this;
    }

    public function getProductgroup(): ?string {
        return $this->productgroup;
    }

    public function setProductgroup(?string $productgroup): self {
        $this->productgroup = $productgroup;

        return $this;
    }

    public function getRequesttype(): ?string {
        return $this->requesttype;
    }

    public function setRequesttype(?string $requesttype): self {
        $this->requesttype = $requesttype;

        return $this;
    }

    public function getContacttype(): ?string {
        return $this->contacttype;
    }

    public function setContacttype(?string $contacttype): self {
        $this->contacttype = $contacttype;

        return $this;
    }

    public function getContacturl(): ?string {
        return $this->contacturl;
    }

    public function setContacturl(?string $contacturl): self {
        $this->contacturl = $contacturl;

        return $this;
    }

    public function getContactdatetime(): ?\DateTimeInterface {
        return $this->contactdatetime;
    }

    public function setContactdatetime(?\DateTimeInterface $contactdatetime): self {
        $this->contactdatetime = $contactdatetime;

        return $this;
    }

    public function getContactipaddress(): ?string {
        return $this->contactipaddress;
    }

    public function setContactipaddress(?string $contactipaddress): self {
        $this->contactipaddress = $contactipaddress;

        return $this;
    }

    public function getComments(): ?string {
        return $this->comments;
    }

    public function setComments(?string $comments): self {
        $this->comments = $comments;

        return $this;
    }
    
    public function setUuid(?string $uuid): self {
        $this->uuid = $uuid;

        return $this;
    }

    public function getUuid(): ?string {
        return $this->uuid;
    }

}
