<?php

namespace Foo;

class Foo
{

	public function bar($parameter)
	{
		switch ($parameter) {
			case null:
				return [
					'foo' => in_array(
						'foo',
						[]
					),
				];

			default:
				return [];
		}
	}

}
