<?php

class PHPParser_task
{
    protected $text;
    protected $line;

    /**
     * Constructs a task node.
     *
     * @param string $text task text (including task delimiters like /*)
     * @param int    $line Line number the task started on
     */
    public function __construct($text, $line = -1) {
        $this->text = $text;
        $this->line = $line;
    }

    /**
     * Gets the task text.
     *
     * @return string The task text (including task delimiters like /*)
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Sets the task text.
     *
     * @param string $text The task text (including task delimiters like /*)
     */
    public function setText($text) {
        $this->text = $text;
    }

    /**
     * Gets the line number the task started on.
     *
     * @return int Line number
     */
    public function getLine() {
        return $this->line;
    }

    /**
     * Sets the line number the task started on.
     *
     * @param int $line Line number
     */
    public function setLine($line) {
        $this->line = $line;
    }

    /**
     * Gets the task text.
     *
     * @return string The task text (including task delimiters like /*)
     */
    public function __toString() {
        return $this->text;
    }

    /**
     * Gets the reformatted task text.
     *
     * "Reformatted" here means that we try to clean up the whitespace at the
     * starts of the lines. This is necessary because we receive the tasks
     * without trailing whitespace on the first line, but with trailing whitespace
     * on all subsequent lines.
     *
     * @return mixed|string
     */
    public function getReformattedText() {
        $text = trim($this->text);
        if (false === strpos($text, "\n")) {
            // Single line tasks don't need further processing
            return $text;
        } elseif (preg_match('((*BSR_ANYCRLF)(*ANYCRLF)^.*(?:\R\s+\*.*)+$)', $text)) {
            // Multi line task of the type
            //
            //     /*
            //      * Some text.
            //      * Some more text.
            //      */
            //
            // is handled by replacing the whitespace sequences before the * by a single space
            return preg_replace('(^\s+\*)m', ' *', $this->text);
        } elseif (preg_match('(^/\*\*?\s*[\r\n])', $text) && preg_match('(\n(\s*)\*/$)', $text, $matches)) {
            // Multi line task of the type
            //
            //    /*
            //        Some text.
            //        Some more text.
            //    */
            //
            // is handled by removing the whitespace sequence on the line before the closing
            // */ on all lines. So if the last line is "    */", then "    " is removed at the
            // start of all lines.
            return preg_replace('(^' . preg_quote($matches[1]) . ')m', '', $text);
        } elseif (preg_match('(^/\*\*?\s*(?!\s))', $text, $matches)) {
            // Multi line task of the type
            //
            //     /* Some text.
            //        Some more text.
            //        Even more text. */
            //
            // is handled by taking the length of the "/* " segment and leaving only that
            // many space characters before the lines. Thus in the above example only three
            // space characters are left at the start of every line.
            return preg_replace('(^\s*(?= {' . strlen($matches[0]) . '}(?!\s)))m', '', $text);
        }

        // No idea how to format this task, so simply return as is
        return $text;
    }
}