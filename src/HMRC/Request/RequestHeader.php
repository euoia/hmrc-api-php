<?php

namespace HMRC\Request;

abstract class RequestHeader
{
    /** @var string content type for request */
    public const CONTENT_TYPE = 'Content-Type';

    /** @var string accept header for request */
    public const ACCEPT = 'Accept';

    /** @var string authorization header for request */
    public const AUTHORIZATION = 'Authorization';

    // Fraud prevention headers below
    // https://developer.service.hmrc.gov.uk/api-documentation/docs/fraud-prevention

    /** @var string A string representing the connection method used for the request. */
    public const GOV_CLIENT_CONNECTION_METHOD = 'Gov-Client-Connection-Method';

    /** @var string The public IP address (IPv4 or IPv6) from which the originating device makes the request. */
    public const GOV_CLIENT_PUBLIC_IP = 'Gov-Client-Public-IP';

    /** @var string The public TCP port that the originating device uses when initiating the request. */
    public const GOV_CLIENT_PUBLIC_PORT = 'Gov-Client-Public-Port';

    /** @var string An identifier unique to an originating device. This should be generated by an application and persistently stored on the device. */
    public const GOV_CLIENT_DEVICE_ID = 'Gov-Client-Device-ID';

    /** @var string A key-value data structure containing the user identifiers. The keys should indicate accounts the user holds. */
    public const GOV_CLIENT_USER_IDS = 'Gov-Client-User-IDs';

    /** @var string The local timezone of the originating device, expressed as UTC±<hh>:<mm>. */
    public const GOV_CLIENT_TIMEZONE = 'Gov-Client-Timezone';

    /** @var string A list of all local IP addresses (IPv4 and IPv6) available to the originating device. */
    public const GOV_CLIENT_LOCAL_IPS = 'Gov-Client-Local-IPs';

    /** @var string Information related to the originating device’s screens */
    public const GOV_CLIENT_SCREENS = 'Gov-Client-Screens';

    /** @var string The number of pixels of the window on the originating device in which the user initiated (directly or indirectly) the API call to HMRC. */
    public const GOV_CLIENT_WINDOW_SIZE = 'Gov-Client-Window-Size';

    /** @var string An attempt to identify the operating system family, version, device manufacturer and model of the originating device. */
    public const GOV_CLIENT_USER_AGENT = 'Gov-Client-User-Agent';

    /** @var string A list of browser plugins on the originating device. */
    public const GOV_CLIENT_BROWSER_PLUGINS = 'Gov-Client-Browser-Plugins';

    /** @var string JavaScript-reported user agent string from the originating device. */
    public const GOV_CLIENT_BROWSER_JS_USER_AGENT = 'Gov-Client-Browser-JS-User-Agent';

    /** @var string Whether the Do Not Track option is enabled on the browser. */
    public const GOV_CLIENT_BROWSER_DO_NOT_TRACK = 'Gov-Client-Browser-Do-Not-Track';

    /** @var string A list of key-value data structures containing details of the multi-factor authentication (MFA) statuses related to the API call */
    public const GOV_CLIENT_MULTI_FACTOR = 'Gov-Client-Multi-Factor';

    /** @var string A key-value data structure of software versions involved in handling a request */
    public const GOV_VENDOR_VERSION = 'Gov-Vendor-Version';

    /** @var string A key-value data structure of hashed license keys relating to the vendor software initiating the API request on the originating device. */
    public const GOV_VENDOR_LICENSE_IDS = 'Gov-Vendor-License-IDs';

    /** @var string The public IP address of the servers to which the originating device sent their requests. */
    public const GOV_VENDOR_PUBLIC_IP = 'Gov-Vendor-Public-IP';

    /** @var string The list of MAC addresses available on the originating device. */
    public const GOV_CLIENT_MAC_ADDRESSES = 'Gov-Client-MAC-Addresses';

    /** @var string A list that details hops over the internet between services that terminate TLS. */
    public const GOV_VENDOR_FORWARDED = 'Gov-Vendor-Forwarded';
}
