<?php
/**
 * TransferDetailResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>オープンAPI仕様書（PDF版）は下記リンクをご参照ください</p> <div>   <div style='display:inline-block;'><a style='text-decoration:none; font-weight:bold; color:#00b8d4;' href='https://gmo-aozora.com/business/service/api-specification.html' target='_blank'>オープンAPI仕様書</a></div><div style='display:inline-block; margin-left:2px; left:2px; width:10px; height:10px; border-top:2px solid #00b8d4; border-right:2px solid #00b8d4; transparent;-webkit-transform:rotate(45deg); transform: rotate(45deg);'></div> </div> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>共通仕様</h4> <div style='width:100%; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>＜HTTPリクエストヘッダ＞</p>   <div style='display:table; margin-left:10px; background-color:#29659b;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff;'>項目</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; color:#fff;'>仕様</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>プロトコル</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>HTTP1.1/HTTPS</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>charset</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>UTF-8</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>content-type</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>application/json</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>domain_name</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       本番環境：api.gmo-aozora.com</br>       開発環境：stg-api.gmo-aozora.com     </div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>メインURL</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       https://{domain_name}/ganb/api/corporation/{version}</br>       <span style='border-bottom:solid 1px;'>Version:1.x.x</span> の場合</br>       　https://api.gmo-aozora.com/ganb/api/corporation/<span style='border-bottom:solid 1px;'>v1</span>     </div>   </div> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜リクエスト共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <p style='padding-left:40px;'>パラメータの値が空の場合、またはパラメータ自体が設定されていない場合、どちらもNULLとして扱います</p> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜レスポンス共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <ul>     <li>レスポンスデータ</li>       <ul>         <li style='list-style-type:none;'>レスポンスデータの値が空の場合または、レスポンスデータ自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>     <li>配列</li>       <ul>         <li style='list-style-type:none;'>配列の要素の値が空の場合は「空のリスト」と記載</li>         <li style='list-style-type:none;'>配列自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>   </ul> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜更新系APIに関する注意事項＞</p>   <ul>     <li style='list-style-type:none;'>更新系処理がタイムアウトとなった場合、処理自体は実行されている可能性がありますので、</li>     <li style='list-style-type:none;'>再実行を行う必要がある場合は必ず照会系の処理で実行状況を確認してから再実行を行ってください</li>   </ul> </div>
 *
 * OpenAPI spec version: 1.1.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ganb\Corporate\Client\Model;

use \ArrayAccess;
use \Ganb\Corporate\Client\ObjectSerializer;

/**
 * TransferDetailResponse Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferDetailResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferDetailResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'beneficiary_bank_name_kanji' => 'string',
        'beneficiary_branch_name_kanji' => 'string',
        'used_point' => 'string',
        'is_fee_free_used' => 'bool',
        'transfer_fee' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'beneficiary_bank_name_kanji' => null,
        'beneficiary_branch_name_kanji' => null,
        'used_point' => null,
        'is_fee_free_used' => null,
        'transfer_fee' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'beneficiary_bank_name_kanji' => 'beneficiaryBankNameKanji',
        'beneficiary_branch_name_kanji' => 'beneficiaryBranchNameKanji',
        'used_point' => 'usedPoint',
        'is_fee_free_used' => 'isFeeFreeUsed',
        'transfer_fee' => 'transferFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'beneficiary_bank_name_kanji' => 'setBeneficiaryBankNameKanji',
        'beneficiary_branch_name_kanji' => 'setBeneficiaryBranchNameKanji',
        'used_point' => 'setUsedPoint',
        'is_fee_free_used' => 'setIsFeeFreeUsed',
        'transfer_fee' => 'setTransferFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'beneficiary_bank_name_kanji' => 'getBeneficiaryBankNameKanji',
        'beneficiary_branch_name_kanji' => 'getBeneficiaryBranchNameKanji',
        'used_point' => 'getUsedPoint',
        'is_fee_free_used' => 'getIsFeeFreeUsed',
        'transfer_fee' => 'getTransferFee'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['beneficiary_bank_name_kanji'] = isset($data['beneficiary_bank_name_kanji']) ? $data['beneficiary_bank_name_kanji'] : null;
        $this->container['beneficiary_branch_name_kanji'] = isset($data['beneficiary_branch_name_kanji']) ? $data['beneficiary_branch_name_kanji'] : null;
        $this->container['used_point'] = isset($data['used_point']) ? $data['used_point'] : null;
        $this->container['is_fee_free_used'] = isset($data['is_fee_free_used']) ? $data['is_fee_free_used'] : null;
        $this->container['transfer_fee'] = isset($data['transfer_fee']) ? $data['transfer_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['beneficiary_bank_name_kanji']) && (mb_strlen($this->container['beneficiary_bank_name_kanji']) > 30)) {
            $invalidProperties[] = "invalid value for 'beneficiary_bank_name_kanji', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['beneficiary_bank_name_kanji']) && (mb_strlen($this->container['beneficiary_bank_name_kanji']) < 1)) {
            $invalidProperties[] = "invalid value for 'beneficiary_bank_name_kanji', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['beneficiary_branch_name_kanji']) && (mb_strlen($this->container['beneficiary_branch_name_kanji']) > 30)) {
            $invalidProperties[] = "invalid value for 'beneficiary_branch_name_kanji', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['beneficiary_branch_name_kanji']) && (mb_strlen($this->container['beneficiary_branch_name_kanji']) < 1)) {
            $invalidProperties[] = "invalid value for 'beneficiary_branch_name_kanji', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['used_point']) && (mb_strlen($this->container['used_point']) > 20)) {
            $invalidProperties[] = "invalid value for 'used_point', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['used_point']) && (mb_strlen($this->container['used_point']) < 1)) {
            $invalidProperties[] = "invalid value for 'used_point', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['transfer_fee']) && (mb_strlen($this->container['transfer_fee']) > 20)) {
            $invalidProperties[] = "invalid value for 'transfer_fee', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['transfer_fee']) && (mb_strlen($this->container['transfer_fee']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_fee', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets beneficiary_bank_name_kanji
     *
     * @return string
     */
    public function getBeneficiaryBankNameKanji()
    {
        return $this->container['beneficiary_bank_name_kanji'];
    }

    /**
     * Sets beneficiary_bank_name_kanji
     *
     * @param string $beneficiary_bank_name_kanji 被仕向金融機関名漢字 全角文字 被仕向金融機関番号に該当する金融機関名漢字 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setBeneficiaryBankNameKanji($beneficiary_bank_name_kanji)
    {
        if (!is_null($beneficiary_bank_name_kanji) && (mb_strlen($beneficiary_bank_name_kanji) > 30)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_bank_name_kanji when calling TransferDetailResponse., must be smaller than or equal to 30.');
        }
        if (!is_null($beneficiary_bank_name_kanji) && (mb_strlen($beneficiary_bank_name_kanji) < 1)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_bank_name_kanji when calling TransferDetailResponse., must be bigger than or equal to 1.');
        }

        $this->container['beneficiary_bank_name_kanji'] = $beneficiary_bank_name_kanji;

        return $this;
    }

    /**
     * Gets beneficiary_branch_name_kanji
     *
     * @return string
     */
    public function getBeneficiaryBranchNameKanji()
    {
        return $this->container['beneficiary_branch_name_kanji'];
    }

    /**
     * Sets beneficiary_branch_name_kanji
     *
     * @param string $beneficiary_branch_name_kanji 被仕向支店名漢字 全角文字 被仕向支店番号に該当する支店名漢字 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setBeneficiaryBranchNameKanji($beneficiary_branch_name_kanji)
    {
        if (!is_null($beneficiary_branch_name_kanji) && (mb_strlen($beneficiary_branch_name_kanji) > 30)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_branch_name_kanji when calling TransferDetailResponse., must be smaller than or equal to 30.');
        }
        if (!is_null($beneficiary_branch_name_kanji) && (mb_strlen($beneficiary_branch_name_kanji) < 1)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_branch_name_kanji when calling TransferDetailResponse., must be bigger than or equal to 1.');
        }

        $this->container['beneficiary_branch_name_kanji'] = $beneficiary_branch_name_kanji;

        return $this;
    }

    /**
     * Gets used_point
     *
     * @return string
     */
    public function getUsedPoint()
    {
        return $this->container['used_point'];
    }

    /**
     * Sets used_point
     *
     * @param string $used_point 利用ポイント 半角数字 実際に利用したポイント 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setUsedPoint($used_point)
    {
        if (!is_null($used_point) && (mb_strlen($used_point) > 20)) {
            throw new \InvalidArgumentException('invalid length for $used_point when calling TransferDetailResponse., must be smaller than or equal to 20.');
        }
        if (!is_null($used_point) && (mb_strlen($used_point) < 1)) {
            throw new \InvalidArgumentException('invalid length for $used_point when calling TransferDetailResponse., must be bigger than or equal to 1.');
        }

        $this->container['used_point'] = $used_point;

        return $this;
    }

    /**
     * Gets is_fee_free_used
     *
     * @return bool
     */
    public function getIsFeeFreeUsed()
    {
        return $this->container['is_fee_free_used'];
    }

    /**
     * Sets is_fee_free_used
     *
     * @param bool $is_fee_free_used 振込無料回数利用有無 振込無料回数の実際の利用有無 総合振込では無料回数は利用できないため、常にfalse
     *
     * @return $this
     */
    public function setIsFeeFreeUsed($is_fee_free_used)
    {
        $this->container['is_fee_free_used'] = $is_fee_free_used;

        return $this;
    }

    /**
     * Gets transfer_fee
     *
     * @return string
     */
    public function getTransferFee()
    {
        return $this->container['transfer_fee'];
    }

    /**
     * Sets transfer_fee
     *
     * @param string $transfer_fee 手数料 半角数字 個別明細単位の手数料 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setTransferFee($transfer_fee)
    {
        if (!is_null($transfer_fee) && (mb_strlen($transfer_fee) > 20)) {
            throw new \InvalidArgumentException('invalid length for $transfer_fee when calling TransferDetailResponse., must be smaller than or equal to 20.');
        }
        if (!is_null($transfer_fee) && (mb_strlen($transfer_fee) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transfer_fee when calling TransferDetailResponse., must be bigger than or equal to 1.');
        }

        $this->container['transfer_fee'] = $transfer_fee;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

