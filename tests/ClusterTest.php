<?php

/*
 * Copyright 2022-Present Couchbase, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

use Couchbase\StellarNebula\Bucket;
use Couchbase\StellarNebula\Cluster;
use Couchbase\StellarNebula\Collection;
use PHPUnit\Framework\TestCase;

final class ClusterTest extends TestCase
{
    private const CONNECTION_STRING_ENV = "TEST_CONNECTION_STRING";
    private const BUCKET_NAME_ENV = "TEST_BUCKET";

    private const DEFAULT_CONNECTION_STRING = "localhost";
    private const DEFAULT_BUCKET_NAME = "default";

    private Cluster $cluster;
    private Collection $defaultCollection;
    private Bucket $bucket;

    protected function setUp(): void
    {
        parent::setUp();
        $this->cluster = new Cluster(getenv(self::CONNECTION_STRING_ENV) ?: self::DEFAULT_CONNECTION_STRING);
        $this->bucket = $this->cluster->bucket(getenv(self::BUCKET_NAME_ENV) ?: self::DEFAULT_BUCKET_NAME);
        $this->defaultCollection = $this->bucket->defaultCollection();
    }

    protected function tearDown(): void
    {
        $this->cluster->close();
        parent::tearDown();
    }

    public function testCanDoKvUpsert(): void
    {
        $res = $this->defaultCollection->upsert("foo", ["value" => 42]);
        $this->assertNotNull($res->cas());
    }
}
