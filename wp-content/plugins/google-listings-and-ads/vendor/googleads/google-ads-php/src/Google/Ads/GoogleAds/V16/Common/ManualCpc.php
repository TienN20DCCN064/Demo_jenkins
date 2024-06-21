<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/common/bidding.proto

namespace Google\Ads\GoogleAds\V16\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Manual click-based bidding where user pays per click.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.common.ManualCpc</code>
 */
class ManualCpc extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>optional bool enhanced_cpc_enabled = 2;</code>
     */
    protected $enhanced_cpc_enabled = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enhanced_cpc_enabled
     *           Whether bids are to be enhanced based on conversion optimizer data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>optional bool enhanced_cpc_enabled = 2;</code>
     * @return bool
     */
    public function getEnhancedCpcEnabled()
    {
        return isset($this->enhanced_cpc_enabled) ? $this->enhanced_cpc_enabled : false;
    }

    public function hasEnhancedCpcEnabled()
    {
        return isset($this->enhanced_cpc_enabled);
    }

    public function clearEnhancedCpcEnabled()
    {
        unset($this->enhanced_cpc_enabled);
    }

    /**
     * Whether bids are to be enhanced based on conversion optimizer data.
     *
     * Generated from protobuf field <code>optional bool enhanced_cpc_enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnhancedCpcEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enhanced_cpc_enabled = $var;

        return $this;
    }

}

