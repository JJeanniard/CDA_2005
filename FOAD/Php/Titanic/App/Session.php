<?php
/**
 * Class abstrait pour la gestion de session d'utilisateur et des messages
 */

namespace Titanic;

abstract class Session{

    /**
     * Type de message 'error', 'success', 'warning' ...
     * Le message doit etre cours et comprehensible
     * @param string $messageType
     * @param string $message
     */
    function addMessage(string $messageType, string $message)
    {

    }
}
