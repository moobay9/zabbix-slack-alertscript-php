zabbix 用 slack 投稿スクリプト
===============================

* コレは何？

  * ZABBIX から PHP で Slack へ投稿するためのスクリプトです。
  * PHP 5.3 で作成したため、5.2 以下のバージョンでの動作は保証しません。


* 使い方

  1. git からクローンする
```
  cd  /path/to/zabbix/alertscripts  
  git clone https://github.com/moobay9/zabbix-slack-alertscript-php.git
  mv zabbix-slack-alertscript-php/config.ini.sample zabbix-slack-alertscript-php/config.ini
  chmod +x zabbix-slack-alertscript-php/slack.php
```

  2. zabbix-slack-alertscript-php 内の config.ini を変更
    * url に slack のwebhook 用 URL を記載してください
      * ex) https://hoge.slack.com/services/hooks/incoming-webhook
    * icon 画像 の URL
    * username は slackc 上で表示される名前です
    * channel に表示させたいチャンネルを記載してください

  3. メディアタイプの追加
    * [管理] -> [メディアタイプ] から[メディアタイプの作成]

      * 名前 : 任意
      * タイプ : スクリプト
      * スクリプト名 : zabbix-slack-alertscript-php/slack.php
  
  4. ユーザーへのメディア追加
    * [管理] -> [ユーザー] からタブをユーザーグループからユーザーへ変更
    * 変更したいユーザーを選択
    * メディアのタブから[追加]
      * タイプ : 上記のメディアタイプで入力した名前
      * 送信先 : webhook 用のトークン
      * ステータス : 有効
      * 他は変更なし
    * [保存] -> [保存]

  5. アクションへ追加
    * 適当にメール送信と同じ雰囲気で作ってください。


