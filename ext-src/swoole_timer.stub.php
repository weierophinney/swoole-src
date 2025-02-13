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

namespace Swoole {

	/** @not-serializable */
	final class Timer
    {
    	public function set(array $settings): bool {}
		public function after(int $ms, callable $callback, mixed ...$params): bool|int {}
		public function tick(int $ms, callable $callback, mixed ...$params): bool|int {}
		public function exists(): bool {}
		public function info(): array|bool {}
		public function stats(): array {}
		public function list(): mixed {}
		public function clear(): bool {}
		public function clearAll(): bool {}
    }
}