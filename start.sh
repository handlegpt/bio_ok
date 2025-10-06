#!/bin/bash

# OK.link 本地开发服务器启动脚本

echo "🚀 正在启动 OK.link 本地服务器..."
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "📍 访问地址: http://localhost:8000"
echo "⏹️  按 Ctrl+C 停止服务器"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""

# 检查PHP是否安装
if ! command -v php &> /dev/null; then
    echo "❌ 错误: 未找到PHP，请先安装PHP"
    echo "   macOS: brew install php"
    echo "   Ubuntu: sudo apt install php"
    exit 1
fi

# 启动PHP内置服务器
php -S localhost:8000 -t .


