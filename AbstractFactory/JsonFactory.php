<?php

require_once './AbstractFactory.php';
/**
 * JsonFactory类
 *
 * JsonFactory 是用于创建 JSON 组件的工厂
 */
class JsonFactory extends AbstractFactory
{
    /**
     * 创建图片组件
     *
     * @param string $path
     * @param string $name
     *
     * @return Picture
     */
    public function createPicture($path, $name = '')
    {
        require_once './Json/Picture.php';

        return new Picture($path, $name);
    }

    /**
     * 创建文本组件
     *
     * @param string $content
     *
     * @return Text
     */
    public function createText($content)
    {
        require_once './Json/Text.php';

        return new Text($content);
    }
}
