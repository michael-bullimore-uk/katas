<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class PangramTest extends TestCase
{
    public function testIsPangram(): void
    {
        $pangram = new \App\Pangram();

        $pangramStrings = [
            'Abcdefghijklmnopqrstuvwxyz',
            'The quick brown fox jumps over the lazy dog',
            '1L%r+f4G!e7w V z q6M h4d F3b+t O2n e K^g+c#S^i4i X7c-u P5d7j Y6a(a B',
        ];
        foreach ($pangramStrings as $pangramString) {
            $this->assertTrue($pangram->is($pangramString));
        }

        $nonPangramStrings = [
            'Abcdefghijklmnopqrstuvwxy',
            '5B!e i J x*p F h d!A:o q D y n6L%u9i.G9f2g4C a h+K!m+z:R t!j:B w s C',
        ];
        foreach ($nonPangramStrings as $nonPangramString) {
            $this->assertFalse($pangram->is($nonPangramString));
        }
    }
}
