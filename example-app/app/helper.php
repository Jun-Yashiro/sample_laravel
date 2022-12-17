<?php

if (! function_exists('or_null')) {
    /**
     * ランダムで引数の値かnullを返す
     *
     * @param $value
     * @return null|mixed
     */
    function or_null($value)
    {
        if (rand(0, 1) % 2) {
            return null;
        }
        return $value;
    }
}

if (! function_exists('id')) {
    /**
     * idを返却する
     *
     * @param $value
     * @param string $prefix
     * @return string
     */
    function id($value, $prefix = 'input')
    {
        return $prefix . studly_case($value);
    }
}

if (! function_exists('withEmptyOption')) {
    /**
     * 空の選択肢付きの配列を返す
     *
     * @param $value
     * @param string $message
     * @return array
     */
    function withEmptyOption($value, $message = '選択してください'): array
    {
        return [null => $message] + $value;
    }
}

if (! function_exists('convertCodeForDisplay')) {
    /**
     * 表示する項目のカラムがカラ・NULLの判定と処理
     * @param $value
     * @param $array
     * @return string
     */
    function convertCodeForDisplay($value, $array)
    {
        $value = implode($value);
        if ($value === '' || $value == null) {
            return '設定されていません';
        }
        return array_key_exists($value, $array) ? $array[$value] : '不明な値です(コード:' . $value . ')';
    }
}

if (! function_exists('onlyDisplayTrue')) {
    /**
     * 配列のキーに$keyが存在する場合、配列のValueを返却する
     * @param $key
     * @param $array
     * @return string
     */
    function onlyDisplayTrue($key, $array)
    {
        if (is_array($key)) {
            $key = implode($key);
        }
        if (array_key_exists($key, $array)) {
            return $array[$key];
        }
        return '';
    }
}

if (! function_exists('issetAndNotString0')) {
    /**
     * @param $value
     * @return bool
     */
    function issetAndNotString0($value)
    {
        if ($value && $value != '0') {
            return true;
        }
        return false;
    }
}

if (! function_exists('displayAvailable')) {
    /**
     * @param $date
     * @return bool|string
     */
    function displayAvailable($date)
    {
        $pattern = '/^([0-9]{4})(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/';
        if (preg_match($pattern, $date)) {
            return (strtotime($date) < time()) ? 'Now' : date('Y-m-d', strtotime($date));
        }
        return '';
    }
}

if (! function_exists('displayAvailableForOffice')) {
    /**
     * @param $date
     * @return bool|string
     */
    function displayAvailableForOffice($date)
    {
        $pattern = '/^([0-9]{4})(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/';
        if (preg_match($pattern, $date)) {
            return (strtotime($date) < time()) ? 'Now' : date('Y-m', strtotime($date));
        }

        $pattern = '/^([0-9]{4})(0[1-9]|1[0-2])(00)$/';
        if (preg_match($pattern, $date)) {
            $date++;
            return (strtotime($date) < time()) ? 'Now' :  date('Y-m', strtotime($date));
        }

        return 'Now';
    }
}

if (! function_exists('convertYmToYF')) {
    /**
     * @param $value
     * @return string
     */
    function convertYmToYF($value)
    {
        $format = 'Ym';
        return ($value) ? DateTime::createFromFormat($format, $value)->format('Y-F') : '';
    }
}

if (! function_exists('addHyphenToYmd')) {
    /**
     * @param $value
     * @return string
     */
    function addHyphenToYmd($value)
    {
        $pattern = '/^([0-9]{4})(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/';
        if (preg_match($pattern, $value)) {
            return DateTime::createFromFormat('Ymd', $value)->format('Y-m-d');
        }
        return '';
    }
}

if (! function_exists('emptyToNull')) {
    /**
     * @param $arg
     * @return null
     */
    function emptyToNull($arg)
    {
        return "" === $arg ? null : $arg;
    }
}

if (! function_exists('checkValueInArray')) {
    /**
     * @param $value
     * @param $array
     * @return mixed
     */
    function checkValueInArray($value, $array)
    {
        return array_key_exists($value, $array) ? $array[$value] : $value;
    }
}


if (! function_exists('arrayGetMaxKeyValue')) {
    /**
     * @param $arr
     * @return mixed
     */
    function arrayGetMaxKeyValue($arr)
    {
        return $arr[arrayGetMaxKey($arr)];
    }
}

if (! function_exists('arrayGetMaxKey')) {
    /**
     * @param $arr
     * @return mixed
     */
    function arrayGetMaxKey($arr)
    {
        return max(array_keys($arr));
    }
}

if (! function_exists('arrayTake')) {
    /**
     * @param $array
     * @param $limit
     * @return static
     */
    function arrayTake($array, $limit)
    {
        return app('Illuminate\Support\Collection')->make($array)->take($limit);
    }
}

if (! function_exists('existUrl')) {
    /**
     * @param $url
     * @return int
     */
    function existUrl($url)
    {
        $header = @get_headers($url);
        return preg_match('/^HTTP\/.*\s+2\d\d\s|^HTTP\/.*\s+3\d\d\s/i', $header[0]);
    }
}

if (!function_exists('zeroFiller')) {

    /**
     * $digits桁数まで0埋めした$valueを返す
     * @param $value
     * @param int $digits
     * @return string
     */
    function zeroFiller($value, $digits = 4)
    {
        return str_pad($value, $digits, '0', STR_PAD_LEFT);
    }
}
if (!function_exists('multiParamParse')) {

    /**
     * 複数選択のパラメータを配列に変換する
     * @param $arg
     * @return mixed
     */
    function multiParamParse($arg)
    {
        $search = ['"[', ']"', '_'];
        $replace = ['[', ']', ''];
        return json_decode(str_replace($search, $replace, $arg));
    }
}

if (!function_exists('buildingAgeSearchToString')) {

    /**
     * 検索建築年数を整数から文字列へ
     * @param $integer
     * @return string
     */
    function buildingAgeSearchToString($integer)
    {
        return (string) (date('Ym') - (100 * $integer));
    }
}

if (!function_exists('postRequest')) {

    /**
     * 指定のURLに任意のjsonデータをpostリクエストする
     * @param $data
     * @param $url
     * @return string
     */
    function postRequest($data, $url)
    {
        $url = config('ken.front.domain') . $url;
        $data = http_build_query($data->toArray(), "", "&");

        $header = [
            "Content-Type: application/x-www-form-urlencoded",
            "Content-Length: ".strlen($data)
        ];

        $context = [
            "http" => [
                "method"  => "POST",
                "header"  => implode("\r\n", $header),
                "content" => $data
            ]
        ];

        return file_get_contents($url, false, stream_context_create($context));
    }
}

if (!function_exists('strBetween')) {

    /**
     * 文字列から指定文字の間の文字列を取得
     *
     * @param string $string
     * @param string $start
     * @param string $end
     * @return bool|string
     */
    function strBetween(string $string, string $start, string $end) {
        return substr($string, mb_strpos($string, $start) + 1, mb_strpos($string, $end) - mb_strpos($string, $start) - 1);
    }
}

if (!function_exists('strBefore')) {

    /**
     * 文字列から指定文字の前の文字列を取得
     *
     * @param string $string
     * @param string $start
     * @return bool|string
     */
    function strBefore(string $string, string $start) {
        return substr($string, 0, mb_strpos($string, $start));
    }
}
