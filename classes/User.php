<?php

class User
{
    private int $id;
    private string $name;
    private string $email;

    /**
     * @param int $id
     * @param string $name
     * @param string $email
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



    public function insert($orm):void{
        $this->id = $orm->create('users', ['name' => $this->name, 'email' => $this->email]);
    }
    public function update($orm){
        $orm->update('users', $this->id, ['name' => $this->name]);
        return $orm->read('users', $this->id);
    }
    public function delete($orm):void{
        $orm->delete('users', $this->id);
    }
    public function select($orm){
        return $orm->read('users', $this->id);
    }



}