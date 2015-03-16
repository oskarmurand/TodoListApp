<?php

class PHPParser_Tests_taskTest extends PHPUnit_Framework_TestCase
{
    public function testGetSet() {
        $task = new PHPParser_task('/* Some task */', 1);

        $this->assertEquals('/* Some task */', $task->getText());
        $this->assertEquals('/* Some task */', (string) $task);
        $this->assertEquals(1, $task->getLine());

        $task->setText('/* Some other task */');
        $task->setLine(10);

        $this->assertEquals('/* Some other task */', $task->getText());
        $this->assertEquals('/* Some other task */', (string) $task);
        $this->assertEquals(10, $task->getLine());
    }

    /**
     * @dataProvider provideTestReformatting
     */
    public function testReformatting($taskText, $reformattedText) {
        $task = new PHPParser_task($taskText);
        $this->assertEquals($reformattedText, $task->getReformattedText());
    }

    public function provideTestReformatting() {
        return array(
            array('// Some text' . "\n", '// Some text'),
            array('/* Some text */', '/* Some text */'),
            array(
                '/**
     * Some text.
     * Some more text.
     */',
                '/**
 * Some text.
 * Some more text.
 */'
            ),
            array(
                '/*
        Some text.
        Some more text.
    */',
                '/*
    Some text.
    Some more text.
*/'
            ),
            array(
                '/* Some text.
       More text.
       Even more text. */',
                '/* Some text.
   More text.
   Even more text. */'
            ),
            // invalid task -> no reformatting
            array(
                'hallo
    world',
                'hallo
    world',
            ),
        );
    }
}