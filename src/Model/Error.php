<?php

namespace Todstoychev\Econt\Model;

class Error extends AbstractModel
{
    /**
     * @var array
     */
    protected $messages = [];

    /**
     * @var string
     */
    protected $code;

    /**
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param array $messages
     *
     * @return Error
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return Error
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}
