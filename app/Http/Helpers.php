<?php
use \App\Role;
use \App\Setting;
use \App\Upload;

if (! function_exists('currency_symbol')) {
    function currency_symbol()
    {
        // $code = \App\Currency::findOrFail(\App\BusinessSetting::where('type', 'system_default_currency')->first()->value)->code;

        // if(Session::has('locale')){
        //     $locale = Session::get('locale', Config::get('app.locale'));
        //     if($locale == 'ae') {
        //         $currency_symbol = 'درهم';
        //     }else{
        //         $currency_symbol = 'AED';
        //     }
        // }
        // else{
        //     $currency_symbol = 'AED';
        // }

        // return $currency_symbol;

        return 'AED';
    }
}

//converts currency to home default currency
if (! function_exists('convert_price')) {
    function convert_price($price)
    {
        $price = floatval($price);

        return $price;
    }
}

//formats currency
if (! function_exists('format_price')) {
    function format_price($price)
    {
        // if(BusinessSetting::where('type', 'symbol_format')->first()->value == 1){
        //     return currency_symbol().' '.number_format($price, 2);
        // }
        // return number_format($price, 2).currency_symbol();
        return currency_symbol().' '.number_format($price, 2);
    }
}

//formats price to home default price with convertion
if (! function_exists('single_price')) {
    function single_price($price)
    {
        return format_price(convert_price($price));
    }
}

if (!function_exists('roleIdByType')) {
    function roleIdByType($type)
    {
        $role = Role::where('name', $type)->first(['id']);
        return $role->id;
    }
}

function activeGuard($except = array()){

    foreach(array_keys(config('auth.guards')) as $guard){
        if(!in_array($guard, $except)){
            if(auth()->guard($guard)->check()) return $guard;
        }
    }
    return null;
}

if (!function_exists('get_setting')) {
    function get_setting($key, $default = null)
    {
        $settings = Storage::disk('public')->exists('website_settings.json');
        if($settings){
            $settings = Storage::disk('public')->get('website_settings.json');
            $settings = isJSON($settings) ? json_decode($settings, true) : [];
            return isset($settings[$key]) ? $settings[$key] : $default;
        }else{
            $setting = Setting::where('type', $key)->first();
            return $setting == null ? $default : $setting->value;
        }
    }
}

// Return file uploaded via uploader
if (!function_exists('uploaded_asset')) {
    function uploaded_asset($id)
    {
        if (($asset = \App\Upload::find($id)) != null) {
            return my_asset($asset->file_name);
        }else{
            return $url = url('/uploads/products/dummy-product.png');
        }
    }
}

if (! function_exists('my_asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @param  bool|null  $secure
     * @return string
     */
    function my_asset($path, $secure = null)
    {
        if(env('FILESYSTEM_DRIVER') == 's3'){
            return Storage::disk('s3')->url($path);
        }
        else {
            // return app('url')->asset('/'.$path, $secure);
            if(file_exists(public_path($path))){
                $url = app('url')->asset('/'.$path, $secure);
            }else{
                $url = asset('/uploads/products/dummy-product.png');
            }

            return $url;
        }
    }
}

?>