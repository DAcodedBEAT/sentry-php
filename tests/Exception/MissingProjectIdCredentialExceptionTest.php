<?php

declare(strict_types=1);

namespace Sentry\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Sentry\Exception\MissingProjectIdCredentialException;

final class MissingProjectIdCredentialExceptionTest extends TestCase
{
    public function testGetMessage(): void
    {
        $exception = new MissingProjectIdCredentialException();

        $this->assertSame('The project ID of the DSN is required to authenticate with the Sentry server.', $exception->getMessage());
    }
}
