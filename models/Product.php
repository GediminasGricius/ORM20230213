<?php
namespace models;


use helper\DB;
use PDO;

class Product
{
    private ?int $id;
    private ?string $name;
    private ?int $price;
    private ?string $description;
    private ?int $categoryId;

    /**
     * @param int|null $id
     * @param string|null $name
     * @param int|null $price
     * @param string|null $description
     * @param int|null $categoryId
     */
    public function __construct(?string $name, ?int $price, ?string $description, ?int $categoryId, ?int $id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->categoryId = $categoryId;
    }

    /**
     * Paimamos visos kategorijos ir sugražinamas jų masyvas
     *
     * @return Product[]
     */
    public static function all($categoryId=null):array{
        $pdo=DB::getDB();
        if ($categoryId==null){
            $stm=$pdo->prepare("SELECT * FROM products ORDER BY name");
            $stm->execute([]);
        }else{
            $stm=$pdo->prepare("SELECT * FROM products WHERE category_id=? ORDER BY name");
            $stm->execute([$categoryId]);
        }
        $result=[];

        foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $product){
            $result[]=new Product($product['name'],$product['price'], $product['description'], $product['category_id'], $product['id']);
        }
        return $result;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int|null $price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int|null $categoryId
     */
    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }


}