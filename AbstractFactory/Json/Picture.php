<?php

require_once './../PictureAbstract.php';

/**
 * Picture类
 *
 * 该类是以 JSON 格式输出的具体图片组件类
 */
class Picture extends PictureAbstract
{
    /**
     * JSON 格式输出
     *
     * @return string
     */
    public function render()
    {
        return json_encode(['title' => $this->name, 'path' => $this->path]);
    }
}
