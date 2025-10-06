# 部署说明

## GitHub Pages 部署（推荐）

### 1. 启用GitHub Pages
1. 进入仓库设置：`https://github.com/handlegpt/bio_ok/settings`
2. 滚动到 "Pages" 部分
3. 选择 "Deploy from a branch"
4. 选择 `main` 分支
5. 点击 "Save"

### 2. 配置自定义域名 ok.link
1. 在 Pages 设置中找到 "Custom domain"
2. 输入 `ok.link`
3. 勾选 "Enforce HTTPS"
4. 点击 "Save"

### 3. DNS配置
在 `ok.link` 域名的DNS管理中添加以下记录：

```
类型: CNAME
名称: www
值: handlegpt.github.io
TTL: 3600

类型: A
名称: @
值: 185.199.108.153
TTL: 3600

类型: A
名称: @
值: 185.199.109.153
TTL: 3600

类型: A
名称: @
值: 185.199.110.153
TTL: 3600

类型: A
名称: @
值: 185.199.111.153
TTL: 3600
```

### 4. 验证部署
- 访问 `https://ok.link` 查看网站
- 检查HTTPS证书是否正常
- 测试所有功能是否正常工作

## 本地开发

### 方法一：使用启动脚本（推荐）
```bash
# 给启动脚本执行权限
chmod +x start.sh

# 启动本地服务器
./start.sh
```

### 方法二：使用PHP内置服务器
```bash
# 启动PHP内置服务器
php -S localhost:8000 -t .

# 或者使用配置文件
php start-server.php
```

### 方法三：使用其他本地服务器
```bash
# 使用Python
python -m http.server 8000

# 使用Node.js
npx http-server -p 8000
```

## 生产环境部署

### 1. 上传文件
将所有文件上传到Web服务器的根目录或子目录。

### 2. 配置Web服务器

#### Apache (.htaccess)
```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]
```

#### Nginx
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

### 3. 设置权限
```bash
# 设置文件权限
chmod 644 *.php
chmod 755 assets/
chmod 644 assets/css/*.css
chmod 644 assets/js/*.js
chmod 644 assets/images/*
```

### 4. 配置域名
- 将域名指向服务器IP
- 配置SSL证书（推荐使用Let's Encrypt）
- 设置301重定向（HTTP到HTTPS）

## 自定义配置

### 1. 修改个人信息
编辑 `config.php` 文件中的配置：

```php
$config = [
    'site_name' => 'Your Name',
    'site_title' => 'Your Title',
    'email' => 'your@email.com',
    'twitter' => 'https://twitter.com/yourusername',
    // ... 其他配置
];
```

### 2. 添加项目
在 `config.php` 的 `$projects` 数组中添加：

```php
[
    'title' => 'Project Name',
    'en' => 'English description',
    'jp' => '日本語の説明',
    'url' => 'https://project-url.com',
    'status' => 'active'
]
```

### 3. 添加工具
在 `config.php` 的 `$tools` 数组中添加：

```php
[
    'icon' => 'fa-icon-name',
    'name' => 'Tool Name',
    'en' => 'English description',
    'jp' => '日本語の説明',
    'url' => 'https://tool-url.com',
    'category' => 'category'
]
```

### 4. 添加更新日志
在 `config.php` 的 `$logs` 数组中添加：

```php
[
    'date' => '2025-01-15',
    'en' => 'English update',
    'jp' => '日本語の更新',
    'type' => 'feature'
]
```

## 性能优化

### 1. 启用Gzip压缩
在Apache的 `.htaccess` 中添加：
```apache
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/xml
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/x-javascript
</IfModule>
```

### 2. 设置缓存头
```apache
<IfModule mod_expires.c>
    ExpiresActive on
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
</IfModule>
```

### 3. 使用CDN
将Bootstrap和Font Awesome的链接替换为CDN链接（已在代码中配置）。

## 安全建议

### 1. 文件权限
```bash
# 设置安全的文件权限
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
```

### 2. 隐藏敏感文件
在 `.htaccess` 中添加：
```apache
# 隐藏配置文件
<Files "config.php">
    Order Allow,Deny
    Deny from all
</Files>
```

### 3. 防止目录浏览
```apache
Options -Indexes
```

## 故障排除

### 1. 页面无法访问
- 检查PHP是否正常运行
- 检查文件权限
- 检查Web服务器配置

### 2. 样式不显示
- 检查CSS文件路径
- 检查CDN链接是否可访问
- 检查浏览器控制台错误

### 3. 图片不显示
- 检查图片文件是否存在
- 检查图片路径是否正确
- 检查文件权限

## 更新维护

### 1. 备份数据
定期备份 `config.php` 文件，这是最重要的配置文件。

### 2. 更新内容
- 定期更新项目列表
- 添加新的工具链接
- 更新个人简介

### 3. 监控性能
- 使用Google PageSpeed Insights检查性能
- 监控服务器资源使用情况
- 定期检查链接有效性

## 技术支持

如果遇到问题，可以：
1. 检查PHP错误日志
2. 查看浏览器开发者工具
3. 确认所有文件都已正确上传
4. 检查服务器环境要求

---

*最后更新：2025年1月*


