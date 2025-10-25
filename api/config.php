<?php
/**
 * OK.link 配置文件
 * 在这里修改个人信息、项目、工具和日志
 */

// 基本信息配置
$config = [
    'site_name' => 'OK.link',
    'site_title' => "Ok's World",
    'site_description' => 'Personal tools hub and project showcase. Independent project & tools collection.',
    'site_description_jp' => '個人ツール集とプロジェクト展示。独立したプロジェクトとツール集。',
    'avatar' => 'assets/images/avatar.jpeg',
    'email' => 'hello@ok.link',
    'facebook' => 'https://facebook.com/',
    'website' => 'https://ok.link',
    'google_analytics_id' => 'G-XRVDZ4EXJ4', // 替换为你的Google Analytics ID
];

// 个人简介（双语）
$bio = [
    'en' => 'Living in Japan, love sushi🍣 & Korean dramas. Married, father of two children.<br>Trying to do something great with AI. AI is changing the world.<br>Life is not easy, but I love exploring new things and embracing challenges.',
    'jp' => '日本在住、寿司🍣と韓国ドラマが好き。既婚、二児の父。<br>AIで何か素晴らしいことをしようとしています。AIが世界を変えている。<br>生活は簡単ではありませんが、新しいことを学び、挑戦するのが好きです。'
];

// 技能标签（双语）
$skills = [
    'en' => [
        'Web Development', 'AI & Machine Learning', 'AI User', 
        'Open Source', 'Project Management', 'Multilingual'
    ],
    'jp' => [
        'Web開発', 'AI・機械学習', 'AIユーザー', 
        'オープンソース', 'プロジェクト管理', '多言語対応'
    ]
];

// 兴趣爱好（双语）
$interests = [
    'en' => [
        '🍣 Sushi & Japanese Cuisine',
        '📺 Korean Dramas & Movies', 
        '🤖 AI & Technology Trends',
        '🌏 Travel & Culture',
        '👨‍👩‍👧‍👦 Family Time',
        '📚 Continuous Learning'
    ],
    'jp' => [
        '🍣 寿司・日本料理',
        '📺 韓国ドラマ・映画',
        '🤖 AI・技術トレンド',
        '🌏 旅行・文化',
        '👨‍👩‍👧‍👦 家族時間',
        '📚 継続学習'
    ]
];

// 项目列表
$projects = [
    [
        'title' => 'KeKi AI',
        'en' => 'All-in-one platform to generate AI content',
        'jp' => 'AIコンテンツ生成のオールインワンプラットフォーム',
        'url' => 'https://keki.ai/',
        'status' => 'active',
        'icon' => 'fas fa-brain',
        'color' => 'linear-gradient(135deg, #667eea, #764ba2)'
    ],
    [
        'title' => 'Och.ai',
        'en' => 'AI photo & video generation, old photo restoration',
        'jp' => 'AI写真・動画生成、古い写真復元',
        'url' => 'https://och.ai',
        'status' => 'active',
        'icon' => 'fas fa-paint-brush',
        'color' => 'linear-gradient(135deg, #4facfe, #00f2fe)'
    ],
    [
        'title' => 'WeCV.ai',
        'en' => 'AI resume builder',
        'jp' => 'AI履歴書ジェネレーター',
        'url' => 'https://wecv.ai',
        'status' => 'active',
        'icon' => 'fas fa-file-alt',
        'color' => 'linear-gradient(135deg, #43e97b, #38f9d7)'
    ],
];

// 工具列表
$tools = [
    [
        'icon' => 'fa-money-bill-wave',
        'name' => 'Currency Converter',
        'en' => 'Real-time FX rates',
        'jp' => 'リアルタイム為替',
        'url' => 'https://www.xe.com/currencyconverter/',
        'category' => 'finance'
    ],
    [
        'icon' => 'fa-code',
        'name' => 'GitHub',
        'en' => 'Code repository & collaboration',
        'jp' => 'コードリポジトリ・コラボレーション',
        'url' => 'https://github.com/',
        'category' => 'development'
    ],
    [
        'icon' => 'fa-palette',
        'name' => 'Figma',
        'en' => 'Design & prototyping',
        'jp' => 'デザイン・プロトタイピング',
        'url' => 'https://www.figma.com/',
        'category' => 'design'
    ],
    [
        'icon' => 'fa-ruler',
        'name' => 'Unit Converter',
        'en' => 'Length/weight/temp',
        'jp' => '単位変換',
        'url' => 'https://unitconverters.net/',
        'category' => 'utility'
    ],
    [
        'icon' => 'fa-robot',
        'name' => 'ChatGPT',
        'en' => 'AI assistant',
        'jp' => 'AIアシスタント',
        'url' => 'https://chat.openai.com/',
        'category' => 'ai'
    ],
    [
        'icon' => 'fa-language',
        'name' => 'DeepL',
        'en' => 'Accurate translation',
        'jp' => '高精度翻訳',
        'url' => 'https://www.deepl.com/translator',
        'category' => 'productivity'
    ],
    [
        'icon' => 'fa-calendar-alt',
        'name' => 'World Holidays',
        'en' => 'Global holiday calendar',
        'jp' => '世界の祝日カレンダー',
        'url' => '#',
        'category' => 'utility',
        'is_internal' => true
    ],
];

// 分享图片模块已移除

// 样式配置
$style_config = [
    'primary_color' => '#007bff',
    'secondary_color' => '#6c757d',
    'accent_color' => '#0056b3',
    'background_color' => '#ffffff',
    'text_color' => '#333333',
    'border_radius' => '0.5rem',
    'shadow' => '0 0.125rem 0.25rem rgba(0, 0, 0, 0.075)',
];

// 功能开关
$features = [
    'smooth_scroll' => true,
    'animations' => true,
    'lazy_loading' => true,
    'back_to_top' => true,
    'keyboard_navigation' => true,
    'social_links' => true,
    'project_cards' => true,
    'tool_cards' => true,
    'update_log' => true,
];

// 免责声明配置
$disclaimer = [
    'en' => 'Disclaimer: OK.link is an independent personal web service, not affiliated with OKX (okx.com), OKLink (oklink.com), or any related entities.',
    'jp' => '免責事項：OK.link は独立した個人サービスであり、OKX（okx.com）および OKLink（oklink.com）とは一切関係ありません。',
    'show_on_domains' => ['ok.link', 'www.ok.link'] // 只在指定域名显示
];

// 导出配置函数
function get_config($key = null) {
    global $config;
    return $key ? ($config[$key] ?? null) : $config;
}

function get_bio($lang = 'en') {
    global $bio;
    return $bio[$lang] ?? '';
}

function get_projects() {
    global $projects;
    return $projects;
}

function get_tools() {
    global $tools;
    return $tools;
}

// get_shares函数已移除

function get_style_config() {
    global $style_config;
    return $style_config;
}

function get_features() {
    global $features;
    return $features;
}

function get_disclaimer() {
    global $disclaimer;
    return $disclaimer;
}

// 检查是否应该显示免责声明
function should_show_disclaimer() {
    // 总是显示免责声明
    return true;
}
?>
