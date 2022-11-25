<?php

namespace ContainerKM2vbAc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercf9d8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1fd4a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties76617 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getConnection', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getMetadataFactory', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getExpressionBuilder', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'beginTransaction', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getCache', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'transactional', array('func' => $func), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'commit', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->commit();
    }

    public function rollback()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'rollback', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getClassMetadata', array('className' => $className), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'createQuery', array('dql' => $dql), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'createNamedQuery', array('name' => $name), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'createQueryBuilder', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'flush', array('entity' => $entity), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'clear', array('entityName' => $entityName), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->clear($entityName);
    }

    public function close()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'close', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->close();
    }

    public function persist($entity)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'persist', array('entity' => $entity), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'remove', array('entity' => $entity), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'refresh', array('entity' => $entity), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'detach', array('entity' => $entity), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'merge', array('entity' => $entity), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'contains', array('entity' => $entity), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getEventManager', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getConfiguration', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'isOpen', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getUnitOfWork', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getProxyFactory', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'initializeObject', array('obj' => $obj), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'getFilters', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'isFiltersStateClean', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'hasFilters', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return $this->valueHoldercf9d8->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1fd4a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercf9d8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercf9d8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercf9d8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, '__get', ['name' => $name], $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        if (isset(self::$publicProperties76617[$name])) {
            return $this->valueHoldercf9d8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf9d8;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf9d8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf9d8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf9d8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, '__isset', array('name' => $name), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf9d8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercf9d8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, '__unset', array('name' => $name), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf9d8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercf9d8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, '__clone', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        $this->valueHoldercf9d8 = clone $this->valueHoldercf9d8;
    }

    public function __sleep()
    {
        $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, '__sleep', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;

        return array('valueHoldercf9d8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1fd4a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1fd4a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1fd4a && ($this->initializer1fd4a->__invoke($valueHoldercf9d8, $this, 'initializeProxy', array(), $this->initializer1fd4a) || 1) && $this->valueHoldercf9d8 = $valueHoldercf9d8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf9d8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercf9d8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
