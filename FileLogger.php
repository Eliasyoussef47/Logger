<?php

// FileLogger: logs messages to a file

class FileLogger {

    public function __construct($severity, $filename) {

    }

    public function Error($message) {
        $this->log($message, "ERROR");
    }

    public function Warning($message) {
        $this->log($message, "WARNING");
    }

    public function Info($message) {
        $this->log($message, "INFO");
    }

    private function log($message, $severity) {

    }
}