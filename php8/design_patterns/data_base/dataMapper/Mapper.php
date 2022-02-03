<?php

namespace data_base\dataMapper;

abstract class Mapper
{
    protected \PDO $pdo;

    public function __construct()
    {
        $reg = Registry::instance();
        $this->pdo = $reg->getPdo();
    }

    public function find(int $id): ?DomainObject
    {
        $this->selectStmt()->execute([$id]);
        $row = $this->selectStmt()->fetch();
        $this->selectStmt()->closeCursor();

        if (! is_array($row)) {
            return null;
        }

        if (! isset($row['id'])) {
            return null;
        }

        $object = $this->createObject($row);

        return $object;
    }

    public function createObject(array $row): DomainObject
    {
        return $this->doCreateObject($row);
    }

    public function insert(DomainObject $obj): void
    {
        $this->doInsert($obj);
    }

    abstract public function update(DomainObject $obj): void;
    abstract protected function doCreateObject(array $row): DomainObject;
    abstract protected function doInsert(DomainObject $obj): void;
    abstract protected function selectStmt(): \PDOStatement;
    abstract protected function targetClass(): string;
}