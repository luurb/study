<?php

namespace data_base\dataMapper;

use enterprise\domainModel\Space;

class SpaceMapper extends Mapper
{
    private \PDOStatement $selectStmt;
    private \PDOStatement $updateStmt;
    private \PDOStatement $insertStmt;

    public function __construct()
    {
        parent::__construct();
        $this->selectStmt = $this->pdo->prepare(
            "SELECT * FROM `space` WHERE id=?"
        );

        $this->updateStmt = $this->pdo->prepare(
            "UPDATE `space` SET id=?, venue=? `name`=? WHERE id=?"
        );

        $this->insertStmt = $this->pdo->prepare(
            "INSERT INTO `space` (venue, `name`) VALUES(?)"
        );
    }

    protected function targetClass(): string
    {
        return Space::class;
    }

    public function getCollection(array $raw): SpaceCollection
    {
        return new SpaceCollection($raw, $this);
    }

    protected function doCreateObject(array $row): Space
    {
        $obj = new Space(
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