<?php

require_once './../TextAbstract.php';
/**
 * Text 类
 *
 * 该类是以 HTML 渲染的具体文本组件类
 */
class Text extends TextAbstract
{
    /**
     * HTML 格式输出的文本
     *
     * @return string
     */
    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}
