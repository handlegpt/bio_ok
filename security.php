<?php
/**
 * 安全配置文件
 * 管理API密钥和安全设置
 */

// 安全配置
$security_config = [
    // API密钥 (生产环境中应该从环境变量读取)
    'weather_api_key' => 'f3c32804f64841adbcd10305253009',
    'openweather_api_key' => 'your_openweathermap_api_key_here',
    
    // 安全设置
    'enable_geolocation' => true,
    'enable_weather_cache' => true,
    'cache_duration' => 600, // 10分钟
    'max_cache_size' => 50, // 最大缓存条目数
    
    // 允许的域名
    'allowed_origins' => [
        'https://ok.link',
        'https://www.ok.link',
        'http://localhost:8000'
    ],
    
    // 安全头部
    'security_headers' => [
        'X-Content-Type-Options' => 'nosniff',
        'X-Frame-Options' => 'DENY',
        'X-XSS-Protection' => '1; mode=block',
        'Referrer-Policy' => 'strict-origin-when-cross-origin',
        'Strict-Transport-Security' => 'max-age=31536000; includeSubDomains'
    ]
];

// 获取API密钥
function get_api_key($service) {
    global $security_config;
    return $security_config[$service . '_api_key'] ?? null;
}

// 验证来源
function validate_origin() {
    global $security_config;
    $origin = $_SERVER['HTTP_ORIGIN'] ?? '';
    return in_array($origin, $security_config['allowed_origins']);
}

// 设置安全头部
function set_security_headers() {
    global $security_config;
    foreach ($security_config['security_headers'] as $header => $value) {
        header("$header: $value");
    }
}

// 清理用户输入
function sanitize_input($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// 验证URL
function validate_url($url) {
    return filter_var($url, FILTER_VALIDATE_URL) && 
           (strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0);
}
?>


