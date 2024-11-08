<?php 

if (!function_exists('createCaptcha')) {
function createCaptcha()
    {
        // CAPTCHA configuration
        $config = array(
            'img_path'      => FCPATH.'assets/captcha_images/',
            'img_url'       => base_url().'assets/captcha_images/',
            'font_path'     => FCPATH.'assets/font/texb.ttf',
            'img_width'     => '160',
            'img_height'    => 40,
            'word_length'   => 5,
            'font_size'     => 20,
            'expiration' => 900,
            'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
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