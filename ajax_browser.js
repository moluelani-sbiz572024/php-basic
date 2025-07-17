const refreshBtn = document.getElementById('refresh-btn');
const outputDiv = document.getElementById('outputDiv');

// 定期実行のチェック用変数
let intervalId;

// 非同期通信でサーバー側からデータを取得する関数
function fetchFromServer()
{
  // 送信するデータ
  const dispData = {
    name: outputDiv.textContent
  };

  // サーバー側にAjaxリクエストを送信
  fetch('ajax_server.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify(dispData),   // JSON形式に変換
  })
  // サーバー側からAjaxレスポンスを受け取った時の処理
  .then((response) => response.json())  // JSON形式に変換
  .then((data) => {
    // 受け取ったデータを表示
    outputDiv.textContent = data.message;
  })
}

// 更新ボタンがクリックされた時のイベント
refreshBtn.addEventListener('click', () => {
  // 定期実行中（IDがゼロでない）なら停止
  if (intervalId) {
    // 定期実行を停止
    clearInterval(intervalId);
    intervalId = 0;
    refreshBtn.textContent = '更新';  // ボタン表示切り替え
  } else {
    // 1秒ごとの定期実行を開始し、そのIDを記録
    intervalId = setInterval(fetchFromServer, 500);
    refreshBtn.textContent = '停止';  // ボタン表示切り替え
  }
});