<?php
namespace json7\alitools\Core\Regions;

use json7\alitools\Core\RpcAcsRequest;

define("LOCATION_SERVICE_PRODUCT_NAME", "Location");
define("LOCATION_SERVICE_DOMAIN", "location.aliyuncs.com");
define("LOCATION_SERVICE_VERSION", "2015-06-12");
define("LOCATION_SERVICE_DESCRIBE_ENDPOINT_ACTION", "DescribeEndpoints");
define("LOCATION_SERVICE_REGION", "cn-hangzhou");
define("CACHE_EXPIRE_TIME", 3600);

class DescribeEndpointRequest extends RpcAcsRequest
{
    function __construct($id, $serviceCode, $endPointType) {
        parent::__construct(LOCATION_SERVICE_PRODUCT_NAME, LOCATION_SERVICE_VERSION, LOCATION_SERVICE_DESCRIBE_ENDPOINT_ACTION);

        $this->queryParameters["Id"] = $id;
        $this->queryParameters["ServiceCode"] = $serviceCode;
        $this->queryParameters["Type"] = $endPointType;
        $this->setRegionId(LOCATION_SERVICE_REGION);

        $this->setAcceptFormat("JSON");
    }
}