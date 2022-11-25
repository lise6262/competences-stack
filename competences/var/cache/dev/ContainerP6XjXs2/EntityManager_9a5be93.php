<?php

namespace ContainerP6XjXs2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2fddd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer35b27 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa6e47 = [
        
    ];

    public function getConnection()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getConnection', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getMetadataFactory', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getExpressionBuilder', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'beginTransaction', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getCache', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'transactional', array('func' => $func), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'commit', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->commit();
    }

    public function rollback()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'rollback', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getClassMetadata', array('className' => $className), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'createQuery', array('dql' => $dql), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'createNamedQuery', array('name' => $name), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'createQueryBuilder', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'flush', array('entity' => $entity), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'clear', array('entityName' => $entityName), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->clear($entityName);
    }

    public function close()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'close', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->close();
    }

    public function persist($entity)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'persist', array('entity' => $entity), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'remove', array('entity' => $entity), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'refresh', array('entity' => $entity), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'detach', array('entity' => $entity), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'merge', array('entity' => $entity), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'contains', array('entity' => $entity), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getEventManager', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getConfiguration', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'isOpen', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getUnitOfWork', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getProxyFactory', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'initializeObject', array('obj' => $obj), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'getFilters', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'isFiltersStateClean', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'hasFilters', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return $this->valueHolder2fddd->hasFilters();
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

        $instance->initializer35b27 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2fddd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2fddd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2fddd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, '__get', ['name' => $name], $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        if (isset(self::$publicPropertiesa6e47[$name])) {
            return $this->valueHolder2fddd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fddd;

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

        $targetObject = $this->valueHolder2fddd;
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
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fddd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2fddd;
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
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, '__isset', array('name' => $name), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fddd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2fddd;
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
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, '__unset', array('name' => $name), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2fddd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2fddd;
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
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, '__clone', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        $this->valueHolder2fddd = clone $this->valueHolder2fddd;
    }

    public function __sleep()
    {
        $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, '__sleep', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;

        return array('valueHolder2fddd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer35b27 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer35b27;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer35b27 && ($this->initializer35b27->__invoke($valueHolder2fddd, $this, 'initializeProxy', array(), $this->initializer35b27) || 1) && $this->valueHolder2fddd = $valueHolder2fddd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2fddd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2fddd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
