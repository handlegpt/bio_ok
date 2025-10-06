<?php
/**
 * 简单的PHP内置服务器启动脚本
 * 用于本地开发和测试
 */

echo "🚀 启动 OK.link 本地服务器...\n";
echo "📍 访问地址: http://localhost:8000\n";
echo "⏹️  按 Ctrl+C 停止服务器\n";
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";

// 启动内置服务器
$command = 'php -S localhost:8000 -t .';
passthru($command);
?>


