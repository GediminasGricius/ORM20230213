<?php
namespace models;

use helper\DB;
use PDO;


class Category
{
    private ?int $id;
    private ?string $name;
    private ?string $image;
    private ?int $count;

    /**
     * @param int|null $id
     * @param string|null $name
     * @param string|null $image
     * @param int|null $count
     */
    public function __construct(?string $name, ?string $image, ?int $count, ?int $id=null )
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->count = $count;
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
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int|null $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return void
     */
    public function save():void{
        $pdo=DB::getDB();
        if ($this->id===null){
            $stm=$pdo->prepare("INSERT INTO categories (name, img, count  ) VALUES (?, ?, ?)");
            $stm->execute([$this->name, $this->image, $this->count]);
            $this->id=$pdo->lastInsertId();
        }else{
            $stm=$pdo->prepare("UPDATE categories SET name=?, img=?, count=? WHERE id=?");
            $stm->execute([$this->name, $this->image, $this->count, $this->id]);
        }
    }

    /**
     * @param int $id
     * @return Category
     */
    public static function get(int $id):Category{
        $pdo=DB::getDB();
        $stm=$pdo->prepare("SELECT * FROM categories WHERE id=?");
        $stm->execute([$id]);
        $category=$stm->fetch(PDO::FETCH_ASSOC);
        return new Category($category['name'],$category['img'], $category['count'], $category['id']);
    }


    /**
     * Paimamos visos kategorijos ir sugražinamas jų masyvas
     *
     * @return Category[]
     */
    public static function all():array{
        $pdo=DB::getDB();
        $stm=$pdo->prepare("SELECT * FROM categories ORDER BY name");
        $stm->execute([]);
        $result=[];
        foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $category){
            $result[]=new Category($category['name'],$category['img'], $category['count'], $category['id']);
        }
        return $result;
    }

    /**
     *
     * @return void
     */
    public function delete(){
        $pdo=DB::getDB();
        $stm=$pdo->prepare("DELETE FROM categories WHERE id=?");
        $stm->execute([$this->id]);
    }

    /**
     * @return Product[]
     */
    public function getProducts(){
        return Product::all($this->id);
    }

}
















