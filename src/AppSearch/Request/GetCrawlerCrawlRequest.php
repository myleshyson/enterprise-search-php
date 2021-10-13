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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Get crawl request details
 *
 * @internal
 * @see https://www.elastic.co/guide/en/app-search/current/web-crawler-api-reference.html#web-crawler-apis-get-crawler-crawl-requests-id
 */
class GetCrawlerCrawlRequest extends Request
{
	/**
	 * @param string $engineName Name of the engine
	 * @param string $crawlRequestId Crawl Request ID
	 */
	public function __construct(string $engineName, string $crawlRequestId)
	{
		$this->method = 'GET';
		$engine_name = urlencode($engineName);
		$crawl_request_id = urlencode($crawlRequestId);
		$this->path = "/api/as/v0/engines/$engine_name/crawler/crawl_requests/$crawl_request_id";
	}
}