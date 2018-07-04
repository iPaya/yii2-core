<?php


namespace iPaya\Core;

/**
 * Class Module
 * @package Core
 * @property string $title
 */
abstract class Module extends \yii\base\Module
{
    /**
     * @return string
     */
    abstract public function getTitle(): string;

    /**
     * 模块菜单列表
     *
     * @return array
     */
    abstract public function menu(): array;
}
