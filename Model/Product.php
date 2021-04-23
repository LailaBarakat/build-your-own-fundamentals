<?php


class Product
{
    private int $id;
    private string $name;
    private float $price;
    private float $tax;

    /**
     * Product constructor.
     * @param int $id
     * @param string $name
     * @param float $price
     * @param float $tax
     */
    public function __construct(int $id, string $name, float $price, float $tax)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     */
    public function setTax(float $tax): void
    {
        $this->tax = $tax;
    }

}