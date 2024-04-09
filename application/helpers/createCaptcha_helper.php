<?php 

if (!function_exists('createCaptcha')) {
function createCaptcha()
    {
        // CAPTCHA configuration
        $config = array(
            'img_path'      => 'assets/captcha_images/',
            'img_url'       => base_url('assets/') . 'captcha_images/',
            'font_path'     => 'system/fonts/texb.ttf',
            'img_width'     => '160',
            'img_height'    => 40,
            'word_length'   => 8,
            'font_size'     => 18,
            'expiration' => 900
        );

        $captcha = create_captcha($config);

        // Pass CAPTCHA image to view
        $data['captchaImg'] = $captcha['image'];

        $captchaImg =  $data['captchaImg'];
        $captchaWord = $captcha['word'];

        $dataArray = array(
            'img' => $captchaImg,
            'word' => $captchaWord
        );

        return $dataArray;
    }
}