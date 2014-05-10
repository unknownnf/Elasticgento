<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * PHP Version 5.3
 *
 * @category  Hackathon
 * @package   Hackathon_ElasticgentoCore
 * @author    Daniel Niedergesäß <daniel.niedergesaess@gmail.com>
 * @author    Andreas Emer <emer@mothership.de>
 * @author    Michael Ryvlin <ryvlin@gmail.com>
 * @author    Johann Nicklas <johann@n1klas.de>
 * @copyright Copyright (c) 2014 Mothership GmbH
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      http://mage-hackathon.de/
 *
 * Elasticgento setup
 *
 */

/* @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

try {
    $installer->getConnection()->addColumn(
        $installer->getTable('catalog/eav_attribute'),
        'search_weight', "tinyint(1) unsigned NOT NULL DEFAULT '1' after `is_searchable`"
    );
    $installer->getConnection()->addColumn(
        $installer->getTable('catalog/eav_attribute'),
        'search_analyzer', "varchar(255)NOT NULL DEFAULT '' after `search_weight`"
    );
} catch (Exception $e) {
    // ignore
}

$installer->endSetup();