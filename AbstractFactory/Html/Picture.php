<?php

require_once './../PictureAbstract.php';
/**
 * Picture 类
 *
 * 该类是以 HTML 格式渲染的具体图片类
 */
class Picture extends PictureAbstract
{
    /**
     * HTML 格式输出的图片
     *
     * @return string
     */
    public function render()
    {
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }
}
