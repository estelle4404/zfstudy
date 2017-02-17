<?php
/**
 * Created by PhpStorm.
 * User: Estelle
 * Date: 2017/2/17
 * Time: 14:47
 */

namespace Blog\Mapper;

use Blog\Model\PostInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\Sql\Sql;
use Zend\Stdlib\Hydrator\HydrationInterface;

class ZendDbSqlMapper implements PostMapperInterface
{
    protected $dbAdapter;
    protected $hydrator;
    protected $postPrototype;

    public function __construct(AdapterInterface $dbAdapter,HydrationInterface $hydrator,PostInterface $postPrototype)
    {
        $this->dbAdapter = $dbAdapter;
        $this->hydrator = $hydrator;
        $this->postPrototype = $postPrototype;
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function findAll()
    {
        $sql = new Sql($this->dbAdapter);
        $select = $sql->select('posts');
        $stmt = $sql->prepareStatementForSqlObject($select);
        $result = $stmt->execute();

        if($result instanceof ResultInterface && $result->isQueryResult()){
            $resultSet = new HydratingResultSet($this->hydrator,$this->postPrototype);

            return $resultSet->initialize($result);
        }

        return array();
    }
}