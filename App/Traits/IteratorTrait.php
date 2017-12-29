<?php

namespace App;
trait IteratorTrait
{
    /**
     * Установить внутренний указатель массива на его первый элемент
     */
    public function rewind(): void
    {
        reset($this->data);
    }

    /**
     * Возвратить ключ на который указывает внутренний указатель
     * @return int|null|string
     */
    public function key()
    {
        return key($this->data);
    }

    /**
     * Возвратить текущий элемент массива
     * @return mixed
     */
    public function current()
    {
        return current($this->data);
    }

    /**
     *  Передвинуть внутренний указатель массива на одну позицию вперёд
     */
    public function next(): void
    {
        next($this->data);
    }

    /**
     * Проверить не вышел ли внутренний указатель за пределы массива
     * @return bool
     */
    public function valid()
    {
        return key($this->data) !== null;
    }
}