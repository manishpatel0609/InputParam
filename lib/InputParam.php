<?php
/**
 * InputParam - A fast, extensible PHP input Parameters Get class.
 *
 * @author      Manish Jakhaniya (https://www.facebook.com/manish.jakhaniya) 
 *
 * @link        http://github.com/manishpatel0609/InputParam
 *
 * @version     1.0
 */
 
class InputParam {
    /*
     * @var item String | Numeric
     *  return item value OR Boolean
     */

    public static function getPost($item, $return = FALSE) {
        if (isset($_GET[$item])) {
            return trim($_GET[$item]);
        } else if (isset($_POST[$item])) {
            return trim($_POST[$item]);
        }
        return $return;
    }

    /*
     * @var item String | Numeric
     *  return item value OR Boolean
     */

    public static function postGet($item, $return = FALSE) {
        if (isset($_POST[$item])) {
            return trim($_POST[$item]);
        } else if (isset($_GET[$item])) {
            return trim($_GET[$item]);
        }
        return $return;
    }

    /*
     * @var item String | Numeric
     *  return item value OR Boolean
     */

    public static function onlyGet($item, $return = FALSE) {
        if (isset($_GET[$item])) {
            return trim($_GET[$item]);
        }
        return $return;
    }

    /*
     * @var item String | Numeric
     *  return item value OR Boolean
     */

    public static function onlyPost($item, $return = FALSE) {
        if (isset($_POST[$item])) {
            return trim($_POST[$item]);
        }
        return $return;
    }

    /*
     * @var item String | Numeric
      return boolean
     */

    public static function issetGetPost($item) {
        if (isset($_GET[$item])) {
            return true;
        } else if (isset($_POST[$item])) {
            return true;
        }
        return false;
    }

    /*
     * @var item String | Numeric
      return boolean
     */

    public static function issetPostGet($item) {
        if (isset($_POST[$item])) {
            return true;
        } else if (isset($_GET[$item])) {
            return true;
        }
        return false;
    }

    /*
     * @var item String | Numeric
      return boolean
     */

    static function issetParam($item) {
        if (isset($_POST[$item])) {
            return true;
        } else if (isset($_GET[$item])) {
            return true;
        }
        return false;
    }

    /*
     *  return Array 
    */
    
    static function allGetParamInArray() {
        $arr = "";
        foreach ($_GET as $key => $value) {
            $arr[$key] = $value;
        }
        return $arr;
    }

    /*
     * return Array
     */

    static function allPostParamInArray() {
        $arr = "";
        foreach ($_POST as $key => $value) {
            $arr[$key] = $value;
        }
        return $arr;
    }

}
