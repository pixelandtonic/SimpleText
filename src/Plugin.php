<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\simpletext;

use Craft;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Fields;
use yii\base\Event;
use craft\simpletext\models\Settings;

/**
 * Simple Text plugin
 */
class Plugin extends \craft\base\Plugin
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // Register our field type.
        Event::on(Fields::class, Fields::EVENT_REGISTER_FIELD_TYPES, function(RegisterComponentTypesEvent $event) {
            $event->types[] = Field::class;
        });
    }
}
