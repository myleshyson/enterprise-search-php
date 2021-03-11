<?php

/**
 * NOTE: THIS FILE IS AUTO-GENERATED, DO NOT EDIT
 *
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Request;

use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\ReadOnlyState;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Update the read-only flag's state
 * @internal
 */
class PutReadOnly extends Request
{
	/**
	 * @param ReadOnlyState $read_only_state
	 */
	public function __construct(ReadOnlyState $read_only_state)
	{
		$this->method = 'PUT';
		$this->path = "/api/ent/v1/internal/read_only_mode";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $read_only_state;
	}
}