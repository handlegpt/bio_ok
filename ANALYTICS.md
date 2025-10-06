# Google Analytics 配置说明

## 📊 已集成的用户行为追踪功能

### **基础追踪**
- ✅ 页面浏览 (page_view)
- ✅ 用户停留时间 (time_on_page)
- ✅ 滚动深度 (scroll_depth)

### **交互追踪**
- ✅ 项目访问 (project_visit)
- ✅ 工具使用 (tool_use)
- ✅ 联系按钮点击 (contact_click)
- ✅ 语言切换 (language_switch)
- ✅ 主题切换 (theme_switch)

### **工具使用追踪**
- ✅ 密码生成器使用
- ✅ 速度测试使用
- ✅ 颜色选择器使用
- ✅ QR码生成器使用

## 🔧 配置步骤

### **1. 获取Google Analytics ID**
1. 访问 [Google Analytics](https://analytics.google.com/)
2. 创建新的属性 (Property)
3. 获取测量ID (Measurement ID)，格式如：`G-XXXXXXXXXX`

### **2. 更新配置文件**
在 `config.php` 中更新：
```php
'google_analytics_id' => 'G-XXXXXXXXXX', // 替换为你的真实ID
```

### **3. 验证配置**
- 打开网站，检查浏览器控制台
- 应该看到 "Google Analytics not loaded" 消息（如果ID未设置）
- 设置正确ID后，应该没有错误消息

## 📈 追踪的事件详情

### **页面浏览事件**
```javascript
gtag('event', 'page_view', {
    page_title: document.title,
    page_location: window.location.href,
    page_path: window.location.pathname
});
```

### **项目访问事件**
```javascript
gtag('event', 'project_visit', {
    project_name: '项目名称',
    project_url: 'https://example.com'
});
```

### **工具使用事件**
```javascript
gtag('event', 'tool_usage', {
    tool_name: 'password_generator',
    action: 'generate'
});
```

### **滚动深度事件**
```javascript
gtag('event', 'scroll_depth', {
    scroll_percent: 25 // 25%, 50%, 75%, 90%, 100%
});
```

## 🎯 分析数据

### **在Google Analytics中查看**
1. **实时报告**: 查看当前在线用户
2. **事件报告**: 查看自定义事件
3. **行为流**: 查看用户行为路径
4. **转化报告**: 查看目标完成情况

### **关键指标**
- **页面浏览量**: 总访问次数
- **停留时间**: 用户平均停留时间
- **滚动深度**: 用户阅读深度
- **工具使用率**: 各工具的使用频率
- **语言偏好**: 用户语言选择统计

## 🔒 隐私保护

### **GDPR合规**
- 仅在用户同意后启用追踪
- 提供退出选项
- 匿名化处理用户数据

### **数据最小化**
- 不追踪个人身份信息
- 仅收集必要的使用数据
- 定期清理历史数据

## 🚀 高级功能

### **自定义维度**
可以添加自定义维度来细分用户：
- 用户类型 (新用户/回访用户)
- 设备类型 (桌面/移动)
- 地理位置 (国家/城市)

### **目标设置**
在Google Analytics中设置目标：
- 工具使用目标
- 联系转化目标
- 页面浏览目标

## 📱 移动端优化

### **移动端追踪**
- 触摸事件追踪
- 移动端特定指标
- 响应式设计分析

### **性能监控**
- 页面加载时间
- 移动端性能指标
- 用户体验评分

## 🔧 故障排除

### **常见问题**
1. **追踪不工作**: 检查Google Analytics ID是否正确
2. **事件不显示**: 等待24小时数据更新
3. **数据不准确**: 检查过滤器设置

### **调试方法**
```javascript
// 在浏览器控制台检查
console.log('Google Analytics loaded:', typeof gtag !== 'undefined');
```

## 📊 报告建议

### **定期查看的报告**
1. **用户获取报告**: 了解流量来源
2. **行为报告**: 了解用户行为
3. **转化报告**: 了解目标完成情况
4. **技术报告**: 了解设备和浏览器使用情况

### **优化建议**
- 根据数据优化页面布局
- 改进用户不常用的功能
- 优化移动端体验
- 调整内容策略

---

**注意**: 请确保遵守当地的数据保护法规，如GDPR、CCPA等。


