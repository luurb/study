<?php

namespace data_base\dataMapper;

class VenueMapper extends Mapper
{
    private \PDOStatement $selectStmt;
    private \PDOStatement $updateStmt;
    private \PDOStatement $insertStmt;

    public function __construct()
    {
        parent::__construct();
        $this->selectStmt = $this->pdo->prepare(
            "SELECT * FROM venue WHERE id=?"
        );

        $this->updateStmt = $this->pdo->prepare(
            "UPDATE venue SET name=?, id=? WHERE id=?"
        );

        $this->insertStmt = $this->pdo->prepare(
            "INSERT INTO venue (name) VALUES(?)"
        );
    }

    protected function targetClass(): string
    {
        return Venue::class;
    }

    public function getCollection(array $raw): VenueCollection
    {
        return new VenueCollection($raw, $this);
    }

    protected function doCreateObject(array $row): Venue
    {
        $obj = new Venue(
            (int)$row['id'],
            $row['name']
        );

        return $obj;
    }

    protected function doInsert(DomainObject $obj): void
    {
        $values = [$obj->getName()];
        $this->insertStmt->execute($values);
        $id = $this->pdo->lastInsertId();
        $obj->setId((int)$id);
    }

    public function update(DomainObject $obj): void
    {
        $values = [
            $obj->getName(),
            $obj->getId(),
            $obj->getId()
        ];
        
        $this->updateStmt->execute($values);
    }

    protected function selectStmt(): \PDOStatement
    {
        return $this->selectStmt;
    }
}