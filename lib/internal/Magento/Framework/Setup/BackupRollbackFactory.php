<?php
/**
 * Factory for Acl resource
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Setup;

use Magento\Framework\ObjectManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BackupRollbackFactory
{
    /**
     * @var ObjectManagerInterface
     */
    protected $_objectManager;

    /**
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    /**
     * Create and return BackupRollback
     *
     * @param OutputInterface $output
     * @return BackupRollback
     */
    public function create($output)
    {
        $log = $this->_objectManager->create('Magento\Framework\Setup\ConsoleLogger', ['output' => $output]);
        return $this->_objectManager->create('Magento\Framework\Setup\BackupRollback', ['log' => $log]);
    }
}
