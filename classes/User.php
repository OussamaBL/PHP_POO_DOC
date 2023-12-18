<?php

class User
{
    private int $id;
    private string $name;
    private string $email;

    /**
     * @param string $name
     * @param string $email
     * @param int|null $id
     */
    public function __construct(string $name, string $email,int $id=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }



    public function insert():void{
        $this->id = crud::create('users', ['name' => $this->name, 'email' => $this->email]);
    }
    public function update(){
        crud::update('users', $this->id, ['name' => $this->name]);
        return crud::read('users', $this->id);
    }
    public function delete():void{
        crud::delete('users', $this->id);
    }
    public function select(){
        return crud::read('users', $this->id);
    }



}