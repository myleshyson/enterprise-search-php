<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\EnterpriseSearch\Schema;

use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\AppSearchProductUsageInfo;
use Elastic\EnterpriseSearch\EnterpriseSearch\Schema\WorkplaceSearchProductUsageInfo;

class ProductUsageInfo
{
	public AppSearchProductUsageInfo $app_search;
	public WorkplaceSearchProductUsageInfo $workplace_search;


	public function __construct(AppSearchProductUsageInfo $app_search, WorkplaceSearchProductUsageInfo $workplace_search)
	{
		$this->app_search = $app_search;
		$this->workplace_search = $workplace_search;
	}
}