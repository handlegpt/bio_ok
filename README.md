# OK.link - Biolink风格的导航站

一个现代化的个人导航站，结合了 Biolink 的设计理念和实用工具集合。

## 功能特点

- 🎨 **Biolink风格设计** - 简洁的个人名片式布局
- 🌐 **双语支持** - 英文/日文同屏显示
- 📱 **响应式设计** - 完美适配各种设备
- ⚡ **快速加载** - 优化的性能和用户体验
- 🛠️ **实用工具** - 集成常用网络工具
- 📝 **动态更新** - 轻量级日志系统

## 项目结构

```
bio_ok/
├── index.php              # 主页面
├── assets/
│   ├── css/
│   │   └── style.css      # 自定义样式
│   ├── js/
│   │   └── script.js      # 交互脚本
│   └── images/
│       └── avatar-m1.jpg  # 头像图片
└── README.md              # 项目说明
```

## 主要组件

### Hero 区域
- 个人头像
- 双语简介
- 主要操作按钮
- 社交媒体链接

### Projects 区域
- 项目卡片网格
- 双语描述
- 外部链接

### Tools 区域
- 常用工具集合
- 图标 + 描述
- 快速访问

### Updates 区域
- 最新动态
- 双语日志
- 时间戳

## 技术栈

- **PHP** - 服务端逻辑
- **Bootstrap 5** - UI框架
- **Font Awesome** - 图标库
- **Vanilla JavaScript** - 交互功能
- **CSS3** - 自定义样式

## 快速开始

1. 将项目文件上传到Web服务器
2. 确保PHP环境支持
3. 访问 `index.php` 查看效果

## 自定义配置

### 修改个人信息
编辑 `index.php` 中的配置数组：

```php
$config = [
    'twitter' => 'https://twitter.com/yourusername',
    'facebook' => 'https://facebook.com/yourusername',
    'site_name' => 'Your Name'
];
```

### 添加项目
在 `$projects` 数组中添加新项目：

```php
['title'=>'Project Name','en'=>'English description','jp'=>'日本語の説明','url'=>'https://project-url.com']
```

### 添加工具
在 `$tools` 数组中添加新工具：

```php
['icon'=>'fa-icon-name','name'=>'Tool Name','en'=>'English description','jp'=>'日本語の説明','url'=>'https://tool-url.com']
```

### 添加更新日志
在 `$logs` 数组中添加新日志：

```php
['date'=>'2025-01-15','en'=>'English update','jp'=>'日本語の更新']
```

## 样式自定义

主要CSS变量在 `assets/css/style.css` 中：

```css
:root {
    --primary-color: #007bff;
    --secondary-color: #6c757d;
    --light-bg: #f8f9fa;
    --border-radius: 0.5rem;
}
```

## 功能特性

- ✅ 平滑滚动导航
- ✅ 卡片悬停效果
- ✅ 响应式布局
- ✅ 无障碍支持
- ✅ 外部链接跟踪
- ✅ 图片懒加载
- ✅ 返回顶部按钮
- ✅ 键盘导航支持

## 浏览器支持

- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+

## 许可证

MIT License - 可自由使用和修改

## 联系方式

- 邮箱: hello@ok.link
- 网站: [ok.link](https://ok.link)

---

*Built with ❤️ in Tokyo*
