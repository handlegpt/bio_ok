<?php
// 引入配置文件
require_once 'config.php';

// 资源文件路径
function assets($path) {
    return $path;
}

// 获取配置数据
$config = get_config();
$projects = get_projects();
$tools = get_tools();
$shares = get_shares();
$bio = [
    'en' => get_bio('en'),
    'jp' => get_bio('jp')
];
?>
<?php
// 安全头部设置
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Content-Security-Policy: default-src \'self\'; script-src \'self\' \'unsafe-inline\' https://cdn.jsdelivr.net https://www.googletagmanager.com https://www.youtube.com https://www.youtube-nocookie.com; style-src \'self\' \'unsafe-inline\' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com; img-src \'self\' data: https://api.qrserver.com https://img.youtube.com; font-src \'self\' https://cdnjs.cloudflare.com; connect-src \'self\' https://api.weatherapi.com https://wttr.in https://ipapi.co https://ipinfo.io http://ip-api.com https://api.bigdatacloud.net https://api.openweathermap.org https://httpbin.org https://api.github.com https://jsonplaceholder.typicode.com https://www.random.org https://api.qrserver.com https://cdn.jsdelivr.net https://date.nager.at https://holidays.abstractapi.com https://api.calendario.com.br https://www.google-analytics.com https://analytics.google.com https://speed.cloudflare.com; frame-src \'self\' https://www.youtube.com https://www.youtube-nocookie.com; frame-ancestors \'none\';');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-en="OneKit Link - Building Tomorrow's Tools Today" data-jp="OneKit Link - 今日、明日のツールを構築">OneKit Link - Building Tomorrow's Tools Today</title>
    <meta name="description" content="<?php echo htmlspecialchars($config['site_description'], ENT_QUOTES, 'UTF-8') ?>" data-en="<?php echo htmlspecialchars($config['site_description'], ENT_QUOTES, 'UTF-8') ?>" data-jp="<?php echo htmlspecialchars($config['site_description_jp'], ENT_QUOTES, 'UTF-8') ?>">
    
    <!-- SEO优化 -->
    <meta name="keywords" content="personal website, tools hub, AI tools, password generator, QR code, weather, time, web development, programming">
    <meta name="author" content="OK.link">
    <meta name="robots" content="index, follow">
    <meta name="language" content="en, ja">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($config['website'], ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:title" content="OneKit Link - Building Tomorrow's Tools Today">
    <meta property="og:description" content="<?php echo htmlspecialchars($config['site_description'], ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($config['website'], ENT_QUOTES, 'UTF-8') ?>/assets/images/avatar.jpeg">
    <meta property="og:site_name" content="OneKit Link">
    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="ja_JP">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo htmlspecialchars($config['website'], ENT_QUOTES, 'UTF-8') ?>">
    <meta property="twitter:title" content="OneKit Link - Building Tomorrow's Tools Today">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($config['site_description'], ENT_QUOTES, 'UTF-8') ?>">
    <meta property="twitter:image" content="<?php echo htmlspecialchars($config['website'], ENT_QUOTES, 'UTF-8') ?>/assets/images/avatar.jpeg">
    
    <!-- 性能优化 -->
    <meta name="theme-color" content="#007bff">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://wttr.in">
    
    <!-- 结构化数据 -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "OK.link",
        "url": "<?php echo htmlspecialchars($config['website'], ENT_QUOTES, 'UTF-8') ?>",
        "description": "<?php echo htmlspecialchars($config['site_description'], ENT_QUOTES, 'UTF-8') ?>",
        "sameAs": [
            "<?php echo htmlspecialchars($config['website'], ENT_QUOTES, 'UTF-8') ?>"
        ]
    }
    </script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- Google Analytics -->
    <?php if ($config['google_analytics_id'] && $config['google_analytics_id'] !== 'GA_MEASUREMENT_ID'): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($config['google_analytics_id'], ENT_QUOTES, 'UTF-8') ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo htmlspecialchars($config['google_analytics_id'], ENT_QUOTES, 'UTF-8') ?>');
    </script>
    <?php endif; ?>
</head>
<body>
    <!-- Header -->
    <header class="bg-white shadow-sm" id="header">
        <div class="container py-3">
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="logo-container text-decoration-none" id="logo-link">
                    <div class="logo-main h5 mb-0"><?php echo $config['site_name'] ?></div>
                    <div class="logo-subtitle" data-en="Independent project & tools hub" data-jp="個人プロジェクトと便利ツール集">Independent project & tools hub</div>
                </a>
                <div class="d-flex align-items-center gap-3">
                    <!-- 语言选择器 -->
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="language-selector" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-globe me-1"></i><span id="current-lang-text">EN</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="language-selector">
                            <li><a class="dropdown-item" href="#" data-lang="en">
                                <i class="fas fa-flag-usa me-2"></i>English
                            </a></li>
                            <li><a class="dropdown-item" href="#" data-lang="jp">
                                <i class="fas fa-flag me-2"></i>日本語
                            </a></li>
                        </ul>
                    </div>
                    <nav class="d-none d-md-flex gap-3">
                        <a href="#projects" class="text-decoration-none text-muted" data-en="Projects" data-jp="プロジェクト">Projects</a>
                        <a href="#tools" class="text-decoration-none text-muted" data-en="Tools" data-jp="ツール">Tools</a>
                        <a href="#shares" class="text-decoration-none text-muted" data-en="Shares" data-jp="シェア">Shares</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- 实时信息栏 -->
        <div class="container py-3" style="max-width:980px">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="h5 fw-bold mb-0" data-en="Tools Hub" data-jp="ツールハブ">Tools Hub / ツールハブ</h2>
                <div class="d-flex align-items-center gap-2">
                    <span class="text-muted small" id="realtime-pagination-info" data-en="Page 1 of 2" data-jp="1ページ目（全2ページ）">Page 1 of 2</span>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-sm btn-outline-secondary" id="realtime-prev-btn" disabled>
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" id="realtime-next-btn">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- 工具中心容器 -->
            <div id="realtime-container">
                <div class="row g-3" id="realtime-grid">
                    <!-- 工具将动态加载到这里 -->
                </div>
            </div>
            
            <!-- 分页点 -->
            <div class="d-flex justify-content-center mt-3" id="realtime-pagination-dots">
                <!-- 分页点将在这里生成 -->
            </div>
        </div>
        
        <section class="container py-5" style="max-width:980px">
            <!-- Hero (Biolink style) -->
       <div class="text-center mb-5">
                <!-- 头像 -->
                <div class="mb-4">
                    <img src="<?php echo htmlspecialchars($config['avatar'], ENT_QUOTES, 'UTF-8') ?>" 
                         alt="Avatar" 
                         class="avatar-profile rounded-circle shadow-sm">
                </div>
                
                <p class="text-muted mb-3">
                    <span id="bio-en"><?php echo $bio['en'] ?></span><br>
                    <span id="bio-jp" style="display: none;"><?php echo $bio['jp'] ?></span>
                </p>
                
                <!-- 技能标签 -->
                <div class="mb-3">
                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                        <?php foreach($skills['en'] as $index => $skill): ?>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill skill-tag" 
                              data-en="<?php echo htmlspecialchars($skill, ENT_QUOTES, 'UTF-8')?>" 
                              data-jp="<?php echo htmlspecialchars($skills['jp'][$index], ENT_QUOTES, 'UTF-8')?>"
>
                            <?php echo htmlspecialchars($skill, ENT_QUOTES, 'UTF-8')?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- 兴趣爱好 -->
                <div class="mb-3">
                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                        <?php foreach($interests['en'] as $index => $interest): ?>
                        <span class="badge bg-light text-dark px-3 py-2 rounded-pill interest-tag" 
                              data-en="<?php echo htmlspecialchars($interest, ENT_QUOTES, 'UTF-8')?>" 
                              data-jp="<?php echo htmlspecialchars($interests['jp'][$index], ENT_QUOTES, 'UTF-8')?>"
>
                            <?php echo htmlspecialchars($interest, ENT_QUOTES, 'UTF-8')?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center flex-wrap">
                    <a href="#projects" class="btn btn-primary rounded-pill px-4" data-en="My Projects" data-jp="プロジェクト">My Projects / プロジェクト</a>
                    <a href="#tools" class="btn btn-outline-primary rounded-pill px-4" data-en="Tools" data-jp="ツール">Tools / ツール</a>
                    <button class="btn btn-light rounded-pill px-4" id="show-email-qr" data-en="Contact" data-jp="お問い合わせ">Contact</button>
                </div>
                <div class="mt-3">
                    <a href="<?php echo $config['facebook'] ?>" class="text-muted mx-2"><i class="fab fa-facebook"></i></a>
                    <a href="<?php echo $config['website'] ?>" class="text-muted mx-2"><i class="fa fa-globe"></i></a>
                </div>
            </div>

            <!-- Projects -->
            <div id="projects" class="mb-5">
                <h2 class="h5 fw-bold mb-3" data-en="Projects" data-jp="プロジェクト">Projects / プロジェクト</h2>
                <div class="row g-3">
                    <?php foreach($projects as $p): ?>
                        <div class="col-12 col-md-6">
                            <div class="card project-card shadow-sm h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-3">
                                        <div class="project-icon" style="background: <?php echo isset($p['color']) ? $p['color'] : 'linear-gradient(135deg, #007bff, #0056b3)' ?>;">
                                            <i class="<?php echo isset($p['icon']) ? $p['icon'] : 'fas fa-rocket' ?>"></i>
                                        </div>
                                        <div class="project-status">
                                            <?php if(isset($p['status']) && $p['status'] === 'active'): ?>
                                                <span class="badge bg-success">
                                                    <i class="fas fa-circle me-1"></i>
                                                    <span data-en="Active" data-jp="アクティブ">Active</span>
                                                </span>
                                            <?php elseif(isset($p['status']) && $p['status'] === 'development'): ?>
                                                <span class="badge bg-warning">
                                                    <i class="fas fa-code me-1"></i>
                                                    <span data-en="Development" data-jp="開発中">Development</span>
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">
                                                    <i class="fas fa-pause me-1"></i>
                                                    <span data-en="Paused" data-jp="一時停止">Paused</span>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                    <h3 class="h6 fw-bold mb-2 project-title"><?php echo htmlspecialchars($p['title'], ENT_QUOTES, 'UTF-8')?></h3>
                                    
                                    <p class="small text-muted mb-3 project-description">
                                        <span class="project-desc-en"><?php echo htmlspecialchars($p['en'], ENT_QUOTES, 'UTF-8')?></span>
                                        <span class="project-desc-jp" style="display: none;"><?php echo htmlspecialchars($p['jp'], ENT_QUOTES, 'UTF-8')?></span>
                                    </p>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="btn btn-sm btn-primary project-btn" href="<?php echo htmlspecialchars($p['url'], ENT_QUOTES, 'UTF-8')?>" target="_blank" rel="noopener">
                                            <i class="fas fa-external-link-alt me-1"></i>
                                            <span data-en="Visit" data-jp="訪問">Visit</span>
                                        </a>
                                        <small class="text-muted project-url"><?php echo parse_url($p['url'], PHP_URL_HOST)?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Tools -->
            <div id="tools" class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h5 fw-bold mb-0" data-en="Useful Tools" data-jp="便利ツール">Useful Tools / 便利ツール</h2>
                    <div class="d-flex align-items-center gap-2">
                        <span class="text-muted small" id="tools-pagination-info" data-en="Page 1 of 1" data-jp="1ページ目（全1ページ）">Page 1 of 1</span>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-outline-secondary" id="tools-prev-btn" disabled>
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" id="tools-next-btn">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Tools Container -->
                <div id="tools-container">
                    <div class="row g-3" id="tools-grid">
                        <!-- Tools will be dynamically loaded here -->
                    </div>
                </div>
                
                <!-- Pagination Dots -->
                <div class="d-flex justify-content-center mt-3" id="tools-pagination-dots">
                    <!-- Pagination dots will be generated here -->
                </div>
            </div>

            <!-- Share Images -->
            <div id="shares" class="mb-5">
                <h2 class="h5 fw-bold mb-3" data-en="Recent Shares" data-jp="最近のシェア">Recent Shares / 最近のシェア</h2>
                <?php if (empty($shares)): ?>
                    <div class="text-center text-muted py-4">
                        <i class="fas fa-images fa-2x mb-3 opacity-50"></i>
                        <p class="mb-0" data-en="No shares yet. Stay tuned!" data-jp="まだシェアはありません。お楽しみに！">No shares yet. Stay tuned!</p>
                    </div>
                <?php else: ?>
                    <div class="row g-4">
                        <?php foreach($shares as $share): ?>
                            <div class="col-12 col-md-6">
                                <div class="card share-card h-100">
                                    <div class="share-image-container">
                                        <img src="<?php echo htmlspecialchars($share['image'], ENT_QUOTES, 'UTF-8') ?>" 
                                             alt="<?php echo htmlspecialchars($share['title_en'], ENT_QUOTES, 'UTF-8') ?>" 
                                             class="share-image"
                                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTUwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiIGZpbGw9IiM2Yzc1N2QiIHRleHQtYW5jaG9yPSJtaWRkbGUiPkltYWdlIG5vdCBmb3VuZDwvdGV4dD4KPC9zdmc+'">
                                        <div class="share-overlay">
                                            <i class="fas fa-expand-alt"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <span class="share-title-en"><?php echo htmlspecialchars($share['title_en'], ENT_QUOTES, 'UTF-8') ?></span>
                                            <span class="share-title-jp" style="display: none;"><?php echo htmlspecialchars($share['title_jp'], ENT_QUOTES, 'UTF-8') ?></span>
                                        </h5>
                                        <p class="card-text">
                                            <span class="share-desc-en"><?php echo htmlspecialchars($share['description_en'], ENT_QUOTES, 'UTF-8') ?></span>
                                            <span class="share-desc-jp" style="display: none;"><?php echo htmlspecialchars($share['description_jp'], ENT_QUOTES, 'UTF-8') ?></span>
                                        </p>
                                        <small class="text-muted"><?php echo htmlspecialchars($share['date'], ENT_QUOTES, 'UTF-8') ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <div class="text-muted small mb-2" data-en="© 2025 OK.link. All rights reserved." data-jp="© 2025 OK.link. 全著作権所有。">
                © 2025 OK.link. All rights reserved.
            </div>
            <?php if (should_show_disclaimer()): 
                $disclaimer = get_disclaimer();
            ?>
                <div class="text-center mt-3 mb-3 small text-muted">
                    <span class="disclaimer-en"><?php echo $disclaimer['en'] ?></span>
                    <span class="disclaimer-jp" style="display: none;"><?php echo $disclaimer['jp'] ?></span>
                </div>
            <?php endif; ?>
        </div>
    </footer>

    <!-- 邮箱二维码模态框 -->
    <div class="modal fade" id="emailQRModal" tabindex="-1" aria-labelledby="emailQRModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="emailQRModalLabel" data-en="Contact Email" data-jp="連絡先メール">Contact Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <div id="email-qr-code" style="min-height: 200px; display: flex; align-items: center; justify-content: center;">
                            <div class="text-muted" data-en="Loading QR Code..." data-jp="QRコードを読み込み中...">Loading QR Code...</div>
                        </div>
                    </div>
                    <p class="small text-muted mb-3" data-en="Scan the QR code to get the email address" data-jp="QRコードをスキャンしてメールアドレスを取得">Scan the QR code to get the email address</p>
                    <div class="d-flex gap-2 justify-content-center">
                        <button class="btn btn-primary btn-sm" id="copy-email-btn" style="display: none;">
                            <i class="fas fa-copy me-1"></i><span data-en="Copy Email" data-jp="メールをコピー">Copy Email</span>
                        </button>
                        <button class="btn btn-outline-primary btn-sm" id="download-email-qr-btn" style="display: none;">
                            <i class="fas fa-download me-1"></i><span data-en="Download QR" data-jp="QRをダウンロード">Download QR</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 隐藏的邮箱地址数据 -->
    <div id="email-data" data-email="<?php echo htmlspecialchars($config['email'], ENT_QUOTES, 'UTF-8'); ?>" style="display: none;"></div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>
