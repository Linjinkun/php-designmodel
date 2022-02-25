<?php

require_once './../TextAbstract.php';

/**
 * Class Text
 *
 * 该类是以 JSON 格式输出的具体文本组件类
 */
class Text extends TextAbstract
{
    /**
     * 以 JSON 格式输出的渲染
     *
     * @return string
     */
    public function render()
    {
        return json_encode(['content' => $this->text]);
    }
}
