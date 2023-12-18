<?php

class Group
{
    private int $id;
    private string $name;
    public User $user;

    /**
     * @param int $id
     * @param string $name
     * @param User $user
     */
    public function __construct(string $name, User $user,int $id=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->user = $user;
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
    public function insert():void{
        $this->id = crud::create('groups', ['name' => $this->name,'id_user'=> $this->user->getId()]);
    }
    public function update(){
        crud::update('groups', $this->id, ['name' => $this->name]);
        return crud::read('groups', $this->id);
    }
    public function delete():void{
        crud::delete('groups', $this->id);
    }
    public function select(){
        return crud::read('groups', $this->id);
    }

}