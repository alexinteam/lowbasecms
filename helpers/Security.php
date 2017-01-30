<?php

namespace app\helpers;

use Yii;

/**
 * Class-helper, implements methods for encryption\decryption,
 * coding\decoding and generate unique values for unsafe\security data.
 *
 * Class Security
 * @package app\helpers
 */
class Security
{

    /**
     * Encrypt url on the key by application param 'encryptPassword'
     *
     * @param $string - url for encryption
     * @return mixed|string - encryption url
     */
    public static function encryptUrl($string)
    {
        if ($string) {
            $data = base64_encode(Yii::$app->security->encryptByKey($string, Yii::$app->params['encryptPassword']));
            $data = str_replace(['+', '/', '='], ['-', '_', '~'], $data);
            return $data;
        }
        return '';
    }

    /**
     * Decrypt url on the key by application param 'encryptPassword'
     *
     * @param $string - url for decryption
     * @return bool|string - decryption url
     */
    public static function decryptUrl($string)
    {
        if ($string) {
            $data = str_replace(['-', '_', '~'], ['+', '/', '='], $string);
            $data = base64_decode($data);
            return Yii::$app->security->decryptByKey($data, Yii::$app->params['encryptPassword']);
        }
        return '';
    }

    /**
     * Encrypt numeric value.
     *
     * @param $key - numeric for a encrypt
     * @return mixed - encryption numeric
     */
    public static function encryptKey($key)
    {
        return self::encryptNum($key);
    }

    /**
     * Decrypt numeric value.
     *
     * @param $key - numeric for a decrypt
     * @return float|null - decryption numeric
     */
    public static function decryptKey($key)
    {
        return self::decryptNum($key);
    }

    /**
     * Encode string using a predetermined random alphabet.
     *
     * @param $str - string for a encode
     * @param null $key - key for a encode
     * @return string - encoding result
     */
    public static function encodeStr($str, $key = null)
    {
        if (!$key) {
            $key = Yii::$app->params['encryptPassword'];
        }
        $from = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $to = 'nopqrstuvwxyzabcdefghijklmNOPQRSTUVWXYZABCDEFGHIJKLM';
        $str = strtr($str, $from, $to);
        $result = "";
        for ($i = 0; $i < strlen($str); $i++) {
            $result .= dechex(ord($str{$i}));
        }
        $encoded = "";
        for ($i = 0; $i < strlen($result); $i++) {
            $encoded .= dechex(ord($result{$i}) ^ ($key{$i % strlen($key)}));
        }
        return $encoded;
    }

    /**
     * Decode string using a predetermined random alphabet.
     *
     * @param $str - string for a decode
     * @param null $key - key for a decode
     * @return string - decoding result
     */
    public static function decodeStr($str, $key = null)
    {
        if (!$key) {
            $key = Yii::$app->params['encryptPassword'];
        }
        $encoded = "";
        for ($i = 0; $i < floor(strlen($str) / 2); $i++) {
            $encoded .= chr(hexdec($str{$i * 2} . $str{$i * 2 + 1}) ^ ($key{$i % strlen($key)}));
        }
        $result = "";
        for ($i = 0; $i < floor(strlen($encoded) / 2); $i++) {
            $result .= chr(hexdec($encoded{$i * 2} . $encoded{$i * 2 + 1}));
        }
        $from = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $to = 'nopqrstuvwxyzabcdefghijklmNOPQRSTUVWXYZABCDEFGHIJKLM';
        $str = strtr($result, $from, $to);
        return $str;
    }

    /**
     * Encrypt numeric.
     *
     * @param $num - numeric for a encrypt
     * @return mixed - encryption numeric
     */
    public static function encryptNum($num)
    {
        $rand1 = rand(100, 999);
        $rand2 = rand(100, 999);
        $key1 = ($num + $rand1) * $rand2;
        $key2 = ($num + $rand2) * $rand1;
        $result = $rand1 . $rand2 . $key1 . $key2;
        $rand1_len = chr(ord('A') + strlen($rand1));
        $rand2_len = chr(ord('D') + strlen($rand2));
        $key1_len = chr(ord('G') + strlen($key1));
        $rand1_pos = rand(0, floor(strlen($result) / 3));
        $result1 = substr_replace($result, $rand1_len, $rand1_pos, 0);
        $rand2_pos = rand($rand1_pos + 1, floor(2 * strlen($result1) / 3));
        $result2 = substr_replace($result1, $rand2_len, $rand2_pos, 0);
        $key1_pos = rand($rand2_pos + 1, strlen($result2) - 1);
        $result3 = substr_replace($result2, $key1_len, $key1_pos, 0);
        return $result3;
    }

    /**
     * Decrypt numeric
     *
     * @param $num - numeric for a decrypt
     * @return float|null - decryption numeric
     */
    public static function decryptNum($num)
    {
        if (preg_match('/([A-Z]).*([A-Z]).*([A-Z])/', $num, $matches)) {
            $rand1_len = ord($matches[1]) - ord('A');
            $rand2_len = ord($matches[2]) - ord('D');
            $key1_len = ord($matches[3]) - ord('G');
            $num = str_replace($matches[1], '', $num);
            $num = str_replace($matches[2], '', $num);
            $num = str_replace($matches[3], '', $num);
            $rand1 = substr($num, 0, $rand1_len);
            $rand2 = substr($num, $rand1_len, $rand2_len);
            $key1 = substr($num, $rand1_len + $rand2_len, $key1_len);
            $key2 = substr($num, $rand1_len + $rand2_len + $key1_len);
            if (($rand1 > 0) && ($rand2 > 0)) {
                $num1 = $key1 / $rand2 - $rand1;
                $num2 = $key2 / $rand1 - $rand2;
                if ($num1 == $num2) {
                    return $num1;
                } else {
                    return null;
                }
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    /**
     * Wrapper over md5-hash
     *
     * @param $password - value for a hash.
     * @return string - a unique value only for its argument.
     */
    public static function generatePasswordHash($password)
    {
        return md5($password);
    }

    /**
     * generate random password
     *
     * @param $length
     * @param bool $alphabet
     * @return string
     */
    public static function generateRandomPassword($length,$alphabet = false) {
        if(!$alphabet){
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        }

        $pass = []; //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    /**
     * hide string with asterisks
     * example:
     * 1234567890
     * ******7890
     *
     * @param $str
     * @param int $showLast
     * @param string $char
     * @return string
     */
    public static function hideString($str, $showLast = 4, $char = '*'){
        return str_repeat($char, strlen($str) - $showLast) . substr($str, - $showLast);
    }
}
