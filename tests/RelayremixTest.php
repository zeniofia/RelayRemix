<?php
/**
 * Tests for RelayRemix
 */

use PHPUnit\Framework\TestCase;
use Relayremix\Relayremix;

class RelayremixTest extends TestCase {
    private Relayremix $instance;

    protected function setUp(): void {
        $this->instance = new Relayremix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Relayremix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
