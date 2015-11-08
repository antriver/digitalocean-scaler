<?php

namespace Tmd\CloudScaler\Models;

/**
 * Represents a single DNS record at some provider.
 *
 * @package Tmd\CloudScaler
 */
class DnsRecord
{
    /**
     * @var string
     */
    public $domain;

    /**
     * A, AAAA, CNAME, TXT, SRV, LOC, MX, NS, SPF
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @param array $data Containing the properties defined in this class.
     */
    public function __construct(array $data)
    {
        $this->domain = $data['domain'];
        $this->type = $data['type'];
        $this->name = $data['name'];
        $this->value = $data['value'];
        $this->ttl = $data['ttl'];
    }
}
