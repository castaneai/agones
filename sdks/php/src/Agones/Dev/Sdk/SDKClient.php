<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google LLC All Rights Reserved.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Agones\Dev\Sdk;

/**
 * SDK service to be used in the GameServer SDK to the Pod Sidecar
 */
class SDKClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Call when the GameServer is ready
     * @param \Agones\Dev\Sdk\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Ready(\Agones\Dev\Sdk\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/agones.dev.sdk.SDK/Ready',
        $argument,
        ['\Agones\Dev\Sdk\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Call to self Allocation the GameServer
     * @param \Agones\Dev\Sdk\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Allocate(\Agones\Dev\Sdk\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/agones.dev.sdk.SDK/Allocate',
        $argument,
        ['\Agones\Dev\Sdk\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Call when the GameServer is shutting down
     * @param \Agones\Dev\Sdk\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Shutdown(\Agones\Dev\Sdk\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/agones.dev.sdk.SDK/Shutdown',
        $argument,
        ['\Agones\Dev\Sdk\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Send a Empty every d Duration to declare that this GameSever is healthy
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Health($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/agones.dev.sdk.SDK/Health',
        ['\Agones\Dev\Sdk\PBEmpty','decode'],
        $metadata, $options);
    }

    /**
     * Retrieve the current GameServer data
     * @param \Agones\Dev\Sdk\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetGameServer(\Agones\Dev\Sdk\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/agones.dev.sdk.SDK/GetGameServer',
        $argument,
        ['\Agones\Dev\Sdk\GameServer', 'decode'],
        $metadata, $options);
    }

    /**
     * Send GameServer details whenever the GameServer is updated
     * @param \Agones\Dev\Sdk\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function WatchGameServer(\Agones\Dev\Sdk\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/agones.dev.sdk.SDK/WatchGameServer',
        $argument,
        ['\Agones\Dev\Sdk\GameServer', 'decode'],
        $metadata, $options);
    }

    /**
     * Apply a Label to the backing GameServer metadata
     * @param \Agones\Dev\Sdk\KeyValue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetLabel(\Agones\Dev\Sdk\KeyValue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/agones.dev.sdk.SDK/SetLabel',
        $argument,
        ['\Agones\Dev\Sdk\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Apply a Annotation to the backing GameServer metadata
     * @param \Agones\Dev\Sdk\KeyValue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetAnnotation(\Agones\Dev\Sdk\KeyValue $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/agones.dev.sdk.SDK/SetAnnotation',
        $argument,
        ['\Agones\Dev\Sdk\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Marks the GameServer as the Reserved state for Duration
     * @param \Agones\Dev\Sdk\Duration $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Reserve(\Agones\Dev\Sdk\Duration $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/agones.dev.sdk.SDK/Reserve',
        $argument,
        ['\Agones\Dev\Sdk\PBEmpty', 'decode'],
        $metadata, $options);
    }

}
