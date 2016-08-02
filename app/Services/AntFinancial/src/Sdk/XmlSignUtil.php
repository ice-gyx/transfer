<?php
namespace AntFinancial\Sdk;

class XmlSignUtil
{
    
   /** 公钥 RSA */
    public static $RSA_publicKey  = "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvZprNztidrvAObGaomWTe8Ra+VYSIGGVsHZlPV9YKYH2A6pbcFnfk1gf+mI2TPDK0ID/0ET1KxIgsUiHlbqTpCzuoZdWnOhPmDNoCD39LAOrZ6w/DQaVPUCohwGCG6qX7MJ5shSVjr9Vxh79bLNAoK10BdXMUdSoE3we9TSEnf4zCPoMT1Wm6LCaca0m77k12K16IWfsdjE8V0p7IoiCv2AQHPPRlBq0ANIQoKNiwYUVcSgO73NOAXukuNBL42jAYsop8S3HgoNsH2IWgEyseLSqi2VwVRjqPLPpu0/zGBxljT4TVmKd7J8IuaWMtXKc5XBQBqKWotVVsojolK7NuQIDAQAB";
    /** 私钥 RSA */
    public static $RSA_privateKey = "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC9mms3O2J2u8A5sZqiZZN7xFr5VhIgYZWwdmU9X1gpgfYDqltwWd+TWB/6YjZM8MrQgP/QRPUrEiCxSIeVupOkLO6hl1ac6E+YM2gIPf0sA6tnrD8NBpU9QKiHAYIbqpfswnmyFJWOv1XGHv1ss0CgrXQF1cxR1KgTfB71NISd/jMI+gxPVabosJpxrSbvuTXYrXohZ+x2MTxXSnsiiIK/YBAc89GUGrQA0hCgo2LBhRVxKA7vc04Be6S40EvjaMBiyinxLceCg2wfYhaATKx4tKqLZXBVGOo8s+m7T/MYHGWNPhNWYp3snwi5pYy1cpzlcFAGopai1VWyiOiUrs25AgMBAAECggEAG0LrrYpVUvsV3XXC5RyzwvTtm7Ibcxp02mV7kwJ1e6pbBBXnhdT2R4pBNtAOPKvWjXouzfRMSAAYQUVLcWTdO5rWSNeotXDVmO2zRJQdJcn1SDfE7QuIQ8FbOeYmnfG+XGVt+APrqRWrsIveJlXzseaeqwQdl5p6/Co5jUoa01hsp1ZilQJBzNHwnAtqiNG4rRNgcsxDp7Ei4CmoYEsNPV0gq5uHeYOJV9kGjggJmWg3Qrk9bI1qKJtXl/hAPzbgZh5mVIBzQ66k8jyQzL3a6RPU2oGxlOu9YlA4eLqIiAXVXyHj1YnljHsfSri+jYDo0Li21BjpVNv6CvO7Wah0sQKBgQD1Usic42Nv1nc5+IqOoC4bgQMqBR3YSoYOG+JuiIeim8os0AcRc6+1PBhwxzGpYaw7ec6P3TIa9kNzecYnHaqEDGSOai4KLdSNsM4bl3YO0IPME2TA8EwIkW7lvJ6qJD+rhkCrPNTlByeUgKfyMCZL8xeEpDVCV9picyiH5AwXnQKBgQDF2tdSlg9s6kt8ZuC5nJxeNmkmnvIt7TdSme9iJ1FG7gc65VtLCIKbkbi3ibfvZgvanrAvH29yShJXrgzvnrok1nFwvbhuWd/jpr8l/StHiaJndzMv7xoHdSmb/7KU+sC7vWLFDjtm8t6BuqkT7QLmmH1D/IdRJc6Bt1rF4OrpzQKBgQDTT9pzoT4uwFp0eczHq9vrXwZdtIiPnSm5j3VMZpgGjhDo5suf0blg8AHRaxMw5mwX0wUFUK/vH37cQeFYIiqVkaMwNO+xXua+obP3elB71Eoih/X6Z0HnA3a1tvIodg7N7VdY6I4tNSt3tBZ1+9mRBDSW0Wb63XfD45Pe8aUk1QKBgGJdSEuQux6E5P52Dyd4Su0z09cVkoVut+BjE3YS4f+HeyS2vkpxcq1xJwpod3+XljEcT689y6RgWvooV9oRaa3CxycryzNhj0OYtNNoKEoqjQkvY81i6+flQciCuQAEIim0IBSj3Lhz6ldIu6JiZNzL1wsj0wpu51nqFEDobyHJAoGBANdbyUnOBSk2r09ZAaL2T4SdH9EHGL2h9XEcRKdc16H0y15dQMRchLWrNpjvZS769pcqgJMsaCa7oNcawaoHsXoIivNBZaG0Y2gS/gBh2yM00ngKvuFayQPSvQjH0ospqLBd7lTPA2fttui1LHXBdhdGkHuUxEf8MEml6lD9CkKf";

    /** 网商银行测试环境公钥 RSA */
    public static $bank_RSA_publicKey  = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDOb4B1dnwONcW0RoJMa0IOq3O6jiqnTGLUpxEw2xJg+c7wsb6DBy5CAoR0w2ZjZ/BjKxGIQ+DoDg3NsHJeyuEjNF0/Ro/R5xVpFC5z4cBVSC2/gddz4a1EoGDJewML/Iv0yIw7ylB86++h23nRd079c5S9RZXurBfnLW2Srhqk2QIDAQAB";
 
    /**
     * 解析XML
     *
     * @param xmlContent
     * @return
     * @throws SAXException
     * @throws IOException
     * @throws ParserConfigurationException
     */
    private static function parseDocumentByString($xmlContent) {
        $DocumentBuilderFactory = new \JavaClass('javax.xml.parsers.DocumentBuilderFactory');
        $factory = $DocumentBuilderFactory->newInstance();
        $factory->setNamespaceAware(true);// 否则无法识别namespace
        $StringReader = new \Java('java.io.StringReader',$xmlContent);
        $InputSource = new \Java('org.xml.sax.InputSource.InputSource',$StringReader);
        return $factory->newDocumentBuilder()->parse($InputSource);
    }
    
    /**
     * 签名- XML
     *
     * @throws Exception
     */
    public static function sign($xmlContent) {
        $doc = self::parseDocumentByString($xmlContent);
        $privateKey = SignatureUtils::getPrivateKey(self::$RSA_privateKey);
        return SignatureUtils::signXmlElement($privateKey, $doc, "request", "http://www.w3.org/2001/04/xmldsig-more#rsa-sha256", 2);
    }
    
}
