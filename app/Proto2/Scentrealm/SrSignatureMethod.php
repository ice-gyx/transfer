<?php
/**
 * Auto generated from Scentrealm.proto at 2016-10-08 15:04:40
 *
 * Proto2.Scentrealm package
 */

namespace Proto2\Scentrealm {
/**
 * SrSignatureMethod enum
 */
final class SrSignatureMethod
{
    const SSM_hmac_sha1 = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SSM_hmac_sha1' => self::SSM_hmac_sha1,
        );
    }
}
}