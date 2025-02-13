<?php
/*
 +----------------------------------------------------------------------+
 | Open Swoole                                                          |
 +----------------------------------------------------------------------+
 | Copyright (c) 2021-now Open Swoole Group                             |
 +----------------------------------------------------------------------+
 | This source file is subject to version 2.0 of the Apache license,    |
 | that is bundled with this package in the file LICENSE, and is        |
 | available through the world-wide-web at the following url:           |
 | http://www.apache.org/licenses/LICENSE-2.0.html                      |
 | If you did not receive a copy of the Apache2.0 license and are unable|
 | to obtain it through the world-wide-web, please send a note to       |
 | hello@swoole.co.uk so we can mail you a copy immediately.            |
 +----------------------------------------------------------------------+
*/

/** @not-serializable */
namespace Swoole\Coroutine {
	final class Channel {
		public function __construct(?int $capacity = 1) {}
		public function push(mixed $data, ?float $timeout = -1): bool {}
		public function pop(?float $timeout = -1): mixed|bool {}
		public function close(): bool {}
		public function length(): int {}
		public function stats(): array {}
		public function isEmpty(): bool {}
		public function isFull(): bool {}
	}
}